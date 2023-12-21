<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Return a list of users
        return User::all();
    }

    public function store(Request $request)
    {
        // Create a new user
        $user = User::create($request->all());

        return response()->json($user, 200);
    }

    public function show($id)
    {
        // Return a specific user
        return User::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        // Update a specific user
        $user = User::findOrFail($id);
        $user->update($request->all());

        return response()->json($user, 200);
    }

    public function destroy($id)
    {
        // Delete a specific user
        User::findOrFail($id)->delete();

        return response()->json(null, 204);
    }
}
