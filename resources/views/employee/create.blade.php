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
                    <label for="position_id">{{ __('employee.position_id') }}</label>
                    <select class="form-control select2-position" id="position_id" name="position_id"
                        data-url="{{ route('api.position.get') }}" required>
                        <option value="">Select Position</option>
                    </select>

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