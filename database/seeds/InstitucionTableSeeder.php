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
        	'rut_inst' => '70.355.300­1,',
        	'nombre' => 'Comedor San Antonio',
        	'direccion' => 'Pérez Rosales #833, Valdivia, Chile',
        	'mail' => 'asda@asdasd.com',
        	'telefono' => 98123741,
        	'mision' => "El comedor San Antonio tiene como misión ser un lugar de acogida para la comunidad cristiana, principalmente personas en situación de calle, gente de pocos recursos, que necesita comida, ropa, etc.",
        	"vision" => "La visión de la institución por ahora se enfoca en ser un centro de acogida para toda la comunidad cristiana, la cual pueda ayudar y cobijar a las personas los 365 días del año.",
       	));
        $this->command->info('Institucion creada.');

        $institucion = Institucion::create(array(
            'rut_inst' => '72.493.000-k',
            'nombre' => 'Hogar Belen',
            'direccion' => 'Simpson Nº 398, Valdivia, Chile',
            'mail' => 'hogarbelen@gmail.com',
            'telefono' => 2219909,
            'mision' => "El Hogar Belén es una residencia de protección para preescolares que atiende a 30 niños y niñas de entre uno y seis años cuyos derechos han sido vulnerados y siendo todos los ingresos, a través de Medida de Protección desde Tribunales de Familia.",
            "vision" => "Algún día, no serán necesarios los hogares, porque algún día los derechos de nuestros niños y niñas serán respetados completamente y viviremos en una sociedad mucho mejor. Este es nuestro sueño.",
        ));
        $this->command->info('Institucion 2 creada.');

        $institucion = Institucion::create(array(
            'rut_inst' => '92.164.732-2',
            'nombre' => 'CIFAN',
            'direccion' => 'Calle Ramón Tapia S/N Yañez Zabala, Valdivia, Chile',
            'mail' => 'asd3@asdasd.com',
            'telefono' => 56632340900,
            'mision' => "Proteger, educar y dignificar con esperanza a los niñas, niños y jóvenes de la Provincia de Valdivia más vulnerados en sus derechos fundamentales, a través del respeto, la confianza, el compromiso y el principio de probidad, trabajando en conjunto con la familia.",
            "vision" => "Ser una institución cristiana que, a través de sus programas educativos innovadores, colabora en el mejoramiento de la calidad de vida y el desarrollo humano de los niños, niñas y adolescentes de la Provincia de Valdivia.",
        ));
        $this->command->info('Institucion 3 creada.');

        $institucion = Institucion::create(array(
            'rut_inst' => '65.017.550-6',
            'nombre' => 'Hogar Bella Existencia',
            'direccion' => 'HAVERBECK 1820, Valdivia, Chile',
            'mail' => 'asd4@asdasd.com',
            'telefono' => 87538011,
            'mision' => "La Agrupación Bella Existencia es una organización sin fines de lucro, cuyo principal objetivo es crear y mantener Talleres Protegidos para jóvenes con déficit intelectual que egresan de la Educación Especial. Comenzó a funcionar en Marzo del 2002, al alero de la Escuela Especial Walter Schmidt de Valdivia.",
            "vision" => "Actualmente, trabajan 21 jóvenes en la confección de bolsas de papel con diseños corporativos según sea la demanda y además manualidades en género, lo que les ha ido permitiendo desarrollar una actividad de tipo productiva y comercial además de su desarrollo personal.",
        ));
        $this->command->info('Institucion 4 creada.');

    }
}