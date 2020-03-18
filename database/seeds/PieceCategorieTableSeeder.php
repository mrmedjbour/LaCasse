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
            array('cat_id' => '1', 'cat_nom' => 'PIÈCES AVANT', 'cat_symbole' => 'PIÈCES AVANT.jpg'),
            array('cat_id' => '2', 'cat_nom' => 'PIÈCES ARRIÈRE', 'cat_symbole' => 'PIÈCES ARRIÈRE.jpg'),
            array('cat_id' => '3', 'cat_nom' => 'DIRECTION', 'cat_symbole' => 'DIRECTION.jpg'),
            array('cat_id' => '4', 'cat_nom' => 'ECHAPPEMENT', 'cat_symbole' => 'ECHAPPEMENT.jpg'),
            array('cat_id' => '5', 'cat_nom' => 'ROUES', 'cat_symbole' => 'ROUES.jpg'),
            array('cat_id' => '6', 'cat_nom' => 'FREINAGE', 'cat_symbole' => 'FREINAGE.jpg'),
            array('cat_id' => '7', 'cat_nom' => 'TRAIN ARRIERE', 'cat_symbole' => 'TRAIN ARRIERE.jpg'),
            array('cat_id' => '8', 'cat_nom' => 'SUSPENSION', 'cat_symbole' => 'SUSPENSION.jpg'),
            array('cat_id' => '9', 'cat_nom' => 'DEMI-TRAIN', 'cat_symbole' => 'DEMI-TRAIN.jpg'),
            array('cat_id' => '10', 'cat_nom' => 'TRAIN AVANT', 'cat_symbole' => 'TRAIN AVANT.jpg'),
            array('cat_id' => '11', 'cat_nom' => 'MOTEUR', 'cat_symbole' => 'MOTEUR.jpg'),
            array('cat_id' => '12', 'cat_nom' => 'BV - PONT - TRANSMISSION', 'cat_symbole' => 'BV - PONT - TRANSMISSION.jpg'),
            array('cat_id' => '13', 'cat_nom' => 'ELECTRICITE', 'cat_symbole' => 'ELECTRICITE.jpg'),
            array('cat_id' => '14', 'cat_nom' => 'INJECTION - ALIMENTATION', 'cat_symbole' => 'INJECTION - ALIMENTATION.jpg'),
            array('cat_id' => '15', 'cat_nom' => 'ALLUMAGE', 'cat_symbole' => 'ALLUMAGE.jpg'),
            array('cat_id' => '16', 'cat_nom' => 'THERMIQUE', 'cat_symbole' => 'THERMIQUE.jpg'),
            array('cat_id' => '17', 'cat_nom' => 'CALCULATEUR MOTEUR', 'cat_symbole' => 'CALCULATEUR MOTEUR.jpg'),
            array('cat_id' => '18', 'cat_nom' => 'PIÈCES INTÉRIEUR', 'cat_symbole' => 'PIÈCES INTÉRIEUR.jpg'),
            array('cat_id' => '19', 'cat_nom' => 'PIÈCES LATÉRAL', 'cat_symbole' => 'PIÈCES LATÉRAL.jpg')
        );

        DB::table('piece_categorie')->insert($piece_categorie);
    }
}
