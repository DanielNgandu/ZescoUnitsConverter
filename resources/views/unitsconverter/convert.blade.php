@extends('layouts.app')

@section('content')
    <div class="container">
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
                                    <input id="vat" type="number" class="form-control @error('vat') is-invalid @enderror" name="vat" value="{{ old('vat') }}" required autocomplete="vat" autofocus placeholder="16% of Amount...">

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
                                    <input id="excise" type="number" class="form-control @error('excise') is-invalid @enderror" name="excise" value="{{ old('excise') }}" required autocomplete="excise" autofocus placeholder="3% of Amount...">

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
                                    <input id="totalTax" type="number" class="form-control @error('totalTax') is-invalid @enderror" name="totalTax" value="{{ old('excise') }}" required autocomplete="excise" autofocus placeholder="K 0.00">

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
                                    <input id="amountAfterTax" type="number" class="form-control @error('amountAfterTax') is-invalid @enderror" name="amountAfterTax" value="{{ old('amountAfterTax') }}" required autocomplete="amountAfterTax" autofocus placeholder="K 0.00">

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
                                    <input id="units" type="number" class="form-control @error('units') is-invalid @enderror" name="units" value="{{ old('units') }}" required autocomplete="units" autofocus placeholder="Units">

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

@endsection
