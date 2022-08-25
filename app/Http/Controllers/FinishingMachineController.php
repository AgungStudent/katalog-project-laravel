<?php

namespace App\Http\Controllers;

use App\Models\FinishingMachine;
use App\Http\Requests\StoreFinishingMachineRequest;
use App\Http\Requests\UpdateFinishingMachineRequest;
use Illuminate\Support\Facades\Storage;

class FinishingMachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finishingMachines = FinishingMachine::all();
        return view('finishing-machine.index', compact('finishingMachines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('finishing-machine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFinishingMachineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFinishingMachineRequest $request)
    {
        $validated = $request->validated();
        $validated['image'] = $request->file('image')->store('finising-machine');

        FinishingMachine::create($validated);
        return redirect()->route('finishing-machine.index')->with('success', "Berhasil menambah data finising machine!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FinishingMachine  $finishingMachine
     * @return \Illuminate\Http\Response
     */
    public function show(FinishingMachine $finishingMachine)
    {
        return response()->json($finishingMachine);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FinishingMachine  $finishingMachine
     * @return \Illuminate\Http\Response
     */
    public function edit(FinishingMachine $finishingMachine)
    {
        return view('finishing-machine.edit', compact('finishingMachine'));
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
        $validated = $request->validated();
        if (is_null($request->file('image'))) {
            $validated['image'] = $finishingMachine->image;
        } else {
            $validated['image'] = $request->file('image')->store('finising-machine');
            Storage::delete($finishingMachine->image);
        }

        $finishingMachine->update($validated);
        return redirect()->route('finishing-machine.index')->with('success',"data finishing machine berhasil dirubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FinishingMachine  $finishingMachine
     * @return \Illuminate\Http\Response
     */
    public function destroy(FinishingMachine $finishingMachine)
    {
        $finishingMachine->delete();
        Storage::delete($finishingMachine->image);

        return redirect()->route('finishing-machine.index')->with('success',"data berhasil di hapus");
    }
}
