<x-layout>
    <x-slot:title>Uzdevumi</x-slot:title>
    <h1>Visi veicamie uzdevumi</h1>
    @foreach ($todos as $todo)
        <li><a class="{{ $todo->completed ? 'strikethrough' : '' }}" href="/todos/{{ $todo->id }}">{{ $todo->content }}</a></li>
    @endforeach
</x-layout>