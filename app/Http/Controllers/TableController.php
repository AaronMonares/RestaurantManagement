<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function retrieveAll()
    {
        return Table::all();
    }

    public function show ($id)
    {
        return Table::find($id);
    }

    public function create(Request $request)
    {
        $table = Table::create([
            'table_number' => $request->table_number,
            'no_of_sits' => $request->no_of_sits
        ]);

        return $table; 
    }

    public function update($id, Request $request)
    {   
        $table = Table::find($id);

        $table->update([
            'table_number' => $request->table_number,
            'no_of_sits' => $request->no_of_sits
        ]);

        return $table; 
    }

    public function delete($id)
    {
        return Table::destroy($id);
    }
}
