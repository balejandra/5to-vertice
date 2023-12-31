<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'nombres' => 'admin',
            'apellidos' => 'admin',
            'email' => 'admin@admin.com',
            'numero_identificacion'=>'123456789',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'), // password
            'remember_token' => Str::random(10),
            'tipo_usuario' => 'Usuario Interno',
            'institucion_id'=>1
        ]);
        $user->assignRole('Super Admin');

    }
}
