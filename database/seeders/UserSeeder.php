<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            'name' => 'Carlos Ramirez',
            'email' => 'dev@ac3softstudiosco.com',
            'phone' => '3223672315',
            'rol' => 'Desarrollador',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Manuel Falla',
            'email' => 'dev1@ac3softstudiosco.com',
            'phone' => '3197988740',
            'rol' => 'Desarrollador',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
        ]);

        User::factory(99)->create();
    }
}
