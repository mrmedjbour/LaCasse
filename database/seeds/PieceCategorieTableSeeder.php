<?php

use Illuminate\Database\Seeder;

class PieceCategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $piece_categorie = array(
            array('cat_id' => '1','cat_nom' => 'ACCESSOIRES','cat_symbole' => 'cat.svg'),
            array('cat_id' => '2','cat_nom' => 'BV/PONT/TRANSMISSION','cat_symbole' => 'cat.svg'),
            array('cat_id' => '3','cat_nom' => 'CAISSE','cat_symbole' => 'cat.svg'),
            array('cat_id' => '4','cat_nom' => 'DIRECTION','cat_symbole' => 'cat.svg'),
            array('cat_id' => '5','cat_nom' => 'ECHAPPEMENT','cat_symbole' => 'cat.svg'),
            array('cat_id' => '6','cat_nom' => 'ECLAIRAGE','cat_symbole' => 'cat.svg'),
            array('cat_id' => '7','cat_nom' => 'ELECTRICITE','cat_symbole' => 'cat.svg'),
            array('cat_id' => '8','cat_nom' => 'EMBRAYAGE','cat_symbole' => 'cat.svg'),
            array('cat_id' => '9','cat_nom' => 'EQUIPEMENT INT','cat_symbole' => 'cat.svg'),
            array('cat_id' => '10','cat_nom' => 'ESSUYAGE','cat_symbole' => 'cat.svg'),
            array('cat_id' => '11','cat_nom' => 'FREINAGE','cat_symbole' => 'cat.svg'),
            array('cat_id' => '12','cat_nom' => 'GARNISSAGE','cat_symbole' => 'cat.svg'),
            array('cat_id' => '13','cat_nom' => 'GARNISSAGES/EQUIPEMENTS PAVILLON','cat_symbole' => 'cat.svg'),
            array('cat_id' => '14','cat_nom' => 'INJECTION/ALIMENTATION','cat_symbole' => 'cat.svg'),
            array('cat_id' => '15','cat_nom' => 'MOTEUR','cat_symbole' => 'cat.svg'),
            array('cat_id' => '16','cat_nom' => 'PARTIE AR','cat_symbole' => 'cat.svg'),
            array('cat_id' => '17','cat_nom' => 'PARTIE AV','cat_symbole' => 'cat.svg'),
            array('cat_id' => '18','cat_nom' => 'PARTIE LAT','cat_symbole' => 'cat.svg'),
            array('cat_id' => '19','cat_nom' => 'PARTIE SUP','cat_symbole' => 'cat.svg'),
            array('cat_id' => '20','cat_nom' => 'ROUES','cat_symbole' => 'cat.svg'),
            array('cat_id' => '21','cat_nom' => 'SECURITE','cat_symbole' => 'cat.svg'),
            array('cat_id' => '22','cat_nom' => 'TABLEAU DE BORD','cat_symbole' => 'cat.svg'),
            array('cat_id' => '23','cat_nom' => 'THERMIQUE','cat_symbole' => 'cat.svg'),
            array('cat_id' => '24','cat_nom' => 'TRAIN AR','cat_symbole' => 'cat.svg'),
            array('cat_id' => '25','cat_nom' => 'TRAIN AV','cat_symbole' => 'cat.svg'),
            array('cat_id' => '26','cat_nom' => 'VITRAGE','cat_symbole' => 'cat.svg')
        );

        DB::table('piece_categorie')->insert($piece_categorie);
    }
}
