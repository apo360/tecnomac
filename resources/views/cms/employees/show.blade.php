<x-app-layout>
    <div class="container">
        <h1>Employee Details</h1>
        <div class="card">
            <div class="card-header">
                <h2>{{ $employee->name }}</h2>
            </div>
            <div class="card-body">
                @if($employee->photo)
                    <img src="{{ asset('storage/' . $employee->photo) }}" alt="Photo" class="img-fluid">
                @endif
                <p><strong>Job:</strong> {{ $employee->job }}</p>
                <p><strong>Birthday:</strong> {{ $employee->birthday->format('d/m/Y') }}</p>
                <p><strong>Gender:</strong> {{ $employee->gender }}</p>
                <p><strong>Social Media:</strong></p>
                <ul>
                    @foreach(json_decode($employee->social_media, true) as $platform => $url)
                        <li><a href="{{ $url }}" target="_blank">{{ ucfirst($platform) }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>