<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            [
                'title' => 'Pasta Primavera',
                'description' => 'A delicious pasta dish with fresh vegetables.',
                'image' => 'pasta.jpg',
                'category' => 'pasta',
                'cuisine' => 'italian',
                'preparation_time' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Saucy Ramen Noodles',
                'description' => 'Spicy and flavorful ramen noodles.',
                'image' => 'noodles.jpg',
                'category' => 'noodles',
                'cuisine' => 'japanese',
                'preparation_time' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more recipes here
            [
                'title' => 'Mushroom Sandwich',
                'description' => 'A tasty mushroom sandwich.',
                'image' => 'mush-sandwich.jpg',
                'category' => 'snacks',
                'cuisine' => 'american',
                'preparation_time' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Classic Superfood Salad',
                'description' => 'A healthy and delicious superfood salad packed with nutrients.',
                'image' => 'salads.jpg', // Ensure you have this image in the appropriate folder
                'category' => 'salad',
                'cuisine' => 'american', // Update if this is a different cuisine
                'preparation_time' => 10, // Adjust preparation time as necessary
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kesar Mango Lassi',
                'description' => 'A tasty and refreshing mango lassi.',
                'image' => 'mango.jpg',
                'category' => 'drinks',
                'cuisine' => 'indian',
                'preparation_time' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Hyderabadi Chicken Biryani',
                'description' => 'A mouthwatering Hyderabadi chicken biryani.',
                'image' => 'biriyani.jpg',
                'category' => 'rice',
                'cuisine' => 'indian',
                'preparation_time' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Double Chocolate Cheesecake',
                'description' => 'A decadent double chocolate cheesecake.',
                'image' => 'chocolate-cheesecake-2.jpg',
                'category' => 'dessert',
                'cuisine' => 'american',
                'preparation_time' => 480,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Roasted Lamb',
                'description' => 'Aromatic and tender lamb.',
                'image' => 'roastedlamb.jpg',
                'category' => 'rice',
                'cuisine' => 'australian',
                'preparation_time' => 130,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Vegan Tteokbokki',
                'description' => 'A delicious Korean-style vegan tteokbokki.',
                'image' => 'tteokbokki.jpg',
                'category' => 'rice',
                'cuisine' => 'korean',
                'preparation_time' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Dim Sum',
                'description' => 'A delicious Chinese-style dim sum.',
                'image' => 'dimsum.jpg',
                'category' => 'snacks',
                'cuisine' => 'chinese',
                'preparation_time' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Pad Thai',
                'description' => 'A delicious Thai-style pad thai.',
                'image' => 'padthai.jpg',
                'category' => 'noodles',
                'cuisine' => 'thai',
                'preparation_time' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            

        ]);
    }
}