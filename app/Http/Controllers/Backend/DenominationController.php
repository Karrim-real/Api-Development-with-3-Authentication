<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDenominationRequest;
use App\Http\Requests\UpdateDenominationRequest;
use App\Services\DenominationService;
use Illuminate\Http\Request;

class DenominationController extends Controller
{
    protected $denominationService;

    public function __construct(DenominationService $denominationService) {
        $this->denominationService = $denominationService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $denominations = $this->denominationService->Denominations();
        return view('backend.denominations.index', compact('denominations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.denominations.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDenominationRequest $request)
    {
        $data = $request->validated();
        if ($this->denominationService->createDenomination($data)) {
            return redirect()->route('denomination.index')->with('success', 'You have created a denomination, Thanks.');
        }
        return redirect()->back()->with('error', 'An Error Occurred while creating denomination, Try Again');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $denomination = $this->denominationService->Denomination($id);

        if ($denomination ) {
            return view('backend.denominations.edit', compact('denomination'));
        }
        return redirect()->back()->with('error', 'No Denomination, Try Again');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $denomination = $this->denominationService->Denomination($id);

        if ($denomination ) {
            return view('backend.denominations.edit', compact('denomination'));
        }
        return redirect()->back()->with('error', 'No Denomination, Try Again');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDenominationRequest $request, string $id)
    {
        $data = $request->validated();
        if ($this->denominationService->updateDenomination($id, $data)) {
            return redirect()->route('denomination.index')->with('success', 'You have updated a denomination, Thanks.');
        }
        return redirect()->back()->with('error', 'An Error Occurred while updating denomination, Try Again');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd($id);
        if ($this->denominationService->deleteDenomination($id)) {
            return redirect()->back()->with('warning', 'You have deleted denomination');
        }
        return redirect()->back()->with('danger', 'No record Found');
    }
}
