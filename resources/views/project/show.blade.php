<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ $project->name }}</h1>
    <dl class="flex flex-col gap-4 bg-slate-50 p-4">
        <div>
            <dt class="font-bold">{{ __("Project description") }}</dt>
            <dd>{{ $project->description }}</dd>
        </div>
        <div class="flex gap-5">
            <a class="bg-blue-500 font-bold text-white rounded-md p-2 px-4 tracking-wider uppercase" href="/projects/{{ $project->id }}/edit">{{ __("Modify this project") }}</a>
            <form action="/projects/{{ $project->id }}"
                  method="post">
                @method('delete')
                @csrf
                <input type="hidden"
                       name="id"
                       value="">
                <button type="submit"
                        class="bg-red-500 font-bold text-white rounded-md p-2 px-4 uppercase tracking-wider">{{ __("Delete this project") }}</button>
            </form>
        </div>
    </dl>
</x-layouts.main>
