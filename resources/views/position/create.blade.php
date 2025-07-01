@extends('main')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">{{ __('Create Position') }}</div>
        </div>
        <div class="card-body">
            <form action="{{ route('position.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="position_code">{{ __('position.position_code') }}</label>
                    <input type="text" class="form-control" id="position_code" name="position_code" required>
                </div>
                <div class="form-group">
                    <label for="position_name">{{ __('position.position_name') }}</label>
                    <input type="text" class="form-control" id="position_name" name="position_name" required>
                </div>
                <div class="form-group">
                    <label for="description">{{ __('position.description') }}</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('position.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection