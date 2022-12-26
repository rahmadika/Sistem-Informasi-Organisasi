<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id'=>'1',
               'name'=>'Fathoni',
               'email'=>'fathoni@gmail.com',
               'password'=> bcrypt('12345678'),
               'level'=>'admin',

               'id'=>'2',
               'name'=>'lala',
               'email'=>'lala@gmail.com',
               'password'=> bcrypt('12345678'),
               'level'=>'user',
            ],
            // [
            //     'username' => 'user',
            //    'name'=>'ini akun User (non admin)',
            //    'email'=>'user@example.com',
            //     'level'=>'user',
            //    'password'=> bcrypt('123456'),
            // ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
