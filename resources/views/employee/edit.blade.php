@extends('components.layout')

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
                    <label for="employee_code">{{ __('employee.employee_id') }}</label>
                    <input type="text" class="form-control @error('employee_id') is-invalid @enderror" id="employee_id"
                        name="employee_id" value="{{ old('employee_id', $employee->employee_id) }}" readonly>
                    @error('employee_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="employee_name">{{ __('employee.employee_name') }}</label>
                    <input type="text" class="form-control @error('employee_name') is-invalid @enderror" id="employee_name"
                        name="employee_name" value="{{ old('employee_name', $employee->employee_name) }}" required>
                    @error('employee_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="birth_date">{{ __('employee.birth_date') }}</label>
                    <input type="date" class="form-control @error('birth_date') is-invalid @enderror" id="birth_date"
                        name="birth_date" value="{{ old('birth_date', $employee->birth_date) }}">
                    @error('birth_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="citizen_id">{{ __('employee.citizen_id') }}</label>
                    <input type="text" class="form-control @error('citizen_id') is-invalid @enderror" id="citizen_id"
                        name="citizen_id" value="{{ old('citizen_id', $employee->citizen_id) }}">
                    @error('citizen_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">{{ __('employee.address') }}</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                        name="address" value="{{ old('address', $employee->address) }}">
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone_number">{{ __('employee.phone_number') }}</label>
                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                        name="phone_number" value="{{ old('phone_number', $employee->phone_number) }}">
                    @error('phone_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="employee_type">{{ __('employee.employee_type') }}</label>
                    <input type="text" class="form-control @error('employee_type') is-invalid @enderror" id="employee_type"
                        name="employee_type" value="{{ old('employee_type', $employee->employee_type) }}">
                    @error('employee_type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="department">{{ __('employee.department') }}</label>
                    <input type="text" class="form-control @error('department') is-invalid @enderror" id="department"
                        name="department" value="{{ old('department', $employee->department) }}">
                    @error('department')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="basic_salary">{{ __('employee.basic_salary') }}</label>
                    <input type="number" step="0.01" class="form-control @error('basic_salary') is-invalid @enderror" id="basic_salary"
                        name="basic_salary" value="{{ old('basic_salary', $employee->basic_salary) }}">
                    @error('basic_salary')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="note">{{ __('employee.note') }}</label>
                    <input type="text" class="form-control @error('note') is-invalid @enderror" id="note"
                        name="note" value="{{ old('note', $employee->note) }}">
                    @error('note')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="position_id">{{ __('employee.position_id') }}</label>
                    <input type="number" class="form-control @error('position_id') is-invalid @enderror" id="position_id"
                        name="position_id" value="{{ old('position_id', $employee->position_id) }}" required>
                    @error('position_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="resigned" name="resigned" value="1" {{ old('resigned', $employee->resigned) ? 'checked' : '' }}>
                    <label class="form-check-label" for="resigned">{{ __('employee.resigned') }}</label>
                </div>
                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                <a href="{{ route('employee.index') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
            </form>
        </div>
    </div>
@endsection