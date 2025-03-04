<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show todo</title>
    <link rel="stylesheet" href="{{ asset("style.css") }}">
</head>
<body>
    <x-navigation></x-navigation>
    <ul>
        <h1>{{ $todo->content }}</h1>
        <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>
    </ul>  
</body>
</html>