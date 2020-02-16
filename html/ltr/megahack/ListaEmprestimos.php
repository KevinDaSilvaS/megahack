<?php
session_start();
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Lista de Emprestimos</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/style.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu 2-columns  " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

  <?php 
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'renderHeader.php');
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'renderMenu.php');
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'renderFooter.php');
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'Notifications.php');
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'HandlerDataBase.php');
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'ModalCreator.php');

        $message = new Notifications();
        if (isset($_SESSION['sucess'])) { 
          echo $message->sucess('Sucesso!!','Ação realizada com sucesso.');
          unset($_SESSION['sucess']);
        }

        $renderHeader = new RenderHeader();
        echo $renderHeader->renderHeader();

        $renderMenu = new RenderMenu();
        echo $renderMenu->renderMenu();

        if (isset($_SESSION['idcliente'])) {
            $idCliente = $_SESSION['idcliente'];
        }else {
            header('Location: logout.php');
        }
    ?>

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="col s12">
          <div class="container">
            <div class="section">
                <!-- Striped Table -->
                <div class="row">
                    <div class="col s12 m12 l12">
                    <div id="striped-table" class="card card card-default scrollspy grey lighten-3">
                        <div class="card-content">
                            <div class="col s12">
                                <h4 class="card-title">Lista de Solicitações de Empréstimos</h4>

                                <form action="" method="POST">
                                    <div class="input-field col s10">
                                        <input id="pesquisa" name="pesquisa" class="input-field" type="text">
                                        <label for="pesquisa">Pesquisar Emprestimo</label>
                                    </div>
                                    <div class="input-field col s2">
                                        <button class="btn green" style="width:15% !important;">
                                            <i class="large material-icons right">search</i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <table class="centered striped grey lighten-2">
                                        <thead>
                                            <tr class="grey lighten-1 grey-text text-darken-3">
                                                <th data-field="id" >Valor</th>
                                                <th data-field="name">Garantia</th>
                                                <th data-field="name">Anos para Pagar</th>
                                                <th data-field="name">% de Aprovação</th>
                                                <th>Aprovado</th>
                                                <th data-field="price">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           $db = new HandlerDataBase();
                                           if (isset($_POST['pesquisa'])) {

                                              $pesquisa = mysqli_real_escape_string($mysqli_connection,$_POST['pesquisa']);
                                              $condicional =
                                              "cliente = '$idCliente' AND valor LIKE '%$pesquisa%' 
                                              OR pctg_receber LIKE '%$pesquisa%' 
                                              OR anos LIKE '%$pesquisa%'";
                                              $dadosPesquisa = $db->selectWhere("valor,garantia,anos,aprovado,pctg_receber","emprestimos",$condicional);

                                           }else {
                                              $dadosPesquisa = $db->selectWhere("valor,garantia,anos,aprovado,pctg_receber","emprestimos","cliente = '$idCliente'"); 
                                           }
                                          if (is_array($dadosPesquisa)) {
                                            foreach ($dadosPesquisa as $key => $value) {
                                                if ($value['garantia'] == 2) {
                                                    $garantiaStr = "Casa";
                                                }elseif ($value['garantia'] == 1) {
                                                    $garantiaStr = "Carro";
                                                }else {
                                                    $garantiaStr = "Nenhuma";
                                                }

                                                if ($value['aprovado'] == 1) {
                                                    $status = "Aprovado";
                                                }else {
                                                    $status = "Não Aprovado";
                                                }
                                            ?>
                                                <tr class="grey-text text-darken-3">
                                                    
                                                    <td><?php echo number_format($value['valor'],2,",",".");?></td>
                                                    <td><?php echo $garantiaStr;?></td>
                                                    <td><?php echo $value['anos'];?></td>
                                                    <td><?php echo $value['pctg_receber'];?>%</td>
                                                    <td><?php echo $status;?></td>
                                                    <td>
                                                        <a class="btn green tooltipped" data-position="bottom" data-tooltip="Ver Milestones" href="mileStones.php"><i class="material-icons">flag</i></a>
                                                        <a class="btn green tooltipped" data-position="bottom" data-tooltip="Gerenciar Pêndencias" href="pendencias.php"><i class="material-icons">add</i></a>
                                                    </td>
                                                </tr>
                                     <?php }
                                         } ?>
                                        </tbody>
                                    </table>
                               </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
    </div>
        </div>
      </div>
    </div>
<!-- END: Page Main-->

    <?php
        $renderFooter = new RenderFooter();
        echo $renderFooter->renderFooter();
    ?>

    <script src="JS/buscaCep.js"></script>
    <script src="JS/mascaras.js"></script>
    <script src="JS/modal-ini.js"></script>
    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../../../app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/custom/custom-script.js" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>