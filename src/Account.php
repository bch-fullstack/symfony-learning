<?php


namespace App;


class Account
{
    private $balanceAnything;
    private $id;

    public function __construct($balance, $id){
        $this->balanceAnything = $balance;
        $this->id = $id;
    }

    public function getBalance(): int {
        return $this->balanceAnything;
    }
}