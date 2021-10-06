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
                    'description' => ''
                ]
            ],

            'magical' => [
                [
                    'name' => 'Покрив розбрату',
                    'image' => 'VeilOfDiscord.png',
                    'description' => ''
                ],

                [
                    'name' => 'Мерехтливий плащ',
                    'image' => 'Glimmer.png',
                    'description' => ''
                ],

                [
                    'name' => 'Посох примусу',
                    'image' => 'forceStuff.png',
                    'description' => ''
                ],

                [
                    'name' => 'Ефірні лінзи',
                    'image' => 'aetherLens.png',
                    'description' => ''
                ],

                [
                    'name' => 'Божествений скіпетр Еула',
                    'image' => 'eulsScepter.png',
                    'description' => ''
                ],

                [
                    'name' => 'Патериця Атоса',
                    'image' => 'RodOfAtos.png',
                    'description' => ''
                ],


                [
                    'name' => 'Скіпетр Аганіма',
                    'image' => 'Aghanim.png',
                    'description' => ''
                ],

                [
                    'name' => 'Сфера відновлення',
                    'image' => 'Refresher.png',
                    'description' => ''
                ],

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
