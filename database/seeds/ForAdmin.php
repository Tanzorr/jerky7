<?php

use Illuminate\Database\Seeder;

class ForAdmin extends Seeder
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
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt(env('ADMIN_PASSWORD')),
                'email_verified_at' => 1,
                'created_at' => NULL,
                'updated_at' => NULL
            ],
        ];
        DB::table('admins')->insert($insert);
    }
}
