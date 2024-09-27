<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ __("Create a project") }}</h1>
    <form action="/projects"
          method="post"
          class="flex flex-col gap-8 bg-slate-50 p-4">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="name"
                   class="font-bold">{{ __("Project name") }}<span class="block font-normal">{{ __("at least 3 caracter and max 255") }}</span>
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
        <div class="flex flex-col gap-2">
            <label for="description"
                   class="font-bold">{{ __("Enter a description") }}
                @error('description')
                <span class="block text-red-500">{{ $message }}</span>
                @enderror
            </label>
            <input id="description"
                   type="text"
                   value="{{ old('description') }}"
                   name="description"
                   placeholder="Mon projet"
                   class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2">
        </div>
        <x-controls.button-blue>
            {{ __("Create this new project") }}
        </x-controls.button-blue>
    </form>

</x-layouts.main>
