<?php

use App\Models\User;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

beforeEach(function () {
    $this->user1 = User::factory()
        ->hasContacts(1)
        ->create();
    $this->user2 = User::factory()
        ->hasContacts(1)
        ->create();
});

test('a user can only see its Contacts on the index page', function () {
    actingAs($this->user1);

    $contact1 = $this->user1->contact()->first();

    $contact2 = $this->user2->contact()->first();

    $response = get(route('contacts.index'));

    $response->assertSee($contact1->full_name);
    $response->assertDontSee($contact2->full_name);
});
