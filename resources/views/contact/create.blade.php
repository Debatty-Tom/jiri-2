<x-layouts.main>
    <h1 class="font-bold text-2xl">{{ __("Create a Jiri") }}</h1>
    <form action="/contacts"
          method="post"
          class="flex flex-col gap-8 bg-slate-50 p-4">
        @csrf
            <div class="flex flex-col gap-2">
                <label for="firstname"
                       class="font-bold">{{ __("Contact first name") }}<span class="block font-normal">{{ __("at least 3 caracter and max 255") }}</span>
                    @error('firstname')
                    <span class="block text-red-500">{{ $message }}</span>
                    @enderror
                </label>
                <input id="firstname"
                       type="text"
                       value="{{ old('firstname') }}"
                       name="firstname"
                       placeholder='Richard'
                       class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="lastname"
                       class="font-bold">{{ __("Contact last name") }}<span class="block font-normal">{{ __("at least 3 caracter and max 255") }}</span>
                    @error('lastname')
                    <span class="block text-red-500">{{ $message }}</span>
                    @enderror
                </label>
                <input id="lastname"
                       type="text"
                       value="{{ old('lastname') }}"
                       name="lastname"
                       placeholder='Durgan'
                       class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="email"
                       class="font-bold">{{ __("Email") }}<span class="block font-normal">{{ __("must be valid. that will allow to invite") }}</span>
                    @error('email')
                    <span class="block text-red-500">{{ $message }}</span>
                    @enderror
                </label>
                <input id="email"
                       type="text"
                       value="{{ old('email') }}"
                       name="name"
                       placeholder='burt.jacobs@yahoo.com'
                       class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2">
            </div>
        <button type="submit"
                class="bg-blue-500 font-bold text-white rounded-md p-2 px-4 tracking-wider uppercase">{{ __("Create this new Contact") }}</button>
    </form>

</x-layouts.main>
