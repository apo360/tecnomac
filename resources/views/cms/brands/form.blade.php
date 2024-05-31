<x-app-layout>
    <x-breadcrumb :links="[
        ['label' => 'Home', 'url' => route('dashboard')],
        ['label' => 'Brands', 'url' => '#'],
        ['label' => 'Search Brands', 'url' => route('brands.index')],
        ['label' => 'Create Brands', 'url' => '#']
    ]"/>
    <div class="container">
        <h1>{{ isset($brand) ? 'Edit Brand' : 'Create Brand' }}</h1>

        <form action="{{ isset($brand) ? route('brands.update', $brand->id) : route('brands.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($brand))
                @method('PUT')
            @endif

            <!-- Name -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $brand->name ?? '' }}" required>
            </div>

            <!-- Image -->
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if(isset($brand) && $brand->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $brand->image) }}" alt="Image" width="50">
                    </div>
                @endif
            </div>

            <!-- Link -->
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ $brand->link ?? '' }}">
            </div>

            <!-- Descriptions -->
            <div class="form-group">
                <label for="descriptions">Descriptions</label>
                <textarea class="form-control" id="descriptions" name="descriptions" rows="4">{{ $brand->descriptions ?? '' }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($brand) ? 'Update' : 'Create' }}</button>
        </form>
    </div>
</x-app-layout>