<?php
$conn = mysqli_connect("localhost", "root", "", "php_crud_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>