<x-app-layout>
    <div class="container">
        <h1>Website Config</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ $config ? route('page-config.update', $config->id) : route('page-config.store') }}" method="POST">
            @csrf
            @if($config) @method('PUT') @endif

            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" id="contact" name="contact" value="{{ $config->contact ?? '' }}" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $config->address ?? '' }}" required>
            </div>
            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $config->facebook ?? '' }}">
            </div>
            <div class="form-group">
                <label for="linkdin">LinkedIn</label>
                <input type="text" class="form-control" id="linkdin" name="linkdin" value="{{ $config->linkdin ?? '' }}">
            </div>
            <div class="form-group">
                <label for="twitter">Twitter</label>
                <input type="text" class="form-control" id="twitter" name="twitter" value="{{ $config->twitter ?? '' }}">
            </div>
            <div class="form-group">
                <label for="youtube">YouTube</label>
                <input type="text" class="form-control" id="youtube" name="youtube" value="{{ $config->youtube ?? '' }}">
            </div>
            <div class="form-group">
                <label for="other">Other</label>
                <input type="text" class="form-control" id="other" name="other" value="{{ $config->other ?? '' }}">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lat">Latitude</label>
                        <input type="text" class="form-control" id="lat" name="lat" value="{{ $config->lat ?? '' }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="longi">Longitude</label>
                        <input type="text" class="form-control" id="longi" name="longi" value="{{ $config->longi ?? '' }}">
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">{{ $config ? 'Update' : 'Submit' }}</button>
        </form>
    </div>
</x-app-layout>