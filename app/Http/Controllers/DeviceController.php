<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Device;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Location $location)
    {
        $devices = $location->devices;
        return view('devices.index', compact('devices', 'location'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Location $location)
    {
        return view('devices.create', compact('location'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Location $location)
    {
        $request->validate([
            'unique_number' => 'required|unique:devices',
            'type' => 'required',
            'image' => 'required',
            'status' => 'required|in:active,inactive',
        ]);

        $location->devices()->create($request->all());

        return redirect()->route('locations.devices.index', $location)
            ->with('success', 'Device created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location, Device $device)
    {
        return view('devices.show', compact('location', 'device'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location, Device $device)
    {
        return view('devices.edit', compact('location', 'device'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location, Device $device)
    {
        $request->validate([
            'unique_number' => 'required|unique:devices,unique_number,' . $device->id,
            'type' => 'required',
            'image' => 'required',
            'status' => 'required|in:active,inactive',
        ]);

        $device->update($request->all());

        return redirect()->route('locations.devices.index', $location)
            ->with('success', 'Device updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location, Device $device)
    {
        $device->delete();

        return redirect()->route('locations.devices.index', $location)
            ->with('success', 'Device deleted successfully.');
    }

}
