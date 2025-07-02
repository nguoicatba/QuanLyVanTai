@extends('components.layout')

@section('content')
    <div class="card card-default">
        <!-- <div class="card-header">
                        <div class="card-title">{{ __('Search Shipper') }}</div>
                    </div> -->
        <div class="card-body">
            <form action="{{ route('shipper.index') }}" method="GET" id="searchForm">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group mb-1">
                            <label for="search_code"
                                class="form-label form-label-sm mb-1">{{ __('shipper.shipper_code') }}</label>
                            <input type="text" class="form-control form-control-sm p-1" id="search_code" name="search_code"
                                value="{{ request('search_code') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-1">
                            <label for="search_name"
                                class="form-label form-label-sm mb-1">{{ __('shipper.shipper_name') }}</label>
                            <input type="text" class="form-control form-control-sm p-1" id="search_name" name="search_name"
                                value="{{ request('search_name') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-1">
                            <label for="search_phone"
                                class="form-label form-label-sm mb-1">{{ __('shipper.phone') }}</label>
                            <input type="text" class="form-control form-control-sm p-1" id="search_phone"
                                name="search_phone" value="{{ request('search_phone') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-1">
                            <label for="search_tax_code"
                                class="form-label form-label-sm mb-1">{{ __('shipper.tax_code') }}</label>
                            <input type="text" class="form-control form-control-sm p-1" id="search_tax_code"
                                name="search_tax_code" value="{{ request('search_tax_code') }}">
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-sm m-1">
                            <i class="fa fa-search"></i> Search
                        </button>
                        <button type="button" class="btn btn-secondary btn-sm m-1" onclick="clearSearch()">
                            <i class="fa fa-times"></i> Clear
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card card-default">
        <div class="card-body">
            <p>
                <a href="{{ route('shipper.create') }}" class="btn btn-labeled btn-primary btn-xs">
                    <span class="btn-label">
                        <i class="fa fa-plus-circle"></i>
                    </span>
                    New Shipper
                </a>
            </p>
            <table class="table nowrap border display" id="mytable" style="width:100%">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>{{ __('shipper.shipper_code') }}</th>
                        <th>{{ __("shipper.shipper_name") }}</th>
                        <th>{{ __("shipper.address") }}</th>
                        <th>{{ __("shipper.phone") }}</th>
                        <th>{{ __("shipper.fax") }}</th>
                        <th>{{ __("shipper.tax_code") }}</th>
                        <th>{{ __("shipper.storage_fee") }}</th>
                        <th>{{ __("shipper.bank_account") }}</th>
                        <th>{{ __("shipper.bank_name") }}</th>
                        <th>{{ __("shipper.bank_address") }}</th>
                        <th>{{ __("shipper.id_number") }}</th>
                        <th>{{ __("shipper.tax_percent") }}</th>
                        <th>{{ __("shipper.debt_balance") }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($table as $shipper)
                        <tr>
                            <td>
                                <a href="{{ route('shipper.edit', $shipper->shipper_code) }}" class="btn btn-success btn-xs"><i
                                        class="fa fa-edit"></i></a>
                                <form action="{{ route('shipper.destroy', $shipper->shipper_code) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-xs"
                                        onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                            <td>{{ $shipper->shipper_code }}</td>
                            <td>{{ $shipper->shipper_name }}</td>
                            <td>{{ $shipper->address }}</td>
                            <td>{{ $shipper->phone }}</td>
                            <td>{{ $shipper->fax }}</td>
                            <td>{{ $shipper->tax_code }}</td>
                            <td>{{ $shipper->storage_fee }}</td>
                            <td>{{ $shipper->bank_account }}</td>
                            <td>{{ $shipper->bank_name }}</td>
                            <td>{{ $shipper->bank_address }}</td>
                            <td>{{ $shipper->id_number }}</td>
                            <td>{{ $shipper->tax_percent }}</td>
                            <td>{{ $shipper->debt_balance }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

<!-- @section('scripts')
    <script>
        function clearSearch() {
            document.getElementById('search_code').value = '';
            document.getElementById('search_name').value = '';
            document.getElementById('search_phone').value = '';
            document.getElementById('search_tax_code').value = '';
            document.getElementById('searchForm').submit();
        }
    </script>
@endsection -->