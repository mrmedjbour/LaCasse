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
            array('user_id' => '1', 'user_prenom' => 'admin', 'user_nom' => 'admin', 'user_tel' => '["0542569990"]', 'user_avatar' => 'avatar.svg', 'user_etat' => '1', 'email' => 'admin@example.com', 'password' => '$2y$10$d3XMudyhzeHawmcXeoxGOOAdD978jS3wc0Uoi3KBfK1bacgSVGtpK', 'email_verified_at' => NULL, 'role_id' => '1', 'casse_id' => NULL, 'commune_id' => '1206', 'remember_token' => NULL, 'created_at' => '2020-03-16 18:03:44', 'updated_at' => '2020-03-16 18:03:44'),
            array('user_id' => '2', 'user_prenom' => 'demo', 'user_nom' => 'demo', 'user_tel' => '["0542569990","0696092453"]', 'user_avatar' => 'avatar.svg', 'user_etat' => '1', 'email' => 'demo@example.com', 'password' => '$2y$10$d3XMudyhzeHawmcXeoxGOOAdD978jS3wc0Uoi3KBfK1bacgSVGtpK', 'email_verified_at' => NULL, 'role_id' => '5', 'casse_id' => NULL, 'commune_id' => '1205', 'remember_token' => NULL, 'created_at' => '2020-03-16 18:04:42', 'updated_at' => '2020-03-16 18:04:42')
        );
        DB::table('users')->insert($users);
    }
}
