<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Company\StoreCompanyRequest;
use App\Http\Requests\Company\UpdateCompanyRequest;

class CompanyController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() 
	{
		$companies = Company::paginate(10);
		return view('admin.companies.index', compact('companies'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() 
	{
		return view('admin.companies.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StoreCompanyRequest $request) 
	{
		$data = $request->validated();

		if ($request->hasFile('logo')) {
			$data['logo'] = $request->logo->store('logos', 'public');
		}

		Company::create($data);
		return redirect()->route('companies.index')->with('success', 'Company created successful!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Company $company) 
	{
		return view('admin.companies.show', compact('company'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Company $company) 
	{
		return view('admin.companies.edit', compact('company'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(UpdateCompanyRequest $request, Company $company) 
	{
		$data = $request->validated();
		
		if ($request->hasFile('logo')) {
			if (Storage::disk('public')->exists($company->logo)) {
				Storage::disk('public')->delete($company->logo);
			}

			$data['logo'] = $request->logo->store('logos', 'public');
		}

		$company->update($data);

		return redirect()->route('companies.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Company $company) 
	{
		$company->delete();
		return redirect()->route('companies.index');
	}
}
