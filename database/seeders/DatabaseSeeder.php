<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat 1 akun Admin
        User::create([
            'name' => 'Admin Ganteng',
            'email' => 'ahmadrijalmaulidina@gmail.com',
            'password' => Hash::make('serang1980'), // Ingat password ini!
        ]);
        $this->call([
            UserSeeder::class,      // Untuk Admin
            SoftwareSeeder::class,  // <--- PASTIKAN BARIS INI ADA!
        ]);
    
    }
    
}