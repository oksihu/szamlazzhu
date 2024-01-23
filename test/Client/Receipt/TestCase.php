<?php


namespace oksihu\SzamlazzHu\Tests\Client\Receipt;


use oksihu\SzamlazzHu\Client\Client;
use oksihu\SzamlazzHu\Internal\Support\PaymentMethods;
use oksihu\SzamlazzHu\Receipt;

class TestCase extends \oksihu\SzamlazzHu\Tests\Client\TestCase {

    /**
     * @param int $orderNumber
     * @param Client $client
     * @param null $items
     * @param null $payments
     * @return Receipt
     */
    protected function getReceipt($orderNumber = 1, Client $client = null, $items = null, $payments = null)
    {
        $receipt = new Receipt([
            'orderNumber' => $orderNumber,
            'prefix' => 'PRFX',
            'currency' => 'EUR',
            'comment' => 'nothing special',
            'paymentMethod' => PaymentMethods::$paymentMethods['bank_card'],
            'exchangeRateBank' => 'MNB',
            'exchangeRate' => 300
        ]);

        $payments = $payments ?: [
            'paymentMethod' => PaymentMethods::$paymentMethods['bank_card'],
            'amount' => 127,
            'comment' => 'Paid gracefully'
        ];
        $items = $items ?: [
            'name' => 'Test Product',
            'quantity' => 1,
            'quantityUnit' => 'db',
            'netUnitPrice' => 100,
            'taxRate' => 27,
        ];

        if ($client) {
            $receipt->setClient($client);
        }

        $receipt->addPayment($payments);
        $receipt->addItem($items);

        return $receipt;
    }

}
