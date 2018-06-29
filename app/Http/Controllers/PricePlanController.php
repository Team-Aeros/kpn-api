<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PricePlan;

class PricePlanController extends Controller
{
    public function store(Request $request)
    {
        PricePlan::create($request->all());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(PricePlan::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(PricePlan::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pricePlan = PricePlan::findOrFail($id);
        $pricePlan->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Subscription $subscription
     * @return void
     */
    public function destroy(PricePlan $pricePlan)
    {
        $pricePlan->destroy($pricePlan->id);
    }
}
