@extends('layouts.app') 

@section('inhoud') 
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg mx-auto"> 
        <h2 class="text-gray-800 text-2xl font-semibold mb-6">Taak Bewerken</h2> 

        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="flex flex-col"> <!-- Formulier om de taak bij te werken -->
            @csrf <!-- CSRF-token -->
            @method('PUT') <!-- Geeft aan dat dit een PUT-verzoek is, geeft aan dat we een bestaand item bijwerken. -->

            <div class="mb-4"> <!-- Begin van een invoerveld voor de taak. -->
                <label for="taak" class="block text-gray-600 text-sm font-medium mb-1">Taak:</label> <!-- Label voor het invoerveld. -->
                <input type="text" id="taak" name="taak" 
                       class="border border-gray-300 rounded p-2 w-full" 
                       value="{{ old('taak', $task->taak) }}" required> <!-- Waarde wordt ingesteld op de oude waarde of de huidige taak. -->
                @error('taak') <!-- Controleert of er een validatiefout is voor 'taak'. -->
                    <span class="text-red-500 text-sm">{{ $message }}</span> <!-- Foutmelding wordt weergegeven in het rood. -->
                @enderror
            </div>

            <div class="mb-4"> 
                <label for="status" class="block text-gray-600 text-sm font-medium mb-1">Status:</label>
                <input type="text" id="status" name="status" 
                       class="border border-gray-300 rounded p-2 w-full" 
                       value="{{ old('status', $task->status) }}" required> <!-- Waarde wordt ingesteld op de oude waarde of de huidige status. -->
                @error('status') <!-- Controleert of er een validatiefout is voor 'status'. -->
                    <span class="text-red-500 text-sm">{{ $message }}</span> <!-- Foutmelding wordt weergegeven in het rood. -->
                @enderror
            </div>

            <div class="mb-4"> <!-- Begin van een invoerveld voor de deadline. -->
                <label for="deadline" class="block text-gray-600 text-sm font-medium mb-1">Deadline:</label>
                <input type="date" id="deadline" name="deadline" 
                       class="border border-gray-300 rounded p-2 w-full" 
                       value="{{ old('deadline', $task->deadline) }}" 
                       min="{{ now()->format('Y-m-d') }}" required> <!-- Minimaal de huidige datum. -->
                @error('deadline') <!-- Controleert of er een validatiefout is voor 'deadline'. -->
                    <span class="text-red-500 text-sm">{{ $message }}</span> <!-- Foutmelding wordt weergegeven in het rood. -->
                @enderror
            </div>

            <div class="mb-4"> <!-- een invoerveld voor de omschrijving. -->
                <label for="omschrijving" class="block text-gray-600 text-sm font-medium mb-1">Omschrijving:</label>
                <textarea id="omschrijving" name="omschrijving" 
                          class="border border-gray-300 rounded p-2 w-full">{{ old('omschrijving', $task->omschrijving) }}</textarea> <!-- Waarde wordt ingesteld op de oude waarde of de huidige omschrijving. -->
            </div>

            <div class="mb-4"> <!-- een invoerveld voor het budget. -->
                <label for="budget" class="block text-gray-600 text-sm font-medium mb-1">Budget:</label>
                <input type="number" id="budget" name="budget" 
                       class="border border-gray-300 rounded p-2 w-full" 
                       value="{{ old('budget', $task->budget) }}"> <!-- Waarde wordt ingesteld op de oude waarde of het huidige budget. -->
            </div>

            <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md text-lg hover:bg-blue-700 transition duration-200">Wijzigingen Opslaan</button> <!-- Knop om het formulier in te dienen en de wijzigingen op te slaan. -->
        </form>
    </div>
@endsection 
