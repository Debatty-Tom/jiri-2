<div class="flex gap-5">
    <a class="bg-blue-500 font-bold text-white rounded-md p-2 px-4 tracking-wider uppercase" href="{{ $path }}/edit">{{ $edit }}</a>
    <form {{ $attributes->merge(['action' => ' ']) }}
          action="{{ $path }}"
          method="post">
        @method('delete')
        @csrf
        <input type="hidden"
               name="id"
               value="">
        <x-controls.button-danger>
            {{ $delete }}
        </x-controls.button-danger>
    </form>
</div>
