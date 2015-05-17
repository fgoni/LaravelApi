<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 17/05/2015
 * Time: 01:55 PM
 */

use Illuminate\Database\Seeder;
use App\Marca;

class MarcaTableSeeder extends Seeder {

    public function run()
    {
        DB::table('marcas')->delete();

        Marca::create(array(
            'name' => 'Wanama',
        ));

        Marca::create(array(
            'name' => 'Kosiuko',
        ));

        Marca::create(array(
            'name' => 'Prune',
        ));
    }

}