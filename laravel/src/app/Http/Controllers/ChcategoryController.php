<?php

namespace App\Http\Controllers;

use App\Models\Chcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chcategory = Chcategory::get();
        return view('tv.chcategory',compact('chcategory'));
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
    public function edit(Chcategory $chcategory, $id)
    {
        $chcat = $chcategory->where('id',$id)->first();
        return response()->json($chcat);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chcategory $chcategory, $id)
    {
        $category = $chcategory->find($id);
        $validator=[];
        $validator = Validator::make($request->all(), [
            'category' => ['required'],
            'desc' => ['required']
        ]);
        $data = [];
        if($validator->fails()){
            $data['error'] = true;
            $data['msg'] = $validator->messages();
            return response()->json($request->all(), 200);
        } else {
            $data['error'] = false;
            $category->update($request->all());
            $data['msg'] = $request->all();
            return response()->json($data, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chcategory $chcategory)
    {
        //
    }
}
