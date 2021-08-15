<?php
require "db.php";
date_default_timezone_set('Asia/Ho_Chi_Minh');
function checkauth(){
    session_start();
    if(isset($_SESSION['username'])){
        $result = true;
    } else {
        $result = false;
        Header("location:/admin/auth");
    }
    return $result;
}
function checkAuthatLogin(){
    session_start();
    if(isset($_SESSION['username'])){
        $result = true;
        Header("location:/admin");
    } else {
        $result = false;
    }
    echo $result;
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
function getRole($username){
        $sql = "SELECT * FROM users where username = '$username'";
        $db =$GLOBALS['db'];
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        mysqli_free_result($result);
        return $row["role"];
}
function getUserInfo($id, $action){
    $sql = "SELECT * FROM users WHERE username = '$id'";
    $db =$GLOBALS['db'];
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    mysqli_free_result($result);
    return $row[$action];
}