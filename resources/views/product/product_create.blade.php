@extends('layouts.panel')

@section('title')
<title>{{ $title.end($pages) }}</title>
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

                <h4 class="card-title ">Informações básicas</h4>
<p class="my-4"></p>
                <form >
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck-status" checked id="status" value="1">
                                    <label class="custom-control-label" for="customCheck-status">Disponivel</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck-showcase" id="showcase" value="1">
                                    <label class="custom-control-label" for="customCheck-showcase">Mostrar na Vitrine</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck-launch" id="launch" value="1">
                                    <label class="custom-control-label" for="customCheck-launch">Lançamento</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label class="control-label">Categoria*</label>
                                <select class="form-control select2" id="category_id">
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
                                <label for="description">Nome do Produto*</label>
                                <input id="description" name="description" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3 mx-1">
                                    <input type="checkbox" class="custom-control-input" id="customCheck-promotion" value="1" name="promotion">
                                    <label class="custom-control-label" for="customCheck-promotion">Preço promocional</label>
                                </div>
                                <input id="price_promotion" name="price" type="text" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="price">Preço* </label>
                                <input id="price" name="price" type="text" class="form-control">
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="manufacturername">Marca*</label>
                                <select class="form-control select2" name="brand_id">
                                    <option>United States</option>
                                    <option data-subtext="India">India</option>
                                    <option data-subtext="Brazil">Brazil</option>
                                    <option data-subtext="Turkey" >Turkey</option>
                                    <option data-subtext="United Kingdom">United Kingdom</option>
                                    <option data-subtext="Mexico">Mexico</option>
                                    <option data-subtext="Germany">Germany</option>
                                    <option data-subtext="France">France</option>
                                    <option data-subtext="Thailand">Thailand</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="manufacturername">Unid. Medida</label>
                                <select class="form-control select2" name="brand_id">
                                    <option>United States</option>
                                    <option data-subtext="India">India</option>
                                    <option data-subtext="Brazil">Brazil</option>
                                    <option data-subtext="Turkey" >Turkey</option>
                                    <option data-subtext="United Kingdom">United Kingdom</option>
                                    <option data-subtext="Mexico">Mexico</option>
                                    <option data-subtext="Germany">Germany</option>
                                    <option data-subtext="France">France</option>
                                    <option data-subtext="Thailand">Thailand</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                    </div>

                    {{-- <div class="text-right">

                        <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save Changes</button>
                        <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>
                    </div> --}}
                </form>

            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Inseir imagem</h4>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="image">
                    <label class="custom-file-label" for="customFile">
                        Escolher arquivo</label>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Estoque</h4>


                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="available">Disponivel</label>
                                <input id="available" name="available" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="accounting">Contábil</label>
                                <input id="accounting" disabled name="accounting" value="0" type="number" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="allocated">Alocados (pedido)</label>
                                <input type="number" disabled class="form-control" id="allocaed" value="0" name="allocated">
                            </div>
                        </div>
                    </div>



                </form>

            </div>
        </div> <!-- end card-->

        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-3">Caracteristicas do produto</h4>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Tamanho</label>
                            <input type="text" class="form-control" name="size">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Material</label>
                            <input type="text" class="form-control" name="material">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Cor</label>
                            <input type="text" class="form-control" name="color_id" >
                        </div>
                    </div>
                </div>
                <div class="summernote "></div>

                <div class="text-right my-4">

                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Gravar</button>
                    <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
</div>
@endsection

@section('scripts')
    <script>

    </script>
@endsection
