<div class="container">
    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if($method) @method($method) @endif

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name <i class="fas fa-info-circle" title="Enter the name of the equipment"></i></label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $equipment->name ?? '' }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="brand">Brand <i class="fas fa-info-circle" title="Enter the brand of the equipment"></i></label>
                    <input type="text" class="form-control" id="brand" name="brand" value="{{ $equipment->brand ?? '' }}" required>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="model">Model <i class="fas fa-info-circle" title="Enter the Model of the equipment"></i></label>
                    <input type="text" class="form-control" id="model" name="model" value="{{ $equipment->model ?? '' }}" required>
                    <!-- Add an icon here if needed -->
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="years">Years <i class="fas fa-info-circle" title="Enter the Years of the equipment"></i></label>
                    <input type="number" class="form-control" id="years" name="years" value="{{ $equipment->years ?? '' }}" required>
                    <!-- Add an icon here if needed -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <!-- Price -->
                <div class="form-group">
                    <label for="price">Price <i class="fas fa-info-circle" title="Enter the Price of the equipment"></i></label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $equipment->price ?? '' }}" required>
                    <!-- Add an icon here if needed -->
                </div>
            </div>
            <div class="col-md-4">
                <!-- Weight -->
                <div class="form-group">
                    <label for="weights">Weight <i class="fas fa-info-circle" title="Enter the Weight of the equipment"></i> </label>
                    <input type="text" class="form-control" id="weights" name="weights" value="{{ $equipment->weights ?? '' }}">
                    <!-- Add an icon here if needed -->
                </div>
            </div>
            <div class="col-md-4">
                <!-- Rated Power -->
                <div class="form-group">
                    <label for="rated_power">Rated Power <i class="fas fa-info-circle" title="Enter the Rated Power of the equipment"></i></label>
                    <input type="text" class="form-control" id="rated_power" name="rated_power" value="{{ $equipment->rated_power ?? '' }}">
                    <!-- Add an icon here if needed -->
                </div>
            </div>
        </div>
        <!-- Add similar blocks for other fields -->

        <div class="form-group">
            <label for="descriptions">Descriptions <i class="fas fa-info-circle" title="Enter the descriptions of the equipment"></i></label>
            <textarea class="form-control" id="descriptions" name="descriptions" rows="3" required>{{ $equipment->descriptions ?? '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="images">Images <i class="fas fa-info-circle" title="Upload images of the equipment"></i></label>
            <input type="file" class="form-control" id="images" name="images[]" multiple>
            @if(isset($equipment) && $equipment->images)
                <div class="mt-2">
                    @foreach(explode(',', $equipment->images) as $image)
                        <img src="{{ asset('storage/' . $image) }}" alt="Image" width="50">
                    @endforeach
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
    </form>
</div>
