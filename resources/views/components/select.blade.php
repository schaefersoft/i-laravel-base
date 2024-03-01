<div>
    <div class="relative mb-2">
        <label class="absolute -top-2 left-2 inline-block bg-white dark:bg-gray-900 px-1 text-xs font-medium text-gray-900 dark:text-gray-300 rounded" for="{{$name}}">
            {{$label}}
        </label>
        <div class="col-md-10">
            <select name="{{$name}}" id="{{$name}}" @if($required) required @endif @if($multiple) multiple @endif
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block w-full py-1.5  sm:text-sm sm:leading-6">
                {{$slot}}
            </select>
        </div>
    </div>
</div>

