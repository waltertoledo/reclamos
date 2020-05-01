<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name'=>'Acceso a Categorias',
            'slug'=>'categorias.index',
            'description'=>'Mostrar el menú de Categorias'
        ]);
    }
}
