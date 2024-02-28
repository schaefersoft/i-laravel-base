@php
    if(!isset($sidebarNavigation)){
        $sidebarNavigation = [];
    }
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full dark:bg-gray-900">
<head>
    @stack('beforeHeadStart')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @stack('beforeHeadEnd')
</head>
<body class="font-sans antialiased h-full">
<div class="h-full">
    @if(!isset($showMinimal) || !$showMinimal)
        @if(!isset($hideSidebar) || !$hideSidebar)
            <div class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
                <div class="fixed inset-0 bg-gray-900/80 opacity-100 transition-opacity ease-linear duration-300 hidden"
                     id="main-sidebar-backdrop"></div>
                <div class="fixed inset-0 flex hidden" id="main-sidebar">
                    <div class="relative mr-16 flex w-full max-w-xs flex-1">
                        <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                            <button type="button" class="-m-2.5 p-2.5" id="main-sidebar-close-button">
                                <span class="sr-only">Close sidebar</span>
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                        <div
                            class="flex grow flex-col overflow-y-auto bg-gray-900 px-6 pb-4 ring-1 ring-white/10">
                            <div class="flex h-16 shrink-0 items-center">
                                <img class="h-8 w-auto"
                                     src="{{$logo}}"
                                     alt="Your Company">
                            </div>
                            <nav class="flex flex-1 flex-col">
                                <ul role="list" class="flex flex-1 flex-col gap-y-7">
                                    <li>
                                        <ul role="list" class="-mx-2 space-y-1">
                                            @foreach($sidebarNavigation as $navigation)
                                                <li>
                                                    <a href="{{route($navigation['route'])}}"
                                                       class="@if(Route::is($navigation['route'])) bg-gray-800 text-white  @endif group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                                        <x-icon name="fas-{{$navigation['icon']}}" class="h-6 w-6 shrink-0" />
                                                        {{$navigation['name']}}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
                <div class="flex grow flex-col overflow-y-auto bg-gray-900 px-6 pb-4">
                    <div class="flex h-16 shrink-0 items-center">
                        <img class="h-8 w-auto" src="{{$logo}}"
                             alt="Admin">
                    </div>
                    <nav class="flex flex-1 flex-col">
                        <ul role="list" class="flex flex-1 flex-col gap-y-7">
                            <li>
                                <ul role="list" class="-mx-2 space-y-1">
                                    @foreach($sidebarNavigation as $navigation)
                                        <li>
                                            <a href="{{route($navigation['route'])}}"
                                               class="@if(Route::is($navigation['route'])) bg-gray-800 text-white  @endif text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                                <x-icon name="fas-{{$navigation['icon']}}" class="h-6 w-6 shrink-0" />
                                                {{$navigation['name']}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        @endif

        <div class="@if(!isset($hideSidebar) || !$hideSidebar) lg:pl-[16rem] @endif">
            @if(!isset($hideTopbar) || !$hideTopbar)
                <div
                    class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-gray-900 px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8 text-white">
                    <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden" id="main-sidebar-toggle">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                             aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                        </svg>
                    </button>

                    <!-- Separator -->
                    <div class="h-6 w-px bg-gray-900/10 lg:hidden" aria-hidden="true"></div>

                    <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
                        <div class="relative flex flex-1"></div>
                        <div class="flex items-center gap-x-4 lg:gap-x-6">
                            <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-900/10" aria-hidden="true"></div>
                            <div class="relative">
                                <button type="button" class="-m-1.5 flex items-center p-1.5" id="user-menu-button"
                                        aria-expanded="false" aria-haspopup="true" data-dropdown
                                        data-dropdown-target="user-dropdown">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full bg-gray-50"
                                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="">
                                    <span class="hidden lg:flex lg:items-center">
                                        <span class="ml-4 text-sm font-semibold leading-6 text-white" aria-hidden="true">Tom Cook</span>
                                        <svg class="ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                clip-rule="evenodd"/>
                                        </svg>
                                    </span>
                                </button>
                                <div
                                    class="absolute right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none hidden"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1"
                                    id="user-dropdown">
                                    <!-- Active: "bg-gray-50", Not Active: "" -->
                                    <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900 hover:bg-gray-900 hover:text-white" role="menuitem"
                                       tabindex="-1" id="user-menu-item-0">Your profile</a>
                                    <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900 hover:bg-gray-900 hover:text-white" role="menuitem"
                                       tabindex="-1" id="user-menu-item-1">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <main>
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="my-2">
                        <x-base::errors />
                    </div>
                    @yield('content')
                </div>
            </main>
        </div>
    @else
        @yield('content')
    @endif
</div>
@stack('beforeBodyEnd')
</body>
</html>
