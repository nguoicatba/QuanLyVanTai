@extends('components.layout')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">{{ __('port.edit') }}</div>
        </div>
        <div class="card-body">
            <form action="{{ route('port.update', $port->code) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="code">{{ __('port.code') }}</label>
                    <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ old('code', $port->code) }}" required readonly>
                    @error('code')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="name">{{ __('port.name') }}</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $port->name) }}" required>
                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="note">{{ __('port.note') }}</label>
                    <input type="text" class="form-control @error('note') is-invalid @enderror" id="note" name="note" value="{{ old('note', $port->note) }}">
                    @error('note')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('Update') }}</button>
                <a href="{{ route('port.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> {{ __('Cancel') }}</a>
            </form>
        </div>
    </div>
@endsection 