<?php
class User{
    protected $name;
    protected $lastname;
    protected $email;
    protected $username;
    protected $password;


    public function __construct(string $name, string $lastname, string $email, string $username, string $password)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        
    }

    public function insertCreditCard(CreditCard $creditCard)
    {
        return 'Processed Payment';

    }

    public function name(){
        return $this->name;
    }

}