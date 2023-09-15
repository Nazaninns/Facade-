<?php

namespace Classes\FacadeSubsystem;

class Chef
{
    private array $itemsToBeCooked;

    public function __construct(private Receipt $receipt)
    {
        $this->itemsToBeCooked = $this->receipt->getItems();
    }

    public function cook()
    {
        $foods = [];
        foreach ($this->itemsToBeCooked as $item) {
            
            echo "cooking $item <br>";
            $foods[] = $item." (cooked)";
        }
        echo "==========================="."<br>";
        return $foods;
    }
}