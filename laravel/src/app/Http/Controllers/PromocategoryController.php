<?php

namespace App\Http\Controllers;

use App\Models\Promocategory;
use Illuminate\Http\Request;

class PromocategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promocategory = Promocategory::get();
        return response()->json($promocategory);
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
        $promo = Promocategory::create($data);
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Promocategory $promocategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promocategory $promocategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promocategory $promocategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promocategory $promocategory)
    {
        //
    }
}
