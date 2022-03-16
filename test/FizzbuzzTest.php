<?php

namespace App;

//require __DIR__.'../vendor/autoload.php';


use PHPUnit\Framework\TestCase;



class FizzbuzzTest extends TestCase
{
    public function testFizzbuzz()
    {

        $this->assertEquals('123', fizzbuzz());
    }
};

function fizzbuzz()
{
    $out = '';
    for ($i = 1; $i <= 3; $i++) {
        $out .= $i;
    }
    
    return $out;
}
