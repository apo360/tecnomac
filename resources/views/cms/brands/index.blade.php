<x-app-layout>
    <div class="container">
        <h1>Brands</h1>
        <a href="{{ route('brands.create') }}" class="btn btn-success mb-3">Create New Brand</a>

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
                @foreach($brands as $brand)
                    <tr>
                        <td>{{ $brand->name }}</td>
                        <td>
                            @if ($brand->image)
                                <img src="{{ asset('storage/app/public/' . $brand->image) }}" alt="Image" width="50">
                            @endif
                        </td>
                        <td>{{ $brand->link }}</td>
                        <td>{{ $brand->descriptions }}</td>
                        <td>
                            <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm delete-brand" data-id="{{ $brand->id }}">Delete</button>
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
            $('.delete-brand').on('click', function() {
                if (confirm('Are you sure you want to delete this brand?')) {
                    var brandId = $(this).data('id');
                    $.ajax({
                        url: '/brands/' + brandId,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            window.location.reload();
                        },
                        error: function(response) {
                            alert('An error occurred while trying to delete the brand.');
                        }
                    });
                }
            });
        });
    </script>

</x-app-layout>