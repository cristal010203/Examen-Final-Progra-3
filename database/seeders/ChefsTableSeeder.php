<?php

namespace Database\Seeders;
use App\Models\Chef;
use Illuminate\Database\seeder;

class ChefsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chef::factory()->count(10)->create();
    }
}