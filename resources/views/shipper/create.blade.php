@extends('main')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">{{ __('Create Shipper') }}</div>
        </div>
        <div class="card-body">
            <form action="{{ route('shipper.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="shipper_code">{{ __('shipper.shipper_code') }}</label>
                    <input type="text" class="form-control" id="shipper_code" name="shipper_code" required>
                </div>
                <div class="form-group">
                    <label for="shipper_name">{{ __('shipper.shipper_name') }}</label>
                    <input type="text" class="form-control" id="shipper_name" name="shipper_name" required>
                </div>
                <div class="form-group">
                    <label for="address">{{ __('shipper.address') }}</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="form-group">
                    <label for="phone">{{ __('shipper.phone') }}</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="fax">{{ __('shipper.fax') }}</label>
                    <input type="text" class="form-control" id="fax" name="fax">
                </div>
                <div class="form-group">
                    <label for="tax_code">{{ __('shipper.tax_code') }}</label>
                    <input type="text" class="form-control" id="tax_code" name="tax_code">
                </div>
                <div class="form-group">
                    <label for="storage_fee">{{ __('shipper.storage_fee') }}</label>
                    <input type="number" step="0.01" class="form-control" id="storage_fee" name="storage_fee">
                </div>
                <div class="form-group">
                    <label for="bank_account">{{ __('shipper.bank_account') }}</label>
                    <input type="text" class="form-control" id="bank_account" name="bank_account">
                </div>
                <div class="form-group">
                    <label for="bank_name">{{ __('shipper.bank_name') }}</label>
                    <input type="text" class="form-control" id="bank_name" name="bank_name">
                </div>
                <div class="form-group">
                    <label for="bank_address">{{ __('shipper.bank_address') }}</label>
                    <input type="text" class="form-control" id="bank_address" name="bank_address">
                </div>
                <div class="form-group">
                    <label for="id_number">{{ __('shipper.id_number') }}</label>
                    <input type="text" class="form-control" id="id_number" name="id_number">
                </div>
                <div class="form-group">
                    <label for="tax_percent">{{ __('shipper.tax_percent') }}</label>
                    <input type="number" step="0.01" class="form-control" id="tax_percent" name="tax_percent">
                </div>
                <div class="form-group">
                    <label for="debt_balance">{{ __('shipper.debt_balance') }}</label>
                    <input type="number" step="0.01" class="form-control" id="debt_balance" name="debt_balance">
                </div>
                <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                <a href="{{ route('shipper.index') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
            </form>
        </div>
    </div>
@endsection 