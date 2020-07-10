@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="kwachatounits-tab" data-toggle="pill" href="#kwachatounits" role="tab" aria-controls="kwachatounits" aria-selected="true">Kwacha to Units</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="unitstokwacha-tab" data-toggle="pill" href="#unitstokwacha" role="tab" aria-controls="pills-profile" aria-selected="false">Units to Kwacha</a>
            </li>

        </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="kwachatounits" role="tabpanel" aria-labelledby="kwachatounits-tab">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Kwacha to Units Converter') }}</div>

                            <div class="card-body">
                                <form >
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Amount (K)') }}</label>

                                        <div class="col-md-6">
                                            <input id="amount" type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>

                                            @error('amount')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="vat" class="col-md-4 col-form-label text-md-right">{{ __('Vat (K) (16%)') }}</label>

                                        <div class="col-md-6">
                                            <input id="vat" type="number" class="form-control @error('vat') is-invalid @enderror" name="vat" value="{{ old('vat') }}" required autocomplete="vat" autofocus placeholder="16% of Amount..." readonly="readonly">

                                            @error('vat')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="excise" class="col-md-4 col-form-label text-md-right">{{ __('Excise Duty (K) (3%)') }}</label>

                                        <div class="col-md-6">
                                            <input id="excise" type="number" class="form-control @error('excise') is-invalid @enderror" name="excise" value="{{ old('excise') }}" required autocomplete="excise" autofocus placeholder="3% of Amount..." readonly="readonly">

                                            @error('excise')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="totalTax" class="col-md-4 col-form-label text-md-right">{{ __('Total Tax Deducted (K)') }}</label>

                                        <div class="col-md-6">
                                            <input id="totalTax" type="number" class="form-control @error('totalTax') is-invalid @enderror" name="totalTax" value="{{ old('excise') }}" required autocomplete="excise" autofocus placeholder="K 0.00" readonly="readonly">

                                            @error('totalTax')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="amountAfterTax" class="col-md-4 col-form-label text-md-right">{{ __('Amount After Tax(K)') }}</label>

                                        <div class="col-md-6">
                                            <input id="amountAfterTax" type="number" class="form-control @error('amountAfterTax') is-invalid @enderror" name="amountAfterTax" value="{{ old('amountAfterTax') }}" required autocomplete="amountAfterTax" autofocus placeholder="K 0.00" readonly="readonly">

                                            @error('totalTax')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="units" class="col-md-4 col-form-label text-md-right">{{ __('Expected Units') }}</label>

                                        <div class="col-md-6">
                                            <input id="units" type="number" class="form-control @error('units') is-invalid @enderror" name="units" value="{{ old('units') }}" required autocomplete="units" autofocus placeholder="Units" readonly="readonly">

                                            @error('units')
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
            <div class="tab-pane fade" id="unitstokwacha" role="tabpanel" aria-labelledby="unitstokwacha-tab">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Units to Kwacha Converter') }}</div>

                            <div class="card-body">
                                <form >
                                    @csrf
                                    <div class="form-group row">
                                        <label for="units" class="col-md-4 col-form-label text-md-right">{{ __('Units') }}</label>

                                        <div class="col-md-6">
                                            <input id="units1" type="number" class="form-control @error('units1') is-invalid @enderror" name="units1" value="{{ old('units1') }}" required autocomplete="units1" autofocus placeholder="Units">

                                            @error('units1')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Expected Amount (K)') }}</label>

                                        <div class="col-md-6">
                                            <input id="expectedamount" type="number" class="form-control @error('expectedamount') is-invalid @enderror" name="expectedamount" value="{{ old('expectedamount') }}" required autocomplete="expectedamount" autofocus placeholder="K 0.00" readonly="readonly">

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
