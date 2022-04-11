<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insertar_productos_sucursal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1; $i < 10 ; $i++) { 
            DB::table('productos_sucursal')->insert(array(
                'name' => 'producto_sucursal'.$i,
                
            ));# code...
        }
        $this->command->info('Productos insertados con exito!');
    }
}