<?php

use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeding user table
        $user = [
            [
                'name' => 'Thomas Admin',
                'email' => 'Admin@bookstore.com',
                'is_admin' => '1',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Thomas User',
                'email' => 'user@bookstore.com',
                'is_admin' => '0',
                'password' => bcrypt('123456')
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
