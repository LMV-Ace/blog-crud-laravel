<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
        DB::table('posts')->insert([
            'title' => $faker->sentence,
            'body' => $faker->paragraph 
        ]);
	}
        

    }
}
