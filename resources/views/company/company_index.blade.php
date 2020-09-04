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
                @isset($company)
                <form action="{{ url('company/update', []) }}" method="post" id="form-submit" enctype="multipart/form-data">
                @else
                <form action="{{ url('company/store', []) }}" method="post" id="form-submit" enctype="multipart/form-data">
                @endisset
                    @csrf
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="mt-4 mt-md-0 text-center">
                                <img class="rounded-circle avatar-xl" alt="200x200" src="@isset($company) {{ url('storage/'.$company->image, []) }} @else {{ asset('panel/images/users/avatar-4.jpg')}} @endisset" data-holder-rendered="true">
                            </div>
                        </div>
                    </div>
                    <div style="margin: 5.5rem 0 5.5rem 0;"></div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="">Nome</label>
                                <input type="text" name="name" value="@isset($company){{ $company->name }}@endisset" class="form-control" autofocus>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">CNPJ/CPF</label>
                                <input type="text" id="cpf_cnpj" value="@isset($company){{$company->document}}@endisset"name="document" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" value="@isset($company){{ $company->email }}@endisset" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Telefone</label>
                                <input type="text" value="@isset($company){{ $company->telephone }}@endisset" name="telephone" class="form-control tel_with_ddd">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""><i class="bx bxl-whatsapp font-size-15 "></i> Whatsapp</label>
                                <input type="text" value="@isset($company){{ $company->whatsapp }}@endisset" name="whatsapp" class="form-control phone_with_ddd">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Celular</label>
                                <input type="text" value="@isset($company){{ $company->cell_phone }}@endisset" name="cell_phone" class="form-control phone_with_ddd">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">CEP</label>
                                <input type="text" id="cep" value="@isset($company){{ $company->cep }}@endisset" name="cep" class="form-control cep">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="">Logradouro</label>
                                <input type="text" id="rua" value="@isset($company){{ $company->andress }}@endisset" name="andress" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Número</label>
                                <input type="number" value="@isset($company){{ $company->number }}@endisset" name="number" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">Complemento</label>
                                <input type="text" value="@isset($company){{ $company->complement }}@endisset" name="complement" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Bairro</label>
                                <input type="text" id="bairro" value="@isset($company){{ $company->neignborhood }}@endisset" name="neighborhood" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Cidade</label>
                                <input type="text" id="cidade" value="@isset($company){{ $company->city }}@endisset" name="city" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="">UF</label>
                                <input type="text" id="uf" value="@isset($company){{ $company->state }}@endisset" name="state" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><i class="bx bxl-facebook font-size-15"></i> Facebook</label>
                                <input type="text" value="@isset($company){{ $company->facebook }}@endisset" name="facebook" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><i class="bx bxl-instagram font-size-15"></i> Instagram</label>
                                <input type="text" value="@isset($company){{ $company->instagram }}@endisset" name="instagram" class="form-control">
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
        var message = "{{Session::get('message')}}";
        var title = "{{Session::get('title')}}";
        var alert_type = "{{Session::get('alert_type')}}";

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
            case '1':
            toastr.success(message,title);
                break;
            case '2':
            toastr.error(message,title);
                break;
            case '3':
            toastr.warning(message,title);
                break;
            case '4':
            toastr.info(message,title);
                break;

            default:
                break;
        }


    </script>
@endif
<script>

    $(document).ready(function() {

        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#rua").val("");
            $("#bairro").val("");
            $("#cidade").val("");
            $("#uf").val("");
            $("#ibge").val("");
        }

        //Quando o campo cep perde o foco.
        $("#cep").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if(validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#rua").val("...");
                    $("#bairro").val("...");
                    $("#cidade").val("...");
                    $("#uf").val("...");
                    $("#ibge").val("...");

                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#rua").val(dados.logradouro);
                            $("#bairro").val(dados.bairro);
                            $("#cidade").val(dados.localidade);
                            $("#uf").val(dados.uf);
                            $("#ibge").val(dados.ibge);
                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });


        $('#cpf_cnpj').mask('000.000.000-00');
        $('.cep').mask('00000-000');
        $('.tel_with_ddd').mask('(00) 0000-0000');
        $('.phone_with_ddd').mask('(00) 00000-0000');


    });

</script>

{{-- <script>
    $('#cpf_cnpj').keyup(function (e){
        var text = '';
        text = $('#cpf_cnpj').val();
        var count = 0;

        count = text.length;


        if(count == 5 || count == 6 || count == 7){
            count = text.length - 1;
        }

        if(count == 9 || count == 10 || count == 11){
            count = text.length - 2;
        }

        if(count == 13 || count == 14){
            count = text.length - 3;
        }
        console.log(count);
        if(count <= 11){
            $('#cpf_cnpj').mask('000.000.000-00');
        }
        if(count > 11){
            $('#cpf_cnpj').mask('00.000.000/0000-00');

        }
    });
</script> --}}
@endsection

@section('js')
<script src="{{ asset('panel/libs/jquery-mask/jquery.mask.min.js')}}"></script>
<!-- bs custom file input plugin -->
<script src="{{asset('panel/libs/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>

<script src="{{asset('panel/libs/select2/js/select2.min.js')}}"></script>
<!-- Bootstrap Select JS -->
<script src="{{asset('panel/libs/bs-select/bs-select.min.js')}}"></script>

<!-- form advanced init -->
<script src="{{asset('panel/js/pages/form-advanced.init.js')}}"></script>

<script src="{{ asset('panel/js/pages/form-element.init.js')}}"></script>

<!-- init js -->
<script src="{{ asset('panel/js/pages/form-editor.init.js')}}"></script>
@endsection
