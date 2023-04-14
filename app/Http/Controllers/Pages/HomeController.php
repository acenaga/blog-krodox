<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final class HomeController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        return view(
            view: 'pages.home',
            data: [
                'title' => 'Home Page'
            ]
        );
    }
}
