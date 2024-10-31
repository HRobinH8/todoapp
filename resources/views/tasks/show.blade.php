@extends('layouts.app')

@section('inhoud')
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg mx-auto">
        <h2 class="text-gray-800 text-2xl font-semibold mb-6">Taak Details</h2>

        <div class="mb-4">
            <strong class="text-gray-600">Taak:</strong>
            <p class="text-gray-800">{{ $task->taak }}</p>
        </div>

        <div class="mb-4">
            <strong class="text-gray-600">Status:</strong>
            <p class="text-gray-800">{{ $task->status }}</p>
        </div>

        <div class="mb-4">
            <strong class="text-gray-600">Deadline:</strong>
            <p class="text-gray-800">{{ \Carbon\Carbon::parse($task->deadline)->format('d-m-Y') }}</p>
        </div>

        <div class="mb-4">
            <strong class="text-gray-600">Budget:</strong>
            <p class="text-gray-800">{{ $task->budget ? '€' . number_format($task->budget, 2) : 'Geen budget opgegeven' }}</p>
        </div>

        <div class="mb-4">
            <strong class="text-gray-600">Omschrijving:</strong>
            <p class="text-gray-800">{{ $task->omschrijving }}</p>
        </div>

        <div class="mt-6">
            <a href="{{ route('tasks.edit', $task->id) }}" class="inline-block bg-yellow-500 text-white py-2 px-4 rounded-md hover:bg-yellow-600 transition duration-200">Bewerken</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-block bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 transition duration-200">Verwijderen</button>
            </form>
            <a href="{{ route('tasks.index') }}" class="inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-200">Terug naar Overzicht</a>
        </div>
    </div>
@endsection
