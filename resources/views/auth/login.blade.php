<!doctype html>
<html lang="pt-br">
    @section('htmlheader')
        @include('layouts.partials.htmlheader')
    @show
</head>

<body>
    <div class="wrapper wrapper-full-page">
       
        <div class="full-page  section-image" data-color="black" data-image="../img/full-screen-image-2.jpg" ;>
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <form method="POST" action="{{ route('login') }}">

                                @csrf

                            <div class="card card-login card-hidden">
                                <div class="card-header ">
                                    <h3 class="header text-center">SMART ADV</h3>
                                </div>
                                <div class="card-body ">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label  for="email" >Email </label>                                            
                                            <input id="email"  name="email" type="email" placeholder="Enter email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  value="{{ old('email') }}"required autofocus>
                                           
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif

                                        </div>
                                        <div class="form-group">
                                            <label for="password">Senha</label>                                            
                                            <input  id="password" name="password" type="password" placeholder="Senha" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                                           
                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>                                      
                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-wd">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul class="footer-menu">
                        <li>
                            <a href="#">
                               
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-center">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#">W3interativa</a>.
                    </p>
                </nav>
            </div>
        </footer>
    </div>
</body>
@section('scripts')
    @include('layouts.partials.scripts')
@show
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="../js/demo.js"></script>
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
</html>