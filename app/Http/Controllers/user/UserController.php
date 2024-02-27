<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $user = User::findOrFail($request);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $user = User::findOrFail($request);

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request)
    {
        $user = User::findOrFail($request->id);

        $user->update($request->except(['image']));

        if ($request->hasFile('image')) {
            $user->clearMediaCollection('images');
            $user->addMediaFromRequest('image')
                ->toMediaCollection('images', 'media');
        }

        $user->update($request->all());

        return redirect()->route('users')->with('success', 'User updated successfully');
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
