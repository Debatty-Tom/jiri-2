<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ $contact->full_name }}</h1>
    <dl class="flex flex-col gap-4 bg-slate-50 p-4">
        <div>
            <dt class="font-bold">{{ __("Contact email") }}</dt>
            <dd>{{ $contact->email }}</dd>
        </div>
    </dl>
    <x-controls.edit-div>
        <x-slot:path>
            {{ "/contacts/$contact->id" }}
        </x-slot:path>
        <x-slot:delete>
            {{ __("Delete this contact") }}
        </x-slot:delete>
        <x-slot:edit>
            {{ __("Modify this Contact") }}
        </x-slot:edit>
    </x-controls.edit-div>
</x-layouts.main>
