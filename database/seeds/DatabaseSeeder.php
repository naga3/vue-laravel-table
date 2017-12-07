<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $faker = Faker\Factory::create('ja_JP');
        for ($i = 0; $i < 1000; $i++) {
            App\User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'address' => $faker->address,
            ]);
        }
    }
}
