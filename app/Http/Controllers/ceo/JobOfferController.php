<?php

namespace App\Http\Controllers\ceo;

use App\Http\Controllers\Controller;
use App\Models\JobOffer;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJobOfferRequest;
use App\Http\Requests\UpdateJobOfferRequest;

class JobOfferController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $companyId = $user->company_id;

        $ceoAndHrUserIds = User::where('company_id', $companyId)
            ->whereHas('roles', function ($query) {
                $query->whereIn('name', ['ceo', 'hr']);
            })
            ->pluck('id');

        $jobOffers = JobOffer::whereIn('created_by_user_id', $ceoAndHrUserIds)->get();

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
