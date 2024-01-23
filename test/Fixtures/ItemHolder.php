<?php


namespace oksihu\SzamlazzHu\Tests\Fixtures;


use Illuminate\Support\Collection;

class ItemHolder {
    use \oksihu\SzamlazzHu\Internal\Support\ItemHolder;

    public function __construct()
    {
        $this->items = $this->items ?: Collection::make();
    }


}
