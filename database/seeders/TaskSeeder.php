<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'taak' => 'Voorbeeld taak 1',
            'status' => 'Niet begonnen',
            'deadline' => '2024-12-01',
            'omschrijving' => 'Dit is een voorbeeld taak.',
            'budget' => 100.50
        ]);

        Task::create([
            'taak' => 'Voorbeeld taak 2',
            'status' => 'In uitvoering',
            'deadline' => '2024-11-15',
            'omschrijving' => 'Dit is een tweede voorbeeld taak.',
            'budget' => 250.00
        ]);
    }
}
