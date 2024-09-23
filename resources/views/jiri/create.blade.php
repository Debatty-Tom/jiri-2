<x-layouts.main>
    <h1 class="font-bold text-2xl">Create a Jiri</h1>
    <form action="/jiris"
          method="post"
          class="flex flex-col gap-8 bg-slate-50 p-4">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="name"
                   class="font-bold">Nom du jiri<span class="block font-normal">au moins 3 caractères, au plus 255</span></label>
            <input id="name"
                   type="text"
                   value=" "
                   name="name"
                   placeholder='Mon examen de première session'
                   class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2">
        </div>
        @php($now = now()->format('Y-m-d H:i'))
        <div class="flex flex-col gap-2">
            <label for="starting_at"
                   class="font-bold">Date et heure de début du jiri<span class="block font-normal">au format Y-m-d H:i</span></label>
            <input id="starting_at"
                   type="text"
                   value=" "
                   name="starting_at"
                   placeholder="{{ $now }}"
                   class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2">
        </div>
        <button type="submit"
                class="bg-blue-500 font-bold text-white rounded-md p-2 px-4 tracking-wider uppercase">Créer ce jiri</button>
    </form>

</x-layouts.main>
