<?php

class VariableScopeFuctionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException PHPUnit_Framework_Error
     */
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
        // This will fail due to undefined variable $values
        $this->assertEquals('bar', $functions['getValue']('foo'));
    }
}
