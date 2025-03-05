<x-layout>
    <x-slot:title>Edit</x-slot:title>
    <h1>Edito savu dienasgrāmatu</h1>

    <form method="POST" action="/diaries/{{ $diary->id }}">
        @csrf
        @method('PUT')
        <input name="title" value="{{ old("title", $diary->title) }}"/> <input name="date" type="date" value="{{ old("date", $diary->date) }}"><br>
        <textarea name="body">{{ old("body", $diary->body) }}</textarea><br>
        <button>Saglabāt</button>
    </form>
    @error("title")
        <p>{{ $message }}</p>
    @enderror
    @error("body")
        <p>{{ $message }}</p>
    @enderror
    @error("date")
        <p>{{ $message }}</p>
    @enderror
</x-layout>