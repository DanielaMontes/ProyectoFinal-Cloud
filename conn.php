<?php

$host = 'https://web-app-cloud.azurewebsites.net';
$username = 'localhost@root';
$password = 'contra123.';
$db_name = 'mv1';

//Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, 'https://web-app-cloud.azurewebsites.net', 'localhost@root', 'contra123.', 'mv1', NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

//Create an Insert prepared statement and run it
$nombre = 'victor';
$apellido_paterno = 'gutierrez';
$apellido_materno = 'quezada';
$numero_control = 17050536;
if ($stmt = mysqli_prepare($conn, "INSERT INTO alumnos (Nombre, Paterno, Materno,Control) VALUES (?, ?, ?,?)"))
{
    mysqli_stmt_bind_param($stmt, 'ssd', $nombre, $apellido_paterno, $apellido_materno, $numero_control);
    mysqli_stmt_execute($stmt);
    printf("Insert: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));
    mysqli_stmt_close($stmt);
}



?>
