<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Service\ShopifyService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

/**
 * this Listener is triggered when an order is placed
 * on our platform and it will sync the order with shopify
 */
class SendOrderToShopify
{

    private ShopifyService $shopifyService;



    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(ShopifyService $shopifyService)
    {
        $this->shopifyService = $shopifyService;
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\OrderCreated  $event
     * @return void
     */
    public function handle(OrderCreated $event)
    {
        $data = [
            "name" => $event->order->name,
            "email" => $event->order->email,
            "tags" => $event->order->tags,
            // order items are hard coded at the moment
            // because they are required by shopify
            "line_items" => [
                [
                    "title" => "Dr. Martens 1460",
                    "price" => 200,
                    "quantity" => 1,
                ]
            ]
        ];

        $this->shopifyService->storeOrder($data);
    }
}
