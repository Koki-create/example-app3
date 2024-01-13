<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'https://professional-web-programming2-c3ecbc337e66.herokuapp.com/register/*',
        'https://professional-web-programming2-c3ecbc337e66.herokuapp.com/login/*'
    ];
}
