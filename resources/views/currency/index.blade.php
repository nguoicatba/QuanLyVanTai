@extends('components.layout')

@section('content')
    <div class="card card-default">
        <div class="card-body">
            <p>
                <a href="{{ route('currency.create') }}" class="btn btn-labeled btn-primary btn-xs">
                    <span class="btn-label">
                        <i class="fa fa-plus-circle"></i>
                    </span>
                    {{ __('currency.new') }}
                </a>
            </p>
            <table class="table nowrap border display" id="mytable" style="width:100%">
                <thead>
                    <tr>
                        <th>{{ __('currency.action') }}</th>
                        <th>{{ __('currency.code') }}</th>
                        <th>{{ __('currency.name') }}</th>
                        <th>{{ __('currency.note') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($table as $currency)
                        <tr>
                            <td>
                                <a href="{{ route('currency.edit', $currency->code) }}" class="btn btn-success btn-xs"><i
                                        class="fa fa-edit"></i></a>
                                <form action="{{ route('currency.destroy', $currency->code) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-xs"
                                        onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                            <td>{{ $currency->code }}</td>
                            <td>{{ $currency->name }}</td>
                            <td>{{ $currency->note }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection 