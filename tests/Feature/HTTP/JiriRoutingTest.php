<?php

use App\Models\Jiri;
use App\Models\User;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\get;
use function Pest\Laravel\post;

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->user1 = User::factory()
        ->hasJiris(1)
        ->create();
    $this->user2 = User::factory()
        ->hasJiris(1)
        ->create();
    actingAs($this->user);
});

it('routes the request to an index of jiris', function () {
    $response = get(route('jiris.index'));

    $response->assertStatus(200);
});

it('routes with model binding the request to a page that shows a specific jiri according to its id accessible to an auth user', function () {
    $jiri = $this->user1;

    $response = get(route('jiris.show', compact('jiri')));

    $response->assertStatus(200);
});

it('routes the request to a page that displays a form to create a jiri accessible to an auth user', function () {
    $response = get(route('jiris.create'));

    $response->assertStatus(200);
});

it('routes the request to a save in database action when providing datas describing a jiri accessible to an auth user', function () {
    $jiri_data = [
        'name' => 'projet web 2024',
        'starting_at' => now()->format('Y-m-d H:i'),
        'user_id' => '1',
    ];

    $response = post(route('jiris.store'), $jiri_data);

    $response->assertStatus(302);

    assertDatabaseHas('jiris', $jiri_data);
});
