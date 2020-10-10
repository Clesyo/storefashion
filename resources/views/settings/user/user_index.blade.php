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
                            <th scope="col">Usuário</th>
                            <th scope="col">Token</th>
                            <th scope="col">Função</th>
                            <th scope="col">Status</th>
                            <th scope="col">Confirmação</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td><img src="{{ asset('panel/images/companies/img-1.png') }}" alt="" class="avatar-sm"></td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">{{ $user->name }}</a></h5>
                                    <p class="text-muted mb-0">{{ $user->email }}</p>
                                </td>
                                <td>
                                    {{ $user->token }}
                                </td>
                                <td>
                                    @foreach ($user->roles as $role)
                                        <span class="badge badge-pill badge-soft-dark px-2 py-1">{{ $role->name }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    @if ($user->status == 1)
                                        <span class="badge badge-pill badge-success px-2 py-1 font-size-12">{{ __('Ativo') }}</span>
                                    @else
                                        <span class="badge badge-pill badge-danger px-2 py-1 font-size-12">{{ __('Inativo') }}</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($user->confirmed == 1)
                                        <span class="badge badge-pill badge-success px-2 py-1 font-size-12">{{ __('Confirmado') }}</span>
                                    @else
                                        <span class="badge badge-pill badge-danger px-2 py-1 font-size-12">{{ __('Não Confirmado') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <ul class="list-inline font-size-20 contact-links mb-0">
                                        <li class="list-inline-item px-2">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar"
                                            onclick=""><i class="mdi mdi-square-edit-outline"></i></a>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <a type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reenviar email"
                                            onclick="resendMail({{$user->id}});"><i class="mdi mdi-email-send-outline"></i></a>
                                        </li>

                                        <li class="list-inline-item px-2">
                                            <a href="#" data-rr="tooltip" data-placement="top" title="" data-original-title="Incluir função"
                                            onclick="" data-toggle="modal" data-target="#include-role-{{$user->id}}"><i class="mdi mdi-book-plus-multiple-outline"></i></a>
                                        </li>
                                                <!-- sample modal content -->
                                                <div id="include-role-{{$user->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myModalLabel">Incluir função</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ url('settings/user/include-role', []) }}" method="POST" id="form-submit-{{$user->id}}">
                                                                    @csrf
                                                                    <p>Selecione a função:</p>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="select2 form-control" multiple="multiple" name="role_id[]" id="" style="width: 100%;">
                                                                                <option disabled>Selecione...</option>
                                                                                @foreach (Role::all() as $role)
                                                                                    <option value="{{ $role->id }}" @foreach($user->roles as $use_role) @if($use_role->id == $role->id ) selected @endif @endforeach>{{ $role->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                                                            {{-- <div class="form-group">
                                                                            </div> --}}
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                                                                <button type="button" class="btn btn-primary waves-effect waves-light" 
                                                                onclick="event.preventDefault(); document.getElementById('form-submit-{{$user->id}}').submit();">Gravar</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
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

    $('[data-rr=tooltip]').tooltip();
</script>

<script>
    function resendMail(id) {
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
                url: "{{url('resend-mail')}}/" + id,
                data: {_token: CSRF_TOKEN},
                dataType: 'JSON',
                success: function (results) {

                    if (results.success === 1) {
                        swal.fire("Aviso!", results.message, "info")
                        // toastr.success(results.message,'Mensagem');
                    } else if(results.success === 2){
                        swal.fire("Concluído!", results.message, "success")
                        // toastr.error(results.message, "Error!");
                    }
                }
            });

}
</script>
@endsection

@section('js')
<script src="{{asset('panel/libs/select2/js/select2.min.js')}}"></script>
 <!-- form advanced init -->
 <script src="{{asset('panel/js/pages/form-advanced.init.js')}}"></script>
 <script src="{{ asset('panel/libs/sweetalert2/sweetalert2.min.js')}}"></script>
@endsection
