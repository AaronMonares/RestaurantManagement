<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function retrieveAll()
    {
        return Meal::all();
    }

    public function show($id)
    {
        return Meal::find($id);
    }

    public function create(Request $request) 
    {
        $meal = Meal::create([
            'meal_type' => $request->meal_type
        ]);

        return $meal; 
    }

    public function update($meal_id, Request $request) 
    {
        $get_meal_id = Meal:: find ($meal_id);
        
        $get_meal_id -> update([
            'meal_type' => $request->meal_type
        ]);

        return $get_meal_id;
    }

    public function delete($id) //wara pa sa many to many
    {
        return Meal::destroy($id);
    }
}
