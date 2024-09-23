<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ $jiri->name }}</h1>
    <dl class="flex flex-col gap-4 bg-slate-50 p-4">
        <div>
            <dt class="font-bold">{{ __("Jiri name") }}</dt>
            <dd>{{ $jiri->name }}</dd>
        </div>
        <div>
            <dt class="font-bold">{{ __("starting at") }}</dt>
            <dd>{{ $jiri->starting_at->diffForHumans() }}
            </dd>
            <dd>
                <time datetime="{{ $jiri->starting_at }}">
                    on {{ $jiri->starting_at->format('d M Y') }}
                    at {{ $jiri->starting_at->format('H:i') }}</time>
            </dd>
        </div>
        <div class="flex gap-5">
            <a class="bg-blue-500 font-bold text-white rounded-md p-2 px-4 tracking-wider uppercase" href="/jiris/{{ $jiri->id }}/edit">{{ __("Modify this Jiri") }}</a>
            <form action="/jiris/{{ $jiri->id }}"
                  method="post">
                @method('delete')
                @csrf
                <input type="hidden"
                       name="id"
                       value="">
                <button type="submit"
                        class="bg-red-500 font-bold text-white rounded-md p-2 px-4 uppercase tracking-wider">{{ __("Delete this Jiri") }}</button>
            </form>
        </div>
    </dl>
</x-layouts.main>
