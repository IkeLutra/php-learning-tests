<?php

class TestVariableScopeFuctions extends \PHPUnit_Framework_TestCase
{
    public function test1()
    {
        $values = array(
            'foo' => 'bar'
        );

        $functions = array(
            'getValue' => function($key) {
                return $values[$key];
            }
        );

        $this->assertEquals('bar', $functions['getValue']('foo'));
    }
}
