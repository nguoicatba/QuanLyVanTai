@extends('components.layout')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">{{ __('itemtype.edit') }}</div>
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
            <form action="{{ route('itemtype.update', $itemtype->code) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="code">{{ __('itemtype.code') }}</label>
                    <input type="text" class="form-control @error('code') is-invalid @enderror" id="code"
                        name="code" value="{{ old('code', $itemtype->code) }}" readonly>
                    @error('code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">{{ __('itemtype.name') }}</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name', $itemtype->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">{{ __('itemtype.update') }}</button>
                <a href="{{ route('itemtype.index') }}" class="btn btn-secondary">{{ __('itemtype.cancel') }}</a>
            </form>
        </div>
    </div>
@endsection 