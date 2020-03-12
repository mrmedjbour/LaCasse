<?php

use Illuminate\Database\Seeder;

class WilayaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wilaya = array(
            array('wilaya_id' => '1','wilaya_nom' => 'ADRAR'),
            array('wilaya_id' => '2','wilaya_nom' => 'AIN TEMOUCHENT'),
            array('wilaya_id' => '3','wilaya_nom' => 'AIN-DEFLA'),
            array('wilaya_id' => '4','wilaya_nom' => 'ALGER'),
            array('wilaya_id' => '5','wilaya_nom' => 'ANNABA'),
            array('wilaya_id' => '6','wilaya_nom' => 'Bordj Bou Arreridj'),
            array('wilaya_id' => '7','wilaya_nom' => 'BATNA'),
            array('wilaya_id' => '8','wilaya_nom' => 'BECHAR'),
            array('wilaya_id' => '9','wilaya_nom' => 'BEJAIA'),
            array('wilaya_id' => '10','wilaya_nom' => 'BISKRA'),
            array('wilaya_id' => '11','wilaya_nom' => 'BLIDA'),
            array('wilaya_id' => '12','wilaya_nom' => 'BOUIRA'),
            array('wilaya_id' => '13','wilaya_nom' => 'BOUMERDES'),
            array('wilaya_id' => '14','wilaya_nom' => 'Chlef'),
            array('wilaya_id' => '15','wilaya_nom' => 'CONSTANTINE'),
            array('wilaya_id' => '16','wilaya_nom' => 'DJELFA'),
            array('wilaya_id' => '17','wilaya_nom' => 'EL BAYADH'),
            array('wilaya_id' => '18','wilaya_nom' => 'EL TARF'),
            array('wilaya_id' => '19','wilaya_nom' => 'EL-OUED'),
            array('wilaya_id' => '20','wilaya_nom' => 'GHARDAIA'),
            array('wilaya_id' => '21','wilaya_nom' => 'GUELMA'),
            array('wilaya_id' => '22','wilaya_nom' => 'ILLIZI'),
            array('wilaya_id' => '23','wilaya_nom' => 'Jijel'),
            array('wilaya_id' => '24','wilaya_nom' => 'KHENCHELA'),
            array('wilaya_id' => '25','wilaya_nom' => 'LAGHOUAT'),
            array('wilaya_id' => '26','wilaya_nom' => 'MASCARA'),
            array('wilaya_id' => '27','wilaya_nom' => 'MEDEA'),
            array('wilaya_id' => '28','wilaya_nom' => 'MILA'),
            array('wilaya_id' => '29','wilaya_nom' => 'MOSTAGANEM'),
            array('wilaya_id' => '30','wilaya_nom' => 'M\'SILA'),
            array('wilaya_id' => '31','wilaya_nom' => 'NAAMA'),
            array('wilaya_id' => '32','wilaya_nom' => 'ORAN'),
            array('wilaya_id' => '33','wilaya_nom' => 'OUARGLA'),
            array('wilaya_id' => '34','wilaya_nom' => 'Oum El Bouaghi'),
            array('wilaya_id' => '35','wilaya_nom' => 'RELIZANE'),
            array('wilaya_id' => '36','wilaya_nom' => 'SAIDA'),
            array('wilaya_id' => '37','wilaya_nom' => 'SETIF'),
            array('wilaya_id' => '38','wilaya_nom' => 'Sidi Bel Abbes'),
            array('wilaya_id' => '39','wilaya_nom' => 'SKIKDA'),
            array('wilaya_id' => '40','wilaya_nom' => 'SOUK AHRAS'),
            array('wilaya_id' => '41','wilaya_nom' => 'Tamanrasset'),
            array('wilaya_id' => '42','wilaya_nom' => 'TEBESSA'),
            array('wilaya_id' => '43','wilaya_nom' => 'Tiaret'),
            array('wilaya_id' => '44','wilaya_nom' => 'Tindouf'),
            array('wilaya_id' => '45','wilaya_nom' => 'TIPAZA'),
            array('wilaya_id' => '46','wilaya_nom' => 'Tissemsilt'),
            array('wilaya_id' => '47','wilaya_nom' => 'Tizi Ouzou'),
            array('wilaya_id' => '48','wilaya_nom' => 'TLEMCEN')
        );

        DB::table('wilaya')->insert($wilaya);
    }
}
