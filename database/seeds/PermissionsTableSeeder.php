	<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;


class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Users
        Permission::create([
        	'name'         => 'Navegar usuarios',
        	'slug'		   => 'users.index',
        	'description'  => 'lista y navega todos los usuarios del sistema',
        ]);
        //Users
        Permission::create([
        	'name'         => 'Ver detalles de usuarios',
        	'slug'		   => 'users.show',
        	'description'  => 'ver en detalle cada usuario',
        ]);
        //Users
        Permission::create([
        	'name'         => 'Edicion de usuarios',
        	'slug'		   => 'users.edit',
        	'description'  => 'Editar los usuarios del sistema',
        ]);
        //Users
        Permission::create([
        	'name'         => 'Eliminar usuarios',
        	'slug'		   => 'users.destroy',
        	'description'  => 'Eliminar cualquier usuarios del sistema',
        ]);
        //roles
        Permission::create([
        	'name'         => 'Navegar roles',
        	'slug'		   => 'roles.index',
        	'description'  => 'lista y navega todos los roles del sistema',
        ]);
        Permission::create([
        	'name'         => 'Ver detalles de roles',
        	'slug'		   => 'roles.show',
        	'description'  => 'ver en detalle cada roles',
        ]);
         Permission::create([
        	'name'         => 'Creacion de roles',
        	'slug'		   => 'roles.create',
        	'description'  => 'Editar los roles del sistema',
        ]);
        Permission::create([
        	'name'         => 'Edicion de roles',
        	'slug'		   => 'roles.edit',
        	'description'  => 'Editar los roles del sistema',
        ]);
        Permission::create([
        	'name'         => 'Eliminar roles',
        	'slug'		   => 'roles.destroy',
        	'description'  => 'Eliminar cualquier rol del sistema',
        ]);
        //Products
        Permission::create([
        	'name'         => 'Navegar productos',
        	'slug'		   => 'products.index',
        	'description'  => 'lista y navega todos los productos del sistema',
        ]);
        Permission::create([
        	'name'         => 'Ver detalles de productos',
        	'slug'		   => 'products.show',
        	'description'  => 'ver en detalle cada productos',
        ]);
         Permission::create([
        	'name'         => 'Creacion de productos',
        	'slug'		   => 'products.create',
        	'description'  => 'Editar los productos del sistema',
        ]);
        Permission::create([
        	'name'         => 'Edicion de productos',
        	'slug'		   => 'products.edit',
        	'description'  => 'Editar los productos del sistema',
        ]);
        Permission::create([
        	'name'         => 'Eliminar productos',
        	'slug'		   => 'products.destroy',
        	'description'  => 'Eliminar cualquier productos del sistema',
        ]);
    }
}
