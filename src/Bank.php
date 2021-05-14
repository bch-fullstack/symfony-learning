<?php


namespace App;

class Bank
{
    private $accounts;

    public function __construct()
    {
        $this->accounts = [];
    }

    public function addAccount(Account $account)
    {
        // add this account to the array of accounts
        $this->accounts[] = $account;
    }

    /**
     * look under the array of accounts for the one with matching id
     * return the account if found
     * @param int $accountId
     * @return Account
     */
    public function getAccountById(int $accountId): Account
    {
        // return the first account in the array accounts
        // TODO: update the logic so it will return the account with matching accountId
        return $this->accounts[0];
    }
}