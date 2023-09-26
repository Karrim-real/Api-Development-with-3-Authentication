<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCardRequest;
use App\Http\Requests\UpdateCardRequest;
use App\Services\CardService;
use App\Services\DenominationService;
use Illuminate\Http\Request;

class CardController extends Controller
{

    protected $cardService;
    protected $denominationService;

    public function __construct(CardService $cardService, DenominationService $denominationService) {
        $this->cardService = $cardService;
        $this->denominationService = $denominationService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = $this->cardService->Cards();

        return view('backend.cards.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $denominations = $this->denominationService->activeDenomination(1);

        return view('backend.cards.create', compact('denominations'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCardRequest $request)
    {
        $data = $request->validated();
        // dd($data['quantity']);
        for($i = 1; $i < $data['quantity']; $i++){
            $data['title'] = 'Nezer GiftCard';
            $data['code'] = rand(1, 1000000000000000);
            $this->cardService->createCard($data);
        }
            return redirect()->route('card.index')->with(['success' => 'GiftCard Created']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $card)
    {
        $denominations = $this->denominationService->activeDenomination(1);
        $card = $this->cardService->Card($card);

        if ($card) {
            return view('backend.cards.edit', compact('card', 'denominations'));
        }
        return redirect()->back()->with(['error', 'No GiftCard Fund']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $card)
    {
        $denominations = $this->denominationService->activeDenomination(1);

        $card = $this->cardService->Card($card);

        if ($card) {
            return view('backend.cards.edit', compact('card', 'denominations'));
        }
        return redirect()->back()->with(['error', 'No GiftCard Fund']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCardRequest $request, string $cardId)
    {
        $data = $request->validated();
        // dd($data);
        if ($this->cardService->updateCard($cardId, $data)) {
            return redirect()->route('card.index')->with(['Info' => 'GiftCard Updated']);
        }
        return redirect()->back()->with(['error', 'An error occurred']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $cardId)
    {
        if ($this->cardService->deleteCard($cardId)) {
            return response()->json([
                'status' => 200,
                'message' => 'Card deleted'
            ]);
            // return redirect()->back()->with('warning', 'You have deleted denomination');
        }
        return redirect()->back()->with(['danger'=> 'No record Found']);
    }
}
