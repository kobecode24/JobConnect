<?php

namespace App\Http\Controllers\ceo;

use App\Http\Controllers\Controller;
use App\Models\Company;
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

        // Fetch the company name based on the authenticated user's company_id
        // Assuming you have a Company model and each user belongs to a company
        $company = Company::find($user->company_id);

        // If you don't have a Company model, replace the above line with a direct query
        // to fetch the company name using DB facade or another method

        $companyId = $user->company_id;

        // Fetch the IDs of users with roles 'ceo' or 'hr' within the same company
        $ceoAndHrUserIds = User::where('company_id', $companyId)
            ->whereHas('roles', function ($query) {
                $query->whereIn('name', ['ceo', 'hr']);
            })
            ->pluck('id');

        $jobOffers = JobOffer::whereIn('created_by_user_id', $ceoAndHrUserIds)->get();

        // Pass both jobOffers and the company name (or company object) to the view
        return view('ceo.job_offers.index', compact('jobOffers', 'company'));
    }

    public function create()
    {
        return view('ceo.job_offers.create');
    }

    public function store(StoreJobOfferRequest $request)
    {
        $data = $request->validated();
        $data['created_by_user_id'] = auth()->id();

        $jobOffer = JobOffer::create($data);

        if ($request->hasFile('image')) {
            $jobOffer->addMediaFromRequest('image')
                ->toMediaCollection('job_offers', 'media');
        }

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
