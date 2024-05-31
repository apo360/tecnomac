<x-app-layout>

<div class="container">
    <h1>Create Equipment</h1>
    @include('cms.equipment.form', ['action' => route('equipments.store'), 'method' => null, 'equipment' => null, 'buttonText' => 'Create'])
</div>

</x-app-layout>