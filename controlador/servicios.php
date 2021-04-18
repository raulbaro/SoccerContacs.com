<?php
session_start();
require_once('../modelo/DB.php');
echo "Index.php";
var_dump( $_SESSION['email']);