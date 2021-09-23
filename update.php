<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "PracticaTS";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $id = $_REQUEST['ID'];
    $descripcion = $_REQUEST['descripcion'];

  $sql = "UPDATE Descripciones SET descripcion='$descripcion'
  WHERE id = '$id'";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Record updated successfully";
  echo "<br>";
  echo "$id";
  echo "<br>";
  echo "$descripcion"  ;
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<br>
<button onclick="location.href = './crud.php';">Regresar</button>