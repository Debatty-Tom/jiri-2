

<form {{ $attributes->merge(['action' => ' ']) }}
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
