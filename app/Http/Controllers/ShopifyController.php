<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\ShopifyService;
use Illuminate\Support\Facades\Log;

class ShopifyController extends Controller
{

    private ShopifyService $shopifyService;


    public function __construct(ShopifyService $shopifyService)
    {
        $this->shopifyService = $shopifyService;
    }

    public function storeOrder(Request $request)
    {
        Log::info("/api/shopify/orders");

        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "tags" => $request->tags,
        ];

        $success = $this->shopifyService->storeOrder($data);


        Log::info($success ? "successfully added order to shopify" : "failed to add the order to shopify");

        return response()->json(compact("success"));
    }


    public function register()
    {
        $isSuccessful =  $this->shopifyService->subscribeOrderCreated();

        if (!$isSuccessful) {
            return response('registration failed, look in logs for details', 500);
        }

        return response('registered successfully!');
    }
}
