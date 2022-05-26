<?php

$host = 'https://web-app-cloud.azurewebsites.net';
$username = '10.1.0.6@vic';
$password = 'contra123.';
$db_name = 'mv1';

//Initializes MySQLi
$conn = mysqli_init();

//mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, 'https://web-app-cloud.azurewebsites.net', '10.1.0.6@vic', 'vic', 'mv1', NULL, NULL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

//Create an Insert prepared statement and run it

  $nombreC = $_POST['name="nombrecompleto"'];
  //echo 'Hola1 '. $nombreC;

$apellidoP = $_POST['name="apellidoP"'];
 // echo 'Hola2 '. $apellidoP;

$apellidoM = $_POST['name="apellidoM"'];
 // echo 'Hola3 '. $apellidoM;

$numC = $_POST['name="nControl"'];
 //echo 'Hola4 '. $numC;


if ($stmt = mysqli_prepare($conn, "INSERT INTO alumnos2 (nombre, apellidoPaterno, apellidoMaterno, numControl) VALUES (?, ?, ?,?)"))
{
    mysqli_stmt_bind_param($stmt, 'ssd', $nombreC, $apellidoP, $apellidoM, $numC);
    mysqli_stmt_execute($stmt);
    printf("Insert: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));
    mysqli_stmt_close($stmt);
}

echo 'hola mundo'.$nombreC 

?>
