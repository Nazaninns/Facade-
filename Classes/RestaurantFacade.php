<?php

namespace Classes;

use Classes\FacadeSubsystem\Chef;
use Classes\FacadeSubsystem\Menu;
use Classes\FacadeSubsystem\Receipt;

class RestaurantFacade
{
    private Receipt $receipt;
    private Chef $chef;
    public function __construct(array $order)
    {
        $this->receipt = new Receipt(time());
        foreach ($order as $item){
            $this->receipt->addItem($item);
        }
        $this->chef = new Chef($this->receipt);
        return $this;
    }

    public function finalizeOrder()
    {
        $foods = $this->chef->cook();
        return $foods;
    }

    /**
     * @return Receipt
     */
    public function getReceipt(): Receipt
    {
        return $this->receipt;
    }
}