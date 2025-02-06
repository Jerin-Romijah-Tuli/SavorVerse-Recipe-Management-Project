<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // Import the DB facade
use Illuminate\Http\Request;
use App\Models\Recipe;
class RecipeController extends Controller
{
    /**
     * Display a listing of the recipes.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $recipes = DB::table('recipes')->get();
        return view('recipes.index', ['recipes' => $recipes]);
    }

    public function showSnacks() {
        $snacks = DB::table('recipes')->where('category', 'snacks')->get();
        return view('recipes.snacks', compact('snacks'));
    }


    public function showSalad() {
        $salad = DB::table('recipes')->where('category', 'salad')->get();
        return view('recipes.salad', compact('salad'));
    }

    public function showNoodles() {
        // Retrieve pasta and noodles recipes
        $noodles = DB::table('recipes')->whereIn('category', ['noodles', 'pasta'])->get();
        
        // Pass the recipes data to the view
        return view('recipes.noodles', compact('noodles'));
    }


    public function showDrinks() {
        $drinks = DB::table('recipes')->where('category', 'drinks')->get();
        return view('recipes.drinks', compact('drinks'));
    }
    

    public function showRice() {
        $rice = DB::table('recipes')->where('category', 'rice')->get();
        return view('recipes.rice', compact('rice'));
    }

    public function showDessert() {
        $dessert = DB::table('recipes')->where('category', 'dessert')->get();
        return view('recipes.dessert', compact('dessert'));
    }
    
    public function showAustralian() {
        $australian = DB::table('recipes')->where('cuisine', 'australian')->get();
        return view('recipes.australian', compact('australian'));
    }

    public function showKorean() {
        $korean = DB::table('recipes')->where('cuisine', 'korean')->get();
        return view('recipes.korean', compact('korean'));
    }
    
    public function showChinese() {
        $chinese = DB::table('recipes')->where('cuisine', 'chinese')->get();
        return view('recipes.chinese', compact('chinese'));
    }
    public function showJapanese() {
        $japanese = DB::table('recipes')->where('cuisine', 'japanese')->get();
        return view('recipes.japanese', compact('japanese'));
    }

    public function showAmerican() {
        $american = DB::table('recipes')->where('cuisine', 'american')->get();
        return view('recipes.american', compact('american'));
    }
    public function showItalian() {
        $italian = DB::table('recipes')->where('cuisine', 'italian')->get();
        return view('recipes.italian', compact('italian'));
    }
    public function showThai() {
        $thai = DB::table('recipes')->where('cuisine', 'thai')->get();
        return view('recipes.thai', compact('thai'));
    }
    public function showSouthAsian() {
        $southasian = DB::table('recipes')->where('cuisine', 'southasian')->get();
        return view('recipes.southasian', compact('southasian'));
    }



    public function showAllRecipes() {
        $recipes = DB::table('recipes')->get(); // Retrieve all recipes
        return view('recipes.all_recipes', compact('recipes'));
    }

    // Function to handle search
    public function searchRecipes(Request $request) {
        $query = $request->input('search'); // Get user input from search bar

        // Search for recipes by title, description, or category
        $recipes = DB::table('recipes')
            ->where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->orWhere('category', 'LIKE', "%{$query}%")
            ->get();

        return view('recipes.all_recipes', compact('recipes', 'query'));
    }
}


    /**
     * Display the specified recipe.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
   
