<?php

use App\Models\Device;
use App\Models\Location;

it('can create a device', function () {
    $location = Location::factory()->create();
    $device = Device::create([
        'unique_number' => '123',
        'type' => 'pos',
        'status' => 'active',
        'image' => 'public/images/1722872057.jpg',
        'location_id' => $location->id,
    ]);

    expect($device)->toBeInstanceOf(Device::class);
    expect($device->unique_number)->toBe('123');
    expect($device->type)->toBe('pos');
    expect($device->status)->toBe('active');
    expect($device->location_id)->toBe($location->id);
});

it('can fetch all devices', function () {
    $response = $this->get(route('devices.index', ['location' => 1]));

    $response->assertStatus(200);
});
