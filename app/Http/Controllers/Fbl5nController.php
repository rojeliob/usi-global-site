<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Http;

class Fbl5nController extends Controller
{
    public function index()
    {
        return Inertia::render('Fbl5n', [
        ]);
    }
}