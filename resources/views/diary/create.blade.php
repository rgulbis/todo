<x-layout>
    <x-slot:title>Izveidot stastu</x-slot:title>
    <h1>Izveido jaunu stastu</h1> 
    
    <form method="POST" action="/diaries">
        @csrf
        <input name="title" value="{{ old("title", "") }}"/> <input name="date" type="date" value="{{ old("date", "") }}"><br>
        <textarea name="body">{{ old("body", "") }}</textarea><br>
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