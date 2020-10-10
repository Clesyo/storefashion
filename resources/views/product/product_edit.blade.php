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
<form action="{{ url('produtos/store', []) }}" method="post" id="form-submit" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title ">Informações básicas</h4>
<p class="my-4"></p>

    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <div class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck-status"
                    @if($product->status == 1) checked @endif name="product[status]" value="1">
                    <label class="custom-control-label" for="customCheck-status">Disponivel</label>
                </div>
            </div>
        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck-showcase"
                                    @if($product->showcase == 1) checked @endif name="product[showcase]" value="1">
                                    <label class="custom-control-label" for="customCheck-showcase">Mostrar na Vitrine</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck-launch"
                                    @if($product->launch == 1) checked @endif name="product[launch]" value="1">
                                    <label class="custom-control-label" for="customCheck-launch">Lançamento</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Categoria*</label>
                                <select class="form-control select2" name="product[category_id]">
                                    <option disabled >Select</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if($product->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <div class="m-2 ">
                                    <a href="#" data-toggle="modal" data-target="#addCateogry">
                                        [+] Adiciona nova categorias
                                    </a>


                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="manufacturername">Marca*</label>
                                <select class="form-control select2" name="product[brand_id]">
                                    <option disabled>Selecione...</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}" @if($product->brand_id == $brand->id) selected @endif>{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                                <div class="m-2 ">
                                    <a href="#" data-toggle="modal" data-target="#addBrand">
                                        [+] Adiciona nova marca
                                    </a>


                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="description">Nome do Produto*</label>
                                <input id="description" name="product[description]" value="{{ $product->description }}" type="text" class="form-control">
                                <input type="hidden" name="product[company_id]" value="{{ $product->company_id }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="price">Preço* </label>
                                <input id="price" name="product[price]" value="{{ $product->price }}" type="number" class="form-control">
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-2 mx-1">
                                    <input type="checkbox" class="custom-control-input" id="promotion" value="1" @if($product->promotion == 1) checked @endif name="product[promotion]">
                                    <label class="custom-control-label" for="promotion">Preço promocional</label>
                                </div>
                                <input id="price_promotion" name="product[price_promotion]" value="{{ $product->price_promotion }}" type="number" class="form-control" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    </div>

                    {{-- <div class="text-right">

                        <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save Changes</button>
                        <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>
                    </div> --}}
                    
                <div class="text-right my-4">

                    <button type="button" class="btn btn-primary mr-1 waves-effect waves-light"
                    onclick="event.preventDefault(); document.getElementById('form-submit').submit();">Gravar</button>
                </div>
                </div>
        </div>
    </div>
</div>
</form>

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



<!--  Modal content for the above example -->
<div class="modal fade" id="addBrand" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Nova categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('marcas/store', []) }}" method="post" id="form-submit-brand" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-11">
                            <div class="form-group">
                                <label for="">Nome*</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mt-4 mr-2">
                                    <input type="checkbox" value="1" name="status" class="custom-control-input" id="customCheck-outlinecolor1" checked>
                                    <label class="custom-control-label" for="customCheck-outlinecolor1">Ativo</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Selecione uma imagem</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="logo" id="customFile">
                                    <label class="custom-file-label" for="customFile">Escolha sua logo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="company_id" value="{{ $company->id }}">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary waves-effect waves-light"
                onclick="event.preventDefault(); document.getElementById('form-submit-brand').submit();">Gravar</button>
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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

    $("#extra").click(function (){
        if($('#extra').is(':checked')){
            $('#category_id').prop('disabled',false);
        }else{
            $('#category_id').prop('disabled',true);
        }
    });
    $("#promotion").click(function (){
        if($('#promotion').is(':checked')){
            $('#price_promotion').prop('disabled',false);
        }else{
            $('#price_promotion').prop('disabled',true);
            $('#price_promotion').val('');
        }
    });

    $('#available').keyup(function (){
        $('#accounting').val($('#available').val());
    });

</script>


@endsection

@section('js')
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
