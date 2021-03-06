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
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Nova cor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('cores/store', []) }}" method="post" id="form-submit">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Cor*</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Selecione a cor*</label>
                                    <div class="input-group colorpicker-default" title="Using format option">
                                        <input type="text" class="form-control input-lg" name="code_color" value="#4667cc"/>
                                        <span class="input-group-append">
                                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary waves-effect waves-light"
                    onclick="event.preventDefault(); document.getElementById('form-submit').submit();">Gravar</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>


<div class="row mt-2">
    @foreach ($colors as $color)
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h5 class="my-0 text-right">
                        <a href="#"><i class="bx bx-palette" style="color: {{ $color->code_color }}"></i></a>

                    </h5>
                </div>
                <div class="card-body text-center">
                    <div class="color-box p-4 rounded" style="background-color: {{ $color->code_color }}">
                        <h5 class="my-2 text-white">{{ $color->code_color }}</h5>
                    </div>
                    <h5 class="mb-0 mt-3" style="color: {{ $color->code_color }}">{{ $color->name }}</h5>
                </div>
            </div>
        </div>
    @endforeach

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
    $('.colorpicker-default').colorpicker();
</script>
{{--
<script>
    function deleteConfirmation(id) {
        swal({
            title: "Excluir?",
            text: "Deseja mesmo excluir!",
            type: "warning",
            /* buttons: {
                cancel: true,
                confirm: "Confirm",
            }, */
            showCancelButton: !0,
            confirmButtonText: "Sim, exclua!",
            cancelButtonText: "N??o, cancele!",
            reverseButtons: !0
        }).then(function (e) {
            console.log(e.value);
            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "{{url('orcamento/delete')}}/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {

                        if (results.success === true) {
                            swal("Conclu??do!", results.message, "success").then(function(){
                                location.reload(true);
                            });
                        } else {
                            swal("Error!", results.message, "error");
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
    </script> --}}
@endsection

@section('js')
<script src="{{ asset('panel/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
{{-- <script src="{{ asset('panel/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('panel/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{ asset('panel/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{ asset('panel/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script> --}}
<!-- form advanced init -->
<script src="{{ asset('panel/js/pages/form-advanced.init.js')}}"></script>
@endsection
