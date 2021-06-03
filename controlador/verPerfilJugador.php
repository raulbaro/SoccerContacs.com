<?php
require_once('../modelo/DB.php');
require_once('../modelo/Perfil.php');


$host = "mysql.soccercontacts.com"; /* Host name */
$user = "pruebasoccer"; /* User */
$password = "soccer2020"; /* Password */
$dbname = "scpruebas"; /* Database name */
$con = mysqli_connect($host, $user, $password,$dbname);
$userid = $_POST['userid'];

$sql = "select * from perfiljugador where idPerfil='5'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

echo $row['peso'];
exit;
?>