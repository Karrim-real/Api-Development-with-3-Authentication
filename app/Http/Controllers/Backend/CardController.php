<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCardRequest;
use App\Http\Requests\UpdateCardRequest;
use App\Services\CardService;
use App\Services\DenominationService;
use App\Services\MailingService;
use App\Services\OrderListService;
use App\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CardController extends Controller
{

    protected $cardService;
    protected $denominationService;
    protected $orderService;
    protected $OrderItemService;
    protected $mailingService;

    public function __construct(
        CardService $cardService,
        DenominationService $denominationService,
        OrderService $orderService,
        OrderListService $orderListService,
        MailingService $mailingService
        ) {
        $this->cardService = $cardService;
        $this->denominationService = $denominationService;
        $this->orderService = $orderService;
        $this->OrderItemService = $orderListService;
        $this->mailingService = $mailingService;
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
        $total_fee = 0;
        $card_fee = $this->denominationService->Denomination($data['denomination_id'])->amount;
        $total_fee = $data['quantity'] * $card_fee;
        $order_reference = Str::orderedUuid();
        // $cards = [];
        for($i = 0; $i < $data['quantity']; $i++){
            $data['title'] = 'Nezer GiftCard';
            $data['code'] = rand(1, 1000000000000000);
            $card = $this->cardService->createCard($data);
            $orderList['card_id'] = $card->id;
            $orderList['reference'] = $order_reference;
            $this->OrderItemService->createOrderList($orderList);
            // array_push($cards, $card);
        }
        // return $order_reference;
        $order['subject'] = 'Dear '. $data['email'].' Congratulation, Your Gift-Card Order Arrived, Order ID_'.$order_reference;
        $order['reference'] = $order_reference;
        $order['buyer_email'] = $data['email'];
        $order['quantity'] = $data['quantity'];
        $order['total'] = $total_fee;
        $order['cards'] = $this->OrderItemService->OrderListByReference($order_reference);
        // $messages['']
        // dd($cards);
        if ($this->orderService->createOrder($order)) {
            $this->mailingService->sendGiftCard($order['buyer_email'], $order);
            return redirect()->route('card.index')->with(['success' => 'GiftCard Created']);
        }

        return redirect()->route('card.index')->with(['error' => 'An error occurred']);
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
