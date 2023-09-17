<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Http;

class FileUploadController extends Controller
{

public function upload(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:xls,xlsx|max:10240', // Max file size in KB (adjust as needed)
    ]);

    if ($request->file('file')->isValid()) {
        $file = $request->file('file');
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();

        $file->storeAs('uploads', $filename);
        return Inertia::render('Test', [
        ]);
        // return response()->json(['message' => 'File uploaded successfully']);
    } else {
        return response()->json(['message' => 'Invalid file'], 400);
    }
    
    // Process .xls TODO
}
}