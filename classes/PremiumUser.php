<?php
class PremiumUser extends User 
{
    protected $isPremium = true;
    protected $discount;
    

  public function discount()
  {
      $this->discount = 20;
      return $this->discount;
  }

  public function isPremium(){
      return $this->isPremium;

  }
}