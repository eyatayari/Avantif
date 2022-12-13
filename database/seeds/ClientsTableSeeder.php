<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name'=>'samar',
            'rue'=>'ariana',
            'image'=>'no image',
            'civilité'=>'Madame',
            'ville'=>'ariana',
            'email'=>'samar@yahoo.fr',
            'telephone'=>'21220220',
            'pays'=>"France",
            'password'=>bcrypt("samar@yahoo.fr"),
        ]);
    }
}
