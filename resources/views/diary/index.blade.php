<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mana Grega Dienasgramata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <x-navigation></x-navigation>
    <h1>Visi diary kautkas</h1>
    <ul>
    @foreach ($diary as $diar)
        <li>{{ $diar->title }} {{ $diar->date }} <br> {{ $diar->body }}</li>
    @endforeach
    </ul>
       
</body>
</html>