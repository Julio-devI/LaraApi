<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function index()
    {
        return Dog::all();
    }

    public function store(Request $request)
    {
        Dog::create($request->all());
    }

    public function show()
    {
        return Dog::findOrFail($id);
    }

    public function update()
    {
        $dog = Dog::findOrFail($id);
        $dog->update($request->all());
    }

    public function destroy()
    {
        $dog = Dog::findOrFail($id);
        $dog->delete();
    }
}