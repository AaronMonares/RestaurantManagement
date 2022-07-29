<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Category;
use App\Models\Meal;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function retrieveAll()
    {
        return Product::all();
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function create(Request $request) //one to many and many to many relation
    {
        $add_product = Product:: create([
            'name' => $request -> name,
            'product_description' => $request -> product_description,
            'price' => $request -> price,
            'image_path' => $request -> image_path,
            'category_id' => $request -> category_id,
            'meal_id' => $request -> meal_id
        ]);

        $get_meal_id = Meal::find($request -> meal_id);
        $get_product_latest_id = Product::orderBy('id', 'desc') -> first() -> id; 
        $get_meal_id -> products() -> attach($get_product_latest_id);

        return $add_product;
    }

    public function update($id, Request $request) //Goods na. Dapat dili same an variable sa parameter ngan sa sulod na variable
    {
        $get_product = Product:: find($id);

        $get_product -> update([
            'name' => $request->name,
            'product_description' => $request->product_description,
            'price' => $request->price,
            'image_path' => $request->image_path,
            'category_id' => $request->category_id
        ]);

        return $get_product;
    }

    public function delete($product_id)
    {
        return Product::destroy($product_id);
    }
}


// public function create($category_id, $meal_id, Request $request) //long process
    // {
    //     $get_category_id = Category::find($category_id);
    //     $get_category_id -> products() -> create([
    //         'name' => $request -> name,
    //         'product_description' => $request -> product_description,
    //         'price' => $request -> price,
    //         'image_path' => $request -> image_path
    //     ]);

    //     $get_meal_id = Meal::find($meal_id);
    //     $get_product_latest_id = Product::orderBy('id', 'desc') -> first() -> id; 
    //     $get_meal_id -> products() -> attach($get_product_latest_id);

    //     // $get_meal_id = Meal::find($meal_id2);
    //     // $get_meal_id -> products() -> attach($get_product_latest_id);

    //     return $get_category_id -> products() -> find ($get_product_latest_id);
    // }


