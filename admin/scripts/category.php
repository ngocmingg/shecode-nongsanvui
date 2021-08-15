<?php
require "db.php";
// This Section is for Categories
function countCategories(){
    $sql = "SELECT * FROM categories";
    $db =$GLOBALS['db'];
    if ($result=mysqli_query($db,$sql))
    {
        $rowcount=mysqli_num_rows($result);
        echo $rowcount;
        mysqli_free_result($result);
    }
}
function listCategory(){
    $db =$GLOBALS['db'];
    $sql = "SELECT * FROM categories";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["id"] .'</td>';
            echo '<td>' . $row["name"] .'</td>';
            if ($row["id"] != 0){
                echo '<td>
                       <div class="d-flex">
                             <a href="/admin/category/view/' . $row["id"] .'" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                             <a href="/admin/category/edit/' . $row["id"] .'" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                             <a href="/admin/category/delete/' . $row["id"] .'" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                       </div>
                 </td>';
            } else{
                echo '<td>
                       <div class="d-flex">
                             <a href="/admin/category/view/' . $row["id"] .'" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                       </div>
                 </td>';
            }

                echo '</tr>';


        }
    } else {
        echo "0 results";
    }
    
}
function getCategoryList(){
    $db =$GLOBALS['db'];
    $sql = "SELECT * FROM categories";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($row["id"] != 0){
                echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
            }
        }
    }
    
}
function getCategoryName($id){
    $sql = "SELECT * FROM categories where id = $id";
    $db =$GLOBALS['db'];
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    return $row["name"];
}
function updateCategoryName($id, $name){
    $db =$GLOBALS['db'];
    $name = $db->real_escape_string($name);
    $sql = "UPDATE categories SET name='$name' WHERE id=$id;";
    if ($db->query($sql) === TRUE) {
        echo '<script>window.location.replace("/admin/category/list");</script>';
    } else {
        echo '<script>window.location.replace("/admin/categoryerror/' . $db->error .'");</script>';
    }
    
    //return $done;
}
function deleteCategory($id){
    $db =$GLOBALS['db'];
    $sql = "DELETE FROM categories WHERE id=$id";

    if ($db->query($sql) === TRUE) {
        echo '<script>window.location.replace("/admin/category/list");</script>';
    } else {
        echo '<script>window.location.replace("/admin/categoryerror/' . $db->error .'");</script>';
    }
    
    //return $done;
}
function newCategory($name){
    $db =$GLOBALS['db'];
    $name = $db->real_escape_string($name);
    $sql = "INSERT INTO categories (id, name)
            VALUES (NULL, '$name')";

    if ($db->query($sql) === TRUE) {
        echo '<script>window.location.replace("/admin/category/list");</script>';
    } else {
        echo '<script>window.location.replace("/admin/categoryerror/' . $db->error .'");</script>';
    }
    
    //return $done;
}

