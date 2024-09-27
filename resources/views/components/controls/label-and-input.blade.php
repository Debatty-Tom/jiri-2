

<div class="flex flex-col gap-2">
    <label for="{{ $name }}"
           class="font-bold">{{ $label }}<span class="block font-normal">{{ $specification }}</span>
        @error("$name")
        <span class="block text-red-500">{{ $message }}</span>
        @enderror
    </label>
    <input id="{{ $name }}"
           type="text"
           value="{{ $value }}"
           name="{{ $name }}"
           placeholder="{{ $placeholder }}"
           class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2">
</div>
