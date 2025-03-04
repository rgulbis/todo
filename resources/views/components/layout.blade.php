<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? "Uzdevumi un dienasgrāmata" }}</title>  
    <link rel="stylesheet" href="{{ asset("style.css") }}">  
</head>
<body>
    <x-navigation></x-navigation>
    <div class="body">{{ $slot }}</div>
</body>               
</html>