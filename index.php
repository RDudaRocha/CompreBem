<?php
include_once './config.php';
include_once './vendor/autoload.php';

use App\Model\Produto;
use App\Controller\ProdutoController;

$prod = new Produto();
$produtoController = new ProdutoController();
$produtos = $produtoController->getProdutos();
?>
<!doctype html>
<html class="no-js" lang="en">
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
        <style>
            .column{
                position: relative;
                display: flex;
                flex-direction: column;
                width: 300px !important;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 0 solid rgba(0,0,0,.125);
                border-radius: 1rem;
                border: 1px solid #dee2e6!important;
                margin-right: 10px;
            }

            .fixed-plugin{
                background: #fff;
                border-radius: 50%;
                bottom: 30px;
                right: 30px;
                font-size: 1.25rem;
                z-index: 990;
                box-shadow: 0 2px 12px 0 rgba(0, 0, 0, 0.16);
                cursor: pointer;

                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;

                padding-right: 1rem !important;
                padding-left: 1rem !important;

                position: fixed !important;

                letter-spacing: -0.025rem;
            }
        </style>
    </head>
    <body>

        <?php include_once './App/View/menu.php'; ?>
<br><br><br>

        <div class="col-12 row small-up-2 large-up-4" style="max-width: 90rem !important;">
            <?php foreach ($produtos as $produto): ?>
                <div class="column">
                    <img class="thumbnail" style="width: 300px; height: 300px; box-shadow: 0 0 0 0 !important;" src="<?php echo BASE_URL . 'Assets/img/' . $produto->getFoto() ?>">
                    <h5><?php echo $produto->getTitulo() ?></h5>
                    <p style="color:#ff6666 ">R$ <?php echo number_format($produto->getPreco(), 2, ",", ".") ?></p>
                    <a class="button expanded" href="<?= BASE_URL ?>App/view/detalheProduto.php?id=<?php echo $produto->getId() ?>"  style="background:#344767; border-radius:0.5rem;">Comprar</a>
                </div>
            <?php endforeach; ?>
            <input type="hidden" id="URL" value="<?= BASE_URL ?>" />
        </div>

        <div class="fixed-plugin">
            <a href="stock.php" class="fixed-plugin-button text-dark position-fixed px-3 py-2" style="color:#344767 !important;">
            <i class="fa fa-cogs"> </i>
            </a>
        </div>

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
