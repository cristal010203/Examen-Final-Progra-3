<?php
namespace Database\Seeders;
use App\Models\Recipe;
use Illuminate\Database\seeder;
class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   // create 3 recipes for each chef

        Recipe::factory()->count(3)->create();
    }
}