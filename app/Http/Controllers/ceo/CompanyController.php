<?php

namespace App\Http\Controllers\ceo;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::latest()->get();

        return view('ceo.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::latest()->get();
        $cities = City::latest()->get();

        return view('ceo.companies.create', compact('categories', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        $company = Company::create($request->validated());

        $company->categories()->attach($request->category_id);

        return redirect()->route('companies')->with('success', 'Congratulation Your Company has been created successfully');
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
