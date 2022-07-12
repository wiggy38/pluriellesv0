<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('secteurs')->insert([
            'libelle' => "Informatique",
            'deleted' => false,
        ]);
        DB::table('secteurs')->insert([
            'libelle' => "Commerce",
            'deleted' => false,
        ]);
        DB::table('secteurs')->insert([
            'libelle' => "Marketing",
            'deleted' => false,
        ]);

    }
}
