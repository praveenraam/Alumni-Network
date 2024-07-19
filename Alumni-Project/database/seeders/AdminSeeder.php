<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'email'=>'praveenraam.it22@bitsathy.ac.in',
            'username' => 'admin',
            'password'=>Hash::make('praveen107'),
            'role'=>'admin',
        ]);
    }
}
