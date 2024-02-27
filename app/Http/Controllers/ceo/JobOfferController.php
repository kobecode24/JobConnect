<?php

namespace App\Http\Controllers\ceo;

use App\Http\Controllers\Controller;
use App\Models\JobOffer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJobOfferRequest;
use App\Http\Requests\UpdateJobOfferRequest;

class JobOfferController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->isCeoOrHrOfCompany()) {
            $jobOffers = JobOffer::where('created_by_user_id', $user->id)->get();
        } else {
            $jobOffers = collect();
        }
        return view('ceo.job_offers.index', compact('jobOffers'));
    }

    public function create()
    {
        return view('ceo.job_offers.create');
    }

    public function store(StoreJobOfferRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['created_by_user_id'] = auth()->id();

        JobOffer::create($validatedData);

        return redirect()->route('ceo.job_offers.index')->with('success', 'Job offer created successfully.');
    }

    public function show(JobOffer $jobOffer)
    {
        return view('ceo.job_offers.show', compact('jobOffer'));
    }

    public function edit(JobOffer $jobOffer)
    {
        return view('ceo.job_offers.edit', compact('jobOffer'));
    }

    public function update(UpdateJobOfferRequest $request, JobOffer $jobOffer)
    {
        $jobOffer->update($request->validated());
        return redirect()->route('ceo.job_offers.index')->with('success', 'Job offer updated successfully.');
    }

    public function destroy(JobOffer $jobOffer)
    {
        $jobOffer->delete();
        return redirect()->route('ceo.job_offers.index')->with('success', 'Job offer deleted successfully.');
    }
}
