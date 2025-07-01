@extends('main')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">{{ __('Create Employee') }}</div>
        </div>
        <div class="card-body">
            <form action="{{ route('employee.store') }}" method="POST">
                @csrf
                <!-- <div class="form-group">
                        <label for="employee_id">{{ __('employee.employee_id') }}</label>
                        <input type="text" class="form-control" id="employee_id" name="employee_id" required>
                    </div> -->
                <div class="form-group">
                    <label for="employee_name">{{ __('employee.employee_name') }}</label>
                    <input type="text" class="form-control" id="employee_name" name="employee_name" required>
                </div>
                <div class="form-group">
                    <label for="position_id">{{ __('employee.position_id') }}</label>
                    <input type="number" class="form-control" id="position_id" name="position_id" required>
                </div>
                <div class="form-group">
                    <label for="phone">{{ __('employee.phone') }}</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="address">{{ __('employee.address') }}</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="form-group">
                    <label for="email">{{ __('employee.email') }}</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('employee.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection