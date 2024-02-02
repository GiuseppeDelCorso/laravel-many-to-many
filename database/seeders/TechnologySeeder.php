<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [

            [
                'name' => 'Food'
            ],
            [
                'name' => 'Nature'
            ],
            [
                'name' => 'Economy'
            ],
            [
                'name' => 'Cars'
            ],
            [
                'name' => 'Travel'
            ],
            [
                'name' => 'Animal'
            ],

        ];

        foreach ($technologies as $technology) {

            $new_technology = new technology();
            $new_technology->fill($technology);
            $new_technology->save();
        }
    }
}
