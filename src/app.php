<?php

class PrimePalindromePassword
{
    private $n;
    private $k;

    public function __construct(int $n, int $k)
    {
        $this->n = $n;
        $this->k = $k;
    }

    public function generateNumberList()
    {
        return range(1, $this->n);
    }

    public function findPrimes()
    {
        $primes = [];
        for ($i = 2; $i <= $this->n; $i++) {
            $isPrime = true;
            for ($j = 2; $j < $i; $j++) {
                if ($i % $j == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                $primes[] = $i;
            }
        }
        return $primes;
    }

    public function findPalindromes()
    {
        $palindromes = [];
        for ($i = 1; $i <= $this->n; $i++) {
            if (strrev((string) $i) == (string) $i) {
                $palindromes[] = $i;
            }
        }
        return $palindromes;
    }

    public function generatePassword()
    {
        $primes = $this->findPrimes();
        $password = '';
        $length = rand(3, $this->k);
        for ($i = 0; $i < $length; $i++) {
            $password .= $primes[array_rand($primes)];
        }
        return $password;
    }
}

$n = 100;
$k = 8;
$primePalindromePassword = new PrimePalindromePassword($n, $k);

$numberList = $primePalindromePassword->generateNumberList();
echo 'Number List: ' . implode(', ', $numberList) . "\n";

$primes = $primePalindromePassword->findPrimes();
echo 'Primes: ' . implode(', ', $primes) . "\n";

$palindromes = $primePalindromePassword->findPalindromes();
echo 'Palindromes: ' . implode(', ', $palindromes) . "\n";

$password = $primePalindromePassword->generatePassword();
echo 'Password: ' . $password . "\n";
