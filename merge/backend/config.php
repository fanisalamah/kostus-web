<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "kostus";

$connect = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($connect->error) {
    die("Could connect to database");
}
