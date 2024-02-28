<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApplicationRequest;
use App\Http\Requests\UpdateApplicationRequest;
use App\Models\Application;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $applications = Application::latest()->get();

        return view('applications.index', compact('applications'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApplicationRequest $request)
    {
        $request['user_id'] = Auth::id();
        $application = Application::create($request->all());

        return redirect()->route('home.index')->with('success', 'Application added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $application = User::findOrFail($request);

        return view('home.show', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $hr = User::findOrFail($request);

        $skills = Skill::latest()->get();

        return view('ceo.applications.edit', compact('application', 'skills'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApplicationRequest $request)
    {
        $hr = User::findOrFail($request);

        $hr->update($request->validated());
        $hr->skills()->sync($request->skill_id);

        return redirect()->route('applications')->with('success', 'HR updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $hr = User::findOrFail($request);

        $hr->delete();

        return redirect()->route('applications')->with('success', 'Application deleted successfully');
    }
}
