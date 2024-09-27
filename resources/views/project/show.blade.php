<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ $project->name }}</h1>
    <dl class="flex flex-col gap-4 bg-slate-50 p-4">
        <div>
            <dt class="font-bold">{{ __("Project description") }}</dt>
            <dd>{{ $project->description }}</dd>
        </div>
        <x-controls.edit-div>
            <x-slot:path>
                {{ "/projects/$project->id" }}
            </x-slot:path>
            <x-slot:delete>
                {{ __("Delete this project") }}
            </x-slot:delete>
            <x-slot:edit>
                {{ __("Modify this project") }}
            </x-slot:edit>
        </x-controls.edit-div>
    </dl>
</x-layouts.main>
