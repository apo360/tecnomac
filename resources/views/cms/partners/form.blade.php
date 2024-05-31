<x-app-layout>
    <x-breadcrumb :links="[
        ['label' => 'Home', 'url' => route('dashboard')],
        ['label' => 'Partners', 'url' => '#'],
        ['label' => 'Search Partner', 'url' => '#']
    ]"/>
    <div class="container">
        <h1>{{ isset($partner) ? 'Edit Partner' : 'Create Partner' }}</h1>

        <form action="{{ isset($partner) ? route('partners.update', $partner->id) : route('partners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($partner))
                @method('PUT')
            @endif

            <!-- Name -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $partner->name ?? '' }}" required>
            </div>

            <!-- Image -->
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if(isset($partner) && $partner->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $partner->image) }}" alt="Image" width="50">
                    </div>
                @endif
            </div>

            <!-- Link -->
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ $partner->link ?? '' }}">
            </div>

            <!-- Descriptions -->
            <div class="form-group">
                <label for="descriptions">Descriptions</label>
                <textarea class="form-control" id="descriptions" name="descriptions" rows="4">{{ $partner->descriptions ?? '' }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($partner) ? 'Update' : 'Create' }}</button>
        </form>
    </div>
</x-app-layout>