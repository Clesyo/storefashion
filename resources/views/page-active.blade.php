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
        <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    
    <section class="my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="home-wrapper">
                        <div class="mb-5">
                            <img src="assets/images/logo-dark.png" alt="logo" height="24" />
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-sm-4">
                                <div class="maintenance-img">
                                    <img src="assets/images/maintenance.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-5">Site is Under Maintenance</h3>
                        <p>Please check back in sometime.</p>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mt-4 maintenance-box">
                                    <div class="card-body">
                                        <i class="bx bx-broadcast mb-4 h1 text-primary"></i>
                                        <h5 class="font-size-15 text-uppercase">Why is the Site Down?</h5>
                                        <p class="text-muted mb-0">There are many variations of passages of
                                            Lorem Ipsum available, but the majority have suffered alteration.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-4 maintenance-box">
                                    <div class="card-body">
                                        <i class="bx bx-time-five mb-4 h1 text-primary"></i>
                                        <h5 class="font-size-15 text-uppercase">
                                            What is the Downtime?</h5>
                                        <p class="text-muted mb-0">Contrary to popular belief, Lorem Ipsum is not
                                            simply random text. It has roots in a piece of classical.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-4 maintenance-box">
                                    <div class="card-body">
                                        <i class="bx bx-envelope mb-4 h1 text-primary"></i>
                                        <h5 class="font-size-15 text-uppercase">
                                            Do you need Support?</h5>
                                        <p class="text-muted mb-0">If you are going to use a passage of Lorem
                                            Ipsum, you need to be sure there isn't anything embar.. <a
                                                    href="mailto:no-reply@domain.com"
                                                    class="text-decoration-underline">no-reply@domain.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
     <!-- App js -->
     <script src="{{ asset('panel/js/app.js')}}"></script>
</body>

</html>