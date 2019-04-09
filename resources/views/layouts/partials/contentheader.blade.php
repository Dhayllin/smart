   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-primary btn-fill btn-round btn-icon d-none d-lg-block">
                        <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                        <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                    </button>
                </div>             
            </div>                      
            <div class="collapse navbar-collapse justify-content-end"> 
                  <!-- Menu Toggle Button -->                            
                    <span class="hidden-xs"> <strong>{{ Auth::user()->name }}</strong></span>                            
                <div class="pull-right">
                        <a href="{{ url('/logout') }}" class="btn btn-primary btn-flat" id="logout"
                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                    Sair
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            <input type="submit" value="logout" style="display: none;">
                        </form>
                    </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->