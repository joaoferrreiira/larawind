<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{asset('js/init-alpine.js')}}" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="{{asset('js/charts-lines.js')}}" defer></script>
    <script src="{{asset('js/charts-pie.js')}}" defer></script>
    <script src="{{asset('js/charts-bars.js')}}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brands.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('css/regular.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/solid.min.css') }}">

    <script src="{{asset('js/all.js')}}" defer></script>
    <script src="{{asset('js/all.min.js')}}" defer></script>
    <script src="{{asset('js/brands.js')}}" defer></script>
    <script src="{{asset('js/brands.min.js')}}" defer></script>
    <script src="{{asset('js/fontawesome.js')}}" defer></script>
    <script src="{{asset('js/fontawesome.min.js')}}" defer></script>
    <script src="{{asset('js/regular.js')}}" defer></script>
    <script src="{{asset('js/regular.min.js')}}" defer></script>
    <script src="{{asset('js/solid.js')}}" defer></script>
    <script src="{{asset('js/solid.min.js')}}" defer></script>


    @livewireStyles
    <script>
        import Turbolinks from 'turbolinks';
        Turbolinks.start()
    </script>

    <style>
        .pagination {
            display: inline-flex !important;
            align-items: center !important;
        }

        .page-item {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important;
            border-radius: 0.375rem !important;
        }

        .page-item:focus {
            outline: 0;
            box-shadow: 0 0 0 3px rgba(132, 225, 188, 0.45) !important;
        }

        .active {
            background-color: #057a55 !important;
            color: #fff !important;
        }

        .active:hover {
            cursor: default !important;
        }

        .disabled:hover {
            cursor: not-allowed !important;
        }
    </style>

    <!-- Scripts -->
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script> --}}
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('layouts.menu')
        @include('layouts.mobile-menu')

        <div class="flex flex-col flex-1 w-full">
            @include('layouts.navigation-dropdown')
            <main class="h-full overflow-y-auto">
                {{ $slot }}
            </main>
        </div>


        @stack('modals')

        @livewireScripts
    </div>
</body>

</html>