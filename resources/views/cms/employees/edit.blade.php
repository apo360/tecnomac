<x-app-layout>
    <div class="container">
        <h1>Edit Employee</h1>
        <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" required>
            </div>
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" class="form-control" id="photo" name="photo">
                @if($employee->photo)
                    <img src="{{ asset('storage/' . $employee->photo) }}" alt="Photo" class="img-fluid mt-2" width="150">
                @endif
            </div>
            <div class="form-group">
                <label for="job">Job:</label>
                <input type="text" class="form-control" id="job" name="job" value="{{ $employee->job }}" required>
            </div>
            <div class="form-group">
                <label for="birthday">Birthday:</label>
                <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $employee->birthday->format('Y-m-d') }}" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="text" class="form-control" id="gender" name="gender" value="{{ $employee->gender }}" required>
            </div>
            <div class="form-group">
                <label for="social_media">Social Media:</label>
                <input type="text" class="form-control" id="social_media" name="social_media[]" placeholder="Platform: URL" value="{{ implode(',', json_decode($employee->social_media, true)) }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-app-layout>