<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>  @yield('title')   </title>
    <meta name="description" content="Store Fashion - Sua loja virtual">
    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/libs/toastr/build/toastr.min.css')}}">
    <!-- Bootstrap Css -->
    <link href="{{asset('panel/css/bootstrap.min.css')}}"  rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('panel/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('panel/css/app.min.css')}}"  rel="stylesheet" type="text/css" />
    <script src="{{ asset('panel/libs/jquery/jquery.min.js')}}"></script>
</head>
<body>
    <div class="home-btn d-none d-sm-block">
        <a href="{{ url('', []) }}" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    
    <section class="my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="home-wrapper">
                        <div class="mb-5">
                            <img src="{{asset('panel/images/logo-dark.png')}}" alt="logo" height="24" />
                        </div>

                        {{-- <div class="row justify-content-center">
                            <div class="col-sm-4">
                                <div class="maintenance-img">
                                    <img src="{{asset('panel/images/maintenance.png')}}" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div> --}}
                        <h3 class="mt-5">Bem vindo ao Store Fashion</h3>
                        <p>Por favor clique no botão abixo para ativar seu usuário.</p>

                        <button type="button" class="btn btn-primary btn-lg waves-effect waves-light"
                        onclick="activeUser('{{$token}}');">Ativar</button>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
    </section>


     <!-- JAVASCRIPT -->
     <script src="{{ asset('panel/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{ asset('panel/libs/metismenu/metisMenu.min.js')}}"></script>
     <script src="{{ asset('panel/libs/simplebar/simplebar.min.js')}}"></script>
     <script src="{{ asset('panel/libs/node-waves/waves.min.js')}}"></script>
     <script src="{{ asset('panel/libs/toastr/build/toastr.min.js')}}"></script>
     <!-- App js -->
     <script src="{{ asset('panel/js/app.js')}}"></script>

     <script>
         function activeUser(token) {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": 300,
                "hideDuration": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000,
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: 'POST',
                url: "{{url('active')}}/" + token,
                data: {_token: CSRF_TOKEN},
                dataType: 'JSON',
                success: function (results) {

                    if (results.success === true) {
                        //swal("Concluído!", results.message, "success")
                        window.location.replace("{{url('active-user-confirmed')}}");
                    } else {
                        toastr.info(results.message, "Aviso!");
                    }
                }
            });
         }
     </script>
</body>

</html>