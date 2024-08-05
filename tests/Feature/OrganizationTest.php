<?php
use App\Models\Organization;

it('can create an organization', function () {
    $organization = Organization::create([
        'name' => 'Test Organization',
        'code' => 'TST123',
    ]);

    expect($organization)->toBeInstanceOf(Organization::class);
    expect($organization->name)->toBe('Test Organization');
    expect($organization->code)->toBe('TST123');
});

it('can fetch all organizations', function () {
    $response = $this->get(route('organizations.index'));

    $response->assertStatus(200);
});

