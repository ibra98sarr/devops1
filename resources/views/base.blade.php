<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base Page</title>
</head>
<body>
    <!-- Inclusion de la barre de navigation -->
    @include('navbar')

    <!-- Espace pour afficher le contenu spécifique de chaque vue -->
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
 
