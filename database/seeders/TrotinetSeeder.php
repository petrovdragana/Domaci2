<?php

namespace Database\Seeders;

use App\Models\Trotinet;
use Illuminate\Database\Seeder;

class TrotinetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trotinet::create([
            "model"=>"Denver",
            "boja"=>"crni",
            "materijal"=>"aluminijum",
            "stanje"=>"polovno",
            "cena"=>"30",
            "brzina"=>"40 km/h",
            "snaga"=>"300W"
        ]);

        Trotinet::create([
            "model"=>"Segway",
            "boja"=>"sivi",
            "materijal"=>"aluminijum",
            "stanje"=>"novo",
            "cena"=>"20",
            "brzina"=>"20 km/h",
            "snaga"=>"250W"
        ]);
    }
}
