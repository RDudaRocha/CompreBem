<header>
    <style>
        .dropdown.menu .has-submenu.is-right-arrow>a::after {
            content: '';
            display: block;
            width: 0;
            height: 0;
            border: 5px inset;
            border-color: transparent transparent transparent #fff !important;
            border-left-style: solid;
        }

        .submenu{
            left: -365px !important; 
            background: tranparent;
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 500px !important;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0,0,0,.125);
            border-radius: 1rem;
            box-shadow: 0 20px 27px 0 rgba(0,0,0,.05);
        }

        table, thead, tbody, tr, th, tfoot{
            border-radius: 1rem;
            background: transparent !important;
            border: 0 !important;
            color: #fff;      
            margin-left: 5px;     
        }

        .button{
            background-image: #344767 !important;
            margin: 0px !important;
            border-radius: 1rem !important;
        }

    </style>
    <!-- Sub Navigation -->
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
            <ul class="menu vertical medium-horizontal expanded medium-text-left" data-responsive-menu="drilldown medium-dropdown" style="background-image: linear-gradient(310deg,#7928ca,#ff0080); border-radius:0.5rem;">
                <li class="has-submenu" id="CartAll" >
                    <a href="#" id="countCart" style="color:#fff;">Carrinho(0)</a>
                    <ul class="submenu menu vertical" style="background: linear-gradient(310deg,#141727,#3a416f);">
                        <table>
                            <thead>
                                <tr>
                                    <th>FOTO</th>
                                    <th>PRODUTO</th>
                                    <th>QUANTIDADE</th>
<!--                                    <th>Valor</th>-->
                                    <th>SUBTOTAL</th>
                                    <th>OP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td colspan="5">Carrinho vazio</td></tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Total:</td>
                                    <td colspan="1" id="totalCart">R$ 0,00</td>
                                    <td>Total imposto:</td>
                                    <td colspan="1" id="totalImposto">R$ 0,00</td>
                                    <td colspan="2">
                                    <a class="button expanded" href="http://localhost/PrecodeShop/App/Model/compra.php?" style="background:#344767; border-radius:0.5rem;">Comprar</a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle></button>
        <div class="title-bar-title">Menu</div>
    </div>


</header>