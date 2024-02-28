<?php

namespace App\Http\Controllers\ceo;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::latest()->get();

        return view('ceo.company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::latest()->get();
        $cities = City::latest()->get();
        $hrs = User::whereHas('roles', function ($query) {
            $query->where('name', 'HR');
        })
            ->latest()
            ->get();

        return view('ceo.company.create', compact('categories', 'cities', 'hrs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        $request['founded'] = now();
        $request['ceo_user_id'] = Auth::id();

        $company = Company::create($request->all());

        $user = Auth::user();
        $company->categories()->sync($request->input('category_id', []));
        $user->roles()->attach(3);

        return redirect()->route('home.index')->with('success', 'Congratulation Your Company has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $company = Company::findOrFail($request);

        $categories = $company->categories->pluck('name')->toArray();

        return view('ceo.companies.show', compact('company', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $company = Company::findOrFail($request);

        $categories = Category::latest()->get();
        $cities = City::latest()->get();

        return view('ceo.companies.edit', compact('categories', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request)
    {
        $company = Company::findOrFail($request);

        $company->update($request->validated());
        $company->categories()->sync($request->category_id);

        return redirect()->route('companies')->with('success', 'Your Company has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $company = Company::findOrFail($request);

        $company->delete();

        return redirect()->route('companies')->with('success', 'Company deleted successfully');
    }
}
