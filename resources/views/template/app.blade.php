<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{ asset('assets/dist/css/tabler.min.css') }}" rel="stylesheet" />

    @livewireStyles

</head>

<body class="antialiased">
    <div class="page">
        <!-- Navbar -->
        @include('template.inc.header')
        <div class="page-wrapper">
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    {{ $slot }}
                </div>
            </div>
            @include('template.inc.footer')
        </div>
    </div>

    {{-- asset --}}
    @livewireScripts
    <script src="{{ asset('assets/dist/js/tabler.min.js') }}" defer></script>
    {{-- asset --}}
</body>

</html>
