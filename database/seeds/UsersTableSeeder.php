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
        $users = array(
            array('user_id' => '1', 'user_prenom' => 'demo', 'user_nom' => 'demo', 'user_tel' => '542569990', 'user_avatar' => 'avatar.png', 'user_etat' => '1', 'email' => 'demo@example.com', 'password' => '$2y$10$d3XMudyhzeHawmcXeoxGOOAdD978jS3wc0Uoi3KBfK1bacgSVGtpK', 'email_verified_at' => NULL, 'role_id' => '5', 'casse_id' => NULL, 'commune_id' => '1', 'remember_token' => NULL, 'created_at' => '2020-03-16 18:03:44', 'updated_at' => '2020-03-16 18:03:44'),
            array('user_id' => '2', 'user_prenom' => 'demo', 'user_nom' => 'demo', 'user_tel' => '542569990', 'user_avatar' => 'avatar.png', 'user_etat' => '1', 'email' => 'test@example.com', 'password' => '$2y$10$fQyoIpxWVtGmuXGEOJ3g4.jd9QsM4VSKubW8IjW1eU6SOaJdwD9ti', 'email_verified_at' => NULL, 'role_id' => '5', 'casse_id' => NULL, 'commune_id' => '1', 'remember_token' => NULL, 'created_at' => '2020-03-16 18:04:42', 'updated_at' => '2020-03-16 18:04:42')
        );
        DB::table('users')->insert($users);
    }
}
