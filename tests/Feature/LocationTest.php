<?php
use App\Models\Location;
use App\Models\Organization;

it('can create a location', function () {
    $organization = Organization::factory()->create();
    $location = Location::create([
        'serial_number' => 'LOC123',
        'name' => 'Test Location',
        'ipv4_address' => '192.168.1.1',
        'organization_id' => $organization->id,
    ]);

    expect($location)->toBeInstanceOf(Location::class);
    expect($location->serial_number)->toBe('LOC123');
    expect($location->name)->toBe('Test Location');
    expect($location->ipv4_address)->toBe('192.168.1.1');
    expect($location->organization_id)->toBe($organization->id);
});

it('can fetch all locations', function () {
    $response = $this->get(route('locations.index', ['organization' => 1]));

    $response->assertStatus(200);
});
