<?php

class RenderMenu
{
    public function __construct()
    {
        
    }

    public function renderMenu($tipo = 1)
    {
        switch ($tipo) {
            case 1:
                $menu = '
                <!-- BEGIN: SideNav-->
                <aside style="background-color: black !important;" class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded  blue-grey lighten-2 z-depth-1">
                    <div class="brand-sidebar black">
                    </div>
                    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" 
                    data-menu="menu-navigation" data-collapsible="accordion">
                        <li class="bold"><a class="waves-effect waves-cyan " href="index.php"><i class="material-icons">view_array</i>
                        <span class="menu-title" data-i18n="">Fazer Solicitação</a>
                        </li>

                        <li class="bold"><a class="waves-effect waves-cyan " href="pendencias.php"><i class="material-icons">view_array</i>
                        <span class="menu-title" data-i18n="">Gerenciar Pendencias</a>
                        </li>

                        <li class="bold"><a class="waves-effect waves-cyan " href="mileStones.php"><i class="material-icons">view_array</i>
                        <span class="menu-title" data-i18n="">Milestones</a>
                        </li>

                        <li class="bold"><a class="waves-effect waves-cyan " href="listaEmprestimos.php"><i class="material-icons">view_array</i>
                        <span class="menu-title" data-i18n="">Lista de Solicitações <br> de Empréstimos</a>
                        </li>

                        <li class="bold"><a class="waves-effect waves-cyan " href="chat.php"><i class="material-icons">view_array</i>
                        <span class="menu-title" data-i18n="">Ajuda</a>
                        </li>

                        <li class="bold"><a class="waves-effect waves-cyan " href="logout.php"><i class="material-icons">exit_to_app</i>
                        <span class="menu-title" data-i18n="">Logout</a>
                        </li>
                    </ul>
                    <div class="navigation-background"></div><a class="sidenav-trigger 
                    b0 tn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
                    href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
                </aside>
                <!-- END: SideNav-->
                ';
                break;

            default:
                header('Location: logout.php');
                break;
        }

        return $menu;
    }
}

?>