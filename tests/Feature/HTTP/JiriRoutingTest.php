<?php

use App\Models\Jiri;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\get;
use function Pest\Laravel\post;

it('routes the request to an index of jiris', function () {
    $response = get(route('jiris.index'));

    $response->assertStatus(200);
});

it('routes with model binding the request to a page that shows a specific jiri according ti its id', function () {
    $jiri = Jiri::factory()->create();

    $response = get(route('jiris.show', compact('jiri')));

    $response->assertStatus(200);
});

it('routes the request to a page that displays a form to create a jiri', function () {


    $response = get(route('jiris.create'));

    $response->assertStatus(200);
});

it('routes the request to a save in database action when providing datas describing a jiri', function () {
    $jiri_data = [
        'name' => 'projet web 2024',
        'starting_at' => now()->format('Y-m-d H:i'),
    ];

    $response = post(route('jiris.store'), $jiri_data);

    $response->assertStatus(302);

    assertDatabaseHas('jiris', $jiri_data);
});
