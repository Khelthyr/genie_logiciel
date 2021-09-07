<?php declare(strict_types=1);

final class BankAccount
{
	protected int $balance = 0;

	public function __construct()
	{
		$this->balance = 0;
	}

	public function credit(int $balance): BankAccount
	{
		$this->balance = (int) $balance;
		return $this;
	}

	public function getBalance(): int
	{
		return $this->balance;
	}
}