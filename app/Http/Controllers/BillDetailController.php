<?php

namespace App\Http\Controllers;

use App\Models\BillDetail;
use App\Http\Requests\StoreBillDetailRequest;
use App\Http\Requests\UpdateBillDetailRequest;

class BillDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBillDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBillDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BillDetail  $billDetail
     * @return \Illuminate\Http\Response
     */
    public function show(BillDetail $billDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BillDetail  $billDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(BillDetail $billDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBillDetailRequest  $request
     * @param  \App\Models\BillDetail  $billDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBillDetailRequest $request, BillDetail $billDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BillDetail  $billDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(BillDetail $billDetail)
    {
        //
    }
}
