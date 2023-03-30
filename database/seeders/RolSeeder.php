<?php

namespace Database\Seeders;
use DB;
use Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('roles')->delete();
        \DB::table('roles')->insert([
            'Naam' => 'Gebruiker',
        ]);
        \DB::table('roles')->insert([
            'Naam' => 'Superadmin',
        ]);
    }
}
