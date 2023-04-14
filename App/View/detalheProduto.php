<?php
include_once '../../config.php';
include_once '../../vendor/autoload.php';

use App\Model\Produto;
use App\Controller\ProdutoController;

$prod = new Produto();
$produtoController = new ProdutoController();
$produto = $produtoController->getProdutoPorID($_GET['id']);
?>
<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Shopping PreCode</title>
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
    </head>
    <body>
        <?php include_once 'menu.php'; ?>
<br><br><br>
            <div class="col-12 row small-up-2 large-up-4">
                <div class="column medium-6 cell">
                    <img class="thumbnail" width="650" height="350" src="<?php echo BASE_URL . 'Assets/img/' . $produto->getFoto() ?>">
                </div>
                <div class="column medium-6 large-5 cell large-offset-1">
                    <h3><?php echo  $produto->getTitulo()  ?></h3>
                    <p><?php echo  $produto->getDescricao()  ?></p>

                    <div class="grid-x">
                        <div class="small-3 cell">
                            <p><?php echo  $produto->getPreco()  ?></p>
                            <p><?php echo  $produto->getPrecoImposto()  ?></p>
                            <label for="middle-label" class="middle">Quantidade</label>
                        </div>
                        <div class="small-9 cell">
                            <input type="text" value="1" id="quant" placeholder="quantidade">
                        </div>

                        <div id="alert" class="callout" style="background-color: #ff6666;display: none">
                            <h5>Produto sem Estoque</h5>
                            <p>Você informou uma quantidade que não temos em estoque, digite uma quantidade menor.</p>
                        </div>
                    </div>
                    <input type="submit" name="add" value="Comprar" class="button large" id="adicionar">
                    <input type="hidden" id="idprod" value="<?= $_GET['id'] ?>" class="button large" id="adicionar">
                    <input type="hidden" id="URL" value="<?= BASE_URL ?>" >
                    <img src="../../Assets/img/loading.gif" width="40" height="40" id="loading" style="display: none" />
                </div>

            </div>

        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
        <script src="../../Assets/js/carrinho.js?id=<?= rand() ?>"></script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html>
