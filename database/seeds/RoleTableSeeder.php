<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = array(
            array('role_id' => '1', 'role_nom' => 'Administrateur'),
            array('role_id' => '2', 'role_nom' => 'Dr Casse'),
            array('role_id' => '3', 'role_nom' => 'Seller'),
            array('role_id' => '4', 'role_nom' => 'Buyer'),
            array('role_id' => '5', 'role_nom' => 'Client')
        );
        DB::table('role')->insert($role);
    }
}
