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
                <form action="{{ url('settings/role/update/'.$role->id, []) }}" method="post" id="form-submit">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nome</label>
                                <input type="text" class="form-control" name="name" value="{{ $role->name }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Permissões:</h5>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($permissions as $permission)
                            <div class="col-md-2 mt-2">
                                <div class="custom-control my-3">
                                    <input type="checkbox" id="permission{{ $permission->id }}" switch="none" name="permissions[]" value="{{ $permission->id }}"
                                    @foreach($role->permissions as $role_permission) @if($role_permission->id == $permission->id) checked @endif @endforeach/>
                                    <label for="permission{{ $permission->id }}" data-on-label="Sim" data-off-label="Não"></label>
                                </div>
                                {{ $permission->title }}
                            </div>
                        @endforeach
                    </div>

                </form>
                <div class="text-right my-4">

                    <button type="button" class="btn btn-primary mr-1 waves-effect waves-light"
                    onclick="event.preventDefault(); document.getElementById('form-submit').submit();">Gravar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
