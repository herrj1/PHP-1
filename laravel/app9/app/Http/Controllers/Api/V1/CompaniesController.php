<?php

namespace App\Http\Controllers\Api\V1;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		return Company::all();
    }

    public function store(Request $request)
    {
        //
		$company = Company::create($request->all());
		return $company;
    }

    public function show($id)
    {
        //
		return Company::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        //
		$company = Company::findOrFail($id);
		$company->update($request->all());
		return $company;
    }

    public function destroy($id)
    {
        //
		$company = Company::findOrFail($id);
		$company->delete();
		return '';
    }
}
