<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Password;

class PasswordController extends Controller
{
    public function index($user_id)
    {
        return Password::where('user_id', $user_id)->get();
    }

    public function show($id)
    {
        return Password::find($id);
    }

    public function store(Request $request)
    {
        $password = Password::create($request->all());
        return response()->json($password, 201);
    }

    public function update(Request $request, $id)
    {
        $password = Password::findOrFail($id);
        $password->update($request->all());
        return response()->json($password, 200);
    }

    public function delete($id)
    {
        $password = Password::findOrFail($id);
        $password->delete();
        return response()->json(['success' => true], 204);
    }
    
}
