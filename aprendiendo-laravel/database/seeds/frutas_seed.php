<?php

use Illuminate\Database\Seeder;

class frutas_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //aqui rellenar las tablas
        for ($i=0; $i < 20 ; $i++) {
            DB :: table('frutas')->insert(
                 array(
                    'nombre' => 'Cereza '.$i,
                    'descripcion' => 'descripcion de la fruta'.$i,
                    'precio' =>$i,
                    'fecha' =>date('Y-m-d')
                )
            );
        }
        //mensaje de que se creo la tabla
        $this->command->info('la tabla de frutas ha sido rellenada');
    }
}
