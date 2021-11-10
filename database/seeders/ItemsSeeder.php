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
                'desolator' => [
                    'name' => 'Дезолятор',
                    'image' => 'desolator.jpg',
                    'description' => ''
                ]
            ],

            'magical' => [
                'veil_of_discord' => [
                    'name' => 'Покрив розбрату',
                    'image' => 'VeilOfDiscord.png',
                    'description' => 'Головний убір нечестивих магів'
                ],

                'glimmer_cape' => [
                    'name' => 'Мерехтливий плащ',
                    'image' => 'Glimmer.png',
                    'description' => 'Вкрадений плащ одного великого ілюзіоніста'
                ],

                'force_stuff' => [
                    'name' => 'Посох примусу',
                    'image' => 'forceStuff.png',
                    'description' => 'Ви можете маніпулювати іншими як і з добрими намірами, так і зі злими'
                ],

                'aether_lens' => [
                    'name' => 'Ефірні лінзи',
                    'image' => 'aetherLens.png',
                    'description' => 'Відполірований замовленням останнього подиху - це дар помиаючого мага своєму сину'
                ],

                'eul' => [
                    'name' => 'Божествений скіпетр Еула',
                    'image' => 'eulsScepter.png',
                    'description' => 'Древній загадковий скіпетр, який дозволяє викликати потужні вітри як і з добрими намірами, так і зі злими'
                ],

                'rod_of_atos' => [
                    'name' => 'Патериця Атоса',
                    'image' => 'RodOfAtos.png',
                    'description' => 'У цій простій на вигляд палиці приховав своє єство володар гниття та занепаду Атос'
                ],


                'aghanim' => [
                    'name' => 'Скіпетр Аганіма',
                    'image' => 'Aghanim.png',
                    'description' => 'Скіпетр чарівника, який своєю могутністю міг рівнятися з богами'
                ],

                'refresher' => [
                    'name' => 'Сфера відновлення',
                    'image' => 'Refresher.png',
                    'description' => 'Потужний артефакт для чаклунів'
                ],

            ]
            
        ];

        foreach ($categories as $category => $items) {
            $category = Category::where('slug', $category)->first();
            
            foreach ($items as $article => $item) {
                $category->items()->updateOrCreate(compact('article'), $item);
            }
        }
    }
}
