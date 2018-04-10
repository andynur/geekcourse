<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach ( range(1, 10) as $index ) {
	        DB::table('courses')->insert([
                'title' => $faker->sentence,
                'description' => $faker->text,
                'rating' => $faker->randomDigit,
                'student_enroll' => $faker->randomDigit,
                'category_id' => $faker->numberBetween(1, 5),
                'creator_id' => $faker->numberBetween(1, 10),
                'language' => 'english',
                'price' => $faker->randomNumber(6),
                'discount' => $faker->randomNumber(2),
                'include' => $faker->text,
                'thumbnail' => $faker->imageUrl(640, 480, 'cats'),
                'video' => 'https://www.youtube.com/watch?v=AOIvk4beMcc',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
