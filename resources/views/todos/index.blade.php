<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veicamie uzdevumi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <x-navigation></x-navigation>
    <h1>Visi veicamie uzdevumi</h1>
    <ul>
    @foreach ($todos as $todo)
        <li><a href="/todos/{{ $todo->id }}">{{ $todo->content }}</a></li>
    @endforeach
    </ul>
       
</body>
</html>