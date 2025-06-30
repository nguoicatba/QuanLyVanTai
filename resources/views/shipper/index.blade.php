@extends('main')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">Shipper</div>
            <div class="text-sm">About shipper</div>
        </div>
        <div class="card-actions mt-2 mb-2">
            <a href="{{ route('shipper.create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i> Create Shipper
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="datatable1">
                <thead>
                    <tr>
                        <th>{{ __("shipper.shipper_code") }}</th>
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