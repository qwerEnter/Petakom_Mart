<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;
use App\Views\ManageInventory;


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
    public function create()
    {
       
        return view('manageinventory.addinventory'); 
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
    public function edit()
    {
        return view('manageinventory.editinventory');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryRequest $request, Inventory $inventory)
    
    {
        return view('manageinventory.updateinventory');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
}
