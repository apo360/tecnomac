<!-- cms/category/create.blade.php -->
<x-app-layout>
    <x-breadcrumb :links="[
        ['label' => 'Home', 'url' => route('dashboard')],
        ['label' => 'Category', 'url' => '#'],
        ['label' => 'Search Category', 'url' => route('categories.index')],
        ['label' => 'Create Category', 'url' => '#']
    ]"/>

    <div class="container">
        <h1>{{ isset($category) ? 'Edit Category' : 'Create Category' }}</h1>
        <form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($category))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $category->description ?? '') }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                @if(isset($category) && $category->icon)
                    <div class="mb-2">
                        <img src="{{ asset('storage/categories/' . $category->icon) }}" alt="Category Icon" width="100">
                    </div>
                @endif
                <input type="file" class="form-control-file" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($category) ? 'Update' : 'Create' }}</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</x-app-layout>