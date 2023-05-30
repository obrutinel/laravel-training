<?php

namespace App\Actions;

use App\Models\Company;
use Illuminate\Http\Request;

class UpdateEnableCompany
{
    public function __invoke(Company $company, Request $request): void
    {
        if($request->enable) {
            $company->update([
                'enable' => $request->enable,
            ]);
        }

    }
}