<?php

namespace App\Http\Controllers;

use App\Models\Company;
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
}
