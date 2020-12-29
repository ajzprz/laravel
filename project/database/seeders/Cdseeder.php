<?php

namespace Database\Seeders;
use App\Models\Cd;
use Illuminate\Database\Seeder;
class Cdseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Cd::factory()->count(100)->create(); 

    }
}
