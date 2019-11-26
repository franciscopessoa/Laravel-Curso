<?php

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
        factory(App\User::class)->create([
            'name' => 'Francisco Pessoa',
            'email' => 'admin@gmail.com',
            'password' => Hash::make("secret")
        ]);
    }
}
