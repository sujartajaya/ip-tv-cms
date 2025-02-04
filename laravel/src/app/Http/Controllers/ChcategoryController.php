<?php

namespace App\Http\Controllers;

use App\Models\Chcategory;
use Illuminate\Http\Request;

class ChcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chcategory = Chcategory::get();
        return response()->json($chcategory,200);
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
        $chcategory = Chcategory::create($data);
        return response()->json($chcategory,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Chcategory $chcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chcategory $chcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chcategory $chcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chcategory $chcategory)
    {
        //
    }
}
