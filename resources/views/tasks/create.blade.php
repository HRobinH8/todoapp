@extends('layouts.app')

@section('inhoud')
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg mx-auto">
        <h2 class="text-gray-800 text-2xl font-semibold mb-6">Nieuwe Taak Aanmaken</h2>

        <form action="{{ route('tasks.store') }}" method="POST" class="flex flex-col">
            @csrf
            
            <div class="mb-4">
                <label for="taak" class="block text-gray-600 text-sm font-medium mb-1">Taak:</label>
                <input type="text" id="taak" name="taak" 
                       class="border border-gray-300 rounded p-2 w-full" 
                       value="{{ old('taak') }}" required>
                @error('taak')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="status" class="block text-gray-600 text-sm font-medium mb-1">Status:</label>
                <input type="text" id="status" name="status" 
                       class="border border-gray-300 rounded p-2 w-full" 
                       value="{{ old('status') }}" required>
                @error('status')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="deadline" class="block text-gray-600 text-sm font-medium mb-1">Deadline:</label>
                <input type="date" id="deadline" name="deadline" 
                       class="border border-gray-300 rounded p-2 w-full" 
                       value="{{ old('deadline') }}" 
                       min="{{ now()->format('Y-m-d') }}" required>
                @error('deadline')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="omschrijving" class="block text-gray-600 text-sm font-medium mb-1">Omschrijving:</label>
                <textarea id="omschrijving" name="omschrijving" 
                          class="border border-gray-300 rounded p-2 w-full">{{ old('omschrijving') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="budget" class="block text-gray-600 text-sm font-medium mb-1">Budget:</label>
                <input type="number" id="budget" name="budget" 
                       class="border border-gray-300 rounded p-2 w-full" 
                       value="{{ old('budget') }}">
            </div>

            <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md text-lg hover:bg-blue-700 transition duration-200">Taak Aanmaken</button>
        </form>
    </div>
@endsection
