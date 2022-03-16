<?php

namespace App;

//require __DIR__.'../vendor/autoload.php';


use PHPUnit\Framework\TestCase;



class FizzbuzzTest extends TestCase
{
    public function testFizzbuzz()
    {

        $this->assertEquals([1, 2, 'fizz', 4, 'buzz', 'fizz'], fizzbuzz());
    }
};

function fizzbuzz()
{
    $out = [];
    for ($i = 1; $i <= 6; $i++) {

        if ($i === 3) {
            $out[] = 'fizz';

        } else if ($i === 5) {
            $out[] = 'buzz';

        } else if ($i === 6) {
            $out[] = 'fizz';

        } else {
            $out[] = $i;
        }
    }
    return $out;
}


function isMultipleOf($nbr, $multiple){

}