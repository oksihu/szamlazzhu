<?php


namespace oksihu\SzamlazzHu\Contracts;


interface ArrayablePaymentCollection
{

    /**
     * @see ArrayablePayment
     * @return ArrayablePayment[]
     */
    function toPaymentCollectionArray();

}
