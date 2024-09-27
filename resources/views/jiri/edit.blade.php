<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ __("Modify") }} {{ $jiri->name }}</h1>
    <form action="/jiris/{{ $jiri->id }}"
          method="post"
          class="flex flex-col gap-6 bg-slate-50 rounded p-4">
        @method('patch')
        @csrf
        <x-controls.label-and-input>
            <x-slot:name>
                {{ __('name') }}
            </x-slot:name>
            <x-slot:label>
                {{ __('Jiri name') }}
            </x-slot:label>
            <x-slot:specification>
                {{ __('at least 3 caracter and max 255') }}
            </x-slot:specification>
            <x-slot:value>
                {{ old('name', $jiri) }}
            </x-slot:value>
            <x-slot:placeholder>
                __{{ "Mon examen de première session" }}
            </x-slot:placeholder>
        </x-controls.label-and-input>
        @php($now = now()->format('Y-m-d H:i'))
        <x-controls.label-and-input>
            <x-slot:name>
                {{ __('starting_at') }}
            </x-slot:name>
            <x-slot:label>
                {{ __('starting at') }}
            </x-slot:label>
            <x-slot:specification>
                {{ __('at format') }}
            </x-slot:specification>
            <x-slot:value>
                {{ old('starting_at', $jiri->starting_at->format('Y-m-d H:i')) }}
            </x-slot:value>
            <x-slot:placeholder>
                {{ $now }}
            </x-slot:placeholder>
        </x-controls.label-and-input>
        <div class="flex gap-5">
            <x-controls.button-blue>
                {{ __("Save changes") }}
            </x-controls.button-blue>
        </div>
    </form>
</x-layouts.main>
