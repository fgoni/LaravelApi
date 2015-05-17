<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 17/05/2015
 * Time: 02:12 PM
 */

use Illuminate\Database\Seeder;
use App\Programa;

class ProgramaTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('programas')->delete();

        Programa::create(array(
            'name' => 'Tu cara me suena',
        ));

        Programa::create(array(
            'name' => 'Escape Perfecto',
        ));

        Programa::create(array(
            'name' => 'Entre Canibales',
        ));
    }

}