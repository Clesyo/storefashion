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
        <a href="{{ url('settings/role/new', []) }}" class="btn btn-primary btn-rounded" style="font-weight: bold"><i class="bx bx-plus-circle font-size-16 align-middle mr-2"></i>  Novo</a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" style="width: 70px;">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Permissões associadas</th>
                                <th scope="col">Situação</th>
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        @foreach ($role->permissions as $permission)
                                            <span class="badge badge-pill badge-soft-dark px-2 py-1">{{ $permission->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        @if ($role->status == 1)
                                            <span class="badge badge-pill badge-success px-2 py-1 font-size-12">{{ __('Ativo') }}</span>
                                        @else
                                            <span class="badge badge-pill badge-danger px-2 py-1 font-size-12">{{ __('Inativo') }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                @if ($role->status == 1)
                                                        <a href="{{ url('settings/role/active', []) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Inativar"
                                                        onclick="event.preventDefault(); document.getElementById('form-active-{{$role->id}}').submit();"><i class="mdi mdi-eye-off"></i></a>
                                                    <form action="{{ url('settings/role/active') }}" method="post" id="form-active-{{$role->id}}">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $role->id }}">
                                                        <input type="hidden" name="status" value="{{ $role->status }}">
                                                    </form>
                                                @else
                                                        <a href="{{ url('settings/role/active', []) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ativar"
                                                        onclick="event.preventDefault(); document.getElementById('form-active-{{$role->id}}').submit();"><i class="mdi mdi-eye"></i></a>
                                                    
                                                    <form action="{{ url('settings/role/active') }}" method="post" id="form-active-{{$role->id}}">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $role->id }}">
                                                        <input type="hidden" name="status" value="{{ $role->status }}">
                                                    </form>
                                                @endif
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <a href="{{ url('settings/role/edit/'.$role->id, []) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar"
                                                onclick=""><i class="mdi mdi-square-edit-outline"></i></a>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Excluir"
                                                onclick="deleteConfirmation({{$role->id}})"><i class="mdi mdi-trash-can-outline"></i></a>
                                            </li>
                                        </ul>
                                    </td>
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

<script>
    function deleteConfirmation(id) {
        swal.fire({
            title: "Excluir?",
            text: "Deseja mesmo excluir!",
            type: "warning",
            /* buttons: {
                cancel: true,
                confirm: "Confirm",
            }, */
            showCancelButton: !0,
            confirmButtonText: "Sim, exclua!",
            cancelButtonText: "Não, cancele!",
            reverseButtons: !0
        }).then(function (e) {
            console.log(e.value);
            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "{{url('settings/role/delete')}}/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {

                        if (results.success === true) {
                            swal.fire("Concluído!", results.message, "success")
                            .then(function(){
                                location.reload(true);
                            });
                        } else {
                            swal.fire("Error!", results.message, "error");
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
    </script>
@endsection

@section('js')
<script src="{{ asset('panel/libs/sweetalert2/sweetalert2.min.js')}}"></script>
@endsection
