<?php

declare(strict_types=1);

use App\Http\Controllers\Pages\HomeController;
use function Pest\Laravel\get;

it('loads the home page', function () {
    get(
        uri: action(HomeController::class),
    )->assertStatus(200);
});

it('loads the home page with the home view', function () {
    get(
        uri: action(HomeController::class),
    )->assertViewIs('pages.home');
});

it('loads the home page with the a title', function () {
    get(
        uri: action(HomeController::class),
    )->assertSeeText('Home Page');
});
