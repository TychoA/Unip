<?php
/**
 *  Class to add define a set of tests, which can be run, and added to a suite.
 *
 *  @author     Tycho Atsma <tycho.atsma@gmail.com>
 *  @copyright  Tycho Atsma
 */

/**
 *  Namespace.
 */
namespace Unip;

/**
 *  Class definition.
 */
class TestCase
{
    /**
     *  Method to run all tests that belong to this test case. Each test is
     *  identified by each method that starts with "should".
     *  @throws TestError
     *  @return void
     */
    public function run() : void
    {
        foreach ($this->getTests() as $test) $this->$test();
    }

    /**
     *  Method to collect all tests that are assigned to this test case.
     *  @return array
     */
    private function getTests() : array
    {
        $reflection = new \ReflectionClass($this);
        $methods = $reflection->getMethods(\ReflectionMethod::IS_PUBLIC);

        // extract all method names and expose them
        return array_map(function($method) {
            return $method->getName(); 

        // only get methods that start with "should"
        }, array_filter($methods, function($method) {
            return substr($method->getName(), 0, 6) == "should";
        }));
    }
}
