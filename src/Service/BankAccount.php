<?php declare(strict_types=1);

final class BankAccount
{
	protected int $balance = 0;

	public function __construct(int $balance = 0)
	{
		$this->balance = $balance;
	}

	public function credit(int $balance): BankAccount
	{
		$this->balance = (int) $balance;
		return $this;
	}

	public function debiter(int $balance): BankAccount
	{
		if ($this->balance < $balance) {
			throw new BankAccountException('Insufficient funds');
		}else{
			$this->balance -= (int) $balance;
			return $this;
		}
	}

	public function getBalance(): int
	{
		return $this->balance;
	}
}