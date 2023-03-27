<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'GeeksHub') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

         <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />


        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/58c375ca00.js" crossorigin="anonymous"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="h-screen bg-white dark:bg-gray-900 flex flex-col">
            @include('components.nav-dash')
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="h-full w-full flex">
                {{-- Side Bar --}}
                <div class="w-20 md:w-48 h-full border-r border-gray-100">
                    <!--light mode - wide side navigation-->
                    <div class="flex flex-col items-center w-full h-full py-4 px-2 gap-2 text-gray-900 bg-white text-center  capitalize font-medium md:text-left shadow-lg md:items-start">
                        <x-dash-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            <i class="fa-solid fa-house text-lg"></i>
                            <span class="hidden mx-2 md:block">Dashboard</span>      
                        </x-dash-link>
            
                    <x-dash-link :href="route('adminCategories')" :active="request()->routeIs('adminCategories') || request()->routeIs('categories.edit')
                        || request()->routeIs('categories.create')">
                        <i class="fa-solid fa-layer-group text-lg"></i>
                        <span class="hidden mx-2 md:block">categories</span>      
                    </x-dash-link>
            
            
                        <x-dash-link :href="route('adminBooks')" :active="request()->routeIs('adminBooks') || request()->routeIs('books.edit')
                            || request()->routeIs('books.create')">
                            <i class="fa-solid fa-book text-lg"></i>
                            <span class="hidden mx-2 md:block">Books</span>   
                        </x-dash-link>
                        
                        <x-dash-link :href="route('adminGroups')" :active="request()->routeIs('adminGroups')">
                            <i class="fa-solid fa-user-group text-lg"></i>
                            <span class="hidden mx-2 md:block">Groups</span>
                        </x-dash-link>
            
                        <x-dash-link :href="route('adminUsers')" :active="request()->routeIs('adminUsers')">
                            <i class="fas fa-users text-lg"></i>
                            <span class="hidden mx-2 md:block">Users</span>
                    
                        </x-dash-link>
            
                    </div>
                </div>
              
                <div class="p-4 w-full h-full flex flex-col justify-center items-center md:p-6 overflow-y-auto"> 
                    {{ $slot }}
            
                </div>
            
            </main>
        </div>
    </body>
</html>
