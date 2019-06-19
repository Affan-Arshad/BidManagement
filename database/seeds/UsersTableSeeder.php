<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(User::where('id', 1)->first() == null) {
            User::create([
                'name' => 'Admin',
                'email' => 'hikaaprivatelimited@gmail.com',
                'password' => bcrypt('h1k@@5155'),
            ]);
        }
    }
}
