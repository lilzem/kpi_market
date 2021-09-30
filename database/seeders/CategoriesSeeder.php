<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'magical' => [
                'name' => 'Магічні'
            ],
            'weapons' => [
                'name' => 'Зброя'
            ],
            'artefacts' => [
                'name' => 'Артефакти'
            ],
            'support' => [
                'name' => 'Підтримка'
            ],
            'armor' => [
                'name' => 'Броня'
            ],

        ];

        foreach ($categories as $slug => $attributes) {
            Category::updateOrCreate(compact('slug'), $attributes);
        }
    }
}
