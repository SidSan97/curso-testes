<?php

class DiscountCalculatorTest
{
    public function ShouldApply_WhenValueIsAboveTheMinimumTest()
    {
        $desconto = new DiscountCalculator;
        $totalValue = 130;
        $totalDescontado = $desconto->apply($totalValue);

        $valorEsperado = 110;
        $this->assertEquals($valorEsperado, $totalDescontado);
    }

    public function ShouldNotApply_WhenValueIsBellowTheMinimumTest()
    {
        $desconto = new DiscountCalculator;
        $totalValue = 90;
        $totalDescontado = $desconto->apply($totalValue);

        $valorEsperado = 90;
        $this->assertEquals($valorEsperado, $totalDescontado);
    }

    public function assertEquals($expectedValue, $actualValue)
    {
        if($expectedValue !== $actualValue)
        {
            $message = "Expected " . $expectedValue . " but got: " . $actualValue;
            throw new \Exception($message);
        }

        echo "Test Passed \n";
    }
}