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
        // ])->post('http://gd2osapp02.usiglobal.com:8000/sap/fi_reports', [
        //     'sortBy' => 'name',
        //     'limit' => '10',
        //     'sortOrder' => 'asc',
        // ]);
        // $response = Http::post(
        //     'http://gd2osapp02.usiglobal.com:8000/sap/fi_reports',
        //     // array(
        //     //     'email' => 'test@gmail.com',
        //     //     'name' => 'Test user',
        //     //     'password' => 'testpassword'
        //     // )
        // );
        // var_dump($response?$response:'');
        // var_dump($request->input('requestData'));
        return Inertia::render('Test', [
            // 'data'=> $response,
        ]);
    }
}