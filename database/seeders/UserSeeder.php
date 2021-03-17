<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'matricule' => '00-001',
            'nom' => 'Admin',
            'prenom' => 'Livai',
            'date_nais' => '07/08/1999',
            'usertype' => 'Admin',
            'statut' => 'Marie',
            'date_embauche' => '01/01/2020',
            'date_fincontrat' => '01/01/2030',
            'poste' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('passer123'),
        ]);
    }
}
