<button
    id="{{$id}}"
    class="mb-2 flex items-center w-full h-10 justify-center rounded-md px-3 text-sm font-semibold leading-6 text-white
    shadow-sm enabled:bg-theme-600 py-1.5 enabled:hover:bg-theme-500 focus-visible:outline-theme-600
    focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 disabled:bg-theme-500
    disabled:opacity-60 {{$class}}"

    @if($isSubmit)
        type="submit"
    @else
        type="button"
    @endif
>{{$label ?? $slot}}</button>
