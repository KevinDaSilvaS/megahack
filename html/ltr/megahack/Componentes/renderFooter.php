<?php 
class RenderFooter
{
    public function __construct()
    {
        
    }
    
    public function renderFooter()
    {
        $footer = '
        <!-- BEGIN: Footer-->

        <footer style="background-color: #56a000 !important;" class="page-footer footer footer-static footer-light navbar-border navbar-shadow green  z-depth-1">
          <div class="footer-copyright">
            <div class="container"><span>&copy; 2020 Mega Hack </span></div>
          </div>
        </footer>
    
        <!-- END: Footer-->';

        return $footer;
    }
}

?>