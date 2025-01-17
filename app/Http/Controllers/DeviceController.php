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
    public function index()
    {
        $devices = Device::all();
        return view('devices.index', compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch all locations from the database
        $locations = Location::all();

        // Pass the locations to the view
        return view('devices.create', compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'unique_number' => 'required|unique:devices',
            'type' => 'required|in:pos,kiosk,digital signage',
            'location_id' => 'required|exists:locations,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        // Limit Number of Devices per Location
        $location = Location::find($request->input('location_id'));
        if ($location->devices()->count() >= 10) {
            return back()->withErrors(['max_devices' => 'A location cannot have more than 10 devices.']);
        }

        // Handle the image file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
        }

        // Create the device with the provided data
        Device::create([
            'unique_number' => $request->input('unique_number'), // Make sure to include this line
            'type' => $request->input('type'),
            'location_id' => $request->input('location_id'),
            'image' => $imageName ?? null,
            'status' => $request->input('status'),
        ]);

        return redirect()->route('devices.index')
            ->with('success', 'Device created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $device = Device::findOrFail($id);
        return view('devices.show', compact('device'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Device $device)
    {
        $locations = Location::all(); // Fetch all locations
        return view('devices.edit', compact('device', 'locations'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Device $device)
    {
        $request->validate([
            'unique_number' => 'required|unique:devices,unique_number,' . $device->id,
            'type' => 'required',
            'status' => 'required|in:active,inactive',
            'location_id' => 'required|exists:locations,id',
        ]);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $device->image = $imageName;
        }

        // Update the device with new data
        $device->update($request->all());

        return redirect()->route('locations.show', $device->location_id)
            ->with('success', 'Device updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location, Device $device)
    {
        $device->delete();

        return redirect()->route('devices.index', $location)
            ->with('success', 'Device deleted successfully.');
    }

}
