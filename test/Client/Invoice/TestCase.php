<?php


namespace oksihu\SzamlazzHu\Tests\Client\Invoice;


use oksihu\SzamlazzHu\Client\Client;
use oksihu\SzamlazzHu\Invoice;

class TestCase extends \oksihu\SzamlazzHu\Tests\Client\TestCase {

    /**
     * @param null $number
     * @param Client|null $client
     * @return Invoice
     */
    protected function getEmptyInvoice($number = null, Client $client = null)
    {
        $invoice = new Invoice();

        if ($client) {
            $invoice->setClient($client);
        }

        if ($number) {
            $invoice->invoiceNumber = $number;
        }

        return $invoice;
    }

}
