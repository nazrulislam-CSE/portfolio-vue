<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = "Category List";
        $categories = [
            ['id' => 1, 'name' => 'Electronics'],
            ['id' => 2, 'name' => 'Fashion'],
            ['id' => 3, 'name' => 'Books'],
            ['id' => 4, 'name' => 'Home & Kitchen'],
            ['id' => 5, 'name' => 'Sports'],
            ['id' => 6, 'name' => 'Toys & Games'],
            ['id' => 7, 'name' => 'Beauty & Health'],
            ['id' => 8, 'name' => 'Automotive'],
            ['id' => 9, 'name' => 'Music'],
            ['id' => 10, 'name' => 'Garden'],
        ];
        return Inertia::render('Backend/Category/Index', compact('categories','pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = "Create Category";
        return Inertia::render('Backend/Category/Create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
