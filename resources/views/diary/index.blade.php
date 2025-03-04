<x-layout>
    <x-slot:title>
        Dienasgrāmata
    </x-slot:title>
    <h1>Diary's</h1>
    @foreach ($diary as $diar)
        <li><a href="/diaries/{{ $diar->id }}">{{ $diar->title }} {{ $diar->date }} <br> {{ $diar->body }}</a></li><br>
    @endforeach
</x-layout>
                             