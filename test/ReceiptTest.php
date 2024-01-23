<?php


namespace oksihu\SzamlazzHu\Tests;


use oksihu\SzamlazzHu\Internal\Support\ItemHolder;
use oksihu\SzamlazzHu\Internal\Support\PaymentHolder;
use oksihu\SzamlazzHu\Receipt;

class ReceiptTest extends \Orchestra\Testbench\TestCase {

    /** @test */
    public function it_is_item_holder()
    {
        $this->assertArrayHasKey(ItemHolder::class, class_uses(Receipt::class));
    }

    /** @test */
    public function it_is_payment_holder()
    {
        $this->assertArrayHasKey(PaymentHolder::class, class_uses(Receipt::class));
    }

    /** @test */
    public function it_has_item_total_alias()
    {
        $this->assertTrue(method_exists(new Receipt(), 'totalItems'));
    }

    /** @test */
    public function it_has_payment_total_alias()
    {
        $this->assertTrue(method_exists(new Receipt(), 'totalPayments'));
    }

}
