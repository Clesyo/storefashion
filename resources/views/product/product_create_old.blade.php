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
                <h4 class="card-title mb-4">Basic pills Wizard</h4>

                <div id="basic-pills-wizard" class="twitter-bs-wizard">
                    <ul class="twitter-bs-wizard-nav">
                        <li class="nav-item">
                            <a href="#seller-details" class="nav-link" data-toggle="tab">
                                <span class="step-number mr-2">01</span>
                                Informações principais
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#company-document" class="nav-link" data-toggle="tab">
                                <span class="step-number mr-2">02</span>
                                <span>Quantidades</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#bank-detail" class="nav-link" data-toggle="tab">
                                <span class="step-number mr-2">03</span>
                                Imagem
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#confirm-detail" class="nav-link" data-toggle="tab">
                                <span class="step-number mr-2">04</span>
                                Confirm Detail
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content twitter-bs-wizard-tab-content">
                        <div class="tab-pane" id="seller-details">
                            <form>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheck-status" checked>
                                                <label class="custom-control-label" for="customCheck-status">Disponivel</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
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
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="">Categoria</label>
                                            <select class="form-control select2" style="width: 100%">
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


                            </form>
                        </div>
                        <div class="tab-pane" id="company-document">
                          <div>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="basicpill-pancard-input">PAN Card</label>
                                            <input type="text" class="form-control" id="basicpill-pancard-input">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="basicpill-vatno-input">VAT/TIN No.</label>
                                            <input type="text" class="form-control" id="basicpill-vatno-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="basicpill-cstno-input">CST No.</label>
                                            <input type="text" class="form-control" id="basicpill-cstno-input">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="basicpill-servicetax-input">Service Tax No.</label>
                                            <input type="text" class="form-control" id="basicpill-servicetax-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="basicpill-companyuin-input">Company UIN</label>
                                            <input type="text" class="form-control" id="basicpill-companyuin-input">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="basicpill-declaration-input">Declaration</label>
                                            <input type="text" class="form-control" id="basicpill-Declaration-input">
                                        </div>
                                    </div>
                                </div>
                            </form>
                          </div>
                        </div>
                        <div class="tab-pane" id="bank-detail">
                            <div>
                              <form>
                                  <div class="row">
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                              <label for="basicpill-namecard-input">Name on Card</label>
                                              <input type="text" class="form-control" id="basicpill-namecard-input">
                                          </div>
                                      </div>

                                      <div class="col-lg-6">
                                          <div class="form-group">
                                              <label>Credit Card Type</label>
                                              <select class="custom-select">
                                                    <option selected>Select Card Type</option>
                                                    <option value="AE">American Express</option>
                                                    <option value="VI">Visa</option>
                                                    <option value="MC">MasterCard</option>
                                                    <option value="DI">Discover</option>
                                              </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                              <label for="basicpill-cardno-input">Credit Card Number</label>
                                              <input type="text" class="form-control" id="basicpill-cardno-input">
                                          </div>
                                      </div>

                                      <div class="col-lg-6">
                                          <div class="form-group">
                                              <label for="basicpill-card-verification-input">Card Verification Number</label>
                                              <input type="text" class="form-control" id="basicpill-card-verification-input">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                              <label for="basicpill-expiration-input">Expiration Date</label>
                                              <input type="text" class="form-control" id="basicpill-expiration-input">
                                          </div>
                                      </div>

                                  </div>
                              </form>
                            </div>
                          </div>
                        <div class="tab-pane" id="confirm-detail">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="text-center">
                                        <div class="mb-4">
                                            <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                        </div>
                                        <div>
                                            <h5>Confirm Detail</h5>
                                            <p class="text-muted">If several languages coalesce, the grammar of the resulting</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                        <li class="previous"><a href="#">Previous</a></li>
                        <li class="next"><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
