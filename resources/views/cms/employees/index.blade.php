<x-app-layout>
    <style>
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }

        .table th, .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th, .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th, .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0056b3;
            border-color: #004085;
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #bd2130;
            border-color: #b21f2d;
        }

        img {
            display: block;
            max-width: 100%;
            height: auto;
        }

    </style>
    <x-breadcrumb :links="[
        ['label' => 'Home', 'url' => route('dashboard')],
        ['label' => 'Employees', 'url' => '#'],
        ['label' => 'Search Employer', 'url' => '#']
    ]"/>
    <div class="container">
        <div class="card card-warning">
            <div class="card-header">
                <div class="card-title">
                    <h3>Employees</h3>
                </div>
            </div>
            <div class="card-body">
                <a class="btn btn-dark" href="{{route('employees.create')}}"> <i class="fas fa-user-plus"> </i> New Employer</a> <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Job</th>
                            <th>Birthday</th>
                            <th>Gender</th>
                            <th>Social Media</th>
                            <th>View in Webpage</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                            <tr id="employee-{{ $employee->id }}">
                                <td>{{ $employee->name }}</td>
                                <td>
                                    @if ($employee->photo)
                                        <img src="{{ asset('storage/' . $employee->photo) }}" alt="Photo" width="50">
                                    @endif
                                </td>
                                <td>{{ $employee->job }}</td>
                                <td>{{ $employee->birthday->format('d/m/Y') }}</td>
                                <td>{{ $employee->gender }}</td>
                                <td>
                                    @foreach (json_decode($employee->social_media, true) as $platform => $url)
                                        <a href="{{ $url }}" target="_blank">{{ ucfirst($platform) }}</a>
                                    @endforeach
                                </td>
                                <td>
                                    <input type="checkbox" class="toggle-view" data-id="{{ $employee->id }}" {{ $employee->view_in_webpage ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm delete-employee" data-id="{{ $employee->id }}">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $employees->links() }}
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Toggle view in webpage
            $('.toggle-view').on('click', function() {
                var employeeId = $(this).data('id');
                $.ajax({
                    url: "{{ route('employees.toggleView') }}",
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: employeeId
                    },
                    success: function(response) {
                        alert(response.success);
                    }
                });
            });

            // Delete employee
            $('.delete-employee').on('click', function() {
                var employeeId = $(this).data('id');
                if (confirm('Are you sure you want to delete this employee?')) {
                    $.ajax({
                        url: '/employees/' + employeeId,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            $('#employee-' + employeeId).remove();
                            alert(response.success);
                        }
                    });
                }
            });
        });
    </script>
</x-app-layout>