<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoginControllerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // criar um banco de dados
        $table = new \App\Models\LoginController();
        $table->email = 'admin@email.com';
        $table->password = bcrypt('password123');
        $table->save();
    }
}
