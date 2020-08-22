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

<div class="row justify-content-between">
    <div class="col-sm-4 col-3"></div>
    <div class="col-sm-3 col-9 text-right mb-2 px-3">
        <button class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#addCateogry" style="font-weight: bold"><i class="bx bx-plus-circle font-size-16 align-middle mr-2"></i>  Novo</button>
    </div>
    <!--  Modal content for the above example -->
    <div class="modal fade" id="addCateogry" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Nova categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('categorias/store', []) }}" method="post" id="form-category">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" name="name" class="form-control">
                                    <input type="hidden" name="company_id" value="{{ $company->id }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary" style="margin-bottom: .4rem;">
                                        <input type="checkbox" class="custom-control-input" id="extra" >
                                        <label class="custom-control-label" for="extra">Categoria(Pai)</label>
                                    </div>
                                    <select class="form-control select2" name="parent" id="category_id" style="width: 100%" title="Selecione..." disabled>
                                        <option disabled>Selecione...</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <ul class="list-unstyled mb-0">
                                <li>Instruções para criação de categorias e subcategorias:
                                    <ul>
                                        <li>Para criar uma categoria, preencha somente o campo 'Categorias'</li>
                                        <li>Para criar uma subcategoria, preencha o campo 'Categoria' e selecione a categoria pai.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary waves-effect waves-light"
                    onclick="event.preventDefault(); document.getElementById('form-category').submit();">Gravar</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

<div class="row mt-2">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Lista de categorias</h4>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#category" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Categorias</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#subcategory" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Subcategoria</span>
                        </a>
                    </li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="category" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Categoria</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)

                                    @endforeach
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="subcategory" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Categoria</th>
                                        <th>Categoria(Pai)</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>


                </div>

            </div> <!-- end car-body-->
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
$(document).ready(function(){


    $("#extra").change(function (){
        if($('#extra').is(':checked')){
            alert('selecionado');
        }else{
            alert('não selecionado');
        }
    });

});
    $("#extra").click(function (){
        if($('#extra').is(':checked')){
            $('#category_id').prop('disabled',false);
        }else{
            $('#category_id').prop('disabled',true);
        }
    });
</script>
@endsection
