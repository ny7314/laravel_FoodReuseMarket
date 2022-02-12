<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '仏用包材',
                'sort_order' => 1,
            ],
            [
                'name' => 'オンライン弁当用包材',
                'sort_order' => 2,
            ],
            [
                'name' => 'パーティー用包材',
                'sort_order' => 3,
            ],
        ]);
        DB::table('secondary_categories')->insert([
            [
                'name' => '弁当箱',
                'sort_order' => 1,
                'primary_category_id' => 1,
            ],
            [
                'name' => '弁当蓋',
                'sort_order' => 2,
                'primary_category_id' => 1,
            ],
            [
                'name' => '箸',
                'sort_order' => 3,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'おしぼり',
                'sort_order' => 4,
                'primary_category_id' => 2,
            ],
            [
                'name' => '持ち帰り袋',
                'sort_order' => 5,
                'primary_category_id' => 2,
            ],
            [
                'name' => '保冷剤',
                'sort_order' => 6,
                'primary_category_id' => 2,
            ],
            [
                'name' => 'おしながき',
                'sort_order' => 7,
                'primary_category_id' => 3,
            ],
        ]);
    }
}
