<?php
use App\Institucion;
use Illuminate\Database\Seeder;


class InstitucionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institucion')->delete();

        $institucion = Institucion::create(array(
            'rut_inst' => '81.534.189-5',
            'nombre' => 'Comedor San Antonio',
            'direccion' => 'calle falsa 123',
            'mail' => 'asda@asdasd.com',
            'telefono' => 98123741,
            'mision' => "asdasdjalsd",
            "vision" => "alskdmalskdmlaskdlasd"
           ));
       $this->command->info('Institucion creada.');
    }
}