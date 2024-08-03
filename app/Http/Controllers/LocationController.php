<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Organization $organization)
    {
        $locations = $organization->locations;
        return view('locations.index', compact('locations', 'organization'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Organization $organization)
    {
        return view('locations.create', compact('organization'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Organization $organization)
    {
        $request->validate([
            'serial_number' => 'required|unique:locations',
            'name' => 'required',
            'ipv4_address' => 'required|ipv4',
        ]);

        $organization->locations()->create($request->all());

        return redirect()->route('organizations.locations.index', $organization)
            ->with('success', 'Location created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Organization $organization, Location $location)
    {
        return view('locations.show', compact('organization', 'location'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $organization, Location $location)
    {
        return view('locations.edit', compact('organization', 'location'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organization $organization, Location $location)
    {
        $request->validate([
            'serial_number' => 'required|unique:locations,serial_number,' . $location->id,
            'name' => 'required',
            'ipv4_address' => 'required|ipv4',
        ]);

        $location->update($request->all());

        return redirect()->route('organizations.locations.index', $organization)
            ->with('success', 'Location updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization, Location $location)
    {
        $location->delete();

        return redirect()->route('organizations.locations.index', $organization)
            ->with('success', 'Location deleted successfully.');
    }
}
