<?php
function conn($db, $user, $pwd, $port, $host)
{

    try {
        $dbhost = $host;
        $database = $db;
        $dbuser = $user;
        $dbpass = $pwd;
        $dbport = $port;

        $conn = new PDO("mysql:host=$dbhost;dbname=$database;port=$dbport", $dbuser, $dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        return false;
    }
}