//This Section is for locations
function countLocations(){
    $sql = "SELECT * FROM locations";
    $db =$GLOBALS['db'];
    if ($result=mysqli_query($db,$sql))
    {
        $rowcount=mysqli_num_rows($result);
        echo $rowcount;
        mysqli_free_result($result);
    }
}
function listLocation(){
    $db =$GLOBALS['db'];
    $sql = "SELECT * FROM locations";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["id"] .'</td>';
            echo '<td>' . $row["name"] .'</td>';
            if ($row["id"] != 0){
                echo '<td>
                       <div class="d-flex">
                             <a href="/admin/location/view/' . $row["id"] .'" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                             <a href="/admin/location/edit/' . $row["id"] .'" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                             <a href="/admin/location/delete/' . $row["id"] .'" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                       </div>
                 </td>';
            } else{
                echo '<td>
                       <div class="d-flex">
                             <a href="/admin/location/view/' . $row["id"] .'" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                       </div>
                 </td>';
            }

            echo '</tr>';


        }
    } else {
        echo "0 results";
    }

}
function getLocationList(){
    $db =$GLOBALS['db'];
    $sql = "SELECT * FROM locations";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($row["id"] != 0){
                echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
            }
        }
    }

}
function getLocationName($id){
    $sql = "SELECT * FROM locations where id = $id";
    $db =$GLOBALS['db'];
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    return $row["name"];
}
function updateLocationName($id, $name){
    $db =$GLOBALS['db'];
    $name = $db->real_escape_string($name);
    $sql = "UPDATE locations SET name='$name' WHERE id=$id;";
    if ($db->query($sql) === TRUE) {
        echo '<script>window.location.replace("/admin/location/list");</script>';
    } else {
        echo '<script>window.location.replace("/admin/locationerror/' . $db->error .'");</script>';
    }

    //return $done;
}
function deleteLocation($id){
    $db =$GLOBALS['db'];
    $sql = "DELETE FROM locations WHERE id=$id";

    if ($db->query($sql) === TRUE) {
        echo '<script>window.location.replace("/admin/location/list");</script>';
    } else {
        echo '<script>window.location.replace("/admin/locationerror/' . $db->error .'");</script>';
    }

    //return $done;
}
function newLocation($name){
    $db =$GLOBALS['db'];
    $name = $db->real_escape_string($name);
    $sql = "INSERT INTO locations (id, name)
            VALUES (NULL, '$name')";

    if ($db->query($sql) === TRUE) {
        echo '<script>window.location.replace("/admin/location/list");</script>';
    } else {
        echo '<script>window.location.replace("/admin/locationerror/' . $db->error .'");</script>';
    }

    //return $done;
}
//This Section is for certifications
function countCertifications(){
    $sql = "SELECT * FROM certifications";
    $db =$GLOBALS['db'];
    if ($result=mysqli_query($db,$sql))
    {
        $rowcount=mysqli_num_rows($result);
        echo $rowcount;
        mysqli_free_result($result);
    }
}
function listCertification(){
    $db =$GLOBALS['db'];
    $sql = "SELECT * FROM certifications";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["id"] .'</td>';
            echo '<td>' . $row["name"] .'</td>';
            if ($row["id"] != 0){
                echo '<td>
                       <div class="d-flex">
                             <a href="/admin/certification/view/' . $row["id"] .'" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                             <a href="/admin/certification/edit/' . $row["id"] .'" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                             <a href="/admin/certification/delete/' . $row["id"] .'" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                       </div>
                 </td>';
            } else{
                echo '<td>
                       <div class="d-flex">
                             <a href="/admin/certification/view/' . $row["id"] .'" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                       </div>
                 </td>';
            }

            echo '</tr>';


        }
    } else {
        echo "0 results";
    }

}
function getCertificationList(){
    $db =$GLOBALS['db'];
    $sql = "SELECT * FROM certifications";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($row["id"] != 0){
                echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
            }
        }
    }

}
function getCertificationName($id){
    $sql = "SELECT * FROM certifications where id = $id";
    $db =$GLOBALS['db'];
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    return $row["name"];
}
function updateCertificationName($id, $name){
    $db =$GLOBALS['db'];
    $name = $db->real_escape_string($name);
    $sql = "UPDATE certifications SET name='$name' WHERE id=$id;";
    if ($db->query($sql) === TRUE) {
        echo '<script>window.location.replace("/admin/certification/list");</script>';
    } else {
        echo '<script>window.location.replace("/admin/certificationerror/' . $db->error .'");</script>';
    }

    //return $done;
}
function deleteCertification($id){
    $db =$GLOBALS['db'];
    $sql = "DELETE FROM certifications WHERE id=$id";

    if ($db->query($sql) === TRUE) {
        echo '<script>window.location.replace("/admin/certification/list");</script>';
    } else {
        echo '<script>window.location.replace("/admin/certificationerror/' . $db->error .'");</script>';
    }

    //return $done;
}
function newCertification($name){
    $db =$GLOBALS['db'];
    $name = $db->real_escape_string($name);
    $sql = "INSERT INTO certifications (id, name)
            VALUES (NULL, '$name')";

    if ($db->query($sql) === TRUE) {
        echo '<script>window.location.replace("/admin/certification/list");</script>';
    } else {
        echo '<script>window.location.replace("/admin/certificationerror/' . $db->error .'");</script>';
    }

    //return $done;
}