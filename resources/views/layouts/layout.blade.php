<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Importo le icone FontAwesome che mi serviranno per visaulizzare il voto con le icone stelle: -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Styles: istruzione che permette a Laravel di cercare le risorse per Bootstrap ed SCSS: -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <!-- Includo l'header con la navbar per tutte le pagine: -->
    @include('partials.header')

    <div class="container">

        <!-- Contenuto della pagina personalizzato che sarà diverso per tutte le pagine: -->
        @yield('content')
        
    </div>

</body>

</html>
