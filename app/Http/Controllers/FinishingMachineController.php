<?php

namespace App\Http\Controllers;

use App\Models\FinishingMachine;
use App\Http\Requests\StoreFinishingMachineRequest;
use App\Http\Requests\UpdateFinishingMachineRequest;

class FinishingMachineController extends Controller
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
     * @param  \App\Http\Requests\StoreFinishingMachineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFinishingMachineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FinishingMachine  $finishingMachine
     * @return \Illuminate\Http\Response
     */
    public function show(FinishingMachine $finishingMachine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FinishingMachine  $finishingMachine
     * @return \Illuminate\Http\Response
     */
    public function edit(FinishingMachine $finishingMachine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFinishingMachineRequest  $request
     * @param  \App\Models\FinishingMachine  $finishingMachine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFinishingMachineRequest $request, FinishingMachine $finishingMachine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FinishingMachine  $finishingMachine
     * @return \Illuminate\Http\Response
     */
    public function destroy(FinishingMachine $finishingMachine)
    {
        //
    }
}
