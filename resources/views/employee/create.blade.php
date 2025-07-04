@extends('components.layout')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">{{ __('Create Employee') }}</div>
        </div>
        <div class="card-body">
            <form action="{{ route('employee.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="employee_name">{{ __('employee.employee_name') }}</label>
                    <input type="text" class="form-control" id="employee_name" name="employee_name" required>
                </div>
                <div class="form-group">
                    <label for="birth_date">{{ __('employee.birth_date') }}</label>
                    <input type="date" class="form-control" id="birth_date" name="birth_date">
                </div>
                <div class="form-group">
                    <label for="citizen_id">{{ __('employee.citizen_id') }}</label>
                    <input type="text" class="form-control" id="citizen_id" name="citizen_id">
                </div>
                <div class="form-group">
                    <label for="address">{{ __('employee.address') }}</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="form-group">
                    <label for="phone_number">{{ __('employee.phone_number') }}</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number">
                </div>
                <div class="form-group">
                    <label for="employee_type">{{ __('employee.employee_type') }}</label>
                    <input type="text" class="form-control" id="employee_type" name="employee_type">
                </div>
                <div class="form-group">
                    <label for="department">{{ __('employee.department') }}</label>
                    <input type="text" class="form-control" id="department" name="department">
                </div>
                <div class="form-group">
                    <label for="basic_salary">{{ __('employee.basic_salary') }}</label>
                    <input type="number" step="0.01" class="form-control" id="basic_salary" name="basic_salary">
                </div>
                <div class="form-group">
                    <label for="note">{{ __('employee.note') }}</label>
                    <input type="text" class="form-control" id="note" name="note">
                </div>
                <div class="form-group">
                    <label for="position_id">{{ __('employee.position_id') }}</label>
                    <select class="form-control select2-position" id="position_id" name="position_id"
                        data-url="{{ route('api.position.get') }}" required>

                    </select>

                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="resigned" name="resigned" value="1">
                    <label class="form-check-label" for="resigned">{{ __('employee.resigned') }}</label>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('employee.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        function select2_position() {
            let header = null;

            function formatPosition(state) {
                if (!state.id) return state.text;

                if (state.id == '-1') {
                    return $(
                        '<div class="row px-2 py-1" style="background-color:#d1e7dd; color:#0f5132; font-weight:bold; border-radius:4px;">' +
                        '<div class="col-6">' + header.header_code + '</div>' +
                        '<div class="col-6">' + header.header_name + '</div>' +
                        '</div>'
                    );
                }

                return $(
                    '<div class="row px-2 py-1">' +
                    '<div class="col-6">' + state.id + '</div>' +
                    '<div class="col-6">' + state.text + '</div>' +
                    '</div>'
                );
            }

            function selectPosition(state) {
                if (!state.id) return state.text;
                return $('<span>' + state.text + '</span>');
            }

            $('.select2-position').each(function () {
                const $select = $(this);
                const url = $select.data('url');

                $select.select2({
                    ajax: {
                        url: url,
                        dataType: 'json',
                        data: function (params) {
                            return {
                                q: params.term || '',
                                page: params.page || 1
                            };
                        },
                        processResults: function (data, params) {
                            params.page = params.page || 1;
                            header = data.header;
                            return {
                                results: data.items,
                                pagination: {
                                    more: (params.page * 10) < data.total_count
                                }
                            };
                        },
                        cache: true
                    },
                    tags: false,
                    minimumInputLength: 0,
                    templateResult: formatPosition,
                    templateSelection: selectPosition,
                    dropdownAutoWidth: true,
                    placeholder: 'Chọn chức vụ',
                    theme: 'bootstrap4',
                    width: '100%',
                });
            });
        }
        $(document).ready(function () {
            select2_position();
        });


    </script>

@endsection