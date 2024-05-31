<x-app-layout>
<div class="container">
    <h1>Equipments</h1>
    <a href="{{ route('equipments.create') }}" class="btn btn-success mb-3">Create New Equipment</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Years</th>
                <th>Price</th>
                <th>Weight</th>
                <th>Rated Power</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($equipments as $equipment)
                <tr>
                    <td>{{ $equipment->name }}</td>
                    <td>{{ $equipment->brand }}</td>
                    <td>{{ $equipment->model }}</td>
                    <td>{{ $equipment->years }}</td>
                    <td>{{ $equipment->price }}</td>
                    <td>{{ $equipment->weights }}</td>
                    <td>{{ $equipment->rated_power }}</td>
                    <td>
                        <a href="{{ route('equipments.edit', $equipment->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm delete-equipment" data-id="{{ $equipment->id }}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- jQuery Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('.delete-equipment').on('click', function() {
            if (confirm('Are you sure you want to delete this equipment?')) {
                var equipmentId = $(this).data('id');
                $.ajax({
                    url: '/equipments/' + equipmentId,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        window.location.reload();
                    },
                    error: function(response) {
                        alert('An error occurred while trying to delete the equipment.');
                    }
                });
            }
        });
    });
</script>

</x-app-layout>