@extends('components.layout')

@section('content')
    <div class="card card-default">
        <div class="card-body">
            <form action="{{ route('position.index') }}" method="GET" id="searchForm">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="search_code">{{ __('position.position_id') }}</label>
                            <input type="text" class="form-control form-control-xs" id="search_code" name="search_code"
                                value="{{ request('search_code') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="search_name">{{ __('position.position_name') }}</label>
                            <input type="text" class="form-control form-control-xs" id="search_name" name="search_name"
                                value="{{ request('search_name') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="search_description">{{ __('position.description') }}</label>
                            <input type="text" class="form-control form-control-xs" id="search_description"
                                name="search_description" value="{{ request('search_description') }}">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-search"></i> {{ __('general.search') }}
                        </button>
                        <button type="button" class="btn btn-secondary btn-sm" onclick="clearSearch()">
                            <i class="fa fa-times"></i> {{ __('general.reset') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card card-default">
        <div class="card-body">
            <p>
                <a href="{{ route('position.create') }}" class="btn btn-labeled btn-primary btn-xs">
                    <span class="btn-label">
                        <i class="fa fa-plus-circle"></i>
                    </span>
                    New Position
                </a>
            </p>
            <table class="table nowrap border display" id="mytable" style="width:100%">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>{{ __('position.position_id') }}</th>
                        <th>{{ __('position.position_name') }}</th>
                        <th>{{ __('position.description') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($table as $position)
                        <tr>
                            <td>
                                <a href="{{ route('position.edit', $position->position_id) }}" class="btn btn-success btn-xs"><i
                                        class="fa fa-edit"></i></a>
                                <form action="{{ route('position.destroy', $position->position_id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-xs"
                                        onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                            <td>{{ $position->position_id }}</td>
                            <td>{{ $position->position_name }}</td>
                            <td>{{ $position->description }}</td>
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
            document.getElementById('search_description').value = '';
            document.getElementById('searchForm').submit();
        }
    </script>
@endsection