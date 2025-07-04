@extends('components.layout')

@section('content')
    <div class="card card-default">
        <div class="card-body">
            <form action="{{ route('employee.index') }}" method="GET" id="searchForm">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="search_code">{{ __('employee.employee_id') }}</label>
                            <input type="text" class="form-control" id="search_code" name="search_code"
                                value="{{ request('search_code') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="search_name">{{ __('employee.employee_name') }}</label>
                            <input type="text" class="form-control" id="search_name" name="search_name"
                                value="{{ request('search_name') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="search_phone">{{ __('employee.phone') }}</label>
                            <input type="text" class="form-control" id="search_phone" name="search_phone"
                                value="{{ request('search_phone') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="search_email">{{ __('employee.email') }}</label>
                            <input type="text" class="form-control" id="search_email" name="search_email"
                                value="{{ request('search_email') }}">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <button type="submit" class="btn btn-labeled btn-primary btn-xs">
                            <span class="btn-label">
                                <i class="fa fa-search"></i>
                            </span>
                            {{ __('Search') }}
                        </button>
                        <button type="button" class="btn btn-labeled btn-secondary btn-xs" onclick="clearSearch()">
                            <span class="btn-label">
                                <i class="fa fa-times"></i>
                            </span>
                            {{ __('Cancel') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card card-default">
        <div class="card-body">
            <p>
                <a href="{{ route('employee.create') }}" class="btn btn-labeled btn-primary btn-xs">
                    <span class="btn-label">
                        <i class="fa fa-plus-circle"></i>
                    </span>
                    New Employee
                </a>
            </p>
            <table class="table nowrap border display" id="mytable" style="width:100%">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>{{ __('employee.employee_id') }}</th>
                        <th>{{ __('employee.employee_name') }}</th>
                        <th>Birth Date</th>
                        <th>Citizen ID</th>
                        <th>{{ __('employee.address') }}</th>
                        <th>Phone Number</th>
                        <th>Employee Type</th>
                        <th>Department</th>
                        <th>Basic Salary</th>
                        <th>Note</th>
                        <th>{{ __('employee.position_id') }}</th>
                        <th>Resigned</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($table as $employee)
                        <tr>
                            <td>
                                <a href="{{ route('employee.edit', $employee->employee_id) }}" class="btn btn-success btn-xs"><i
                                        class="fa fa-edit"></i></a>
                                <form action="{{ route('employee.destroy', $employee->employee_id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-xs"
                                        onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                            <td>{{ $employee->employee_id }}</td>
                            <td>{{ $employee->employee_name }}</td>
                            <td>{{ $employee->birth_date }}</td>
                            <td>{{ $employee->citizen_id }}</td>
                            <td>{{ $employee->address }}</td>
                            <td>{{ $employee->phone_number }}</td>
                            <td>{{ $employee->employee_type }}</td>
                            <td>{{ $employee->department }}</td>
                            <td>{{ $employee->basic_salary }}</td>
                            <td>{{ $employee->note }}</td>
                            <td>{{ $employee->position_id }}</td>
                            <td>{{ $employee->resigned ? 'Yes' : 'No' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function clearSearch() {
            document.getElementById('search_code').value = '';
            document.getElementById('search_name').value = '';
            document.getElementById('search_phone').value = '';
            document.getElementById('search_email').value = '';
            document.getElementById('searchForm').submit();
        }
    </script>
@endsection