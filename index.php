<?php
require 'Model/Db_loader.php';

function openConnection()
{
    // No bugs in this function, just use the right credentials.
    $dbhost = "localhost";
    $dbuser = "becode";
    $dbpass = "becode1993";
    $db = "crud_db";

    $driverOptions = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    return new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
}

$name = 'Koen';
$email = 'koen@becode.org';
$pdo = openConnection();
$statement = $pdo->prepare('INSERT INTO Teachers (name, email) VALUES (:name, :email)');
$statement->bindValue('name', $name);
$statement->bindValue('email', $email);
$statement->execute();
