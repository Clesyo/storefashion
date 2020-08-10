@extends('layouts.panel')

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

                <h4 class="card-title ">Informações básicas</h4>
<p class="my-4"></p>
                <form >
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck-status" checked>
                                    <label class="custom-control-label" for="customCheck-status">Disponivel</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck-showcase">
                                    <label class="custom-control-label" for="customCheck-showcase">Mostrar na Vitrine</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck-launch">
                                    <label class="custom-control-label" for="customCheck-launch">Lançamento</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label class="control-label">Categoria*</label>
                                <select class="form-control select2">
                                    <option>Select</option>
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </select>
                                <div class="m-2 ">
                                    <a href="#">
                                        [+] Adiciona nova categorias
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="productname">Nome do Produto*</label>
                                <input id="productname" name="productname" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3 mx-1">
                                    <input type="checkbox" class="custom-control-input" id="customCheck-promotion">
                                    <label class="custom-control-label" for="customCheck-promotion">Preço promocional</label>
                                </div>
                                <input id="price" name="price" type="text" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="price">Preço* </label>
                                <input id="price" name="price" type="text" class="form-control">
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="manufacturername">Marca*</label>
                                <select class="form-control select2">
                                    <option>Select</option>
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">

                        </div>
                    </div>

                    <div class="text-right">

                        <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save Changes</button>
                        <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>
                    </div>
                </form>

            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-3">Product Images</h4>

                <form action="/" method="post" class="dropzone">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>

                    <div class="dz-message needsclick">
                        <div class="mb-3">
                            <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                        </div>

                        <h4>Drop files here or click to upload.</h4>
                    </div>
                </form>
            </div>

        </div> <!-- end card-->

        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Meta Data</h4>
                <p class="card-title-desc">Fill all information below</p>

                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="metatitle">Meta title</label>
                                <input id="metatitle" name="productname" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="metakeywords">Meta Keywords</label>
                                <input id="metakeywords" name="manufacturername" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="metadescription">Meta Description</label>
                                <textarea class="form-control" id="metadescription" rows="5"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save Changes</button>
                    <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>

                </form>

            </div>
        </div> <!-- end card-->
    </div>
</div>
@endsection
