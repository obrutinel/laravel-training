<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyController extends Controller
{
    public function index(): View
    {
        return view('admin.company.index', [
            'companies' => Company::paginate(10),
        ]);
    }

    public function edit(Company $company): View
    {
        return view('admin.company.edit', [
            'company' => $company,
        ]);
    }

    public function update(CompanyRequest $request, Company $company): RedirectResponse
    {
        $company->update($request->validated());

        return redirect()
            ->route('admin.company.index')
            ->with('success', 'Company updated.');
    }
}
