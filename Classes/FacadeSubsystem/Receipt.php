<?php

namespace Classes\FacadeSubsystem;


class Receipt
{
    private static int $orderId = 0;
    private int $currentID;
    private array $items = [];

//    private static $menuNames = [
//        Jooje->value => 'Jooje Kabab',
//        Gheyme->value => 'Khoresht Gheyme',
//        Koobide->value => 'Kabab Koobide',
//        GhormeSabzy->value => 'An Expert Food',
//        Morgh->value => 'Cholo Morgh',
//    ];

    private static $menu = [
        'Jooje' => 90,
        'Gheyme' => 75,
        'Koobide' => 80,
        'GhormeSabzy' => 500,
        'Zereshk polo ba Morgh' => 395
    ];

    public static function orderConfirmed(): void
    {
        self::$orderId++;
    }

    public function __construct(private int $time)
    {
        $this->currentID = self::$orderId;
    }

    public function addItem(string $menuItem)
    {
        $this->items[] = $menuItem;
    }

    public function __toString(): string
    {
        if (empty($this->items)) return "Nothing has been ordered";

        $total = 0;
        $receipt = "Date : " . \date('H:i:s', $this->time) . "<br>";
        $receipt .= "Order Id : " . $this->currentID . "<br>";
        $receipt .= "You Ordered : <br>";
        foreach ($this->items as $key => $item) {
            $receipt .= ($key + 1) . ". " . " --> " . self::$menu[$item] . "<br>";
            $total += self::$menu[$item];
        }
        $receipt .= "Total Price : $total";

        return $receipt;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }
}