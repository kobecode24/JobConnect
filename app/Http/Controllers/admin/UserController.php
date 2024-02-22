<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->get();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $user = User::findOrFail($request);
        $skills = $user->skills->pluck('name')->toArray();

        return view('admin.users.show', compact('user', 'skills'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $user = User::findOrFail($request);

        $user->delete();

        return redirect()->route('users')->with('success', 'User deleted successfully');
    }
}
