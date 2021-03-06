@extends('layouts.panel')

@section('title')
{{ $title.end($pages) }}
@endsection

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">{{ end($pages) }}</h4>

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
    <div class="col-sm-4 col-3">
        <div class="search-box mr-2 mb-2 d-inline-block">
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Buscar...">
                <i class="bx bx-search-alt search-icon"></i>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-9 text-right mb-2 px-3">
        <a href="{{ url('produtos/novo', []) }}" class="btn btn-primary btn-rounded" style="font-weight: bold"><i class="bx bx-plus-circle font-size-16 align-middle mr-2"></i>  Novo</a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="">
            <div class="table-responsive">
                <table class="table project-list-table table-nowrap table-centered table-borderless">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 100px">#</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Op????es</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>
                                    @if ($product->status == 1)
                                        <strong><h5 class="text-truncate font-size-14"><a href="#" class="text-dark">{{ $product->description }}</a></h5></strong>
                                        @if ($product->promotion == 1)
                                            <p class="text-muted mb-0">
                                                <del> R$ {{ number_format($product->price, 2, '.', ',') }} </del>
                                                <span>R$ {{ $product->price_promotion }}</span>
                                            </p>
                                        @else
                                            <p class="text-muted mb-0">R$ {{ number_format($product->price, 2, '.', ',') }} </p>
                                        @endif
                                    @else
                                        <del><strong><h5 class="text-truncate font-size-14"><a href="#" class="text-dark">{{ $product->description }}</a></h5></strong></del>
                                        <del> R$ {{ number_format($product->price, 2, '.', ',') }} </del>
                                    @endif


                                </td>
                                <td>
                                    <p class="text-muted mb-0">
                                        @if($product->resales != null && $product->status == 1)
                                            <i class="fas fa-check-circle text-success"></i> Dispon??vel
                                        @else
                                            <i class="fas fa-thumbs-down"></i> <del>Dispon??vel</del>
                                        @endif
                                    </p>

                                    @if ($product->showcase == 1 && $product->status == 1)

                                    <p class="text-muted mb-0"><i class="fas fa-star text-warning"></i> Vitrine</p>
                                    @else
                                    <p class="text-muted mb-0"><i class="fas fa-ban"></i> <del>Vitrine</del> </p>
                                    @endif
                                    <p class="text-muted mb-0"><i class="fab fa-product-hunt @if($product->promotion == 1) text-primary @endif"></i> Promo????o</p>
                                    <p class="text-muted mb-0"><i class="fas fa-rocket @if($product->launch == 1) text-primary @endif"></i> Lan??amento</p>
                                </td>
                                <td>
                                    @if ($product->status == 1)
                                        <span class="badge badge-success p-1 font-size-14">Ativo</span>
                                    @else
                                        <span class="badge badge-danger p-1 font-size-14">Inativo</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" data-toggle="modal" data-target="#add-stoke-{{$product->id}}" class="btn btn-primary waves-light waves-effect"
                                            data-tt="tooltip" data-placement="top" title="" data-original-title="Adicionar estoque"><i class="fas fa-archive bx-spin"></i></button>
                                        <!-- sample modal content -->
                                        <div id="add-stoke-{{$product->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myModalLabel">Incluir estoque</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="repeater" action="{{ url('estoque/store', []) }}" method="post" id="form-submit-stoke-{{$product->id}}" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                            <div data-repeater-list="resal">
                                                                <div data-repeater-item class="row mt-3">
                                                                    <div class="col-sm-1">
                                                                        <div class="form-group">
                                                                            <label for="available">Disponivel</label>
                                                                            <input name="quantity_available" type="text" class="form-control">
                                                                            
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-1">
                                                                        <div class="form-group">
                                                                            <label for="">Tamanho</label>
                                                                            <input type="text" class="form-control" name="size" style="text-transform: uppercase">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                            <label for="">Material</label>
                                                                            <input type="text" class="form-control" name="material">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <div class="form-group">
                                                                            <label for="">Cor</label>
                                                                            <select class="form-control" name="color_id">
                                                                                <option disabled>Selecione...</option>
                                                                                @foreach (Color::all() as $color)
                                                                                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="">Imagem</label><br>
                                                                            <input type="file"  name="image" multiple>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-1 align-self-center">
                                                                        <input data-repeater-delete type="button" class="btn btn-primary btn-block pr-1" value="Deletar"/>
                                                                    </div>
                                                                    <div class="col-md-12">

                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input data-repeater-create type="button" class="btn btn-success mt-3" value="Add"/>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                                                        <button type="button" class="btn btn-primary waves-effect waves-light"
                                                        onclick="event.preventDefault(); document.getElementById('form-submit-stoke-{{$product->id}}').submit();">Gravar</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <a href="{{ url('produtos/edit/'.$product->id, []) }}" class="btn btn-primary waves-light waves-effect"
                                        data-tt="tooltip" data-placement="top" title="" data-original-title="Editar"><i class="fas fa-edit"></i></a>

                                        @if ($product->showcase == 1)
                                            <a href="{{ url('produtos/vitrine/status', []) }}" class="btn btn-primary waves-light waves-effect"
                                            onclick="event.preventDefault(); document.getElementById('alter-statu-vitrine-{{$product->id}}').submit();"
                                            data-tt="tooltip" data-placement="top" title="" data-original-title="Remover da vitrine"><i class="fas fa-store-alt-slash"></i></a>

                                        @else
                                            <a href="{{ url('produtos/vitrine/status', []) }}" class="btn btn-primary waves-light waves-effect"
                                            onclick="event.preventDefault(); document.getElementById('alter-statu-vitrine-{{$product->id}}').submit();"
                                            data-tt="tooltip" data-placement="top" title="" data-original-title="Incluir da vitrine"><i class="fas fa-store-alt"></i></a>

                                        @endif
                                        <form action="{{ url('produtos/vitrine/status', []) }}" method="post" id="alter-statu-vitrine-{{$product->id}}">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="schowcase" value="{{ $product->showcase }}">
                                        </form>

                                        <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical ml-2"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Adicionar imagem</a>

                                            <a class="dropdown-item" href="{{ url('produtos/status', []) }}"
                                            onclick="event.preventDefault(); document.getElementById('alter-status-product-{{$product->id}}').submit();">
                                                @if ($product->status == 1)
                                                Inativar
                                                @else
                                                Ativar
                                                @endif
                                            </a>
                                            <form action="{{ url('produtos/status', []) }}" method="post" id="alter-status-product-{{$product->id}}">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="status" value="{{ $product->status }}">
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach



                    </tbody>
                </table>
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
        $('#available').keyup(function (){
            $('#accounting').val($('#available').val());
        });

        $("[data-tt=tooltip]").tooltip();
    </script>
@endsection

@section('js')
<script src="{{asset('panel/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>

<script src="{{asset('panel/js/pages/form-repeater.int.js')}}"></script>
@endsection
