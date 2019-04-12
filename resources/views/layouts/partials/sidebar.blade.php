<div class="sidebar" data-color="blue" data-image="../img/sidebar-5.jpg">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
<div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                
            </a>
            <a href="#" class="simple-text logo-normal">
                SMART ADV
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item ">
                <a class="nav-link" href="home">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                </a>
            </li>          
            <li class="nav-item "{{{ (Request::is('/sections/*') ? 'class=active' : '') }}}>
                <a class="nav-link" href="{{ url('/sections') }}">                               
                    <span class="sidebar-normal">Seções</span>
                </a>
            </li>        
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/demands') }}">                                    
                    <span class="sidebar-normal">Pedidos</span>
                </a>
            </li>   
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/types') }}">                              
                    <span class="sidebar-normal">Tipos</span>
                </a>
            </li>      
        </ul>
    </div>
</div>
