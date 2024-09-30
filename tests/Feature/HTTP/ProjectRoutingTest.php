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
        ->hasProjects(1)
        ->create();
    $this->user2 = User::factory()
        ->hasProjects(1)
        ->create();
    actingAs($this->user);
});

it('routes the request to an index of projects', function () {
    $response = get(route('projects.index'));

    $response->assertStatus(200);
});

it('routes with model binding the request to a page that shows a specific projects according to its id', function () {
    $project = $this->user1;

    $response = get(route('projects.show', compact('project')));

    $response->assertStatus(200);
});

it('routes the request to a page that displays a form to create a project', function () {
    $response = get(route('projects.create'));

    $response->assertStatus(200);
});

it('routes the request to a save in database action when providing datas describing a project', function () {
    $projects_data = [
        'name'=>'experience',
        'description'=>'une description',
        'user_id'=>'1',
    ];

    $response = post(route('projects.store'), $projects_data);

    $response->assertStatus(302);

    assertDatabaseHas('projects', $projects_data);
});
