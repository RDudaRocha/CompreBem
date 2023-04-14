<?php
include_once './config.php';
include_once './vendor/autoload.php';

use App\Model\Produto;
use App\Model\Categoria;
use App\Controller\ProdutoController;
use App\Controller\CategoriaController;

$prod = new Produto();
$produtoController = new ProdutoController();
$produtos = $produtoController->getProdutos();

$servername = "localhost";
$dbname = "precode";
$username = "root";
$password = "";

$db = mysqli_connect($servername, $username, $password, $dbname);

// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = $filename;
    $nomeproduto = $_POST['nomeproduto'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $precoimposto = $_POST['precoimposto'];
    $estoque = $_POST['estoque'];
    $categoria = $_POST['categoria'];

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

$cat = new Categoria();
$catController = new CategoriaController();
$categoria = $catController->getCategoria();

$cat1 = new Categoria();
$catController1 = new CategoriaController();
$categoria1 = $catController1->getCategoria();

?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Compre Bem</title>
        <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css" rel="stylesheet" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            .navbar {
                box-shadow: 0 2px 12px 0 rgba(0,0,0,.16);
            }
            .bg-gradient-dark {
                background-image: linear-gradient(310deg,#141727,#3a416f);
            }
            .z-index-3 {
                z-index: 3!important;
            }
            .py-3 {
                padding-top: 1rem!important;
                padding-bottom: 1rem!important;
            }
            .navbar-expand-lg {
                flex-wrap: nowrap;
                justify-content: flex-start;
            }
            .navbar {
                position: relative;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-between;
                padding: 0.5rem 1rem;
            }

            .button{
                margin-bottom: 1rem;
                letter-spacing: -.025rem;
                box-shadow: 0 4px 7px -1px rgba(0,0,0,.11), 0 2px 4px -1px rgba(0,0,0,.07);
                background-size: 150%;
                background-position-x: 25%;

                display: inline-block;
                font-weight: 700;
                line-height: 1.4;
                color: #67748e;
                text-align: center;
                vertical-align: middle;
                cursor: pointer;
                user-select: none;
                background-color: transparent;
                border: 1px solid transparent;
                padding: 0.75rem 1.5rem;
                font-size: .75rem;
                border-radius: 0.5rem;
                transition: all .15s ease-in;
            }

            .containerr{
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;

                width: 100%;
                padding-right: var(--bs-gutter-x, 1.5rem);
                padding-left: var(--bs-gutter-x, 1.5rem);
                margin-right: auto;
                margin-left: auto;


            }

            .modal-content {
                position: relative;
                display: flex;
                flex-direction: column;
                width: 100%;
                pointer-events: auto;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid rgba(0, 0, 0, 0.2);
                border-radius: 0.75rem;
                outline: 0;
            }

            .row {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
            }

            .col-50 {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
            }

            .col-25 {
            -ms-flex: 25%; /* IE10 */
            flex: 25%;
            }
        </style>
    </head>
    <body>
    <!-- Navbar Dark -->
    <div class="top-bar" style="background-image: linear-gradient(310deg,#141727,#3a416f);">

        <div class="top-bar-left">
            <ul class="menu" style="background-color: transparent;">
                <li>
                    <a class='navbar-brand m-0' href='<?= BASE_URL ?>'>
                        <img src='http://localhost/PrecodeShop/Assets/img/favicon.png' class='navbar-brand-img h-100' alt='main_logo' style="width:25px;">
                        <span class='ms-1 font-weight-bold' style="color:#fff;">Compre Bem</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="top-bar-right">
            <a href='<?= BASE_URL ?>' class="button expanded" type="button" style="background: linear-gradient(310deg,#7928ca,#ff0080); color: #fff;"><i class="fa fa-reply" aria-hidden="true"></i> Voltar</a>
        </div>
    </div>
    <!-- End Navbar -->
    <div class="w3-container containerr">
        <div class="w3-container containerr">
            <div class="top-bar-right">
                <a  onclick="document.getElementById('id01').style.display='block'" class="button expanded" type="button" style="background: linear-gradient(310deg,#7928ca,#ff0080); color: #fff;"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Adicionar produto</a>
            </div>
            <table class="w3-table w3-striped">
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th>Opção</th>
                </tr>
                <?php foreach ($produtos as $produto): ?>
                <tr>
                <td>
                    <img class="thumbnail" style="width: 100px; height: 100px; box-shadow: 0 0 0 0 !important;" src="<?php echo BASE_URL . 'Assets/img/' . $produto->getFoto() ?>">
                    <h5><?php echo $produto->getTitulo() ?></h5>
                </td>
                <td><?php echo $produto->getDescricao() ?></td>
                <td><?php echo $produto->getCategoria() ?></td>
                <td>R$ <?php echo number_format($produto->getPreco(), 2, ",", ".") ?></td>
                <td><?php echo $produto->getEstoque() ?></td>
                <td><a class="btn btn-link text-danger text-gradient px-3 mb-0" type="submit" href="http://localhost/PrecodeShop/App/Model/excluir_produto.php?id=<?php echo $produto->getId() ?>"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>&nbsp;&nbsp;Delete</a></td>
                </tr>
                <?php endforeach; ?>
                </tr>
            </table>
        </div>    
        <div class="w3-container containerr">
            <div class="top-bar-right">
                <a  onclick="document.getElementById('id02').style.display='block'" class="button expanded" type="button" style="background: linear-gradient(310deg,#7928ca,#ff0080); color: #fff;"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Adicionar categoria</a>
            </div>
            <table class="w3-table w3-striped">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Opção</th>
                </tr>
                <?php foreach ($categoria as $categoria): ?>
                <tr style="aling: center;">
                    <td><?php echo $categoria->getId() ?></td>
                    <td><?php echo $categoria->getNome() ?></td>
                    <td><a class="btn btn-link text-danger text-gradient px-3 mb-0" href="http://localhost/PrecodeShop/App/Model/excluir_categoria.php?id=<?php echo $categoria->getId() ?>"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>&nbsp;&nbsp;Delete</a></td>
                </tr>
                <?php endforeach; ?>
                </tr>
            </table>
        </div>    
    </div>
    
       
<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container w3-blue"  style="background-image: linear-gradient(310deg,#141727,#3a416f);"> 
   <span onclick="document.getElementById('id01').style.display='none'" 
   class="w3-button w3-blue w3-xlarge w3-display-topright"  style="background: transparent !important;">&times;</span>
   <h2>Adicionar produto</h2>
  </header>

  <div id="London" class="w3-container city">
  <form  method="POST" action="" enctype="multipart/form-data">
  <div id="London" class="w3-container city">
    
  <div class="row">
            <label for="example-text-input" class="form-control-label">Nome do produto</label>
            <input class="form-control" type="text" id="nomeproduto" name="nomeproduto">
            <label for="example-text-input" class="form-control-label">Descrição</label>
            <input class="form-control" type="text" id="descricao" name="descricao">
  </div>
     

        <div class="row">
            <div class="col-25">
            <label for="state">Preço</label>
            <input type="number" id="preco" name="preco">
            </div>            
            <div class="col-25">
            <label for="state">Preço Imposto</label>
            <input type="number" id="precoimposto" name="precoimposto">
            </div>
            <div class="col-50">
            <label for="zip">Quantidade Estoque</label>
            <input type="number" id="estoque" name="estoque">
            </div>
        </div>
        
        <div class="row">
            <div class="col-50">
            <label for="state">Imagem</label>
            <input type="file" name="uploadfile" value="" accept="image/png, image/jpeg, image/jpg"/>
            </div>
            <div class="col-50">
            <label for="categoria">Categoria</label>
            <select id="categoria" name="categoria">
                <option></option>
                <?php foreach ($categoria1 as $categoria1): ?>
                    <option value="<?php echo $categoria1->getNome() ?>"><?php echo $categoria1->getNome() ?></option>
                <?php endforeach; ?>
            </select>
            </div>
        </div>
  </div>
  </div>

  <div class="w3-container w3-light-grey w3-padding">
   <button type="submit" name="upload" class="w3-button w3-right w3-white w3-border" style="background: linear-gradient(310deg,#7928ca,#ff0080); border-radius: 1rem; color:#fff !important;">Adicionar</button>
   <button class="w3-button w3-right w3-white w3-border" onclick="document.getElementById('id01').style.display='none'" style="background-image: linear-gradient(310deg,#141727,#3a416f); border-radius: 1rem; color:#fff !important;">Close</button>
  </div>
    </form>
 </div>
</div>

<div id="id02" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container w3-blue"  style="background-image: linear-gradient(310deg,#141727,#3a416f);"> 
   <span onclick="document.getElementById('id02').style.display='none'" 
   class="w3-button w3-blue w3-xlarge w3-display-topright"  style="background: transparent !important;">&times;</span>
   <h2>Adicionar categoria</h2>
  </header>

  <form method="POST" action="http://localhost/PrecodeShop/App/Model/inserir_categoria.php">
  <div id="London" class="w3-container city">
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nome da categoria</label>
            <input class="form-control" type="text" id="nomecategoria" name="nomecategoria">
        </div>
  </div>

  <div class="w3-container w3-light-grey w3-padding">
   <button  type="submit" class="w3-button w3-right w3-white w3-border" style="background: linear-gradient(310deg,#7928ca,#ff0080); border-radius: 1rem; color:#fff !important;">Adicionar</button>
   <button class="w3-button w3-right w3-white w3-border" onclick="document.getElementById('id02').style.display='none'" style="background-image: linear-gradient(310deg,#141727,#3a416f); border-radius: 1rem; color:#fff !important;">Close</button>
  </div>
    </form>
 </div>
</div>

</div>

<script>
document.getElementsByClassName("tablink")[0].click();

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>
         <!--   Core JS Files   -->
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>

        <!-- Plugin for the charts, full documentation here: https://www.chartjs.org/ -->
        <script src="../assets/js/plugins/chartjs.min.js"></script>
        <script src="../assets/js/plugins/Chart.extension.js"></script>

        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/soft-ui-dashboard.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
        <script src="Assets/js/carrinho.js?id=<?= rand() ?>"></script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html>
