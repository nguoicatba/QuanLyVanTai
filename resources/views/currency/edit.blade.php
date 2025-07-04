@extends('components.layout')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">{{ __('currency.edit') }}</div>
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
            <form action="{{ route('currency.update', $currency->code) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="code">{{ __('currency.code') }}</label>
                    <input type="text" class="form-control @error('code') is-invalid @enderror" id="code"
                        name="code" value="{{ old('code', $currency->code) }}" readonly>
                    @error('code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">{{ __('currency.name') }}</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name', $currency->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="note">{{ __('currency.note') }}</label>
                    <input type="text" class="form-control @error('note') is-invalid @enderror" id="note"
                        name="note" value="{{ old('note', $currency->note) }}">
                    @error('note')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">{{ __('currency.update') }}</button>
                <a href="{{ route('currency.index') }}" class="btn btn-secondary">{{ __('currency.cancel') }}</a>
            </form>
        </div>
    </div>
@endsection 