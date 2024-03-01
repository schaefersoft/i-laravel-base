<div>
    <div class="relative mb-2">
        <label class="absolute -top-2 left-2 inline-block bg-white dark:bg-gray-900 px-1 text-xs font-medium text-gray-900 dark:text-gray-300 rounded" for="{{$name}}">
            {{ $label }}
        </label>
        <input
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block w-full  @if($type === "file") px-3 py-2 @else py-1.5 @endif sm:text-sm sm:leading-6"
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
            @if($accept)
                accept="{{$accept}}"
            @endif
        />
        @error($name)
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>

