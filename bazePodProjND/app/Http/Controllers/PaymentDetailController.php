<?php

namespace App\Http\Controllers;

use App\Models\Payment_detail;
use Illuminate\Http\Request;

class PaymentDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment_detail = payment_detail::all();
        return view('payment_detail.index', ['payment_detail' => $payment_detail]);
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
     * @param  \App\Models\Payment_detail  $payment_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Payment_detail $payment_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment_detail  $payment_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment_detail $payment_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment_detail  $payment_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment_detail $payment_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment_detail  $payment_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment_detail $payment_detail)
    {
        //
    }
}
