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
        DB::table('users')->truncate();

        //factory(\App\User::class,5)->create();

        factory(\App\User::class)->create([
            'name' => 'Eduardo Couto',
            'email' => 'eduardo.lcouto@gmail.com',
            'password' =>  bcrypt('12345'),
            'remember_token' => str_random(10),
        ]);
        factory(\App\User::class)->create([
            'name' => 'Administrador',
            'email' => 'administrador@gmail.com',
            'password' =>  bcrypt('12345'),
            'role'    => \App\User::ROLE_ADMIN,
            'remember_token' => str_random(10),
        ]);
    }
}
