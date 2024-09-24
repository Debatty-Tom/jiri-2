<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ $contact->full_name }}</h1>
    <dl class="flex flex-col gap-4 bg-slate-50 p-4">
        <div>
            <dt class="font-bold">{{ __("Contact email") }}</dt>
            <dd>{{ $contact->email }}</dd>
        </div>
    </dl>
    <div class="flex gap-5">
        <a class="bg-blue-500 font-bold text-white rounded-md p-2 px-4 tracking-wider uppercase" href="/contacts/{{ $contact->id }}/edit">{{ __("Modify this Contact") }}</a>
        <form action="/contacts/{{ $contact->id }}"
              method="post">
            @method('delete')
            @csrf
            <input type="hidden"
                   name="id"
                   value="">
            <button type="submit"
                    class="bg-red-500 font-bold text-white rounded-md p-2 px-4 uppercase tracking-wider">{{ __("Delete this contact") }}</button>
        </form>
    </div>
</x-layouts.main>
