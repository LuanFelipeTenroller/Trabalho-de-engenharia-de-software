<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Funcoes.php';

class FuncoesTest extends TestCase
{
    public function testIsEven()
    {
        $this->assertTrue(Funcoes::isEven(2));
        $this->assertFalse(Funcoes::isEven(3));
    }

    public function testFactorial()
    {
        $this->assertEquals(1, Funcoes::factorial(0));
        $this->assertEquals(1, Funcoes::factorial(1));
        $this->assertEquals(120, Funcoes::factorial(5));
    }

    public function testFactorialNegativeThrowsException()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::factorial(-1);
    }

    public function testIsPalindrome()
    {
        $this->assertTrue(Funcoes::isPalindrome('arara'));
        $this->assertTrue(Funcoes::isPalindrome('A man, a plan, a canal, Panama'));
        $this->assertFalse(Funcoes::isPalindrome('luan'));
    }

    public function testIsPalindromeWithNumbersAndCase()
    {   
    $this->assertTrue(Funcoes::isPalindrome('12321'));
    $this->assertTrue(Funcoes::isPalindrome('RaDaR'));
    $this->assertFalse(Funcoes::isPalindrome('12345'));
    }

    public function testFahrenheitToCelsius()
    {
        $this->assertEquals(0, Funcoes::fahrenheitToCelsius(32));
        $this->assertEquals(100, Funcoes::fahrenheitToCelsius(212));
    }

    public function testFahrenheitToCelsiusWithNegative()
    {
        $this->assertEquals(-40, Funcoes::fahrenheitToCelsius(-40));
    }

    public function testFahrenheitToCelsiusWithDecimal()
    {
        $this->assertEquals(37.77777777777778, Funcoes::fahrenheitToCelsius(100), '', 0.0001);
    }

    public function testCalculateDiscount()
    {
        $this->assertEquals(90, Funcoes::calculateDiscount(100, 10));
        $this->assertEquals(75, Funcoes::calculateDiscount(100, 25));
    }

    public function testCalculateDiscountWithNegativePercent()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(100, -10);
    }

    public function testCalculateDiscountWithZeroValues()
    {
        $this->assertEquals(0, Funcoes::calculateDiscount(0, 0));
        $this->assertEquals(100, Funcoes::calculateDiscount(100, 0)); 
        $this->assertEquals(0, Funcoes::calculateDiscount(100, 100)); 
    }
}
