<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'type' => 'Alimentare',
                'description' => 'Healty food',
                'date' => '22/11/2001',
            ],
            [
                'type' => 'Games',
                'description' => 'Play friendly',
                'date' => '22/20/2010',
            ],
            [
                'type' => 'Nature',
                'description' => 'Amala',
                'date' => '23/11/2014',
            ],
        ];
        foreach ($types as $type) {

            $new_type = new type();
            $new_type->type = $type['type'];
            $new_type->description = $type['description'];
            $new_type->date =  $type['date'];
            $new_type->save();
        }
    }
}
