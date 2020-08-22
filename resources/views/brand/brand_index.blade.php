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
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Nova marca</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('marcas/store', []) }}" method="post" id="form-submit" enctype="multipart/form-data">
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
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light"
                    onclick="event.preventDefault(); document.getElementById('form-submit').submit();">Gravar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

<div class="row mt-2">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Lista de marcas</h4>
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Marca</th>
                                <th>Logo</th>
                                <th>Status</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $brand)
                                <tr>
                                    <td>{{ $brand->id }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>
                                        @if ($brand->logo != null)
                                            <img src="{{ asset('storage/'.$brand->logo) }}" alt="" class="rounded avatar-sm">
                                        @else
                                            <img src="{{ asset('panel/images/sem-foto.jpg') }}" alt="" class="rounded avatar-sm">
                                        @endif
                                    </td>
                                    <td>
                                        @if ($brand->status == 1)
                                            <span class="badge badge-pill badge-success">{{ __('Ativo') }}</span>
                                        @else
                                            <span class="badge badge-pill badge-error">{{ __('Inativo') }}</span>
                                        @endif
                                    </td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
@endsection
