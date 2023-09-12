<?php

namespace App\Http\Controllers;

use App\Models\table_order_detail;
use Illuminate\Http\Request;

class TableOrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("orderdetail");
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
     * @param  \App\Models\table_order_detail  $table_order_detail
     * @return \Illuminate\Http\Response
     */
    public function show(table_order_detail $table_order_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\table_order_detail  $table_order_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(table_order_detail $table_order_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\table_order_detail  $table_order_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, table_order_detail $table_order_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\table_order_detail  $table_order_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(table_order_detail $table_order_detail)
    {
        //
    }
}
