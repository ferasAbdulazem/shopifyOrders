<?php

namespace App\Service;

use Illuminate\Support\Facades\Log;
use Shopify\Clients\Rest as ShopifyClient;
use Shopify\Webhooks\Registry;
use Shopify\Webhooks\Topics;

/**
 * This Service handles REST API calls to shopify
 */
class ShopifyService
{
    private ShopifyClient $shopifyClient;

    public function __construct()
    {
        $this->shopifyClient = new ShopifyClient($_ENV["SHOPIFY_APP_HOST_NAME"], $_ENV["SHOPIFY_ACCESS_TOKEN"]);
    }

    /**
     * sends an order to shopify 
     *
     * @param var $data - the order data
     * @return boolean
     */
    public function storeOrder($data)
    {
        $response = $this->shopifyClient->post("orders", ["order" => $data]);

        return $response->getStatusCode() === 200 ?? false;
    }


    public function subscribeOrderCreated()
    {
        $response = Registry::register(
            '/shopify/storeOrder',
            Topics::ORDERS_CREATE,
            "https://wb-store.ferasdev.com/",
            $_ENV["SHOPIFY_ACCESS_TOKEN"],
        );

        if (!$response->isSuccess()) {
            Log::info("Webhook registration failed with response: \n" .
                var_export($response, true));
            return false;
        }

        return true;
    }
}
