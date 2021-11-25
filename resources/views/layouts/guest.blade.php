<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="container mx-auto px-3">
            <div class="flex justify-end">
                <div class="flex">
                    @if(!auth()->check())
                        <a href="{{ route('register') }}" class="py-5 mr-3">Create account</a>
                        <a href="{{ route('login') }}" class="py-5 mr-3">Sign in</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="font-sans text-gray-900 antialiased py-10">
            {{ $slot }}
        </div>
    </body>
</html>
