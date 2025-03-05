<x-layout>
    <x-slot:title>Edit</x-slot:title>
    <h1>Maini savu uzdevumu</h1>
    <form method="POST" action="/todos/{{ $todo->id }}">
        @csrf
        @method('PUT')
        <label>
            Mainitais uzdevums:
            <input type="text" name="content" value="{{ old("content", $todo->content) }}">
        <label>
        @error("content")
            <p>{{ $message }}</p>
        @enderror
            <br>
        <label>
            Izpildīts: 
            <input name="completed" type="hidden" value="0">
            <input name="completed" type="checkbox" value="1" {{ old("completed", $todo->completed) ? 'checked' : '' }}>     
        </label>
        @error("completed")
            <p>{{ $message }}</p>
        @enderror
            <br> 
        <button>Confirm</button>
    </form>
</x-layout>