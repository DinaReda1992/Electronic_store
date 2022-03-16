<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ElectroStore') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $('#getProductsBtn').on('click', function() {
            var getProductsInput = $('#getProductsInput').val();
            if(getProductsInput === ''){
                alert('Please insert products')
            }else{
                $.ajax({
                url: "/search",
                data: {
                    "query": getProductsInput,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(result) {
                    $('#allProd').empty();
                    $('#allProd').append(result)
                }
            });
            }
        })
        $('#getCategoriesBtn').on('click', function() {
            var getCategoriesInput = $('#getCategoriesInput').val();
            if(getCategoriesInput === ''){
                alert('Please insert categories')
            }else{
                console.log('Test')
                $.ajax({
                url: "/searchCategory",
                data: {
                    "query": getCategoriesInput,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(result) {
                    $('#allCategories').empty();
                    $('#allCategories').append(result)
                }
            });
            }

        })
    </script>
</body>

</html>
