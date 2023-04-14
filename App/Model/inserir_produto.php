<?php
$servername = "localhost";
$dbname = "precode";
$username = "root";
$password = "";

$db = mysqli_connect($servername, $username, $password, $dbname);

// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "../../Assets/img/".$filename;
    $nomeproduto = $_POST['nomeproduto'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $precoimposto = $_POST['precoimposto'];
    $estoque = $_POST['estoque'];
    $categoria = 'categoria';

      // Get all the submitted data from the form
      $sql = "INSERT INTO produtos (titulo,descricao,preco,estoque,foto,categoria,preco_imposto) 
      VALUES ('$nomeproduto','$descricao','$preco','$estoque','$folder','$categoria','$precoimposto')";

      // Execute query
      mysqli_query($db, $sql);
        
      // Now let's move the uploaded image into the folder: image
      if (move_uploaded_file($tempname, $folder))  {
          $msg = "Image uploaded successfully";
      }else{
          $msg = "Failed to upload image";
    }
}

header("location: ../../stock.php");// Receber os dados enviados pelo formulário HTML
?>
