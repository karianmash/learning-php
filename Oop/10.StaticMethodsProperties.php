<?php

/**
 * - Static methods are declared with the static keyword:
 * - Static methods can be called directly - without creating an instance of the class first.
 * - Static methods are declared with the static keyword: an instance of the class first
 */

class Account
{
    protected $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }

    public function withdraw($amount)
    {
        if (self::validate_withdrawal($amount, $this->balance)) {
            $this->balance -= $amount;
            echo "Amount withdrawn: " . $amount . "\n";
        } else {
            echo "Withdrawal amount exceeds account balance. Your balance is " . $this->balance . "\n";
        }
    }

    private static function validate_withdrawal($amount, $balance)
    {
        if ($amount <= $balance) {
            return true;
        } else {
            return false;
        }
    }
}

class BankAccount extends Account
{
    public static $interest_rate = 0.05;

    public static function set_interest_rate($rate)
    {
        self::$interest_rate = $rate;
        echo "Interest rate now set to " . $rate . "\n";
    }

    public static function get_interest_rate()
    {
        return self::$interest_rate;
    }
}

$account1 = new BankAccount(5000);
$account1->withdraw(2000); // Output: Amount withdrawn: 2000
$account1->withdraw(4000); // Output: Withdrawal amount exceeds account balance

BankAccount::set_interest_rate(0.06); // Output: Interest rate set to 0.06
echo "Current interest rate: " . BankAccount::get_interest_rate() . "\n"; // Output: Current interest rate: 0.06
