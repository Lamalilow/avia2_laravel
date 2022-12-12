<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CitiesSeeder::class);
        Role::insert([
            'name' => 'Админ'
        ]);
        Role::insert([
            'name' => 'Клиент'
        ]);
        User::insert([
           'name' => 'Admin',
           'login' => 'admin',
           'password' => Hash::make('admin'),
           'role_id' => 1,

        ]);
        User::insert([
            'name' => 'Иван Иванов',
            'login' => 'user',
            'password' => Hash::make('123'),

        ]);
    }
}
