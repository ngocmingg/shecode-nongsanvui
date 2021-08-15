<?php
require "db.php";
function countProducts(){
    $sql = "SELECT * FROM products";
    $db =$GLOBALS['db'];
    if ($result=mysqli_query($db,$sql))
    {
        $rowcount=mysqli_num_rows($result);
        echo $rowcount;
        mysqli_free_result($result);
    }
    
}
function listProducts($user){
    $sql = "SELECT * FROM products where user = '$user'";
    $db =$GLOBALS['db'];
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["id"] .'</td>';
            echo '<td><a href="/admin/product/view/' . $row["id"] . '"> ' . $row["name"] .'</a></td>';
            echo '<td>' . getCategoryName($row["category"]) .'</td>';
            echo '<td>' . $row["created_at"] .'</td>';
            echo '<td>' . getLocationName($row["location"]) .'</td>';

            echo '<td>
                       <div class="d-flex">
                             <a href="/admin/product/view/' . $row["id"] .'" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                             <a href="/admin/product/edit/' . $row["id"] .'" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                             <a href="/admin/product/delete/' . $row["id"] .'" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                       </div>
                 </td>';
            echo '</tr>';
        }
    } else {
        echo "0 results";
    }
    
}
function deleteProduct($id){
    $db =$GLOBALS['db'];
    $sql = "DELETE FROM products WHERE id=$id";

    if ($db->query($sql) === TRUE) {
        echo '<script>window.location.replace("/admin/product//list");</script>';
    } else {
        echo '<script>window.location.replace("/admin/producterror/' . $db->error .'");</script>';
    }

    //return $done;
}
function newProduct($name, $img_link,$category, $location, $certification, $content, $files, $price_non_discount, $price_with_discount, $unit, $stock, $user){
    $db =$GLOBALS['db'];
    $name = $db->real_escape_string($name);
    $content = $db->real_escape_string($content);
    $user = $db->real_escape_string($user);
    $unit = $db->real_escape_string($unit);
    $sql = "INSERT INTO `products`(`id`, `name`, `location`, `img_link`, `description`, `price_non_discount`, `price_with_discount`, `certification`, `category`, `aproved`, `user`, `created_at`, `updated_at`, `stock`, `unit`)
            VALUES (NULL,'$name','$location','$img_link','$content','$price_non_discount','$price_with_discount','$certification','$category',1,'$user', NOW(), NOW(), '$stock','$unit')";
    if ($db->query($sql) === TRUE) {
        echo '<script>window.location.replace("/admin/product/list");</script>';
    } else {
        echo '<script>window.location.replace("/admin/producterror/' . $db->error .'");</script>';
    }
    
    //return $done;
}
function updateProduct($id, $name, $img_link,$category, $location, $certification, $content, $files, $price_non_discount, $price_with_discount, $unit, $stock, $user){
    $db =$GLOBALS['db'];
    $name = $db->real_escape_string($name);
    $content = $db->real_escape_string($content);
    $user = $db->real_escape_string($user);
    $unit = $db->real_escape_string($unit);
    $time =date('Y-m-d H:i:s');
    $sql = "UPDATE `products` SET `name`='$name',`location`='$location',`img_link`='$img_link',`description`='$content',`price_non_discount`='$price_non_discount',`price_with_discount`='$price_with_discount',`certification`='$certification',`category`='$category',`user`='$user',`updated_at`=NOW(),`stock`='$stock',`unit`='$unit' WHERE id = '$id'";
    if ($db->query($sql) === TRUE) {
        echo '<script>window.location.replace("/admin/product/list");</script>';
    } else {
        echo '<script>window.location.replace("/admin/producterror/' . $db->error .'");</script>';
    }
    
    //return $done;
}
function updateProductRealtime($id, $content){
    $db =$GLOBALS['db'];
    $content = $db->real_escape_string($content);
    $time =date('Y-m-d H:i:s');
    $sql = "UPDATE notes SET content='$content', updated_at='$time' WHERE id=$id";
    $db->query($sql);
    if ($db->query($sql) === TRUE) {
        echo '<script>window.location.replace("/admin/product/list");</script>';
    } else {
        echo '<script>window.location.replace("/admin/producterror/' . $db->error .'");</script>';
    }
    //return $done;
}
function getProductName($id, $action){
    $sql = "SELECT * FROM products WHERE id = $id";
    $db =$GLOBALS['db'];
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    mysqli_free_result($result);
    return $row[$action];

}
// Just Admin
function listProductsAdmin(){
    $sql = "SELECT * FROM products";
    $db =$GLOBALS['db'];
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["id"] .'</td>';
            echo '<td><a href="/admin/product/view/' . $row["id"] . '"> ' . $row["name"] .'</a></td>';
            echo '<td>' . getCategoryName($row["category"]) .'</td>';
            echo '<td>' . $row["created_at"] .'</td>';
            echo '<td>' . getLocationName($row["location"]) .'</td>';
            echo '<td>' . ($row["user"]) .'</td>';
            echo '<td>
                       <div class="d-flex">
                             <a href="/admin/product/view/' . $row["id"] .'" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                             <a href="/admin/product/edit/' . $row["id"] .'" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                             <a href="/admin/product/delete/' . $row["id"] .'" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                       </div>
                 </td>';
            echo '</tr>';
        }
    } else {
        echo "0 results";
    }

}