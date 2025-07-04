@extends('components.layout')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">{{ __('currency.create') }}</div>
        </div>
        <div class="card-body">
            <form action="{{ route('currency.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="code">{{ __('currency.code') }}</label>
                    <input type="text" class="form-control" id="code" name="code" required>
                </div>
                <div class="form-group">
                    <label for="name">{{ __('currency.name') }}</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="note">{{ __('currency.note') }}</label>
                    <input type="text" class="form-control" id="note" name="note">
                </div>
                <button type="submit" class="btn btn-success">{{ __('currency.save') }}</button>
                <a href="{{ route('currency.index') }}" class="btn btn-secondary">{{ __('currency.cancel') }}</a>
            </form>
        </div>
    </div>
@endsection 