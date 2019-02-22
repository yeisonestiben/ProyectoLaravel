<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Creamos el adminstrador para crear rol
     * @return void
     */
    public function run()
    {
   		factory(App\User::class,20)->create();  
   		Role::create([
   			'name'  =>'Admin',
   			'slug'  =>'Admin',
   			'special'  =>'all-access',
   		]);   
    }
}
