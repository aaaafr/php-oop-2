<?php
class CreditCard{
    protected $number;
    protected $expDate;
    protected $cvc;

    public function __construct($number, $expDate, $cvc)
    {
        $this->number = $number;
        $this->expDate = $expDate;
        $this->cvc = $cvc;
    }
}
