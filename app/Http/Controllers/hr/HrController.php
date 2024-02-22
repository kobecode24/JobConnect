<?php

namespace App\Http\Controllers\ceo;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateHrRequest;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Models\User;

class CeoController extends Controller
{


    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $hr = User::findOrFail($request);

        $skills = Skill::orderBy('created_at', 'DESC')->get();

        return view('ceo.hrs.show', compact('hr', 'skills'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $hr = User::findOrFail($request);
        $skills = Skill::orderBy('created_at', 'DESC')->get();

        return view('ceo.hrs.edit', compact('hr', 'skills'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHrRequest $request)
    {
        $hr = User::findOrFail($request);

        $hr->update($request->validated());
        $hr->skills()->sync($request->skill_id);

        return redirect()->route('hrs')->with('success', 'Your account has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $hr = User::findOrFail($request);

        $hr->delete();

        return redirect()->route('login')->with('success', 'HR deleted successfully');
    }
}
