<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|\Illuminate\Foundation\Application|View|Application
    {
        // Fetch all locations from the database
        $locations = Location::all();

        // Pass the locations to the view
        return view('locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|\Illuminate\Foundation\Application|View|Application
    {
        // Fetch all organizations from the database
        $organizations = Organization::all();

        // Pass the organizations to the view
        return view('locations.create', compact('organizations'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the request data
        $request->validate([
            'serial_number' => 'required|unique:locations',
            'name' => 'required',
            'ipv4_address' => 'required|ipv4',
            'organization_id' => 'required|exists:organizations,id', // Ensure organization_id is provided and valid
        ]);

        // Limit Number of Locations per Organization
        $organization = Organization::find($request->input('organization_id'));
        if ($organization->locations()->count() >= 5) {
            return back()->withErrors(['max_locations' => 'An organization cannot have more than 5 locations.']);
        }

        // Create the location
        Location::create($request->all());

        // Redirect with success message
        return redirect()->route('locations.index')
            ->with('success', 'Location created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $location = Location::with('devices')->findOrFail($id);
        return view('locations.show', compact('location'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $organization, Location $location): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('locations.edit', compact('organization', 'location'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organization $organization, Location $location): RedirectResponse
    {
        $request->validate([
            'serial_number' => 'required|unique:locations,serial_number,' . $location->id,
            'name' => 'required',
            'ipv4_address' => 'required|ipv4',
        ]);

        $location->update($request->all());

        return redirect()->route('locations.index', $organization)
            ->with('success', 'Location updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization, Location $location): RedirectResponse
    {
        $location->delete();

        return redirect()->route('locations.index', $organization)
            ->with('success', 'Location deleted successfully.');
    }
}
