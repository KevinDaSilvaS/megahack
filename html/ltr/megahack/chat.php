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
    <title>Chat</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-chat.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <link rel="stylesheet" type="text/css" href="CSS/customCSS.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu 
preload-transitions 2-columns  app-page " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

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
    
    <style>
        .chat-application, .app-chat, .chat-content, .chat-content-area, .chat-header, .option-icon i {
            color: #000000 !important;
            cursor: pointer;
        }

        .blue-grey-text.text-darken-4 {
            color: #000000 !important;
        }

        .chat-application, .app-chat .chat-content, .chat-content-area, .chat-header, .chat-text {
            color: #000000 !important;
            font-size: 0.85rem;
        }

        .chat-header{
            background-color: #94d24d99 !important;
        }

        .sidebar-header{
            background-color: #63bb00c9 !important;
        }

        .chat-list{
            background-color: #4c9000 !important;
        }

        .chat-application .app-chat .chat-content .sidebar .sidebar-chat .chat-list .chat-user:hover {
            background-color: #000000 !important;
        }

        .chat-application .app-chat .chat-content .sidebar .sidebar-chat .chat-list .chat-user .info-section .star-timing .time {
            font-size: 0.75rem;
            color: white;
        }

        .chat-application .app-chat .chat-content .sidebar .sidebar-chat .chat-list .chat-user.active {
            background-color: #6cc1088f;
            border-right: 3px solid #87f30bf2;
        }

        .chat-application .app-chat .chat-content .chat-content-area .chat-area .chats .chat.chat-right .chat-body .chat-text p {
            background-color: black;
            color: #fff;
        }

        .chat-application .app-chat .chat-content .chat-content-area .chat-area .chats .chat.chat-right .chat-body .chat-text:first-child:before {
            border-right-color: #000000 !important;
            border-top-color: #000000 !important;
        }

        .chat-application .app-chat .chat-content .chat-content-area .chat-area .chats .chat .chat-body .chat-text p {
            color: #fff;
            background-color: #61af06;
        }

        .chat-application .app-chat .chat-content .chat-content-area .chat-area .chats .chat .chat-body .chat-text:first-child:before {
            /* border-left-color: #c50000;
            border-bottom-color: #f00; */
            border-left-color: #61af06;
            border-bottom-color: #61af06;
        }

        .chat-application .app-chat .chat-content .chat-content-area .chat-footer .chat-input .message {
            background-color: #5dab03;
            border-radius: 5px;
            border-bottom: 0;
            margin-right: 1.5rem;
            padding: 0 1.5rem;
            color: #000000;
        }

        .message::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: black !important;
            opacity: 1; /* Firefox */
        }

    </style>

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="col s12">
                <div class="container">
                    <div class="chat-application">
                        <div class="chat-content-head">
                            <div class="header-details">
                                <h5 class="m-0 sidebar-title"><i class="material-icons app-header-icon text-top">mail_outline</i> Chat</h5>
                                <span>Nossos atendentes estão aqui para lhe auxiliar no que for preciso.</span> 
                            </div>
                        </div>
                        <div class="app-chat">
                        <hr>
                            <div class="content-area content-right">
                                <div class="app-wrapper">
                                    <!-- Sidebar menu for small screen -->
                                    <a href="#" data-target="chat-sidenav" class="sidenav-trigger hide-on-large-only">
                                        <i class="material-icons">menu</i>
                                    </a>
                                    <!--/ Sidebar menu for small screen -->

                                    <div class="card card card-default scrollspy border-radius-6 fixed-width">
                                        <div class="card-content chat-content p-0">
                                            <!-- Sidebar Area -->
                                            <div style="background-color: #366500;" class="sidebar-left sidebar-fixed animate fadeUp animation-fast">
                                                <div class="sidebar animate fadeUp">
                                                    <div class="sidebar-content">
                                                        <div id="sidebar-list" class="sidebar-menu chat-sidebar list-group position-relative">
                                                            <div class="sidebar-list-padding app-sidebar sidenav" id="chat-sidenav">
                                                                <!-- Sidebar Header -->
                                                                <div class="sidebar-header">
                                                                    <div class="row valign-wrapper">
                                                                        <div class="col s2 media-image pr-0">
                                                                            <img src="../../../app-assets/images/user/12.jpg" alt="" class="circle z-depth-2 responsive-img">
                                                                        </div>
                                                                        <div class="col s10">
                                                                            <p class="m-0  blue-grey-text text-darken-4 font-weight-700">Seu Perfil</p>
                                                                            <p class="m-0 info-text">clique para editar</p>
                                                                        </div>
                                                                    </div>
                                                                    <span class="option-icon">
                                                                        <i class="material-icons">more_vert</i>
                                                                    </span>
                                                                </div>
                                                                <!--/ Sidebar Header -->

                                                                <!-- Sidebar Search -->
                                                                <div class="sidebar-search animate fadeUp">
                                                                    <div class="search-area">
                                                                        <i style="background-color: black; color: white;" class="material-icons search-icon">search</i>
                                                                        <input style="background-color: #0c0c0c;" type="text" placeholder="Procurar atendente" class="app-filter" id="chat_filter">
                                                                    </div>
                                                                </div>
                                                                <!--/ Sidebar Search -->

                                                                <!-- Sidebar Content List -->
                                                                <div class="sidebar-content sidebar-chat">
                                                                    <div class="chat-list">
                                                                        <div class="chat-user animate fadeUp delay-1">
                                                                            <div class="user-section">
                                                                                <div class="row valign-wrapper">
                                                                                    <div class="col s2 media-image online pr-0">
                                                                                        <img src="../../../app-assets/images/user/2.jpg" alt="" class="circle z-depth-2 responsive-img">
                                                                                    </div>
                                                                                    <div class="col s10">
                                                                                        <p class="m-0 text-darken-4 font-weight-700 white-text">Jorge Fernandes</p>
                                                                                        <p class="m-0 info-text white-text">Online</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info-section">
                                                                                <div class="star-timing">
                                                                                    <div class="favorite">
                                                                                        <i class="material-icons amber-text">star</i>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>2.38</span>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat-user animate fadeUp delay-2 active">
                                                                            <div class="user-section">
                                                                                <div class="row valign-wrapper">
                                                                                    <div class="col s2 media-image online pr-0">
                                                                                        <img src="../../../app-assets/images/user/7.jpg" alt="" class="circle z-depth-2 responsive-img">
                                                                                    </div>
                                                                                    <div class="col s10">
                                                                                        <p class="m-0 text-darken-4 font-weight-700 white-text">Alice Horta</p>
                                                                                        <p class="m-0 info-text white-text">online 3m32s</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info-section">
                                                                                <div class="star-timing">
                                                                                    <div class="time">
                                                                                        <span>12.58</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat-user animate fadeUp delay-3">
                                                                            <div class="user-section">
                                                                                <div class="row valign-wrapper">
                                                                                    <div class="col s2 media-image away pr-0">
                                                                                        <img src="../../../app-assets/images/user/10.jpg" alt="" class="circle z-depth-2 responsive-img">
                                                                                    </div>
                                                                                    <div class="col s10">
                                                                                        <p class="m-0 text-darken-4 font-weight-700 white-text">Pamela Karine</p>
                                                                                        <p class="m-0 info-text white-text">Online</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info-section">
                                                                                <div class="star-timing">
                                                                                    <div class="time">
                                                                                        <span>10.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat-user animate fadeUp delay-4">
                                                                            <div class="user-section">
                                                                                <div class="row valign-wrapper">
                                                                                    <div class="col s2 media-image offline pr-0">
                                                                                        <img src="../../../app-assets/images/user/4.jpg" alt="" class="circle z-depth-2 responsive-img">
                                                                                    </div>
                                                                                    <div class="col s10">
                                                                                        <p class="m-0 text-darken-4 font-weight-700 white-text">Aline Kystal</p>
                                                                                        <p class="m-0 info-text white-text">Online</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info-section">
                                                                                <div class="star-timing">
                                                                                    <div class="time">
                                                                                        <span>7.44</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat-user animate fadeUp delay-5">
                                                                            <div class="user-section">
                                                                                <div class="row valign-wrapper">
                                                                                    <div class="col s2 media-image pr-0">
                                                                                        <img src="../../../app-assets/images/user/8.jpg" alt="" class="circle z-depth-2 responsive-img">
                                                                                    </div>
                                                                                    <div class="col s10">
                                                                                        <p class="m-0 text-darken-4 font-weight-700 white-text">Georgia Souza</p>
                                                                                        <p class="m-0 info-text white-text">Online</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info-section">
                                                                                <div class="star-timing">
                                                                                    <div class="favorite">
                                                                                        <i class="material-icons amber-text">star</i>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>10.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="badge badge pill black">1</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat-user animate fadeUp delay-5">
                                                                            <div class="user-section">
                                                                                <div class="row valign-wrapper">
                                                                                    <div class="col s2 media-image pr-0">
                                                                                        <img src="../../../app-assets/images/user/1.jpg" alt="" class="circle z-depth-2 responsive-img">
                                                                                    </div>
                                                                                    <div class="col s10">
                                                                                        <p class="m-0 text-darken-4 font-weight-700 white-text">Mauro Chagas</p>
                                                                                        <p class="m-0 info-text white-text">Online</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info-section">
                                                                                <div class="star-timing">
                                                                                    <div class="time">
                                                                                        <span>20.00</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat-user animate fadeUp delay-5">
                                                                            <div class="user-section">
                                                                                <div class="row valign-wrapper">
                                                                                    <div class="col s2 media-image away pr-0">
                                                                                        <img src="../../../app-assets/images/user/9.jpg" alt="" class="circle z-depth-2 responsive-img">
                                                                                    </div>
                                                                                    <div class="col s10">
                                                                                        <p class="m-0 text-darken-4 font-weight-700 white-text">Ketllin Bueno</p>
                                                                                        <p class="m-0 info-text white-text">Online</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info-section">
                                                                                <div class="star-timing">
                                                                                    <div class="time">
                                                                                        <span>14.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="badge badge pill black">3</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat-user animate fadeUp delay-5">
                                                                            <div class="user-section">
                                                                                <div class="row valign-wrapper">
                                                                                    <div class="col s2 media-image offline pr-0">
                                                                                        <img src="../../../app-assets/images/user/5.jpg" alt="" class="circle z-depth-2 responsive-img">
                                                                                    </div>
                                                                                    <div class="col s10">
                                                                                        <p class="m-0 text-darken-4 font-weight-700 white-text">Alberta Silva</p>
                                                                                        <p class="m-0 info-text white-text">Online</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info-section">
                                                                                <div class="star-timing">
                                                                                    <div class="time">
                                                                                        <span>02.00</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="no-data-found">
                                                                        <h6 class="center">No Results Found</h6>
                                                                    </div>
                                                                </div>
                                                                <!--/ Sidebar Content List -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/ Sidebar Area -->

                                            <!-- Content Area -->
                                            <div style="background-color: #94d24d99 !important;" class="chat-content-area animate fadeUp">
                                                <!-- Chat header -->
                                                <div class="chat-header">
                                                    <div class="row valign-wrapper">
                                                        <div class="col media-image online pr-0">
                                                            <img src="../../../app-assets/images/user/7.jpg" alt="" class="circle z-depth-2 responsive-img">
                                                        </div>
                                                        <div class="col">
                                                            <p class="m-0 text-darken-4 font-weight-700">Alice Horta</p>
                                                            <p class="m-0 chat-text truncate">Online</p>
                                                        </div>
                                                    </div>
                                                    <span class="option-icon">
                                                        <span class="favorite">
                                                            <i class="material-icons">star_outline</i>
                                                        </span>
                                                        <i class="material-icons">delete</i>
                                                        <i class="material-icons">more_vert</i>
                                                    </span>
                                                </div>
                                                <!--/ Chat header -->

                                                <!-- Chat content area -->
                                                <div class="chat-area">
                                                    <div class="chats">
                                                        <div class="chats">
                                                            <div class="chat chat-right">
                                                                <div class="chat-avatar">
                                                                    <a class="avatar">
                                                                        <img src="../../../app-assets/images/user/12.jpg" class="circle" alt="avatar" />
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-text">
                                                                        <p>Olá Gostaria de tirar umas dúvidas</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat">
                                                                <div class="chat-avatar">
                                                                    <a class="avatar">
                                                                        <img src="../../../app-assets/images/user/7.jpg" class="circle" alt="avatar" />
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-text">
                                                                        <p>Oi bom dia Maiara, Tudo certo ctg?</p>
                                                                    </div>
                                                                    <div class="chat-text">
                                                                        <p>Pois não, no que posso te ajudar hoje?</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat chat-right">
                                                                <div class="chat-avatar">
                                                                    <a class="avatar">
                                                                        <img src="../../../app-assets/images/user/12.jpg" class="circle" alt="avatar" />
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-text">
                                                                        <p>Tudo bem, Obrigada pela atenção!</p>
                                                                    </div>
                                                                    <div class="chat-text">
                                                                        <p>Preciso solucionar o seguinte problema:(digite o problema abaixo)</p>
                                                                    </div>
                                                                </div>
                                                            </div>
     
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ Chat content area -->

                                                <!-- Chat footer <-->
                                                <div class="chat-footer">
                                                    <form onsubmit="enter_chat();" action="javascript:void(0);" class="chat-input">
                                                        <i class="material-icons mr-2">face</i>
                                                        <i class="material-icons mr-2">attachment</i>
                                                        <input type="text" placeholder="Digite sua msg.." class="message">
                                                        <a class="btn black waves-effect waves-light send" onclick="enter_chat();">Enviar</a>
                                                    </form>
                                                </div>
                                                <!--/ Chat footer -->
                                            </div>
                                            <!--/ Content Area -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script src="../../../app-assets/js/scripts/app-chat.js"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>