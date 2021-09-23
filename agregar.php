

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
/*$link = mysqli_connect("localhost", "root", "admin", "PracticaTS");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_REQUEST['agregarID']);
$descripcion = mysqli_real_escape_string($link, $_REQUEST['agregarDescripcion']);
 
// Attempt insert query execution
$sql = "INSERT INTO Descripciones (id, descripcion, email) VALUES ('$id', '$descripcion')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);*/
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "PracticaTS";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $id = $_REQUEST['agregarID'];
    $descripcion = $_REQUEST['agregarDescripcion'];

  $sql = "INSERT INTO Descripciones (id, descripcion)
  VALUES ('$id', '$descripcion')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<br>
<button onclick="location.href = './crud.php';">Regresar</button>