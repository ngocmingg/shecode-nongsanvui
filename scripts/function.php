<?php
require "db.php";
date_default_timezone_set('Asia/Ho_Chi_Minh');
function checkauth(){
    session_start();
    if(isset($_SESSION['username'])){
        $result = true;
    } else {
        $result = false;
        Header("location:/auth");
    }
    return $result;
}
function checkAuthatLogin(){
    session_start();
    if(isset($_SESSION['username'])){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function generateRandomString($length = 32) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function checkUserLogin($username, $password){
    $db =$GLOBALS['db'];
    $sql = "SELECT * from users";
    $result = $db->query($sql);
    print_r($result);
    mysqli_free_result($result);
}
function registerUser($username,$password,$name,$dob,$email,$gender,$phone,$address){
    $db =$GLOBALS['db'];
    $password = md5(md5($password));
    $sql = "INSERT INTO users (id, username, password, role, name, email, gender, phone, address, dob)
            VALUES (NULL, '$username', '$password', '0','$name', '$email', '$gender', '$phone', '$address','$dob')";
    if ($db->query($sql) == TRUE) {
        return true;
    } else {
        $output["result"] = 'failed';
        $output["detail"] = $db->error;
        return false;
    }

}
// Generate List
function getLocationList()
{
    $db = $GLOBALS['db'];
    $sql = "SELECT * FROM locations";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
        }

    }
}
function getCertificationList()
{
    $db = $GLOBALS['db'];
    $sql = "SELECT * FROM certifications";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
        }

    }
}
function getCategoryList()
{
    $db = $GLOBALS['db'];
    $sql = "SELECT * FROM categories";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
        }

    }
}
// Generate Info
function getName($id, $type){
        $sql = "SELECT * FROM $type WHERE id = $id";
        $db = $GLOBALS['db'];
        $sqldata = $db->query($sql);
        $row = $sqldata->fetch_assoc();
        mysqli_free_result($sqldata);
        return $row["name"];
}
function getPhoneNumber($id){
    $sql = "SELECT * FROM users WHERE username = '$id'";
    $db = $GLOBALS['db'];
    $sqlphone = $db->query($sql);
    $row = $sqlphone->fetch_assoc();
    mysqli_free_result($sqlphone);
    return $row["phone"];
}
function getSingleProduct($loc, $cat, $cert, $min, $max){
    if ($loc != "all" and $loc != NULL){
        $oloc = 'location =' . $loc . " AND ";
    }
    if ($cat != "all" and $cat != NULL){
        $ocat = 'category =' . $cat . " AND ";
    }
    if ($cert != "all" and $cert != NULL){
        $ocert = 'certification =' . $cert . " AND ";
    }
    if ($min != NULL){
        $omin = 'price_with_discount >=' . $min . " AND ";
    }
    if ($max != NULL){
        $omax = 'price_with_discount <=' . $max. " AND ";
    }

    $sql = "SELECT * FROM products WHERE $oloc  $ocat $ocert $omin $omax id > 0";
    $db = $GLOBALS['db'];
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="' . $row["img_link"] .  '">
                        <div class="card-prod-body " > 
                            <p>' . $row["name"] .  '</p>
                            <h5 class="price">Giá: <span class="badge badge-xs light badge-primary">' . $row["price_with_discount"] .  'đ/' . $row["unit"] .  '</span></h5>
                            <h6 class="info">Người bán: <span class="badge badge-xs light badge-success">' . $row["user"].'</span></h6>
                            <h6 class="info">Còn lại: <span class="badge badge-xs light badge-success">' . $row["stock"].'</span></h6>
                            <h6 class="info">Loại: <span class="badge badge-xs dark badge-warning">' . getName($row["category"], "categories").'</span></h6>
                            <h6 class="info">Địa điểm: <span class="badge badge-xs dark badge-warning">' . getName($row["location"], "locations").'</span></h6>
                            <h6 class="info">Loại: <span class="badge badge-xs dark badge-warning">' . getName($row["certification"], "certifications").'</span></h6>
                            <h6 class="info"> SĐT: <a href="tel: ' . getPhoneNumber($row["user"]).'"><span class="badge badge-xs dark badge-warning">' . getPhoneNumber($row["user"]).'</a></span></h6>
                        </div>
                    </div>
                </div>';
        }

    } else {
        echo "Không có sản phẩm nào.";
    }
    mysqli_free_result($result);
}