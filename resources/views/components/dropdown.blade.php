<div class="relative" data-role="dropdown">
    <button type="button" class="-m-1.5 flex items-center p-1.5" id="user-menu-button" aria-expanded="false" aria-haspopup="true" @click="showMenuDropDown = !showMenuDropDown">
        <span class="hidden lg:flex lg:items-center">
        <span class="ml-4 text-sm font-semibold leading-6 text-gray-900" aria-hidden="true">{{$buttonContent}}</span>
            <svg class="ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
        </span>
    </button>
    <!--  for dividers -->
    <div class="absolute right-0 z-10 mt-2.5 w-32 divide-y divide-gray-100 origin-top-right  rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none opacity-0" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" >
        {{$content}}
    </div>
</div>
