<?php

namespace App\Http\Controllers;
use App\Models\CompanyDescription;
use Illuminate\Http\Request;

class CompanyDescriptionController extends Controller
{
   public function index()
    {
        $descriptions = CompanyDescription::all();
        return view('company_descriptions.index', compact('descriptions'));
    }

    public function create()
    {
        return view('company_descriptions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'tagline' => 'required',
            'description' => 'required',
        ]);

        CompanyDescription::create($request->all());

        return redirect()->route('company_descriptions.index')->with('success', 'Company description added.');
    }

    public function edit(CompanyDescription $companyDescription)
    {
        return view('company_descriptions.edit', compact('companyDescription'));
    }

    public function update(Request $request, CompanyDescription $companyDescription)
    {
        $companyDescription->update($request->all());

        return redirect()->route('company_descriptions.index')->with('success', 'Updated successfully.');
    }

    public function destroy(CompanyDescription $companyDescription)
    {
        $companyDescription->delete();

        return redirect()->route('company_descriptions.index')->with('success', 'Deleted successfully.');
    }
}
