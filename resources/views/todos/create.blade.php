<x-layout>
    <x-slot:title>Izveidot uzdevumu</x-slot:title>
    <h1>Izveido jaunu uzdevumu</h1> 
    
    <form method="POST" action="/todos">
        @csrf
        <input name="content" value="{{ old("content", "") }}"/>
        <button>Saglabāt</button>
    </form>
    @error("content")
        <p>{{ $message }}</p>
    @enderror
</x-layout>