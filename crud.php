

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">            
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <title>CRUD</title>        
        
        <link rel="stylesheet" type="text/css" href="./design.css">
    </head>
    <body >
           
        <br><br>
        <div class="container">
            <spane id="crudTitle">Agregar</spane> 
            <div class="container" id="crudForm">
                <form action="./agregar.php" method="post">
                    <label for="agregarID">ID</label>
                    <input type="text" name="agregarID" id="agregarID" required>
                    <label for="agregarDescripcion">Descripcion ID</label>
                    <textarea name="agregarDescripcion" id="agregarDescripcion" cols="50" rows="4" required></textarea>
                    <br><br><input type="submit" value="Ingresar">
                </form>
            </div>
            <ul style="border-style:solid; border-width:thin; "></ul>
        </div>
        
        <div class="container">
            <spane id="crudTitle">Buscar</spane> 
            <div class="container" id="crudForm">
                <form action="./buscar.php" method="post">
                    <label for="ID">ID</label>
                    <input type="text" name="ID" required>
                    <br><br><input type="submit" value="Buscar">
                </form>
            </div>
            <ul style="border-style:solid; border-width:thin; "></ul>
        </div>
        <div class="container">
            <spane id="crudTitle">Cambiar</spane> 
            <div class="container">
                <div class="container" id="crudForm">
                    <form action="./update.php" method="post">
                        <label for="ID">ID</label>
                        <input type="text" name="ID" required>
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" cols="50" rows="4" required></textarea>
                        <br><br><input type="submit" value="Cambiar">
                    </form>
                </div>
            </div>
            <ul style="border-style:solid; border-width:thin; "></ul>
        </div>

        <div class="container">
            <spane id="crudTitle">Desplegar</spane> 
            <div class="container">
                    <form action="./desplegar.php" method="post">
                        <br><br><input type="submit" value="Desplegar">
                    </form>
            </div>
            <ul style="border-style:solid; border-width:thin; "></ul>
        </div>

        <div class="container">
            <spane id="crudTitle">Eliminar</spane> 
            <div class="container">
                <div class="container" id="crudForm">
                    <form action="./delete.php" method="post">
                        <label for="ID">ID</label>
                        <input type="text" name="ID" required>
                        <br><br><input type="submit" value="Eliminar">
                    </form>
                </div>
            </div>
            <ul style="border-style:solid; border-width:thin; "></ul>
        </div>

        
    </body>
</html>