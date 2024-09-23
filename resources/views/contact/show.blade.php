<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ $contact->firstname }} {{ $contact->lastname }}</h1>
    <dl class="flex flex-col gap-4 bg-slate-50 p-4">
        <div>
            <dt class="font-bold">Contact email</dt>
            <dd>{{ $contact->email }}</dd>
        </div>
    </dl>
</x-layouts.main>
