@extends('components.layout')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">{{ __('Edit Shipper') }}</div>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('shipper.update', $shipper->shipper_code) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="shipper_code">{{ __('shipper.shipper_code') }}</label>
                    <input type="text" class="form-control @error('shipper_code') is-invalid @enderror" id="shipper_code"
                        name="shipper_code" value="{{ old('shipper_code', $shipper->shipper_code) }}" readonly>
                    @error('shipper_code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="shipper_name">{{ __('shipper.shipper_name') }}</label>
                    <input type="text" class="form-control @error('shipper_name') is-invalid @enderror" id="shipper_name"
                        name="shipper_name" value="{{ old('shipper_name', $shipper->shipper_name) }}" required>
                    @error('shipper_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">{{ __('shipper.address') }}</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                        name="address" value="{{ old('address', $shipper->address) }}">
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">{{ __('shipper.phone') }}</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                        value="{{ old('phone', $shipper->phone) }}">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fax">{{ __('shipper.fax') }}</label>
                    <input type="text" class="form-control @error('fax') is-invalid @enderror" id="fax" name="fax"
                        value="{{ old('fax', $shipper->fax) }}">
                    @error('fax')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tax_code">{{ __('shipper.tax_code') }}</label>
                    <input type="text" class="form-control @error('tax_code') is-invalid @enderror" id="tax_code"
                        name="tax_code" value="{{ old('tax_code', $shipper->tax_code) }}">
                    @error('tax_code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="storage_fee">{{ __('shipper.storage_fee') }}</label>
                    <input type="number" step="0.01" class="form-control @error('storage_fee') is-invalid @enderror"
                        id="storage_fee" name="storage_fee" value="{{ old('storage_fee', $shipper->storage_fee) }}">
                    @error('storage_fee')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="bank_account">{{ __('shipper.bank_account') }}</label>
                    <input type="text" class="form-control @error('bank_account') is-invalid @enderror" id="bank_account"
                        name="bank_account" value="{{ old('bank_account', $shipper->bank_account) }}">
                    @error('bank_account')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="bank_name">{{ __('shipper.bank_name') }}</label>
                    <input type="text" class="form-control @error('bank_name') is-invalid @enderror" id="bank_name"
                        name="bank_name" value="{{ old('bank_name', $shipper->bank_name) }}">
                    @error('bank_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="bank_address">{{ __('shipper.bank_address') }}</label>
                    <input type="text" class="form-control @error('bank_address') is-invalid @enderror" id="bank_address"
                        name="bank_address" value="{{ old('bank_address', $shipper->bank_address) }}">
                    @error('bank_address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="id_number">{{ __('shipper.id_number') }}</label>
                    <input type="text" class="form-control @error('id_number') is-invalid @enderror" id="id_number"
                        name="id_number" value="{{ old('id_number', $shipper->id_number) }}">
                    @error('id_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tax_percent">{{ __('shipper.tax_percent') }}</label>
                    <input type="number" step="0.01" class="form-control @error('tax_percent') is-invalid @enderror"
                        id="tax_percent" name="tax_percent" value="{{ old('tax_percent', $shipper->tax_percent) }}">
                    @error('tax_percent')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="debt_balance">{{ __('shipper.debt_balance') }}</label>
                    <input type="number" step="0.01" class="form-control @error('debt_balance') is-invalid @enderror"
                        id="debt_balance" name="debt_balance" value="{{ old('debt_balance', $shipper->debt_balance) }}">
                    @error('debt_balance')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                <a href="{{ route('shipper.index') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
            </form>
        </div>
    </div>
@endsection