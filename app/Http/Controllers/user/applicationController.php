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
     * Update the specified resource in storage.
     */
    public function update(UpdateApplicationRequest $request, Application $application)
    {
        // dd('hh');
        $request['user_id'] = Auth::id();
        $request['status'] = '2';

        $application->update($request->all());

        return redirect()->route('home.index')->with('success', 'Contgratulation Your a member of the company');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {

        $application->delete();

        return redirect()->route('home.index')->with('success', 'Application deleted successfully');
    }

    public function accept($id)
    {
        $application = Application::findOrFail($id);
        $application->status = '2';
        $application->save();


        $jobOfferCreatorId = $application->job_offer->created_by_user_id;

        $jobOfferCreator = User::findOrFail($jobOfferCreatorId);

        $companyId = $jobOfferCreator->company_id;

        $user = Auth::user();
        $user->company_id = $companyId;
        $user->save();

        return redirect()->route('home.index')->with('success', 'Application accepted successfully.');
    }
}
