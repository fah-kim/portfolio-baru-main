<?php

namespace Database\Seeders;

use App\Models\item;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        item::factory()->count(10)->create();
    }
}
