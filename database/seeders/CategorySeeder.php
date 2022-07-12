<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            'libelle' => "Membre",
            'slug' => "MEMBER",
            'deleted' => false,
        ]);
        DB::table('categories')->insert([
            'libelle' => "Partenaire",
            'slug' => "PARTNER",
            'deleted' => false,
        ]);
    }
}
