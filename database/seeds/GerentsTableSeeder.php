<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GerentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gerents')->insert([
            'prenom'=>'samar',
            'nom'=>'mediouni',
            'image'=>'no image',
            'adresse'=>'ariana',
            'email'=>'samar@gmail.fr',
            'password'=>bcrypt("samar@gmail.fr"),
        ]);
    }
}
