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
            <div class="content">
                <div class="container-fluid">                    
                    <div class="row">
                   Home
                    </div> 
                </div>                            
            </div>
        </div>   
    @include('layouts.partials.footer')                         
</body>
@section('scripts')
    @include('layouts.partials.scripts')
@show
</html>