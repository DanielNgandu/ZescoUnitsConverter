@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bolder" id="kwachatounits-tab" data-toggle="pill" href="#kwachatounits"
                           role="tab" aria-controls="kwachatounits" aria-selected="true">Kwacha (K) -> Units</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bolder" id="unitstokwacha-tab" data-toggle="pill" href="#unitstokwacha" role="tab"
                           aria-controls="pills-profile" aria-selected="false">Units -> Kwacha (K)</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="kwachatounits" role="tabpanel"
                 aria-labelledby="kwachatounits-tab">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card border-primary mb-3" >
                            <div class="card-header">{{ __('Kwacha (K) -> Units Converter') }}</div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                             aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-1stpurchase-tab" data-toggle="pill"
                                               href="#v-pills-1stpurchase" role="tab"
                                               aria-controls="v-pills-1stpurchase" aria-selected="true">1st Purchase</a>
                                            <a class="nav-link" id="v-pills-2ndpurchase-tab" data-toggle="pill"
                                               href="#v-pills-2ndpurchase" role="tab"
                                               aria-controls="v-pills-2ndpurchase" aria-selected="false">2nd
                                                Purchase</a>
                                            <a class="nav-link" id="v-pills-3rdpluspurchase-tab" data-toggle="pill"
                                               href="#v-pills-3rdpluspurchase" role="tab"
                                               aria-controls="v-pills-3rdpluspurchase" aria-selected="false">3+ times
                                                Purchase</a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-1stpurchase"
                                                 role="tabpanel" aria-labelledby="v-pills-1stpurchase-tab">
                                                <form>

                                                    @csrf

                                                    <div class="form-group row">
                                                        <label for="name"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Amount (K)') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="amount" type="number"
                                                                   class="form-control @error('amount') is-invalid @enderror"
                                                                   name="amount" value="{{ old('amount') }}" required
                                                                   autocomplete="amount" autofocus>

                                                            @error('amount')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label for="vat"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Vat (K) (16%)') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="vat" type="number"
                                                                   class="form-control @error('vat') is-invalid @enderror"
                                                                   name="vat" value="{{ old('vat') }}" required
                                                                   autocomplete="vat" autofocus
                                                                   placeholder="16% of Amount..." readonly="readonly">

                                                            @error('vat')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="excise"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Excise Duty (K) (3%)') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="excise" type="number"
                                                                   class="form-control @error('excise') is-invalid @enderror"
                                                                   name="excise" value="{{ old('excise') }}" required
                                                                   autocomplete="excise" autofocus
                                                                   placeholder="3% of Amount..." readonly="readonly">

                                                            @error('excise')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="totalTax"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Total Tax Deducted (K)') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="totalTax" type="number"
                                                                   class="form-control @error('totalTax') is-invalid @enderror"
                                                                   name="totalTax" value="{{ old('excise') }}" required
                                                                   autocomplete="excise" autofocus placeholder="K 0.00"
                                                                   readonly="readonly">

                                                            @error('totalTax')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="amountAfterTax"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Amount After Tax(K)') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="amountAfterTax" type="number"
                                                                   class="form-control @error('amountAfterTax') is-invalid @enderror"
                                                                   name="amountAfterTax"
                                                                   value="{{ old('amountAfterTax') }}" required
                                                                   autocomplete="amountAfterTax" autofocus
                                                                   placeholder="K 0.00" readonly="readonly">

                                                            @error('totalTax')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="units"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Expected Units') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="units" type="number"
                                                                   class="form-control @error('units') is-invalid @enderror"
                                                                   name="units" value="{{ old('units') }}" required
                                                                   autocomplete="units" autofocus placeholder="Units"
                                                                   readonly="readonly">

                                                            @error('units')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-2ndpurchase" role="tabpanel"
                                                 aria-labelledby="v-pills-2ndpurchase-tab">
                                                <form>

                                                    @csrf

                                                    <div class="form-group row">
                                                        <label for="name"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Amount (K)') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="amount2" type="number"
                                                                   class="form-control @error('amount') is-invalid @enderror"
                                                                   name="amount2" value="{{ old('amount') }}" required
                                                                   autocomplete="amount" autofocus>

                                                            @error('amount')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label for="vat"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Vat (K) (16%)') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="vat2" type="number"
                                                                   class="form-control @error('vat2') is-invalid @enderror"
                                                                   name="vat2" value="{{ old('vat2') }}" required
                                                                   autocomplete="vat" autofocus
                                                                   placeholder="16% of Amount..." readonly="readonly">

                                                            @error('vat2')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="excise"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Excise Duty (K) (3%)') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="excise2" type="number"
                                                                   class="form-control @error('excise2') is-invalid @enderror"
                                                                   name="excise2" value="{{ old('excise2') }}" required
                                                                   autocomplete="excise" autofocus
                                                                   placeholder="3% of Amount..." readonly="readonly">

                                                            @error('excise')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="totalTax"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Total Tax Deducted (K)') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="totalTax2" type="number"
                                                                   class="form-control @error('totalTax2') is-invalid @enderror"
                                                                   name="totalTax2" value="{{ old('totalTax2') }}" required
                                                                   autocomplete="excise" autofocus placeholder="K 0.00"
                                                                   readonly="readonly">

                                                            @error('totalTax')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="amountAfterTax"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Amount After Tax(K)') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="amountAfterTax2" type="number"
                                                                   class="form-control @error('amountAfterTax2') is-invalid @enderror"
                                                                   name="amountAfterTax2"
                                                                   value="{{ old('amountAfterTax2') }}" required
                                                                   autocomplete="amountAfterTax" autofocus
                                                                   placeholder="K 0.00" readonly="readonly">

                                                            @error('amountAfterTax2')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="units"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Expected Units') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="units2" type="number"
                                                                   class="form-control @error('units2') is-invalid @enderror"
                                                                   name="units2" value="{{ old('units2') }}" required
                                                                   autocomplete="units" autofocus placeholder="Units"
                                                                   readonly="readonly">

                                                            @error('units2')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-3rdpluspurchase" role="tabpanel"
                                                 aria-labelledby="v-pills-3rdpluspurchase-tab">
                                                <form>

                                                    @csrf

                                                    <div class="form-group row">
                                                        <label for="name"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Amount (K)') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="amount3" type="number"
                                                                   class="form-control @error('amount3') is-invalid @enderror"
                                                                   name="amount" value="{{ old('amount3') }}" required
                                                                   autocomplete="amount" autofocus>

                                                            @error('amount3')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label for="vat"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Vat (K) (16%)') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="vat3" type="number"
                                                                   class="form-control @error('vat3') is-invalid @enderror"
                                                                   name="vat3" value="{{ old('vat33') }}" required
                                                                   autocomplete="vat" autofocus
                                                                   placeholder="16% of Amount..." readonly="readonly">

                                                            @error('vat3')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="excise"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Excise Duty (K) (3%)') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="excise3" type="number"
                                                                   class="form-control @error('excise3') is-invalid @enderror"
                                                                   name="excise" value="{{ old('excise3') }}" required
                                                                   autocomplete="excise" autofocus
                                                                   placeholder="3% of Amount..." readonly="readonly">

                                                            @error('excise3')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="totalTax"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Total Tax Deducted (K)') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="totalTax3" type="number"
                                                                   class="form-control @error('totalTax3') is-invalid @enderror"
                                                                   name="totalTax3" value="{{ old('totalTax3') }}" required
                                                                   autocomplete="excise" autofocus placeholder="K 0.00"
                                                                   readonly="readonly">

                                                            @error('totalTax3')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="amountAfterTax"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Amount After Tax(K)') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="amountAfterTax3" type="number"
                                                                   class="form-control @error('amountAfterTax3') is-invalid @enderror"
                                                                   name="amountAfterTax3"
                                                                   value="{{ old('amountAfterTax3') }}" required
                                                                   autocomplete="amountAfterTax" autofocus
                                                                   placeholder="K 0.00" readonly="readonly">

                                                            @error('amountAfterTax3')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="units"
                                                               class="col-md-4 col-form-label text-md-right">{{ __('Expected Units') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="units3" type="number"
                                                                   class="form-control @error('units3') is-invalid @enderror"
                                                                   name="units3" value="{{ old('units3') }}" required
                                                                   autocomplete="units" autofocus placeholder="Units"
                                                                   readonly="readonly">

                                                            @error('units3')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="unitstokwacha" role="tabpanel" aria-labelledby="unitstokwacha-tab">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card border-primary mb-3" >

                        <div class="card-header ">{{ __('Units -> Kwacha Converter') }}</div>

                            <div class="card-body">
                                <form>
                                    @csrf
                                    <div class="form-group row">
                                        <label for="units"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Units') }}</label>

                                        <div class="col-md-6">
                                            <input id="units1" type="number"
                                                   class="form-control @error('units1') is-invalid @enderror"
                                                   name="units1" value="{{ old('units1') }}" required
                                                   autocomplete="units1" autofocus placeholder="Units">

                                            @error('units1')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Expected Amount (K)') }}</label>

                                        <div class="col-md-6">
                                            <input id="expectedamount" type="number"
                                                   class="form-control @error('expectedamount') is-invalid @enderror"
                                                   name="expectedamount" value="{{ old('expectedamount') }}" required
                                                   autocomplete="expectedamount" autofocus placeholder="K 0.00"
                                                   readonly="readonly">

                                            @error('expectedamount')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
