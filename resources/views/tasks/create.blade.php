@extends('layouts.app') 

@section('inhoud') >
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg mx-auto"> 
        <h2 class="text-gray-800 text-2xl font-semibold mb-6">Nieuwe Taak Aanmaken</h2> 

        <form action="{{ route('tasks.store') }}" method="POST" class="flex flex-col"> 
            @csrf <!-- cross-site request forgery -->
            
            <div class="mb-4"> <!-- Container voor de taak input -->
                <label for="taak" class="block text-gray-600 text-sm font-medium mb-1">Taak:</label> <!-- Label voor het invoerveld -->
                <input type="text" id="taak" name="taak" 
                       class="border border-gray-300 rounded p-2 w-full" 
                       value="{{ old('taak') }}" required> <!-- Invoerveld voor de taaknaam, behoud informatie mocht er fout zijn -->
                @error('taak') <!-- Controleert of er een fout is met het invoerveld -->
                    <span class="text-red-500 text-sm">{{ $message }}</span> <!-- Weergeven van de foutmelding in het rood -->
                @enderror
            </div>

            <div class="mb-4"> <!-- Container voor de status input -->
                <label for="status" class="block text-gray-600 text-sm font-medium mb-1">Status:</label>
                <input type="text" id="status" name="status" 
                       class="border border-gray-300 rounded p-2 w-full" 
                       value="{{ old('status') }}" required> <!-- Invoerveld voor de status, behoud informatie -->
                @error('status') <!-- Controleert of er een fout is met het invoerveld -->
                    <span class="text-red-500 text-sm">{{ $message }}</span> 
                @enderror
            </div>

            <div class="mb-4"> <!-- Container voor de deadline input -->
                <label for="deadline" class="block text-gray-600 text-sm font-medium mb-1">Deadline:</label>
                <input type="date" id="deadline" name="deadline" 
                       class="border border-gray-300 rounded p-2 w-full" 
                       value="{{ old('deadline') }}" 
                       min="{{ now()->format('Y-m-d') }}" required> <!-- Datum invoerveld met een minimumwaarde van vandaag -->
                @error('deadline') <!-- Controleert of er een fout is met het invoerveld -->
                    <span class="text-red-500 text-sm">{{ $message }}</span> 
                @enderror
            </div>

            <div class="mb-4"> <!-- Container voor de omschrijving input -->
                <label for="omschrijving" class="block text-gray-600 text-sm font-medium mb-1">Omschrijving:</label>
                <textarea id="omschrijving" name="omschrijving" 
                          class="border border-gray-300 rounded p-2 w-full">{{ old('omschrijving') }}</textarea> <!-- Tekstgebied voor de omschrijving, behoud informatie -->
            </div>

            <div class="mb-4"> <!-- Container voor de budget input -->
                <label for="budget" class="block text-gray-600 text-sm font-medium mb-1">Budget:</label>
                <input type="number" id="budget" name="budget" 
                       class="border border-gray-300 rounded p-2 w-full" 
                       value="{{ old('budget') }}"> <!-- invoerveld voor het budget, behoud informatie -->
            </div>

            <!-- Verzendknop voor het formulier -->
            <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md text-lg hover:bg-blue-700 transition duration-200">Taak Aanmaken</button>
        </form>
    </div>
@endsection 
