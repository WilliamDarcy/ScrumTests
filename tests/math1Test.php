<?php

include __DIR__."/../math1.php";


use PHPUnit\Framework\TestCase;



final class Math1Test extends TestCase
{
    public function testMath1() 
    {
        $tabExprected = array( 1 => 2,
        2 => 3,
        3 => 1,
        4=> 1,
        5 => 2);
        $result = math1();
     
        $this->assertEquals($result,$tabExprected);
    }
}