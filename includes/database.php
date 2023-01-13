<?php

$DB_SERVER = 'localhost';
$DB_USER = 'root';
$DB_PASSWORD = 'l3tm31n.hackrocks';
$DB = 'sitioV2';


$db = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB);


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
