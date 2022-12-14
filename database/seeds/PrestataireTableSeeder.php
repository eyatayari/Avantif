<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrestataireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prestataires')->insert([
            'civilité'=>"Madame",
            'prenom'=>'samar',
            'nom'=>'mediouni',
            'image'=>'no image',
            'adresse'=>'ariana',
            'email'=>'samar@gmail.fr',
            'telephone'=>'21220220',
            'pays'=>"France",
            'statut'=>1,
            'password'=>bcrypt("samar@gmail.fr"),
        ]);
    }
}
