<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use App\Models\Test;
use App\Models\User;
use App\Models\User\UserFullInfo;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();
        return response()->json($tests);
    }

    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'is_private' => 'boolean',
        ]);

        // Create a new Test record
        $test = Test::create($validatedData);

        return response()->json(['message' => 'Test record created successfully', 'test' => $test]);
    }

    public function show($id)
    {
        $test = Test::findOrFail($id);
        return response()->json($test);
    }

}
