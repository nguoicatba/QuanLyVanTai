@extends('components.layout')

@section('content')
    <div class="card card-default">
        <div class="card-body">
            <form action="{{ route('itemtype.index') }}" method="GET" id="searchForm">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="search_code">{{ __('itemtype.code') }}</label>
                            <input type="text" class="form-control form-control-xs" id="search_code" name="search_code"
                                value="{{ request('search_code') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="search_name">{{ __('itemtype.name') }}</label>
                            <input type="text" class="form-control form-control-xs" id="search_name" name="search_name"
                                value="{{ request('search_name') }}">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <button type="submit" class="btn btn-labeled btn-primary btn-xs">
                            <span class="btn-label">
                                <i class="fa fa-search"></i>
                            </span>
                            {{ __('itemtype.search') }}
                        </button>
                        <button type="button" class="btn btn-labeled btn-secondary btn-xs" onclick="clearSearch()">
                            <span class="btn-label">
                                <i class="fa fa-times"></i>
                            </span>
                            {{ __('itemtype.reset') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card card-default">
        <div class="card-body">
            <p>
                <a href="{{ route('itemtype.create') }}" class="btn btn-labeled btn-primary btn-xs">
                    <span class="btn-label">
                        <i class="fa fa-plus-circle"></i>
                    </span>
                    {{ __('itemtype.new') }}
                </a>
            </p>
            <table class="table nowrap border display" id="mytable" style="width:100%">
                <thead>
                    <tr>
                        <th>{{ __('itemtype.action') }}</th>
                        <th>{{ __('itemtype.code') }}</th>
                        <th>{{ __('itemtype.name') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($table as $itemtype)
                        <tr>
                            <td>
                                <a href="{{ route('itemtype.edit', $itemtype->code) }}" class="btn btn-success btn-xs"><i
                                        class="fa fa-edit"></i></a>
                                <form action="{{ route('itemtype.destroy', $itemtype->code) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-xs"
                                        onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                            <td>{{ $itemtype->code }}</td>
                            <td>{{ $itemtype->name }}</td>
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
            document.getElementById('searchForm').submit();
        }
    </script>
@endsection 