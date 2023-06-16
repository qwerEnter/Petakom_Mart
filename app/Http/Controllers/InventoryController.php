<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;
use App\Views\ManageInventory;
use Illuminate\Http\Request;


class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventory::all();


        return view('admin.inventory', ['inventories' => $inventories]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        \App\Models\Inventory::create($request->all());
        return redirect('/manageinventory/inventories')->with('success', 'Success Create');
        // return view('manageinventory.addinventory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        return view('manageinventory.viewinventory');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $inventories=\App\Models\Inventory::find($id);
        return view('manageinventory.editinventory', ['inventories'=>$inventories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $inventories=\App\Models\Inventory::find($id);
        $inventories->update($request->all());
        return redirect('/manageinventory/inventories')->with('success', 'Success Update');
        // return view('manageinventory.addinventory');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $inventories=\App\Models\Inventory::find($id);
        $inventories->delete($inventories);
        return redirect('/manageinventory/inventories')->with('delete', 'Success Delete');
        // return view('manageinventory.addinventory');
    }
}
