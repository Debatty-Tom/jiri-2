<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ __("Modify") }} {{ $project->name }}</h1>
    <form action="/projects/{{ $project->id }}"
          method="post"
          class="flex flex-col gap-6 bg-slate-50 rounded p-4">
        @method('patch')
        @csrf
        <x-controls.label-and-input>
            <x-slot:name>
                {{ __('name') }}
            </x-slot:name>
            <x-slot:label>
                {{ __('Project name') }}
            </x-slot:label>
            <x-slot:specification>
                {{ __('at least 3 caracter and max 255') }}
            </x-slot:specification>
            <x-slot:value>
                {{ $project->name }}
            </x-slot:value>
            <x-slot:placeholder>
                __{{ "Mon examen de première session" }}
            </x-slot:placeholder>
        </x-controls.label-and-input>
        <x-controls.label-and-input>
            <x-slot:name>
                {{ __('description') }}
            </x-slot:name>
            <x-slot:label>
                {{ __('Enter a description') }}
            </x-slot:label>
            <x-slot:specification>
                {{ __('at least 3 caracter and max 255') }}
            </x-slot:specification>
            <x-slot:value>
                {{ $project->description }}
            </x-slot:value>
            <x-slot:placeholder>
                __{{ "Mon projet" }}
            </x-slot:placeholder>
        </x-controls.label-and-input>
        <div class="flex gap-5">
            <x-controls.button-blue>
                {{ __("Save changes") }}
            </x-controls.button-blue>

        </div>
    </form>
</x-layouts.main>
