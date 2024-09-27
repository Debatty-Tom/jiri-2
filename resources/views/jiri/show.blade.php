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
        <x-controls.edit-div>
            <x-slot:path>
                {{ "/jiris/$jiri->id" }}
            </x-slot:path>
            <x-slot:delete>
                {{ __("Delete this Jiri") }}
            </x-slot:delete>
            <x-slot:edit>
                {{ __("Modify this Jiri") }}
            </x-slot:edit>
        </x-controls.edit-div>
    </dl>
</x-layouts.main>
