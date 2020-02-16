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
    <title>Mapa de Jornada</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/page-timeline.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns" 
data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?php 
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'renderHeader.php');
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'renderMenu.php');
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'renderFooter.php');
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'Notifications.php');

        $message = new Notifications();
        if (isset($_SESSION['sucess'])) { 
          echo $message->sucess('Sucesso!!','Cadastro realizado com sucesso.');
          unset($_SESSION['sucess']);
        }

        if (isset($_SESSION['error'])) { 
          echo $message->error('Atenção!!','Um erro ocorreu.');
          unset($_SESSION['error']);
        }

        $renderHeader = new RenderHeader();
        echo $renderHeader->renderHeader();

        $renderMenu = new RenderMenu();
        echo $renderMenu->renderMenu();
    ?>
    <!-- END: Header-->
    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <!-- timeline -->
                        <ul class="timeline">
                            <li>
                                <div style="width: 48px; height: 47px; right: -25px; box-shadow: 2px 4px 20px #89ff00; background-color: #7fd21e !important;" class="timeline-badge green">
                                    <a class="tooltipped" data-position="top" data-tooltip="Set 20 2019"><i style="line-height: 3.0rem;" class="material-icons white-text">ac_unit</i></a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="card m-0 hoverable" id="profile-card">
                                        <div class="card-content">
                                            <h2 class="card-title activator grey-text text-darken-4 mt-1">Parcela 1 R$ 789,00 - Status Paga</h2>
                                            <h5>Parabéns!! você começou sua jornada conosco!!</h5>
                                            <span>
                                                E pra provar que você é importante pra nós 
                                                e que lhe desejamos tudo de bom ao longo da jornada,
                                                usamos gamificação e um programa de recompensas
                                                pra te mostrar o quanto somos gratos por ter você conosco.
                                            </span>
                                            
                                            
                                        </div> 
                                        <div class="card-action">
                                            <a href="#" class="mr-0 ml-3"><i class="material-icons" style="color:black;">share</i></a>
                                            <span class="ml-3 vertical-align-top"  >Share</span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div style="box-shadow: 2px 4px 20px #509007; background-color: #457d04 !important;" class="timeline-badge cyan">
                                    <a class="tooltipped" data-position="top" data-tooltip="Sep 18 2019"><i class="material-icons white-text">language</i></a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="card m-0 hoverable">
                                        <div class="card-content">
                                            <div class="card-header pb-1">
                                                <div class="card-text">
                                                <h2 class="card-title activator grey-text text-darken-4 mt-1">Parcela 2 R$ 789,00 - Status Aguardando Pagamento</h2>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="card-image waves-effect waves-block waves-light mt-1">
                                                <img class="premio adesivos stone" src="adesivo-stone.png" alt="28.png">
                                            </div>
                                            <p class="card-text mt-1">
                                                Pagando essa parcela você descola esses adesivos mega bacanas do nosso parceiro stone.
                                            </p>
                                        </div>
                                        <!-- card action -->
                                        <div class="card-action">
                                            <a href="#" class="mr-0 ml-3"><i class="material-icons" style="color:black;">share</i></a>
                                            <span class="ml-3 vertical-align-top"  >Share</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div style="box-shadow: 2px 4px 20px #509007; background-color: #457d04 !important;" class="timeline-badge red">
                                    <a class="tooltipped" data-position="top" data-tooltip="Sep 02 2019"><i class="material-icons white-text">laptop_mac</i></a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="card m-0 hoverable">
                                        <div class="card-content">
                                            <div class="card-header pb-1">
                                                <div class="card-text">
                                                <h2 class="card-title activator grey-text text-darken-4 mt-1">Parcela 12 R$ 789,00 - Status Aguardando Pagamento</h2>
                                                </div>
                                            </div>
                                            <div class="card-img">
                                                <img src="../../../app-assets/images/gallery/44.jpg" alt="" class="responsive-img">
                                            </div>
                                            <p>Pra você ou aquele amigo empreendedor que pensa em faturar mais
                                                 e mais rapido com cartão de crédito to esse mega cupom de 30% de desconto em qualquer plano da stone:.</p>
                                                <h5 style="text-align: center;">EMPRESTAI30</h5>
                                        </div>
                                        <div class="card-action">
                                            <a><i class="material-icons" style="color:black;">share</i></a>
                                            <span class="ml-3 vertical-align-top"  >Share</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div style="box-shadow: 2px 4px 20px #509007; background-color: #457d04 !important;" class="timeline-badge green">
                                    <a class="tooltipped" data-position="top" data-tooltip="Aug 19 2019"> <i class="material-icons white-text">mail_outline</i></a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="card-panel hoverable border-radius-6 m-0 card-animation-1">
                                        <img class="responsive-img border-radius-4 z-depth-4 image-n-margin" src="../../../app-assets/images/gallery/48.jpg" alt="" />
                                        <h6><a href="#" class="mt-5">UHUUUL</a></h6>
                                        <div class="card-header pb-1">
                                            <div class="card-text">
                                            <p class="card-title activator grey-text text-darken-4 mt-1">Parcela 14 R$ 789,00 - Status Aguardando Pagamento</p>
                                            </div>
                                        </div>
                                        <p>Você chegou na metade das parcelas se auto dê um tapinha nas costas você arrasa.</p>
                                           
                                            <div class="card-action">
                                                <a><i class="material-icons" style="color:black;">share</i></a>
                                                <span class="ml-3 vertical-align-top"  >Share</span>
                                            </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div style="box-shadow: 2px 4px 20px #509007; background-color: #457d04 !important;" class="timeline-badge orange">
                                    <a class="tooltipped" data-position="top" data-tooltip="Aug 15 2019"><i class="material-icons white-text">mic_none</i></a>
                                </div>
                                <div class="timeline-panel mb-4">
                                    <div class="card hoverable m-0 ">
                                        <div class="card-content">
                                            <div class="card-header">
                                                <div class="card-text">
                                                <h2 class="card-title activator grey-text text-darken-4 mt-1">Parcela 18 R$ 789,00 - Status Aguardando Pagamento</h2>
                                                </div><br>
                                                <hr>
                                                <h3 class="mr-1 blue-text">30</h3>
                                                <div>
                                                    <h6 class="m-0 blue-text">Você e mais</h6>
                                                    <small>pessoas se tornaram <br>clientes premium pelo seu <br>histórico de bom pagador.<br>Parabéns</small>
                                                </div>
                                            </div>
                                            <div class="divider mb-2"></div>
                                            <ul class="horizontal-avatar mb-0">
                                                <li>
                                                    <img src="../../../app-assets/images/avatar/avatar-2.png" width="45" class="mr-1 border-radius-4" alt="avatar-2.png">
                                                </li>
                                                <li>
                                                    <img src="../../../app-assets/images/avatar/avatar-3.png" width="45" class="mr-1 border-radius-4" alt="avatar-3.png">
                                                </li>
                                                <li>
                                                    <img src="../../../app-assets/images/avatar/avatar-4.png" width="45" class="mr-1 border-radius-4" alt="avatar-4.png">
                                                </li>
                                                <li>
                                                    <img src="../../../app-assets/images/avatar/avatar-1.png" width="45" class="mr-1 border-radius-4" alt="avatar-4.png">
                                                </li>
                                                <li>
                                                    <img src="../../../app-assets/images/avatar/avatar-6.png" width="45" class="mr-1 border-radius-4" alt="avatar-6.png">
                                                </li>
                                                <li>
                                                    <img src="../../../app-assets/images/avatar/avatar-7.png" width="45" class="mr-1 border-radius-4" alt="avatar-7.png">
                                                </li>
                                                <li>
                                                    <img src="../../../app-assets/images/avatar/avatar-9.png" width="45" class="mr-1 border-radius-4" alt="avatar-9.png">
                                                </li>
                                                <li>
                                                    <img src="../../../app-assets/images/avatar/avatar-8.png" width="45" class="mr-1 border-radius-4" alt="avatar-8.png">
                                                </li>
                                                <li>
                                                    <img src="../../../app-assets/images/avatar/avatar-10.png" width="45" class="mr-1 border-radius-4" alt="avatar-10.png">
                                                </li>
                                                <li>
                                                    <img src="../../../app-assets/images/avatar/avatar-11.png" width="45" class="mr-1 border-radius-4" alt="avatar-11.png">
                                                </li>
                                                <li>
                                                    <img src="../../../app-assets/images/avatar/avatar-12.png" width="45" class="mr-1 border-radius-4" alt="avatar-12.png">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-action">
                                                <a><i class="material-icons" style="color:black;">share</i></a>
                                                <span class="ml-3 vertical-align-top"  >Share</span>
                                            </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div style="box-shadow: 2px 4px 20px #509007; background-color: #457d04 !important;" class="timeline-badge yellow">
                                    <a class="tooltipped" data-position="top" data-tooltip="Aug 15 2019"><i class="material-icons white-text">play_arrow</i></a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="card m-0 hoverable">
                                        <div class="card-content">
                                            <div class="card-text">
                                                <p class="flow-text">
                                                    Viu a data? Como assim não é seu aniversario??
                                                </p>
                                                <p><br> AHH Não tem problema pq vc ta de <h4>Parabéns!!</h4></p>
                                                <a href="#" class="display-flex">
                                                    <i class="material-icons mr-1">location_on</i> <span> vc chegou na penultima parcelaaaaaaa!</span>
                                                </a>
                                            </div>
                                            <div class="card-action">
                                                <a><i class="material-icons" style="color:black;">share</i></a>
                                                <span class="ml-3 vertical-align-top"  >Share</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div style="box-shadow: 2px 4px 20px #509007; background-color: #457d04 !important;" class="timeline-badge teal">
                                    <a class="tooltipped" data-position="top" data-tooltip="May 10 2019"><i class="material-icons white-text">phone_iphone</i></a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="card-panel hoverable border-radius-6 m-0 card-animation-1">
                                        
                                        <img class="responsive-img border-radius-4 z-depth-4 image-n-margin" src="../../../app-assets/images/gallery/46.jpg" alt="" />
                                        <div class="card-text">
                                            <p class="card-title activator grey-text text-darken-4 mt-1">Parcela 20 R$ 789,00 - Status Aguardando Pagamento</p>
                                        </div><hr>
                                        <h6><a href="#" class="mt-5">Um novo horizonte está surgindo</a></h6>
                                        <p>Sua ultima parcela está chegando, e acreditamos que você deva estar sonhando com voos muito mais altos agora
                                             então vamos te dar 15% de desconto em sua ultima parcela.
                                        </p>
                                        <div class="row mt-4">
                                            <div class="card-action">
                                                <a><i class="material-icons" style="color:black;">share</i></a>
                                                <span class="ml-3 vertical-align-top"  >Share</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div style="box-shadow: 2px 4px 20px #509007; background-color: #457d04 !important;" class="timeline-badge deep-orange">
                                    <a class="tooltipped" data-position="top" data-tooltip="Feb 15 2019"><i class="material-icons white-text">card_travel</i></a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="card hoverable">
                                        <div class="card-content">
                                            <div class="card-text">
                                                <p class="card-title activator grey-text text-darken-4 mt-1">Parcela 24 R$ 789,00 - Status Aguardando Pagamento</p>
                                            </div><hr>
                                            <p class="flow-text">
                                                Duas palavras 'PARA BÉNS!!'
                                            </p>

                                            <P>You did it.Você quitou todo seu empréstimo e foi um prazer te-lo conosco mas este não precisa ser o fim. 
                                                Ainda temos nossa rede parceiros que podem te ajudar em muitas outras realizações incriveis</P>
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix" style="float: none;"></li>
                        </ul>
                        <!-- / timeline -->
                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->

    <?php
        $renderFooter = new RenderFooter();
        echo $renderFooter->renderFooter();
    ?>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../../../app-assets/js/plugins.js"></script>
    <script src="../../../app-assets/js/search.js"></script>
    <script src="../../../app-assets/js/custom/custom-script.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
</body>

</html>