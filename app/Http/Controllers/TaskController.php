<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // Haal alle taken op uit de database
        $tasks = Task::all();
        
        // Stuur de taken naar de view
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        // Valideer de input
        $request->validate([
            'taak' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'deadline' => 'required|date',
            'omschrijving' => 'nullable|string',
            'budget' => 'nullable|numeric',
        ]);

        // Maak een nieuwe taak aan
        Task::create($request->only(['taak', 'status', 'deadline', 'omschrijving', 'budget']));

        // Redirect naar de index
        return to_route('tasks.index')->with('success', 'Taak succesvol aangemaakt.');
    }

    public function show(Task $task)
    {
        // Stuur de taak naar de view
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
{
    // Valideer de input
    $request->validate([
        'taak' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'deadline' => 'required|date|after:today', // Voorkom dat een datum uit het verleden wordt gekozen
        'omschrijving' => 'nullable|string',
        'budget' => 'nullable|numeric',
    ]);
    

    // Werk de taak bij
    $task->update($request->only(['taak', 'status', 'deadline', 'omschrijving', 'budget']));

    // Redirect naar de index
    return redirect()->route('tasks.index')->with('success', 'Taak succesvol bijgewerkt.');
}


    public function destroy(Task $task)
    {
        // Verwijder de taak
        $task->delete();

        // Redirect naar de index
        return redirect()->route('tasks.index')->with('success', 'Taak succesvol verwijderd.');
    }
}
