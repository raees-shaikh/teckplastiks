<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Thermoplastics',
                'image' => '#'
            ],

            [
                'name' => 'Thermosets',
                'image' => '#'
            ],
            [
                'name' => 'Elastomers',
                'image' => '#'
            ],
            [
                'name' => 'Polycarbonate',
                'image' => '#'
            ],
            [
                'name' => 'Polypropylene',
                'image' => '#'
            ],
            [
                'name' => 'Polyester',
                'image' => '#'
            ],
            [
                'name' => 'Rubber',
                'image' => '#'
            ],
            [
                'name' => 'Acrylic',
                'image' => '#'
            ],

            [
                'name' => 'Nylon66',
                'image' => '#'
            ],
            [
                'name' => 'Natural Fibers',
                'image' => '#'
            ],
            [
                'name' => 'Viscose',
                'image' => '#'
            ],
            [
                'name' => 'Cotton',
                'image' => '#'
            ],
            [
                'name' => 'Carbon',
                'image' => '#'
            ],
            [
                'name' => 'Synthetic Rubber',
                'image' => '#'
            ],
            [
                'name' => 'Glass',
                'image' => '#'
            ],
            [
                'name' => 'ABS',
                'image' => '#'
            ],
            [
                'name' => 'Bamboo Fiber',
                'image' => '#'
            ],

            [
                'name' => 'Epoxy',
                'image' => '#'
            ],
            [
                'name' => 'Resins',
                'image' => '#'
            ],
            [
                'name' => 'Jute',
                'image' => '#'
            ],
            [
                'name' => 'Petrochemical',
                'image' => '#'
            ],


            [
                'name' => 'LLDPE',
                'image' => '#'
            ],
            [
                'name' => 'LDPE',
                'image' => '#'
            ],
            [
                'name' => 'HDPE',
                'image' => '#'
            ],
            [
                'name' => 'Nylon',
                'image' => '#'
            ],
            [
                'name' => 'PVA',
                'image' => '#'
            ],
            [
                'name' => 'UPVC',
                'image' => '#'
            ], [
                'name' => 'PVC',
                'image' => '#'
            ],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'title' => Str::ucfirst($category['name']),
                // 'image' => $category['image'],
                'slug' => Str::slug($category['name']),
                "created_at" => now(),
                "updated_at" => now()
            ]);
        }
    }
}
