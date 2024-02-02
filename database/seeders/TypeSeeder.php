<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Database dev',
                'description' => 'Dati nel data',
            ],
            [
                'name' => 'Frontend dev',
                'description' => 'Frontend',
            ],
            [
                'name' => 'Backend dev',
                'description' => 'Backend',
            ]
        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->fill($type);
            $newType->save();
        }
    }
}