<?php
class RenderHeader 
{
    public function __construct()
    {
        
    }
    public function renderHeader()
    {
        $header = '    
        <!-- BEGIN: Header-->
        <header style="background-color: #56a000 !important;" class="page-topbar lighten-5 z-depth-1" id="header">
          <div class="navbar navbar-fixed">
          </div>
        </header>
        <!-- END: Header-->';
        
        return $header;
    }
}

?>