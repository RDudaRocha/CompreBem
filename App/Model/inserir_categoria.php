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

// Receber os dados enviados pelo formulário HTML
$nomecategoria = $_POST['nomecategoria'];

// Inserir os dados no banco de dados
$sql = "INSERT INTO categoria (nome) VALUES ('$nomecategoria')";

if (mysqli_query($conn, $sql)) {
echo " Foi";
} else {
echo "Erro ao inserir os dados: " . mysqli_error($conn);
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);
header("location: ../../stock.php");// Receber os dados enviados pelo formulário HTML
?>
