<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('MarcaTableSeeder');
        $this->command->info('Marcas table seeded.');
        $this->call('ProgramaTableSeeder');
        $this->command->info('Programa table seeded.');
        $this->call('PersonajeTableSeeder');
        $this->command->info('Personajes table seeded.');

    }

}
