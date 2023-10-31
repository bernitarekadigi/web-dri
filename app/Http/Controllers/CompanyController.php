<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Prd;

class CompanyController extends Controller
{
    public function index()
    {
        // return view('company.index');
        return view('admin.company');
    }


    public function formPrd()
    {
        return view('company.index');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($company)
    {
        $companyID = Company::where('company_code', $company)->get();
        return view(
            'company.detail',
            [
                'company'   =>  Company::where('id', $companyID[0]->id)->with('prd', 'detailprd', 'fitur', 'target')->get(),
                'prd'   =>  Prd::where('company_id', $companyID[0]->id)->with('company', 'detailprd', 'fitur', 'target')->get(),
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
