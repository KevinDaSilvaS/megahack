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
    <title>Faça Um Orçamento</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/materialize-stepper/materialize-stepper.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/form-wizard.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <link rel="stylesheet" type="text/css" href="CSS/customCSS.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">
    <?php
    require_once ('Componentes'.DIRECTORY_SEPARATOR.'renderHeader.php');
    require_once ('Componentes'.DIRECTORY_SEPARATOR.'renderFooter.php');

    $renderHeader = new RenderHeader();
    echo $renderHeader->renderHeader();
    ?>

    <style>
        @media only screen and (min-width: 993px){
            ul.stepper.horizontal .step.active .step-title::before, ul.stepper.horizontal .step.done .step-title::before {
                background-color: #66bd00;
            }
        }

        @media only screen and (min-width: 993px){
            ul.stepper.horizontal .step .step-title::before {
                color: #000;
                background-color: #ffffff;
            }
        }

        input{
            color: white;
        }
    </style>
    <!-- BEGIN: Page Main-->
    <div id="">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <div class="section section-form-wizard">
                        <div class="card">
                            <div class="card-content">
                                <p class="caption mb-0">Ja possui login clique <a class="green-text" href="sign-in.html">aqui</a>,
                                    caso contrário faça uma cotação com juros médios de 2.5% ao mês.</p>
                            </div>
                        </div>

                        <!-- Horizontal Stepper -->
                        <form action="insereCotacao.php" method="POST">
                        <div class="row">
                            <div class="col s12">
                                <div style="background-color: black;" class="card">
                                    <div class="card-content pb-0">
                                        <div class="card-header mb-2">
                                            <h4 class="card-title white-text">Faça sua cotação</h4>
                                        </div>

                                        <ul class="stepper horizontal" id="horizStepper">
                                            <li class="step active">
                                                <div class="step-title waves-effect">Passo 1</div>
                                                <div style="background-color: #0c0c0c;"  class="step-content">
                                                    <div class="row">
                                                        <div class="input-field col m3 s12">
                                                            <label for="valor">Valor Empréstimo: <span class="red-text">*</span></label>
                                                            <input type="text" onKeyPress="return(moeda(this,'.',',',event));" 
                                                            id="valor" name="valor" class="validate" required>
                                                        </div>

                                                        <div class="input-field col m3 s12">
                                                            <label for="anos">Anos do Emprestimo: <span class="red-text">*</span></label>
                                                            <input type="number" id="anos" name="anos" class="validate" required>
                                                        </div>

                                                        <div class="input-field col m6 s12">
                                                            <label class="active" for="garantia">Garantia: <span class="red-text">*</span></label>
                                                            <select id="garantia" name="garantia" class="white-text" required>
                                                                <option class="white-text" value="1">Sim, casa própria</option>
                                                                <option class="white-text" value="2">Sim, carro</option>
                                                                <option class="white-text" value="0">Não</option>
                                                            </select>
                                                        </div>

                                                        <div class="input-field col m6 s12">
                                                            <label class="active" for="motivo">Motivo Empréstimos: <span class="red-text">*</span></label>
                                                            <select id="motivo" name="motivo" class="white-text" required>
                                                                <option class="white-text" value="0">Pagar Outras Dívidas/ Empréstimos</option>
                                                                <option class="white-text" value="1">Fazer Uma Viagem</option>
                                                                <option class="white-text" value="2">Pagar os Estudos</option>
                                                                <option class="white-text" value="3">Reformas</option>
                                                                <option class="white-text" value="4">Outro</option>
                                                            </select>
                                                        </div>

                                                        <div class="input-field col m6 s12">
                                                            <label class="active" for="habito">Qual me define mais: <span class="red-text">*</span></label>
                                                            <select id="habito" name="habito" class="white-text" required>
                                                                <option class="white-text" value="0">Gosto de sair a noite com os amigos e familia</option>
                                                                <option class="white-text" value="1">Gosto de viajar</option>
                                                                <option class="white-text" value="2">Gosto de fazer compras</option>
                                                                <option class="white-text" value="3">Gosto de ficar em casa</option>
                                                                <option class="white-text" value="4">Outro</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    
                                                    <div class="step-actions">
                                                        <div class="row">
                                                            <div class="col m4 s12 mb-3">
                                                                <a class="red btn btn-reset" type="reset">
                                                                    <i class="material-icons left">clear</i>Limpar
                                                                 </a>
                                                            </div>
                                                            <div class="col m4 s12 mb-3">
                                                                <a style="background-color: #353535 !important;" class="btn btn-light previous-step" disabled>
                                                                    <i class="material-icons left">arrow_back</i>
                                                                    Ant
                                                                 </a>
                                                            </div>
                                                            <div class="col m4 s12 mb-3">
                                                                <button style="background-color: #66bd00;" class="waves-effect waves dark btn btn-primary next-step" type="submit">
                                                                    Próx
                                                                    <i class="material-icons right">arrow_forward</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="step">
                                                <div class="step-title waves-effect">Passo 2</div>
                                                <div style="background-color: #0c0c0c;" class="step-content">
                                                   
                                                    <div class="row">
                                                        <div class="input-field col m6 s12">
                                                            <label class="active" for="empregado">Empregado: <span class="red-text">*</span></label>
                                                            <select id="empregado" name="empregado" class="white-text" required>
                                                                <option class="white-text" value="1">Sim</option>
                                                                <option class="white-text" value="0">Não</option>
                                                            </select>
                                                        </div>

                                                        <div class="input-field col m6 s12">
                                                            <label for="rendamensal">Renda Mensal: </label>
                                                            <input required onKeyPress="return(moeda(this,'.',',',event));"
                                                            type="text" class="validate" id="rendamensal" name="rendamensal">
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col m6 s12">
                                                            <label for="exp">Tempo de Empresa:</label>
                                                            <input type="number" class="validate" id="exp" name="exp">
                                                        </div>
                                                       
                                                        <div class="input-field col m6 s12">
                                                            <label for="profissao">Profissão: </label>
                                                            <input type="text" class="validate" id="profissao" name="profissao">
                                                        </div>
                                                    </div>
                                                    <div class="step-actions">
                                                        <div class="row">
                                                            <div class="col m4 s12 mb-3">
                                                                <a class="red btn btn-reset" type="reset">
                                                                    <i class="material-icons left">clear</i>Limpar
                                                                 </a>
                                                            </div>
                                                            <div class="col m4 s12 mb-3">
                                                                <a style="background-color: #66bd00;" class="btn btn-light previous-step">
                                                                    <i class="material-icons left">arrow_back</i>
                                                                    Ant
                                                                 </a>
                                                            </div>
                                                            <div class="col m4 s12 mb-3">
                                                                <button style="background-color: #66bd00;" class="waves-effect waves dark btn btn-primary next-step" type="submit">
                                                                    Próx
                                                                    <i class="material-icons right">arrow_forward</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="step">
                                                <div class="step-title waves-effect">Passo 3</div>
                                                <div style="background-color: #0c0c0c;"  class="step-content">
                                                    <div class="row">
                                                        <div class="input-field col m6 s12">
                                                            <label for="nome">Nome Completo: <span class="red-text">*</span></label>
                                                            <input type="text" id="nome" name="nome" class="validate" required>
                                                        </div>
                                                        <div class="input-field col m6 s12">
                                                            <label for="cpf">CPF: <span class="red-text">*</span></label>
                                                            <input type="text"  onkeypress="return(maskCPF(this,ajustarCPF))"
                                                             id="cpf" name="cpf" class="validate" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col m4 s12">
                                                            <label for="email">Email: <span class="red-text">*</span></label>
                                                            <input type="email" id="email" name="email" class="validate" required>
                                                        </div>

                                                        <div class="input-field col m4 s12">
                                                            <label for="telefone">Telefone: <span class="red-text">*</span></label>
                                                            <input type="text" onkeypress="return(maskPhone(this,ajustarPhone))" id="telefone" name="telefone" class="validate" required>
                                                        </div>

                                                        <div class="input-field col m4 s12">
                                                            <label for="senha">Senha: <span class="red-text">*</span></label>
                                                            <input type="password" id="senha" name="senha" class="validate" required>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="step-actions">
                                                        <div class="row">
                                                            <div class="col m6 s12 mb-1">
                                                                <a class="red btn mr-1 btn-reset" type="reset">
                                                                    <i class="material-icons">clear</i>
                                                                    Limpar
                                                                </a>
                                                            </div>
                                                            <div class="col m6 s12 mb-1">
                                                                <button style="background-color: #66bd00;" class="waves-effect waves-dark btn btn-primary" type="submit">Enviar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        <!-- Linear Stepper -->

                        <div style="background-color: #00000000;" class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div style="display: none;" class="card-content">
                                        <div class="card-header">
                                            
                                        </div>

                                        <ul class="stepper linear" id="linearStepper">
                                            <li class="step">
                                                
                                                <div class="step-content">
                                                    <div class="row">
                                                        
                                                    </div>
                                                    <div class="row">
                                                        
                                                    </div>
                                                    <div class="step-actions">
                                                        <div class="row">
               
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="step">
                                                
                                                <div class="step-content">
                                                    <div class="row">
                                                        
                                                    </div>
                                                    <div class="row">
                                                       
                                                    </div>
                                                    <div class="row">
                                                       
                                                    </div>
                                                    <div class="step-actions">
                                                        <div class="row">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="step">
                                                
                                                <div class="step-content">
                                                    <div class="row">
                                                        
                                                    </div>
                                                    <div class="row">
                                                        
                                                    </div>
                                                    <div class="row">
                                                        
                                                    </div>
                                                    <div class="step-actions">
                                                        
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                    </div><!-- START RIGHT SIDEBAR NAV -->
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
    <script src="JS/buscaCep.js"></script>
    <script src="JS/mascaras.js"></script>
    <script src="JS/moeda.js"></script>
    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/materialize-stepper/materialize-stepper.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../../../app-assets/js/plugins.js"></script>
    <script src="../../../app-assets/js/search.js"></script>
    <script src="../../../app-assets/js/custom/custom-script.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/form-wizard.js"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>