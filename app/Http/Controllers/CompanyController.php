<?php

namespace App\Http\Controllers;

use App\Actions\UpdateEnableCompany;
use App\Actions\UpdateMailSendAtCompanyAction;
use App\Http\Requests\CompanyRequest;
use App\Mail\WelcomeCompany;
use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

    public function destroy(Company $company): RedirectResponse
    {
        $company->delete();

        return redirect()
            ->route('admin.company.index')
            ->with('success', 'Company deleted.');
    }

    public function mail(Request $request, Company $company): RedirectResponse
    {

        (new UpdateMailSendAtCompanyAction())($company);
        (new UpdateEnableCompany())($company, $request);

        Mail::send(new WelcomeCompany($company));

        return redirect()
            ->route('admin.company.index')
            ->with('success', 'Mail sent.');
    }
}
