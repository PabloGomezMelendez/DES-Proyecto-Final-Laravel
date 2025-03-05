<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'administrador',
            'email' => 'admin@gmail.com ',
            'address' => 'Calle 123',
            'phone' => '999999999',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'doctor',
            'email' => 'doctor@gmail.com ',
            'address' => 'Calle 123',
            'phone' => '999999999',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'pacienteUno',
            'email' => 'pacienteUno@gmail.com ',
            'address' => 'Calle 123',
            'phone' => '999999999',
            'password' => Hash::make('12345678')
        ]);

        User::factory(10)->create();
    }
}
