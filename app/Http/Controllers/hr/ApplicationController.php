<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApplicationRequest;
use App\Http\Requests\UpdateApplicationRequest;
use App\Models\Application;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Models\User;

class ApplicationController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $applications = Application::latest()->get();

        return view('rh.applications.index', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skills = Skill::latest()->get();

        return view('hr.applications.create', compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApplicationRequest $request)
    {

        $hr = User::create($request->validated());

        $hr->roles()->attach($request->role_id);
        $hr->skills()->sync($request->input($request->skill_id, []));

        return redirect()->route('applications')->with('success', 'Application added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $application = User::findOrFail($request);


        return view('hr.applications.show', compact('application', 'skills'));
    }

    /**
     * Show the form for editing the specified resource.
     */


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

    public function accept($id)
    {
        $application = Application::findOrFail($id);
        $application->status = '3';
        $application->save();

        return redirect()->route('hr.applications.index')->with('success', 'Application accepted successfully.');
    }

    public function reject($id)
    {
        $application = Application::findOrFail($id);
        $application->status = '4';
        $application->save();

        return redirect()->route('hr.applications.index')->with('success', 'Application rejected successfully.');
    }
}
