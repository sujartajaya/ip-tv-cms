<?php

namespace App\Http\Controllers;

use App\Models\Foodcategory;
use Illuminate\Http\Request;

class FoodcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foodcategory = Foodcategory::get();
        return response()->json($foodcategory,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $foodcategory = Foodcategory::create($data);
        return response()->json($foodcategory,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Foodcategory $foodcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foodcategory $foodcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Foodcategory $foodcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foodcategory $foodcategory)
    {
        //
    }
}
