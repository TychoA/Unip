<?php

require_once 'TestSuite.php';
require_once 'TestCase.php';
require_once 'Assertions/IsString.php';
require_once 'Assertions/IsBoolean.php';


class MyTestCase extends TestCase
{
    use Assertions\IsString;

    private $myvariable = 'foobar';

    public function shouldBeAString() : void
    {
        $this->assertIsString($this->myvariable);
    }
}

class FailedTestCase extends TestCase
{
    use Assertions\IsBoolean;

    private $myvariable = "foobar";

    public function shouldBeABoolean() : void
    {
        $this->assertIsBoolean($this->myvariable);
    }
}

$suite = new TestSuite();

$suite->add(new MyTestCase());
$suite->add(new FailedTestCase());
$suite->run();
