<?php
$database_host = 'localhost';
$database_name = 'bbwk';
$database_username = 'root';
$database_password = '';

$dsn = "mysql:host=$database_host;charset=UTF8;dbname=$database_name";
$pdo_conn = new PDO($dsn, $database_username, $database_password);

//Agregar el setattribute de manera global
$pdo_conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
