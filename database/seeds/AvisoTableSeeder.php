<?php

use App\Institucion;
use App\Aviso;
use Illuminate\Database\Seeder;

class AvisoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aviso')->delete();

        factory(Aviso::class)->times(3)->create();

        $this->command->info('Avisos creados.');
    }
}