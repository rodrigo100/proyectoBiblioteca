<?php

use Illuminate\Database\Seeder;
use App\Modelos\Usuario;



class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
  Usuario::create([
        	'nombres' => 'Rodrigo',
        	'apellidos' => 'Acuña',
        	'email' => 'alexsof9@gmail.com',
        	'username' => 'admin',
        	'password' => '123456',
        	'tipo' => 'adm',
        	]);

  Usuario::create([
        	'nombres' => 'Alexander',
        	'apellidos' => 'Reinaga',
        	'email' => 'alexsof9@gmail.com',
        	'username' => 'pub1',
        	'password' => '123456',
        	'tipo' => 'pub',
        	]);

  Usuario::create([
        	'nombres' => 'Alexander',
        	'apellidos' => 'Reinaga',
        	'email' => 'alexsof9@gmail.com',
        	'username' => 'pub2',
        	'password' => '123456',
        	'tipo' => 'pub',
        	]);

  Usuario::create([
        	'nombres' => 'Alexander',
        	'apellidos' => 'Reinaga',
        	'email' => 'alexsof9@gmail.com',
        	'username' => 'lec1',
        	'password' => '123456',
        	'tipo' => 'lec',
        	]);
  Usuario::create([
        	'nombres' => 'Alexander',
        	'apellidos' => 'Reinaga',
        	'email' => 'alexsof9@gmail.com',
        	'username' => 'lec2',
        	'password' => '123456',
        	'tipo' => 'lec',
        	]);
  Usuario::create([
        	'nombres' => 'Alexander',
        	'apellidos' => 'Reinaga',
        	'email' => 'alexsof9@gmail.com',
        	'username' => 'lec3',
        	'password' => '123456',
        	'tipo' => 'lec',
        	]);


    }
}
