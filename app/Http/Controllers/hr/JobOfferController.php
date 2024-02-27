<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\Controller;
use App\Models\JobOffer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJobOfferRequest;
use App\Http\Requests\UpdateJobOfferRequest;

class JobOfferController extends Controller
{
    public function index()
    {
        $jobOffers = JobOffer::all();
        return view('rh.job_offers.index', compact('jobOffers'));
    }

    public function create()
    {
        return view('rh.job_offers.create');
    }

    public function store(StoreJobOfferRequest $request)
    {
        $data = $request->validated();
        $data['created_by_user_id'] = auth()->id();
        JobOffer::create($data);
        return redirect()->route('hr.job_offers.index')->with('success', 'Job offer created successfully.');
    }

    public function show(JobOffer $jobOffer)
    {
        return view('rh.job_offers.show', compact('jobOffer'));
    }

    public function edit(JobOffer $jobOffer)
    {
        return view('rh.job_offers.edit', compact('jobOffer'));
    }

    public function update(UpdateJobOfferRequest $request, JobOffer $jobOffer)
    {
        $jobOffer->update($request->validated());
        return redirect()->route('hr.job_offers.index')->with('success', 'Job offer updated successfully.');
    }

    public function destroy(JobOffer $jobOffer)
    {
        $jobOffer->delete();
        return redirect()->route('hr.job_offers.index')->with('success', 'Job offer deleted successfully.');
    }
}
