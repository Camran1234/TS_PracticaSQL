
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">            
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <title>CRUD BUSCAR</title>        
        
        <link rel="stylesheet" type="text/css" href="./design.css">
    </head>
    <body >
           
        <br><br>
        <div class="container">
            <spane id="crudTitle">Valor Buscado</spane> 
            <div class="container" >
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "admin";
                $dbname = "PracticaTS";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                $id =  $_REQUEST['ID'];
                $sql = "SELECT id, descripcion FROM Descripciones WHERE id='$id'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                echo "<table>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Descripcion</th>";
                echo "</tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"]. " </td>" ;
                    echo "<td>" . $row["descripcion"]. " </td>" ;
                    echo "</tr>";
                }
                echo "</table>";
                } else {
                    echo" No data founded <br>";
                    echo "'$id'";
                }
                
                $conn->close();
            ?> 
                <button onclick="location.href = './crud.php';">Regresar</button>
            </div>
            <ul style="border-style:solid; border-width:thin; "></ul>
        </div>
        
    </body>
</html>