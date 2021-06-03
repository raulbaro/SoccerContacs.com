<?php
require_once('../modelo/DB.php');
require_once('../modelo/Usuario.php');
require_once('../modelo/Perfil.php');

// Number of records fetch
$numberofrecords = 10;

if(!isset($_POST['searchTerm'])){

   // Fetch records
   $stmt = $conn->prepare("SELECT * FROM usuario LIMIT :limit");
   $stmt->bindValue(':limit', (int)$numberofrecords, PDO::PARAM_INT);
   $stmt->execute();
   $usersList = $stmt->fetchAll();

}else{

   $search = $_POST['searchTerm'];// Search text

   // Fetch records
   $stmt = $conn->prepare("SELECT * FROM usuario WHERE nombreU like :name LIMIT :limit");
   $stmt->bindValue(':name', '%'.$search.'%', PDO::PARAM_STR);
   $stmt->bindValue(':limit', (int)$numberofrecords, PDO::PARAM_INT);
   $stmt->execute();
   $usersList = $stmt->fetchAll();

}

$response = array();

// Read Data
foreach($usersList as $user){
   $response[] = array(
      "id" => $user['nombreU'],
      "text" => $user['name']
   );
}

echo json_encode($response);
exit();