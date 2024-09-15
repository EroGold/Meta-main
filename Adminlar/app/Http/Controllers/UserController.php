<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit($user_id)
{
    $user = User::findOrFail($user_id);
    return response()->json($user);
}
    public function update(Request $request, $user_id)
    {
        $request->validate([
            'username' => 'string|max:255',
            'email' => 'string|email|max:255|unique:users,email,' . $user_id,
        ]);

        $user = User::findOrFail($user_id);
        $user->update($request->all());

        return response()->json(['success' => true]);
    }

    public function destroy($id)
{
    try {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'User deleted successfully'], 200);
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        return response()->json(['message' => 'User not found'], 404);
    } catch (\Exception $e) {
        return response()->json(['message' => 'An error occurred'], 500);
    }
}


}
