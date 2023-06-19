<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'code_massar' => 'M653430',
            'nom' => 'Abdelghafour',
            'prenom' => 'Elmobaraky',
            'email' => 'abdelghafour28@gmail.com',
            'isAdmin' => true,
            'password' => Hash::make('encg@1625361')


        ]);
    }
}
