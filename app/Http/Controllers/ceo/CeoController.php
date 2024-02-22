<?php

namespace App\Http\Controllers\ceo;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCeoRequest;
use App\Http\Requests\UpdateCeoRequest;
use App\Models\User;

class CeoController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $ceo = User::findOrFail($request);
        $skills = Skill::orderBy('created_at', 'DESC')->get();

        return view('ceo.show', compact('ceo', 'skills'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $ceo = User::findOrFail($request);
        $skills = Skill::orderBy('created_at', 'DESC')->get();

        return view('ceo.edit', compact('ceo', 'skills'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCeoRequest $request)
    {
        $ceo = User::findOrFail($request);

        $ceo->update($request->validated());
        $ceo->skills()->sync($request->skill_id);

        return redirect()->route('ceo')->with('success', 'Your account has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $ceo = User::findOrFail($request);

        $ceo->delete();

        return redirect()->route('login')->with('success', 'Your account has been deleted successfully');
    }
}

