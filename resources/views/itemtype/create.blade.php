@extends('components.layout')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">{{ __('itemtype.create') }}</div>
        </div>
        <div class="card-body">
            <form action="{{ route('itemtype.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="code">{{ __('itemtype.code') }}</label>
                    <input type="text" class="form-control" id="code" name="code" required>
                </div>
                <div class="form-group">
                    <label for="name">{{ __('itemtype.name') }}</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <button type="submit" class="btn btn-success">{{ __('itemtype.save') }}</button>
                <a href="{{ route('itemtype.index') }}" class="btn btn-secondary">{{ __('itemtype.cancel') }}</a>
            </form>
        </div>
    </div>
@endsection 