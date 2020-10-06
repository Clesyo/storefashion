<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Store Fashion | Registro') }}</title>

    <!-- Bootstrap Css -->
    <link href="{{asset('panel/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('panel/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('panel/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="home-btn d-none d-sm-block">
        <a href="{{ url('', []) }}" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Registro grátis</h5>
                                        <p>Faça seu regtistro agora.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{('panel/images/profile-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0"> 
                            <div>
                                <a href="{{ url('', []) }}">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{('panel/images/logo.svg')}}" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
        
                                    <div class="form-group">
                                        <label for="username">Nome de usuário</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" placeholder="Nome do usuário" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="useremail">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="useremail" placeholder="Endereço de email" value="{{ old('email') }}" required autocomplete="email">        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
            
            
                                    <div class="form-group">
                                        <label for="userpassword">Senha</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" placeholder="Senha" name="password" required autocomplete="new-password">        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="newpassword">Confirmar senha</label>
                                        <input type="password" class="form-control" id="newpassword" placeholder="Confirma senha" name="password_confirmation" required autocomplete="new-password">        
                                    </div>
                
                                    <div class="mt-4">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Registrar</button>
                                    </div>
            
                                </form>
                            </div>
        
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        
                        <div>
                            <p>Já tem uma conta ? <a href="{{ route('login') }}" class="font-weight-medium text-primary"> Login</a> </p>
                            <p>© {{date('Y')}} Store Fashion. {{-- Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand --}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- JAVASCRIPT -->
    <script src="{{ asset('panel/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('panel/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('panel/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('panel/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('panel/libs/node-waves/waves.min.js')}}"></script>

    <!-- App js -->
    <script src="{{ asset('panel/js/app.js')}}"></script>
</body>
</html>
