<?php
session_start();
require ("scripts/function.php");
if (checkAuthatLogin()) {
    Header("location:/");
}
/*
    Part: Includes from database
*/
require ("scripts/db.php");
/*
    Part: Check credentials from Database
*/
$username = "";
$password = "";
if ($_POST["formCheck"] == "formCheck") {
    $username = $_POST['username'];
    $password = md5(md5($_POST['password']));
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $db->query($query);
    $num_rows = $result->num_rows;
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
    }
    mysqli_free_result($result);
    if (($username == $row[1]) && ($password == $row[2]))
    {
        $_SESSION['username'] = $username;
        echo "<script>window.location='/';</script>";
    } else {
        //echo "<script>window.location='/';</script>";
        echo "Wrong Password";
    }
}
