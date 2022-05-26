
<?php
include("connection.php");

if(isset($_POST['register'])) {
    if(strlen($_POST['name'])>=1&&strlen($_POST['lastname'])>=1) {
        $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);
        $lastnameTwo = trim($_POST['lastnameTwo']);
        $numControl = trim($_POST['numControl']);
        $consulta = "insert into alumnos values ('$name', '$lastname', '$lastnameTwo', '$numControl')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado) {
            ?>
            <h3 class="ok">Registro exitoso</h3>
            <?php
        } else {
            ?>
            <h3 class="error">Ha ocurrido un error</h3>
            <?php
        } }else {
            ?>
            <h3 class="invalid">Favor de completar los campos</h3>
            <?php
        }
    }


?>
