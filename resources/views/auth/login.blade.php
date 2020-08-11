<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Store Fashio | Login') }}</title>

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
                                        <h5 class="text-primary">
                                            Bem vindo de volta !</h5>
                                        <p>Faça login para continuar entrar no painel admin.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{asset('panel/images/profile-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                                <a href="index.html">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{asset('panel/images/logo.svg')}}" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="username">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Senha</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="custom-control custom-checkbox">
                                        <input class="form-check-input" type="checkbox" name="remember" id="customControlInline" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="customControlInline">Lembre-me</label>
                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Login</button>
                                    </div>



                                    {{-- <div class="mt-4 text-center">
                                        <h5 class="font-size-14 mb-3">Sign in with</h5>

                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                    <i class="mdi mdi-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                    </div> --}}
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">

                        <div>
                            <p>Não tem uma conta ? <a href="auth-register.html" class="font-weight-medium text-primary">
                                Inscreva-se agora </a> </p>
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
