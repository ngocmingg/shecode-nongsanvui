<?php
$dbhost = "localhost"; //hostname
$dbuser = "";  //mysql acc/ username
$dbpass = "";  //mysql scc/ password
$dbname = ""; //mysql database name
$db=new mysqli("$dbhost","$dbuser","$dbpass");
$db->select_db("$dbname");