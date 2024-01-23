<?php


namespace oksihu\SzamlazzHu\Tests;


use oksihu\SzamlazzHu\Internal\Support\ItemHolder;
use oksihu\SzamlazzHu\Invoice;

class InvoiceTest extends \Orchestra\Testbench\TestCase {

    /** @test */
    public function it_is_item_holder()
    {
        $this->assertArrayHasKey(ItemHolder::class, class_uses_recursive(Invoice::class));
    }

}
