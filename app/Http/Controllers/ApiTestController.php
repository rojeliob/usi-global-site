<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Http;

class ApiTestController extends Controller
{
    public function index()
    {
        $response = Http::withHeaders([
            'X-RapidAPI-Key' => 'SIGN-UP-FOR-KEY',
            'X-RapidAPI-Host' => 'geography4.p.rapidapi.com'
        ])->get('https://geography4.p.rapidapi.com/apis/geography/v1/country/gdp', [
            'sortBy' => 'name',
            'limit' => '10',
            'sortOrder' => 'asc',
        ]);
        var_dump($response);
        // return Inertia::render('Profile/Edit', [
        //     'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
        //     'status' => session('status'),
        // ]);
    }
}