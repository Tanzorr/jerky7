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
        $insert = [
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => bcrypt(env('ADMIN_PASSWORD')),
                'email_verified_at' => 1,
                'created_at' => NULL,
                'updated_at' => NULL
            ],
        ];
        DB::table('users')->insert($insert);
    }
}
