<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ __("Modify") }} {{ $contact->full_name }}</h1>
    <form action="/contacts/{{ $contact->id }}"
          method="post"
          class="flex flex-col gap-6 bg-slate-50 rounded p-4">
        @method('patch')
        @csrf
        <x-controls.label-and-input>
            <x-slot:name>
                {{ __('firstname') }}
            </x-slot:name>
            <x-slot:label>
                {{ __('Contact first name') }}
            </x-slot:label>
            <x-slot:specification>
                {{ __('at least 3 caracter and max 255') }}
            </x-slot:specification>
            <x-slot:value>
                {{ old('firstname',$contact) }}
            </x-slot:value>
            <x-slot:placeholder>
                __{{ "Richard" }}
            </x-slot:placeholder>
        </x-controls.label-and-input>
        <x-controls.label-and-input>
            <x-slot:name>
                {{ __('lastname') }}
            </x-slot:name>
            <x-slot:label>
                {{ __('Contact last name') }}
            </x-slot:label>
            <x-slot:specification>
                {{ __('at least 3 caracter and max 255') }}
            </x-slot:specification>
            <x-slot:value>
                {{ old('lastname',$contact) }}
            </x-slot:value>
            <x-slot:placeholder>
                __{{ "Durgan" }}
            </x-slot:placeholder>
        </x-controls.label-and-input>
        <x-controls.label-and-input>
            <x-slot:name>
                {{ __('email') }}
            </x-slot:name>
            <x-slot:label>
                {{ __('Email') }}
            </x-slot:label>
            <x-slot:specification>
                {{ __('must be valid. that will allow to invite') }}
            </x-slot:specification>
            <x-slot:value>
                {{ old('email',$contact) }}
            </x-slot:value>
            <x-slot:placeholder>
                __{{ "burt.jacobs@yahoo.com" }}
            </x-slot:placeholder>
        </x-controls.label-and-input>
        <div class="flex gap-5">
            <x-controls.button-blue>
                {{ __("Save changes") }}
            </x-controls.button-blue>
        </div>
    </form>
</x-layouts.main>
