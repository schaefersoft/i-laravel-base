<div>
    <div class="relative mb-2">
        <label class="absolute -top-2 left-2 inline-block bg-white dark:bg-gray-900 px-1 text-xs font-medium text-gray-900 dark:text-white" for="{{$name}}">
            {{ $label }}
        </label>
        <input
            class="ring-gray-300  dark:bg-gray-900 text-black dark:text-white block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-theme-600 sm:text-sm sm:leading-6'"
            name="{{$name}}"
            id="{{$name}}"
            type="{{$type}}"
            placeholder="{{$placeholder}}"
            @if($disabled)
                disabled="disabled"
            @endif
            @if($autocomplete)
                autocomplete="{{$autocomplete}}"
            @endif
            @if($autofocus)
                autofocus="autofocus"
            @endif
            @if($required)
                required="required"
            @endif
            value="{{$value}}"
        />
        @error($name)
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>

