<?php
session_start();

$_SESSION["color"]= "blue";

echo $_SESSION["color"];

session_unset();

session_destroy(); 

$password = sha1("haslo");

?>