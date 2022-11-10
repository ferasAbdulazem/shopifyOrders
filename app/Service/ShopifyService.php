<?php

namespace App\Service;

use Shopify\Clients\Rest as ShopifyClient;

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
}
