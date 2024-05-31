<x-app-layout>

<div class="container">
    <h1>Edit Equipment</h1>
    @include('cms.equipment.form', ['action' => route('equipments.update', $equipment->id), 'method' => 'PUT', 'equipment' => $equipment, 'buttonText' => 'Update'])
</div>

</x-app-layout>