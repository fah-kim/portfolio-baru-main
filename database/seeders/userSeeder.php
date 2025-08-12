<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Illuminate\Support\enum_value;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'fahris',
            'password' => Hash::make('inisaya'),
            'email' => 'fahrishakim@gmail.com',
            'role' => enum_value('admin')
        ]);
    }
}
