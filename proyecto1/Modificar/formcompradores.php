<?php
$id=$_GET['id'];
$nombre=$_GET['nombre'];
$email=$_GET['email'];
$direccion=$_GET['direccion'];
$telefono=$_GET['telefono'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Estilos/formularios.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>
<body>
    <form action="./modcompradores.php" method="GET" id="form">
        <div class="form">
            <h1>Compradores</h1>
            <div class="grupo">
                <input type="text" name="id" value='<?php echo $id ?>' id="name" required><span class="barra"></span>
                <label for="">ID</label>
            </div>
            <div class="grupo">
                <input type="text" name="nombre" value='<?php echo $nombre ?>' id="name" required><span class="barra"></span>
                <label for="">Nombre</label>
            </div>
            <div class="grupo">
                <input type="text" name="email" value='<?php echo $email ?>' id="name" required><span class="barra"></span>
                <label for="">Email</label>
            </div>
            <div class="grupo">
                <input type="text" name="direccion" value='<?php echo $direccion ?>' id="name" required><span class="barra"></span>
                <label for="">Direccion</label>
            </div>
            <div class="grupo">
                <input type="text" name="telefono" value='<?php echo $telefono ?>' id="name" required><span class="barra"></span>
                <label for="">Telefono</label>
            </div>
            <button type="submit">Actualizar</button>
        </div>
    </form>
</body>
</html>