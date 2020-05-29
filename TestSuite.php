<?php

class TestSuite
{
    private $suite = [];

    public function add(TestCase $testcase) : TestSuite
    {
        $this->suite[] = $testcase;
        return $this;
    }

    public function run() : void
    {
        $n = count($this->suite);
        echo PHP_EOL . "Started test suite. {$n} tests will be run." . PHP_EOL;

        foreach ($this->suite as $index => $testcase)
        {
            echo "----------------------------" . PHP_EOL;
            $name = get_class($testcase);

            try
            {
                $testcase->run();
                echo "Passed test: {$name}." . PHP_EOL;
            }
            catch (Assertions\Error $error)
            {
                echo "Failed test: {$name}. {$error->getMessage()}" . PHP_EOL;
            }
        }

        echo PHP_EOL . "Finished test suite" . PHP_EOL;
    }
}
