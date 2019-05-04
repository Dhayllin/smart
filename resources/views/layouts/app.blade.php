<!DOCTYPE html>
<html lang="pt-br">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

<body>
    <div class="wrapper">    
         @include('layouts.partials.sidebar')       
        <div class="main-panel">
                @include('layouts.partials.contentheader')
           <!-- Main content -->
            <div class="container">
                <!-- Your Page Content Here -->               
                @yield('content') 
            </div><!-- /.content -->
        </div><!-- /.content-wrapper -->        
    @include('layouts.partials.footer')                         
</body>
@section('scripts')
    @include('layouts.partials.scripts')
@show
</html>