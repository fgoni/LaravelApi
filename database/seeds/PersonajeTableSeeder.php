<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 17/05/2015
 * Time: 02:12 PM
 */

use Illuminate\Database\Seeder;
use App\Personaje;

class PersonajeTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('personajes')->delete();

        Personaje::create(array(
            'name' => 'Ariana',
        ));

        Personaje::create(array(
            'name' => 'Rafael Valmora',
        ));

        Personaje::create(array(
            'name' => 'Roby Bettini',
        ));
    }

}