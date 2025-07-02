<?php

namespace App\Http\Controllers\admin;

use App\Models\Kategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KategoryRequest;

class KategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategory::all();
        return view('admin.page.kategori', compact('kategori'));
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
    public function store(KategoryRequest $request)
    {
        $kategory =  $request->validated();
        Kategory::create($kategory);
        // return redirect()->back();
        dd($kategory);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
