
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Web App Final</title>
	<link rel="stylesheet" href="css/material.min.css">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/SendForm.js"></script>
	<script src="js/material.min.js"></script>
</head>
<body style="background-image: url(https://fondosmil.com/fondo/58747.jpg);">
	<p style="color: white; margin-left: 7%; font-size: 100px; position: absolute; margin-top: -150px;">Bienvenido</p>
    <div style="width: 610px; height: 420px; background-color: rgba(255, 255, 255, 0.853); margin-top: 190px;
	margin-left: 65px; border-radius: 15px; font-family: Arial, Helvetica, sans-serif; position: static;">

    <form action="" method="post">
        <!-- Nombre : <input type="text" name="nombrecompleto" size="60"> <br><br><br> -->

            Nombre: <input type="text" name="name" placeholder="Nombre">
            Apellido paterno: <input type="text" name="lastname" placeholder="Apellido P">
            Apellido Materno: <input type="text" name="lastnameTwo" placeholder="Apellido M">
            Número control: <input type="text" name="numControl" placeholder="Numero control">
            <input style="height: 40px;margin-left:  32%; margin-top: 15px;font-family: Helvetica; background-color: rgba(4, 53, 94, 0.697); border-color: rgba(4, 53, 94, 0.697); border-radius: 10px;" type="submit" name="register" value="Registrar">
            <!-- <input type="submit" name="register"> -->
        </form>
        <?php
            include("register.php");
        ?>
</body>
</html>
