<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <style>
        .frame {
            border: 1px solid #a1a;
        }
    </style>

    <!-- Fontawesome JS -->
    <script src="https://kit.fontawesome.com/1aa10d38c2.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        @include('partials.navbar')

        <div class="container-fluid">
            <div class="row mb-5">
                <div class="d-flex">
                    @auth
                        <div class="col-md-2">
                            @include('partials.sidebar')
                        </div>
                    @endauth

                    <div class="{{ Auth::check() ? 'col-md-10' : 'col-md-12' }}">
                        <main class="py-3">
                            @yield('content')
                        </main>
                    </div>
                </div>
            </div>

            <div class="row">
                @include('partials.footer')
            </div>
        </div>
    </div>
</body>

</html>
