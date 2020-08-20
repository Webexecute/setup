<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => "Admin Admin",
            'email' => "setup@gmail.com",
            'password' => Hash::make('setup@123'),
            'usertype' => "A",
            'image' => "default.png",
            'isdeleted' => "N",
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
    }
}
