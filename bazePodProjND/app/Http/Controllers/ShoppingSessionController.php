<?php

namespace App\Http\Controllers;

use App\Models\Shopping_session;
use Illuminate\Http\Request;

class ShoppingSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shopping_session = shopping_session ::all();
        return view('shopping_session .index', ['shopping_session ' => $shopping_session ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shopping_session  $shopping_session
     * @return \Illuminate\Http\Response
     */
    public function show(Shopping_session $shopping_session)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shopping_session  $shopping_session
     * @return \Illuminate\Http\Response
     */
    public function edit(Shopping_session $shopping_session)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shopping_session  $shopping_session
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shopping_session $shopping_session)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shopping_session  $shopping_session
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shopping_session $shopping_session)
    {
        //
    }
}
