@extends('layouts.app')

@section('inhoud')
    <div class="max-w-7xl mx-auto px-4">
        <div class="mb-4">
            <a href="{{ route('tasks.create') }}" class="inline-block bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">Nieuwe Taak Aanmaken</a>
        </div>

        <h2 class="text-gray-800 text-2xl font-semibold mb-6">Overzicht Taken</h2>

        <div class="bg-white shadow rounded-lg">
            <table class="min-w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 text-left">Taak</th>
                        <th class="py-2 px-4 text-left">Status</th>
                        <th class="py-2 px-4 text-left">Deadline</th>
                        <th class="py-2 px-4 text-left">Budget</th>
                        <th class="py-2 px-4 text-left">Acties</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-2 px-4">
                                <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-600 hover:underline">{{ $task->taak }}</a>
                            </td>
                            <td class="py-2 px-4">{{ $task->status }}</td>
                            <td class="py-2 px-4">{{ \Carbon\Carbon::parse($task->deadline)->format('d-m-Y') }}</td>
                            <td class="py-2 px-4">{{ $task->budget ? '€' . number_format($task->budget, 2) : 'Geen budget' }}</td>
                            <td class="py-2 px-4">
                                <a href="{{ route('tasks.edit', $task->id) }}" class="text-blue-600 hover:underline">Bewerken</a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-green-600 hover:underline ml-2">Voltooien</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
