# Unip
Small and simple library for unit testing in php7.

## Philosophy
It is build around the idea of having a easy way to manage unit tests. 
And horizontal inheritance of assertion functionality, which can be
integrated into test cases. It is inspired by pythons `unittest` package.

## Method
A test suite can contain a number of test cases (might add suites in the future).
Each test case can define its tests by declaring methods that start with "should".
It will automatically recognize those as your tests, and will try to run those.

### Example
```php
<?php
$suite = new Unip\TestSuite();

$suite->add(class extends Unit\TestCase {
    use Unip\Assertions\IsString;

    public function shouldBeAString() : void
    {
        $this->assertIsString("foobar");
    }
});

$suite->run();
```

## Future
This is just a incredibly simple, and possible naive implementation. Meant as
a learning/hobby experiment.

Might add more to it in the future.
