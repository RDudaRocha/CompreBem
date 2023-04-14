<?php

$servername = "localhost";
$dbname = "precode";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar se a conexão foi bem sucedida
if (!$conn) {
 die("Conexão falhou: " . mysqli_connect_error());
}

// sql to delete a record
$id = $_GET["id"];
$query = "DELETE FROM categoria WHERE id= $id";

//query execution
$result = mysqli_query($conn,$query);

header('location: ../../stock.php');

$conn->close();
?>