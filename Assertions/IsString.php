<?php
namespace Assertions;

require_once 'Error.php';

trait IsString
{
    public function assertIsString($var) : void
    {
        $type = gettype($var);
        if (!is_string($var)) throw new Error("Expected {$var} to be a string. Instead got {$type}.");
    }
}
