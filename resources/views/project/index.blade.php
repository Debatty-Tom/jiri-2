<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ __("Your projects") }}</h1>
    <x-projects.list :projects="$projects"/>
    <a class="underline text-blue-500 flex items-center gap-2"
       href="/projects/create" >{{ __("Create a new project") }}</a>
</x-layouts.main>
