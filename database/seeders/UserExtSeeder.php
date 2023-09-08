<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserExtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'nombres' => 'User',
            'apellidos' => 'Prueba',
            'email' => 'user@user.com',
            'numero_identificacion'=>'987654321',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'), // password
            'remember_token' => Str::random(10),
            'tipo_usuario' => 'Usuario Externo',
            'institucion_id'=>30

        ]);
        $user->assignRole('Autor Origen');
    }
}
