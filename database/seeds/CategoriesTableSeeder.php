<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name_list = ['Development', 'Design', 'Networking', 'Tools', 'Life'];

        for ($i = 0; $i < count($name_list); $i++) { 
            DB::table('categories')->insert([
                'name' => $name_list[$i],
                'description' => 'some description here...',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
