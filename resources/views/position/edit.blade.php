@extends('main')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">{{ __('Edit Position') }}</div>
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
            <form action="{{ route('position.update', $position->position_code) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="position_code">{{ __('position.position_code') }}</label>
                    <input type="text" class="form-control @error('position_code') is-invalid @enderror" id="position_code" name="position_code" value="{{ old('position_code', $position->position_code) }}" readonly>
                    @error('position_code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="position_name">{{ __('position.position_name') }}</label>
                    <input type="text" class="form-control @error('position_name') is-invalid @enderror" id="position_name" name="position_name" value="{{ old('position_name', $position->position_name) }}" required>
                    @error('position_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">{{ __('position.description') }}</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description', $position->description) }}">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                <a href="{{ route('position.index') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
            </form>
        </div>
    </div>
@endsection 