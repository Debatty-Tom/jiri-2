<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ __("Create a Jiri") }}</h1>
    <form action="/jiris"
          method="post"
          class="flex flex-col gap-8 bg-slate-50 p-4">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="name"
                   class="font-bold">{{ __("Jiri name") }}<span class="block font-normal">{{ __("at least 3 caracter and max 255") }}</span>
                @error('name')
                <span class="block text-red-500">{{ $message }}</span>
                @enderror
            </label>
            <input id="name"
                   type="text"
                   value="{{ old('name') }}"
                   name="name"
                   placeholder='Mon examen de première session'
                   class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2">
        </div>
        @php($now = now()->format('Y-m-d H:i'))
        <div class="flex flex-col gap-2">
            <label for="starting_at"
                   class="font-bold">{{ __("starting at") }}<span class="block font-normal">{{ __("at format") }}</span>
                @error('starting_at')
                <span class="block text-red-500">{{ $message }}</span>
                @enderror
            </label>
            <input id="starting_at"
                   type="text"
                   value="{{ old('starting_at') }}"
                   name="starting_at"
                   placeholder="{{ $now }}"
                   class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2">
        </div>
        <x-controls.button-blue>
            {{ __("Create this new Jiri") }}
        </x-controls.button-blue>
    </form>

</x-layouts.main>
