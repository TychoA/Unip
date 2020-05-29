<?php
namespace Assertions;

require_once 'Error.php';

trait IsBoolean
{
    public function assertIsBoolean($var) : void
    {
        $type = gettype($var);
        if (!is_bool($var)) throw new Error("Expected {$var} to be a boolean. Instead got {$type}.");
    }
}
