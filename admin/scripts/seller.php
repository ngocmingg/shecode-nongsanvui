<?php
function countSellerProducts($user){
    $sql = "SELECT * FROM products where user='$user'";
    $db =$GLOBALS['db'];
    if ($result=mysqli_query($db,$sql))
    {
        $rowcount=mysqli_num_rows($result);
        echo $rowcount;
        mysqli_free_result($result);
    }
}