<?php

namespace App\Http\Controllers\Hiring;

use App\Http\Controllers\Controller;
use App\Http\Requests\Hiring\TravelStoreRequest;
use App\Models\Travel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $travels = Travel::paginate(3)->where('is_public', true);

        return response()->json([
            'data' => $travels,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TravelStoreRequest $request)
    {
        $dataValidated = $request->validated();

        $travel = Travel::create($dataValidated);

        return [
            "status" => 1,
            "data" => $travel
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
