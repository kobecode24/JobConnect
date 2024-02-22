<?php

namespace App\Http\Controllers\ceo;

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

        return view('ceo.applications.index', compact('applications'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $application = Application::findOrFail($request);

        return view('ceo.applications.show', compact('application'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApplicationRequest $request)
    {
        $application = Application::findOrFail($request->id);

        $application->update($request->validated());

        return redirect()->route('applications')->with('success', 'Application updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $application = Application::findOrFail($request);

        $application->delete();

        return redirect()->route('applications')->with('success', 'Application deleted successfully');
    }
}
