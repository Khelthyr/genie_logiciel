<?php declare(strict_type=1);

class ClassName extends AnotherClass
{
	protected interger $balance;

	public function __construct()
	{
		$this->balance = 0;
	}

	public function credit(interger $somme): BankAccount
	{
		$this->balance = $balance;
		return $this;
	}

	public function getBalance()
	{
		return $balance;
	}
}