<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Http;

class Zh170Controller extends Controller
{
    public function index()
    {
        return Inertia::render('Zh170', [
        ]);
    }
}