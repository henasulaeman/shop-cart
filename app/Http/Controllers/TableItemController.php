<?php

namespace App\Http\Controllers;

use App\Models\table_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TableItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = table_item::all();
        return view('home')->with('table_items', $item);
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
     * @param  \App\Models\table_item  $table_item
     * @return \Illuminate\Http\Response
     */
    public function show($type)
    {
        $item = table_item::where('type', $type)->get();
        return view('item_filter', ['item' => $item]);
    }

    public function detail($id)
    {
    $item = DB::table('table_items')->where('iditem', '=', $id)->get();
    return view('item_detail', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\table_item  $table_item
     * @return \Illuminate\Http\Response
     */
    public function edit(table_item $table_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\table_item  $table_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, table_item $table_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\table_item  $table_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(table_item $table_item)
    {
        //
    }
}
