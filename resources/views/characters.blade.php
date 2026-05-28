<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Rick and Morty API</title>

    @vite('resources/css/app.css')

</head>
<body>

    <div class="container">

        <h1>Rick and Morty Characters</h1>

        <div class="cards">

            @foreach($characters as $character)

            <div class="card">

                <img src="{{ $character['image'] }}" alt="">

                <h2>{{ $character['name'] }}</h2>

                <p>Status: {{ $character['status'] }}</p>

                <p>Espécie: {{ $character['species'] }}</p>

            </div>

            @endforeach

        </div>

    </div>

</body>
</html>