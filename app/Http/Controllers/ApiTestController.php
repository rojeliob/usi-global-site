<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Http;

class ApiTestController extends Controller
{
    public function index(Request $request)
    {
        // $response = Http::withHeaders([
        //     'X-RapidAPI-Key' => 'SIGN-UP-FOR-KEY',
        //     'X-RapidAPI-Host' => 'geography4.p.rapidapi.com'
        // ])->get('https://geography4.p.rapidapi.com/apis/geography/v1/country/gdp', [
        //     'sortBy' => 'name',
        //     'limit' => '10',
        //     'sortOrder' => 'asc',
        // ]);
        // var_dump($request);
        // var_dump($request->input('requestData'));
        return Inertia::render('Test', [
            // 'data'=> $response,
        ]);
    }
}