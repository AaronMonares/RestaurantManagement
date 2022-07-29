<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Employee;
use App\Models\Meal;
use App\Models\Product; //ig tab la pagtype sa Product para ma include dd automatically.
use App\Models\Table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       //admin1
        $admins = new Admin(); //other way to create data

        $admins-> first_name = "Aaron";
        $admins-> last_name = "Monares";
        $admins-> username = "Rons";
        $admins-> password = "password";

        $admins->save();
        
        //5 employees
        for ($i=0; $i<5;$i++)
        {
            $employees = new Employee();

            $employees-> employees_name = "Mark";
            $employees-> contact_number = 1873754323;
            $employees-> gender = "male";
            $employees-> address = "Balite SINS";
            $employees-> designation = "Manager";
            $employees-> salary = 10000.00;
    
            $employees->save();
        }

        //20tables
        for ($i=1;$i<=20;$i++)
        {
            $tables = new Table();

            $tables-> table_number = $i;
            $tables-> no_of_sits = $i;

            $tables->save();
        }

        //inserting data using mass assignment
        Category::create([
            "food_category" => "Rice"
        ]);

        Category::create([
            "food_category" => "Dishes"
        ]);

        Category::create([
            "food_category" => "Snacks"
        ]);

        Category::create([
            "food_category" => "Beverages"
        ]);

        // inserting products data
        Product::create([                     
            "name" => "Plain Rice",
            "product_description" => "description 1", 
            "price" => 30.00,
            "image_path" => "public/assets",
            "category_id" => 1
        ]);

        $category= Category::find(1); //para ma hatagan value si category_id
        $category->products()->create([
            "name" => "Fried Rice",
            "product_description" => "description 2",
            "price" => 50.00,
            "image_path" => "public/assets"
        ]);

        Product::create([
            "name" => "Fried Chicken",
            "product_description" => "description 3",
            "price" => 30.00,
            "image_path" => "public/assets",
            "category_id" => 2
        ]);

        Product::create([
            "name" => "Pork Menudo",
            "product_description" => "description 4",
            "price" => 50.00,
            "image_path" => "public/assets",
            "category_id" => 2
        ]);
        
        Product::create([
            "name" => "Banana Q",
            "product_description" => "description 5",
            "price" => 30.00,
            "image_path" => "public/assets",
            "category_id" => 3
        ]);

        Product::create([
            "name" => "Burger",
            "product_description" => "description 6",
            "price" => 50.00,
            "image_path" => "public/assets",
            "category_id" => 3
        ]);

        Product::create([
            "name" => "Coffee",
            "product_description" => "description 7",
            "price" => 30.00,
            "image_path" => "public/assets",
            "category_id" => 4
        ]);

        Product::create([
            "name" => "Water",
            "product_description" => "description 8",
            "price" => 50.00,
            "image_path" => "public/assets",
            "category_id" => 4
        ]);

        Meal::create([
            "meal_type" => "Breakfast"
        ]);

        Meal::create([
            "meal_type" => "Lunch"
        ]);

        Meal::create([
            "meal_type" => "Dinner"
        ]);

        // inserting booking data
        $table_id = Table::find (1);
        $table_id -> booking() -> create([ 
            'customer_name' => 'Marlo',
            'contact_number' => '2345677654',
            'time' => '3:00pm',
            'date' => 'July 12, 2022',
            'number_of_guests' => 1,
            'message' => 'Pa reserve table sir for 1 person.',
        ]);

        Booking::create([  //other way to create data via mass assignments of variables
            'customer_name' => 'Jefferson',
            'contact_number' => '6789',
            "time" => "12pm",
            "date" => "June 12, 2022",
            "number_of_guests" => 2,
            "message" => "Pa reserve table sir for 2 persons.",
            "table_id" => 2
        ]);

        $get_category_id = Category::first(); 
        $get_category_id -> products() -> create([ //object ini siya diri array
            'name' => 'Plain Rice', 
            'product_description' => 'white rice',
            'price' => 20.00,
            'image_path' => 'public/assets/img'
        ]);

        $get_meal_id = Meal::first();
        $get_meal_id -> products() -> attach(1); //pagbutang data sa pivot table
    }
}
