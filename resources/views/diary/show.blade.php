<x-layout>
<x-slot:title>
    {{ $diary->title }}
</x-slot:title>
    <h1>{{ $diary->title }}</h1>
    <p>{{ $diary->date }} <br> {{ $diary->body }}</p>
    <a class="button" href="/diaries/{{ $diary->id }}/edit">Edit</a>
</x-layout>
                         