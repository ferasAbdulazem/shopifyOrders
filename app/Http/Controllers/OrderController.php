<?php

namespace App\Http\Controllers;

use App\Events\OrderCreated;
use Illuminate\Http\Request;
use App\Service\OrderService;

class OrderController extends Controller
{

    private OrderService $orderService;


    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index()
    {
        $orders = $this->orderService->fetchAll();

        return view("order.index", [
            "orders" => $orders
        ]);
    }

    public function create()
    {
        return view("order.create");
    }

    public function store(Request $request)
    {

        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'total_price' => 'required'
        ]);

        $order = $this->orderService->storeOrder($formFields);
        event(new OrderCreated($order));

        return redirect('/');
    }
}
