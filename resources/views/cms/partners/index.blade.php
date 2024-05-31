<x-app-layout>
<div class="container">
    <h1>Partners</h1>
    <a href="{{ route('partners.create') }}" class="btn btn-success mb-3">Create New Partner</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Link</th>
                <th>Descriptions</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($partners as $partner)
                <tr>
                    <td>{{ $partner->name }}</td>
                    <td>
                        @if ($partner->image)
                            <img src="{{ asset('storage/app/public/' . $partner->image) }}" alt="Image" width="50">
                        @endif
                    </td>
                    <td>{{ $partner->link }}</td>
                    <td>{{ $partner->descriptions }}</td>
                    <td>
                        <a href="{{ route('partners.edit', $partner->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm delete-partner" data-id="{{ $partner->id }}">Delete</button>
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
        $('.delete-partner').on('click', function() {
            if (confirm('Are you sure you want to delete this partner?')) {
                var partnerId = $(this).data('id');
                $.ajax({
                    url: '/partners/' + partnerId,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        window.location.reload();
                    },
                    error: function(response) {
                        alert('An error occurred while trying to delete the partner.');
                    }
                });
            }
        });
    });
</script>
</x-app-layout>