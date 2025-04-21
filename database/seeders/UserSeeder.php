<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'Rody Huancas';
        $user->email = 'rody@correo.com';
        $user->password = bcrypt('12345678');
        $user->avatar = "";

        $user->save();

        $user = new User();

        $user->name = 'Mercedes Carrasco';
        $user->email = 'meche@correo.com';
        $user->password = bcrypt('12345678');
        $user->avatar = "";

        $user->save();
    }
}
