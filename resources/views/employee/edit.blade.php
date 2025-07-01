@extends('main')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">{{ __('Edit Employee') }}</div>
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
            <form action="{{ route('employee.update', $employee->employee_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="employee_code">{{ __('employee.employee_code') }}</label>
                    <input type="text" class="form-control @error('employee_code') is-invalid @enderror" id="employee_code" name="employee_code" value="{{ old('employee_code', $employee->employee_code) }}" readonly>
                    @error('employee_code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="employee_name">{{ __('employee.employee_name') }}</label>
                    <input type="text" class="form-control @error('employee_name') is-invalid @enderror" id="employee_name" name="employee_name" value="{{ old('employee_name', $employee->employee_name) }}" required>
                    @error('employee_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="position_id">{{ __('employee.position_id') }}</label>
                    <input type="number" class="form-control @error('position_id') is-invalid @enderror" id="position_id" name="position_id" value="{{ old('position_id', $employee->position_id) }}" required>
                    @error('position_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">{{ __('employee.phone') }}</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $employee->phone) }}">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">{{ __('employee.address') }}</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $employee->address) }}">
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">{{ __('employee.email') }}</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $employee->email) }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                <a href="{{ route('employee.index') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
            </form>
        </div>
    </div>
@endsection 