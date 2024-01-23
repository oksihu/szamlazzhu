<?php


namespace oksihu\SzamlazzHu\Contracts;

/**
 * Interface ArrayableInvoiceItemCollection
 * @package oksihu\SzamlazzHu\Contracts
 */
interface ArrayableItemCollection
{

    /**
     * @see ArrayableItem
     * @return ArrayableItem[]
     */
    function toItemCollectionArray();

}
