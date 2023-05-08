<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        sales::create([
            'nombre_vendedor' => 'Yorgs',
            'nombre_cliente' =>' Estiven',
            'nombre_producto' =>' Camiseta',
            'precio' => 50000,
            'fecha_compra' =>' 08/05/2023',
        ]);

        sales::create([
            'nombre_vendedor' => 'Nicolas',
            'nombre_cliente' => 'Laura',
            'nombre_producto' =>' Falda',
            'precio' => 60000,
            'fecha_compra' =>' 07/05/2023',
        ]);

        
        sales::create([
            'nombre_vendedor' => 'Jhon',
            'nombre_cliente' => 'Sofia',
            'nombre_producto' =>' Zapatos',
            'precio' => 90000,
            'fecha_compra' =>' 06/05/2023',
        ]);

        
    }
}
