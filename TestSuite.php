<?php
/**
 *  Class to add test cases and run them.
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
class TestSuite
{
    /**
     *  Container for the test cases.
     *  @var    array
     */
    private $suite = [];

    /**
     *  Method to add a test case to the suite.
     *  @param  Unip\TestCase
     *  @return TestSuite
     */
    public function add(TestCase $testcase) : TestSuite
    {
        $this->suite[] = $testcase;
        return $this;
    }

    /**
     *  Method to run all tests that are added to this suite.
     *  @return void
     */
    public function run() : void
    {
        // start the suite
        $n = count($this->suite);
        echo PHP_EOL . "Started test suite. {$n} tests will be run." . PHP_EOL;

        // run all tests
        foreach ($this->suite as $index => $testcase)
        {
            echo "----------------------------" . PHP_EOL;
            $name = get_class($testcase);

            // try to pass the test
            try
            {
                $testcase->run();
                echo "Passed test: {$name}." . PHP_EOL;
            }

            // or fail gracefully with a nice message
            catch (Assertions\Error $error)
            {
                echo "Failed test: {$name}. {$error->getMessage()}" . PHP_EOL;
            }
        }

        // finish the test
        echo PHP_EOL . "Finished test suite" . PHP_EOL;
    }
}
