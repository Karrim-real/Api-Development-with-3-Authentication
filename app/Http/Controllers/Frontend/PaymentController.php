<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\CardService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $cardService;

    public function __construct(CardService $cardService)
    {
        $this->cardService = $cardService;
    }


    public function getCardByPin(Request $request)
    {

        $cardPin = $request->cardPin;
        return strlen($cardPin);
        if ($request->ajax()) {

            if (strlen($cardPin) > 15) {
                # code...
            }
            if ($this->cardService->CardByPin($cardPin)) {
                $cardInfo = $this->cardService->CardByPin($cardPin);
                return $cardInfo;
            }

            return response()->json([
                'status' => 'error',
                'title' => 'Something went wrong',
                'body' => 'Card Not Found, Please check pin and try again'
            ]);
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
