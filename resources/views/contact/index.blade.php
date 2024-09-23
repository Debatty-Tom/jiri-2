<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ __("Your Contacts") }}</h1>
    <x-contacts.list :contacts="$contacts"/>
    <a class="underline text-blue-500 flex items-center gap-2"
       href="/contacts/create" >{{ __("Create a new contact") }}</a>
</x-layouts.main>
