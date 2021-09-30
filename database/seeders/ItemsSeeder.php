<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'weapons' => [ 
                [
                    'name' => 'Дезолятор',
                    'image' => 'desolator.jpg',
                    'description' => 'хуй'
                ]
            ]
        ];

        foreach ($categories as $category => $items) {
            $category = Category::where('slug', $category)->first();
            
            foreach ($items as $item) {
                $category->items()->create($item);
            }
        }
    }
}
