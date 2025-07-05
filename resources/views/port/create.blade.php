@extends('components.layout')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">{{ __('port.create') }}</div>
        </div>
        <div class="card-body">
            <form action="{{ route('port.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="code">{{ __('port.code') }}</label>
                    <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ old('code') }}" required>
                    @error('code')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="name">{{ __('port.name') }}</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="note">{{ __('port.note') }}</label>
                    <input type="text" class="form-control @error('note') is-invalid @enderror" id="note" name="note" value="{{ old('note') }}">
                    @error('note')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> {{ __('Create') }}</button>
                <a href="{{ route('port.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> {{ __('Back') }}</a>
            </form>
        </div>
    </div>
@endsection 