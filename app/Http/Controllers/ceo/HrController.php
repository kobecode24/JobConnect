<?php

namespace App\Http\Controllers\ceo;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHrRequest;
use App\Http\Requests\UpdateHrRequest;
use App\Models\Company;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HrController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $ceoId = Auth::user()->id;
        $company = Company::where('ceo_user_id', $ceoId)->first();

        if ($company) $hr = $company->hr;

        return view('ceo.hrs.index', compact('hr'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skills = Skill::latest()->get();

        return view('ceo.hrs.create', compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHrRequest $request)
    {

        $hr = User::create($request->validated());

        $hr->roles()->attach($request->role_id);
        $hr->skills()->sync($request->input($request->skill_id, []));

        return redirect()->route('hrs')->with('success', 'HR added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $hr = User::findOrFail($request);

        $skills = $hr->skills->pluck('name')->toArray();

        return view('ceo.hrs.show', compact('hr', 'skills'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $hr = User::findOrFail($request);

        $skills = Skill::latest()->get();

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

        return redirect()->route('hrs')->with('success', 'HR updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $hr = User::findOrFail($request);

        $hr->delete();

        return redirect()->route('hrs')->with('success', 'HR deleted successfully');
    }
}
