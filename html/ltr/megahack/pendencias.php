<?php
session_start();
$_SESSION['pendencia'] = true;
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
    <title>Documentação</title>
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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-file-manager.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/widget-timeline.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/dropify/css/dropify.min.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns  app-page " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

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

        if (isset($_SESSION['pendencia'])) { 
          echo $message->error('Atenção!!','Precisamos de uma foto atualizada de sua identidade e comprovante de residência.');
          unset($_SESSION['pendencia']);
        }

        $renderHeader = new RenderHeader();
        echo $renderHeader->renderHeader();

        $renderMenu = new RenderMenu();
        echo $renderMenu->renderMenu();
    ?>

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                    <h5>Gerenciador de Pendencias</h5>
                    <span>Aqui você pode ver os detalhes do andamento do contrato e gerenciar eventuais pendências.</span>
                    </div>

                    <table class="centered">
                        <thead>
                            <tr>
                                <th>Data contrato</th>
                                <th>Valor Emprestimo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>02/02/2020</td>
                                <td>R$ 12.000,00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="card red ">
                    <div class="card-content">
                    <h6 class="white-text">Precisamos de uma foto atualizada da sua carteira de identidade e comprovante de residência</h6>
                    <p class="white-text">em caso de dúvidas solicite ajuda aos nossos atendentes <a style="color: #89ff00;" href="chat.php">aqui</a></p>
                    </div>
                </div>
                <div class="container">
                    <div class="section app-file-manager-wrapper">
                        <!-- File Manager app overlay -->
                        <div class="app-file-overlay"></div>
                        <!-- /File Manager app overlay -->
                        <!-- sidebar left start -->
                        <div class="sidebar-left">
                            <!--left sidebar of file manager start -->
                            <div class="app-file-sidebar display-flex">
                                <!-- App File sidebar - Left section Starts -->
                                <div class="app-file-sidebar-left">
                                    <!-- sidebar close icon starts -->
                                    <span class="app-file-sidebar-close hide-on-med-and-up"><i class="material-icons">close</i></span>
                                    <!-- sidebar close icon ends -->
                                    <div class="input-field add-new-file mt-0">
                                        <!-- Add File Button -->
                                        <button class="add-file-btn btn btn-block waves-effect waves-light mb-10 green">
                                            <i class="material-icons">add</i>
                                            <span>Adicionar</span>
                                        </button>
                                        <!-- file input  -->
                                        <div class="getfileInput">
                                            <input type="file" id="getFile">
                                        </div>
                                    </div>
                                    <div class="app-file-sidebar-content">
                                        <!-- App File Left Sidebar - Drive Content Starts -->
                                        <div class="collection file-manager-drive mt-3">
                                          
                                        </div>
                                        <!-- App File Left Sidebar - Drive Content Ends -->


                                        <!-- App File Left Sidebar - Storage Content Ends -->
                                    </div>
                                </div>
                            </div>
                            <!--left sidebar of file manager start -->
                        </div>
                        <!--/ sidebar left end -->
                        <!-- content-right start -->
                        <div class="content-right">
                            <!-- file manager main content start -->
                            <div class="app-file-area">
                                <!-- File App Content Area -->
                                <!-- App File Header Starts -->
                                <div class="app-file-header">
                                    <!-- Header search bar starts -->
                                    <div class="sidebar-toggle show-on-medium-and-down mr-1 ml-1">
                                        <i class="material-icons">menu</i>
                                    </div>
                                    <div class="app-file-header-search">
                                        <div class="input-field m-0">
                                            <i class="material-icons prefix">search</i>
                                            <input type="search" id="email-search" placeholder="pesquisar arquivo">
                                        </div>
                                    </div>
                                    <!-- Header search bar Ends -->

                                    <!-- Header Icons Starts -->
                                    <div class="app-file-header-icons display-flex align-items-center">
                                        <div class="fonticon-wrap display-inline">
                                            <i class="material-icons">person_outline</i>
                                        </div>
                                        <div class="fonticon-wrap display-inline">
                                            <i class="material-icons">delete</i>
                                        </div>
                                        <div class="fonticon-wrap display-inline ">
                                            <i class="material-icons">more_vert</i>
                                        </div>
                                    </div>
                                    <!-- Header Icons Ends -->
                                </div>
                                <!-- App File Header Ends -->

                                <!-- App File Content Starts -->
                                <div class="app-file-content">
                                    <h6 class="font-weight-700 mb-3">Arquivos</h6>

                                    <!-- App File - Recent Accessed Files Section Starts -->
                                    <span class="app-file-label">Arquivos</span>
                                    <div class="row app-file-recent-access mb-3">
                                        <div class="col xl3 l6 m3 s12">
                                            <div class="card box-shadow-none mb-1 app-file-info">
                                                <div class="card-content">
                                                    <div class="app-file-content-logo grey lighten-4">
                                                        <div class="fonticon">
                                                            <i class="material-icons">more_vert</i>
                                                        </div>
                                                        <img class="recent-file" src="../../../app-assets/images/icon/pdf.png" height="38" width="30" alt="Card image cap">
                                                    </div>
                                                    <div class="app-file-recent-details">
                                                        <div class="app-file-name font-weight-700">contrato-assinado.pdf</div>
                                                        <div class="app-file-size">12.85kb</div>
                                                        <div class="app-file-last-access">Atualizado: 3hrs atrás</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col xl3 l6 m3 s12">
                                            <div class="card box-shadow-none mb-1 app-file-info">
                                                <div class="card-content">
                                                    <div class="app-file-content-logo grey lighten-4">
                                                        <div class="fonticon"><i class="material-icons">more_vert</i></div>
                                                        <img class="recent-file" src="../../../app-assets/images/icon/pdf.png" height="38" width="30" alt="Card image cap">
                                                    </div>
                                                    <div class="app-file-recent-details">
                                                        <div class="app-file-name font-weight-700">documentacao-garantias.pdf</div>
                                                        <div class="app-file-size">122.85kb</div>
                                                        <div class="app-file-last-access">Atualizado: 3hrs atrás</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col xl3 l6 m3 s12">
                                            <div class="card box-shadow-none mb-1 app-file-info">
                                                <div class="card-content">
                                                    <div class="app-file-content-logo grey lighten-4">
                                                        <div class="fonticon"> <i class="material-icons">more_vert</i></div>
                                                        <img class="recent-file" src="../../../app-assets/images/icon/doc.png" height="38" width="30" alt="Card image cap">
                                                    </div>
                                                    <div class="app-file-content-details">
                                                        <div class="app-file-name font-weight-700">fotos-garantia-casa.png</div>
                                                        <div class="app-file-size">1.2gb</div>
                                                        <div class="app-file-last-access">Atualizado: 3hrs atrás</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col xl3 l6 m3 s12">
                                            <div class="card box-shadow-none mb-1 app-file-info">
                                                <div class="card-content">
                                                    <div class="app-file-content-logo grey lighten-4">
                                                        <div class="fonticon">
                                                            <i class="material-icons">more_vert</i>
                                                        </div>
                                                        <img class="recent-file" src="../../../app-assets/images/icon/doc.png" height="38" width="30" alt="Card image cap">
                                                    </div>
                                                    <div class="app-file-content-details">
                                                        <div class="app-file-name font-weight-700">Comprovante-residencia-atualizado.jpg</div>
                                                        <div class="app-file-size">92.83kb</div>
                                                        <div class="app-file-last-access">Atualizado: 3hrs atrás</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- App File - Recent Accessed Files Section Ends -->
                                    <!--Default version-->
                                    <div class="col s12 m12 l12">
                                        <input type="file" id="input-file-now" class="dropify" data-default-file="" />
                                    </div>

                                </div>
                            </div>

                            <!-- file manager main content end  -->
                        </div>
                        <!-- content-right end -->
                        <!-- App File sidebar - Right section Starts -->
                        <div class="app-file-sidebar-info">
                            <div class="card box-shadow-none m-0 pb-1">
                                <div class="card-header display-flex justify-content-between align-items-center">
                                    <h6 class="m-0">Document.pdf</h6>
                                    <div class="app-file-action-icons display-flex align-items-center">
                                        <i class="material-icons mr-10">delete</i>
                                        <i class="material-icons close-icon">close</i>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <ul class="tabs tabs-fixed-width mb-1">
                                        <li class="tab mr-1 pr-1">
                                            <a class="active display-flex align-items-center" id="details-tab" href="#details">
                                                <i class="material-icons mr-1">content_paste</i>
                                                <span>Detalhes</span>
                                            </a>
                                        </li>
                                        <li class="tab">
                                            <a class="display-flex align-items-center" id="activity-tab" href="#file-activity">
                                                <i class="material-icons mr-1">timeline</i>
                                                <span>Atividade</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="details-tab active" id="details">
                                            <div class="display-flex align-items-center flex-column pb-2 pt-4">
                                                <img src="../../../app-assets/images/icon/pdf.png" alt="PDF" height="42" width="35" class="mt-5 mb-5">
                                                <p class="mt-4">15.3mb</p>
                                            </div>
                                            <div class="divider mt-5 mb-5"></div>
                                            <div class="pt-6">
                                                <span class="app-file-label">Setting</span>
                                                
                                                <span class="app-file-label">Info</span>
                                                <div class="display-flex justify-content-between align-items-center mt-6">
                                                    <p>Formato</p>
                                                    <p class="font-weight-700">PDF</p>
                                                </div>
                                                <div class="display-flex justify-content-between align-items-center mt-6">
                                                    <p>Tamanho</p>
                                                    <p class="font-weight-700">15.6mb</p>
                                                </div>
                                                
                                                <div class="display-flex justify-content-between align-items-center mt-6">
                                                    <p>Atualizado</p>
                                                    <p class="font-weight-700">Setembro 4 2019</p>
                                                </div>
                                                <div class="display-flex justify-content-between align-items-center mt-6">
                                                    <p>Aberto</p>
                                                    <p class="font-weight-700">Julho 8, 2019</p>
                                                </div>
                                               
                                        </div>
                                        <div class="activity-tab" id="file-activity">
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-green active">
                                                    <div class="timeline-time">Today</div>
                                                    <h6 class="timeline-title">You added an item to</h6>
                                                    <p class="timeline-text">You added an item</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/psd.png" alt="PSD" height="30" width="25" class="mr-1">Mockup.psd
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-cyan active">
                                                    <div class="timeline-time">10 min ago</div>
                                                    <h6 class="timeline-title">You shared 2 times</h6>
                                                    <p class="timeline-text">Emily Bennett edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/sketch.png" alt="Sketch" height="30" width="25" class="mr-1">Template_Design.sketch
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-red active">
                                                    <div class="timeline-time">Mon 10:20 PM</div>
                                                    <h6 class="timeline-title">You edited an item</h6>
                                                    <p class="timeline-text">You edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Information.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-indigo active">
                                                    <div class="timeline-time">Jul 13 2019</div>
                                                    <h6 class="timeline-title">You edited an item</h6>
                                                    <p class="timeline-text">John Keller edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Documentation.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-orange">
                                                    <div class="timeline-time">Apr 18 2019</div>
                                                    <h6 class="timeline-title">You added an item to</h6>
                                                    <p class="timeline-text">You edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Resume.pdf
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- App File sidebar - Right section Ends -->
                    </div>
                    <!-- END RIGHT SIDEBAR NAV -->
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
    <script src="../../../app-assets/js/scripts/app-file-manager.js"></script>
    <script src="../../../app-assets/vendors/dropify/js/dropify.min.js"></script>
    <script src="../../../app-assets/js/scripts/form-file-uploads.js"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>