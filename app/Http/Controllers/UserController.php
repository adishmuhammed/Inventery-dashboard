<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();

        return response()->json(['data' => $users], Response::HTTP_OK);
    }

    public function store(CreateUserRequest $request)
    {
        $user = User::create($request->validated());

        return response()->json(['data' => $user], Response::HTTP_CREATED);
    }

    public function show(Request $request, $id)
    {
        $user = User::findOrFail($id);

        return response()->json(['data' => $user], Response::HTTP_OK);
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->validated());

        return response()->json(['data' => $user], Response::HTTP_OK);
    }

    public function destroy(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    public function toggleStatus(User $user)
    {
        $user->active = !$user->active;
        $user->save();

        return response()->json($user);
    }

}
