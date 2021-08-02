<?php
$serverName = "localhost";
$username = "root";
$password = "Neymar2019!";
$databaseName = "login2";

$Conn = new mysqli($serverName, $username, $password, $databaseName);
if ($Conn->connect_error) {
    die ($Conn->connect_error);
    $Conn->Close();
}
?>
