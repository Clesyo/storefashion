@extends('layouts.panel')

@section('title')
    {{ $title.end($pages) }}
@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">{{end($pages)}}</h4>

            <div class="page-title-right">
                    @php
                        $count = 0;
                    @endphp
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('home', []) }}">Dashboards</a></li>
                    @foreach ($pages as $key => $page)
                        @if ((count($pages) - 1) > $count && count($pages) >= 2)
                            <li class="breadcrumb-item"><a href="{{ url("$key", []) }}">{{ $page }}</a></li>
                        @endif
                        @php
                            $count++;
                        @endphp
                    @endforeach
                    <li class="breadcrumb-item active">{{end($pages)}}</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ url('company/store', []) }}" method="post" id="form-submit" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="mt-4 mt-md-0 text-center">
                                <img class="rounded-circle avatar-xl" alt="200x200" src="{{ asset('panel/images/users/avatar-4.jpg')}}" data-holder-rendered="true">
                            </div>
                        </div>
                    </div>
                    <div style="margin: 5.5rem 0 5.5rem 0;"></div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="">Nome</label>
                                <input type="text" name="name" class="form-control" autofocus>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">CNPJ/CPF</label>
                                <input type="text" name="document" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Telefone</label>
                                <input type="text" name="telephone" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""><i class="bx bxl-whatsapp font-size-15"></i> Whatsapp</label>
                                <input type="text" name="whatsapp" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Celular</label>
                                <input type="text" name="cell_phone" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">CEP</label>
                                <input type="text" name="cep" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="">Logradouro</label>
                                <input type="text" name="andress" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Número</label>
                                <input type="number" name="number" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">Complemento</label>
                                <input type="text" name="complement" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Bairro</label>
                                <input type="text" name="neignborhood" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Cidade</label>
                                <input type="text" name="city" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="">UF</label>
                                <input type="text" name="uf" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><i class="bx bxl-facebook font-size-15"></i> Facebook</label>
                                <input type="text" name="facebook" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><i class="bx bxl-instagram font-size-15"></i> Instagram</label>
                                <input type="text" name="instagram" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Selecione uma imagem</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Escolha sua logo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


                    <div class="row mt-4 ">
                        <div class="col-md-6 ">
                            <button type="button" id="but" class="btn btn-secondary waves-effect" data-dismiss="modal">Alterar</button>
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="button" class="btn btn-primary waves-effect waves-light"
                            onclick="event.preventDefault(); document.getElementById('form-submit').submit();">Gravar</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@if(Session::has('message'))
    <script>
        var message = "Session::get('message')";
        var title = "Session::get('title')";
        var alert_type = "Session::get('alert_type')";

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
        }

        switch (alert_type) {
            case 1:
            toastr.success(message,title);
                break;
            case 2:
            toastr.error(message,title);
                break;
            case 3:
            toastr.warning(message,title);
                break;
            case 3:
            toastr.info(message,title);
                break;

            default:
                break;
        }


    </script>
@endif
@endsection
