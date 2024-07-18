<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />

    {{-- for running tailwind/vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- ------------------------- --}}

    {{-- poppins font start --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- poppins font end --}}

    {{-- montserrat font start --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playwrite+CU:wght@100..400&display=swap"
        rel="stylesheet">
    {{-- montserrat font end --}}

    {{-- kumbh Sans font start --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
    {{-- kumbh Sans font end --}}

    {{-- playwrite cuba font start --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap" rel="stylesheet">
    {{-- playwrite cuba font end --}}
</head>

<style>
    * {
        font-family: 'Poppins', sans-serif;
    }

    #hm {
        font-family: 'kumbh sans', sans-serif;
    }

    #pm {
        font-family: 'Playwrite CU', sans-serif;
    }

    #notice span {
        color: white
    }
</style>

<body>

    <header>

        {{-- nav-top start --}}
        <x-nav-top />
        {{-- nav-top end --}}

        {{-- nav-banner-dmc start --}}
        <x-nav-banner-dmc />
        {{-- nav-banner-dmc end --}}

    </header>

    <main>
        <x-front-end-navbar />
        {{ $slot }}
    </main>

    <footer>

    </footer>

</body>

</html>
