<?php

namespace App\Http\Controllers;

use App\Models\User_payment;
use Illuminate\Http\Request;

class UserPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_payment = user_payment ::all();
        return view('user_payment.index', ['user_payment' => $user_payment]);
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
     * @param  \App\Models\User_payment  $user_payment
     * @return \Illuminate\Http\Response
     */
    public function show(User_payment $user_payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User_payment  $user_payment
     * @return \Illuminate\Http\Response
     */
    public function edit(User_payment $user_payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User_payment  $user_payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_payment $user_payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_payment  $user_payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_payment $user_payment)
    {
        //
    }
}
