<?php


namespace oksihu\SzamlazzHu\Tests\Fixtures;


use Illuminate\Support\Collection;

class PaymentHolder {

    use \oksihu\SzamlazzHu\Internal\Support\PaymentHolder;

    public function __construct()
    {
        $this->payments = Collection::make();
    }


}
