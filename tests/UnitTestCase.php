<?php

namespace Test;

abstract class UnitTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * Call protected/private method of a class.
     *
     * @param object &$object    Instantiated object that we will run method on
     * @param string $methodName Method name to call
     * @param array  $parameters Array of parameters to pass into method
     *
     * @return mixed Method return.
     */
    public function invokeMethod(&$object, $methodName, array $parameters = array())
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        foreach ($parameters as $index => $parameter) {
            if (is_object($parameter)) {
                $parameters[$index] = &$parameters[$index];
            }
        }

        return $method->invokeArgs($object, $parameters);
    }
}
