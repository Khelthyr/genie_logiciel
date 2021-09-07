<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require "C:\Users\cedri\Desktop\M2 EXO\genie_logiciel\src\Service\BankAccount.php";
require "C:\Users\cedri\Desktop\M2 EXO\genie_logiciel\src\Service\BankAccountException.php";


final class BankAccountTest extends TestCase
{
    public function testGetEmptyAccountBalance(): void
    {
        $account = new BankAccount();
        $this->assertEquals($account->getBalance(), 0);
    }

    public function testBalancePostCredit(): void
    {
        $account = new BankAccount();
        $account->credit(100);
        $this->assertEquals($account->getBalance(), 100);
    }

    public function testBalancePostDebiter(): void
    {
        $account = new BankAccount(100);
        $account->debiter(50);
        $this->assertEquals($account->getBalance(), 50);
    }

    public function testBalancePostDebiterException(): void
    {
        $account = new BankAccount();
        $this->expectException(BankAccountException::class);
        $account->debiter(50);
        
    }
}
