<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function retrieveAll()
    {
        return Category::all();
    }

    public function show($id)
    {
        return Category::find($id);
    }

    public function create(Request $request)
    {
        $category = Category::create([
            'food_category' => $request->food_category,
        ]);

        return $category;
    }

    public function update($id, Request $request)
    {
        $category = Category::find($id);

        $category->update([
            'food_category' => $request->food_category
        ]);
        
        return $category;
    }

    public function delete($category_id)
    {
        return Category::destroy($category_id); // -> since products has a foreign key w/c is the category_id, if that category deleted same as to products.
    }
}



 // $get_category_id = Category:: find ($category_id); -> manu-manu na pag delete
        // $get_category_id -> products() -> delete ();

        // $delete_category = Category::find ($category_id);

        // return $delete_category -> delete ();
