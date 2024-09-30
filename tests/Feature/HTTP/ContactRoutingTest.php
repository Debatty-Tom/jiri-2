<?php

use App\Models\Contact;
use App\Models\Jiri;
use App\Models\User;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\get;
use function Pest\Laravel\post;

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->user1 = User::factory()
        ->hasContacts(1)
        ->create();
    $this->user2 = User::factory()
        ->hasContacts(1)
        ->create();
    actingAs($this->user);
});

it('routes the request to an index of contact', function () {
    $response = get(route('contacts.index'));

    $response->assertStatus(200);
});

it('routes with model binding the request to a page that shows a specific contact according ti its id', function () {
    $contact = $this->user1;

    $response = get(route('contacts.show', compact('contact')));

    $response->assertStatus(200);
});

it('routes the request to a page that displays a form to create a contact', function () {
    $response = get(route('contacts.create'));

    $response->assertStatus(200);
});

it('routes the request to a save in database action when providing datas describing a contact', function () {
    $contact_data = [
        'firstname' => 'tom',
        'lastname' => 'debatty',
        'email' => 'tom.debatty@hotmail.be',
        'user_id' => '1',
    ];

    $response = post(route('contacts.store'), $contact_data);

    $response->assertStatus(302);

    assertDatabaseHas('contacts', $contact_data);
});
