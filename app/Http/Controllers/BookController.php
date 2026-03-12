<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Route::get('/book', [BookController::class, 'index']);
    

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

    Route::post('/book', [BookController::class, 'store']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Route::get('/book/{id}', [BookController::class, 'show']);
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
        Route::put('/book/{id}', [BookController::class, 'update']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Route::delete('/book/{id}', [BookController::class, 'destroy']);

    }
}
