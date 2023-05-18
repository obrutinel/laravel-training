<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CandidateRequest;
use App\Models\Candidate;
use App\Models\User;
use Illuminate\View\View;

class CandidateController extends Controller
{
    public function create(): View
    {
        return view('admin.candidate.create');
    }

    public function store(CandidateRequest $request)
    {
        $user = User::create($request->validated());

        $request->merge(['user_id' => $user->id]);

        Candidate::create($request->all());

        return redirect()
            ->route('dashboard')
            ->with('success', 'Le candidat a bien été ajouté');

    }
}
