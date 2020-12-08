<?php


class Money
{
    public $name;
    public $value;
    /**
     * Money constructor.
     * * @param string $name USD
     * @param string $value summa
     */
    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

}