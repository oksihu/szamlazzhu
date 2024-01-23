<?php


namespace oksihu\SzamlazzHu\Contracts;

use oksihu\SzamlazzHu\Internal\Support\PaymentMethods;

/**
 * Interface ArrayablePayment
 * @package oksihu\SzamlazzHu\Contracts
 */
interface ArrayablePayment
{

    /**
     * [
     *  'paymentMethod' => '', // @see \oksihu\SzamlazzHu\Internal\Support\PaymentMethods::$paymentMethods
     *  'amount' => '', // The amount was paid
     *  'comment' => '', // A single note on payment
     * ]
     *
     * @return array
     */
    function toPaymentArray();

}
