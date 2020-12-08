<?php
require_once __DIR__ . '/Money.php';

class PriceList
{
    public $arr;

    /**
     * PriceList constructor.
     * @param array $arr list
     */
    public function __construct(array $arr)
    {
        $this->arr = $arr;
    }

    /**
     * @param $money
     * @param $to_money_type
     */
    public function convert($money, $to_money_type)
    {
        if ($money->getName() == 'USD') {
            $sum = $money->getValue() * $this->arr[ $money->getName() ];

        } elseif ($money->getName() == 'RUB') {
            $sum = $money->getValue() / $this->arr[ $to_money_type ];

        } elseif ($money->getName() == 'EUR') {
            $sum = (($this->arr[ $money->getName() ] * $money->getValue()) / ($this->arr[ $to_money_type ] * $money->getValue())) * $money->getValue();

        }
        $sum1 = round($sum, 0);
        return $to_money_type . $sum1;
    }
}
