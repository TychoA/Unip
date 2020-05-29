<?php
/**
 *  Namespace.
 */
namespace Unip\Assertions;

/**
 *  Dependencies.
 */
require_once 'Error.php';

/**
 *  Trait definition.
 */
trait IsBoolean
{
    /**
     *  Method to assert if a variable is a boolean.
     *  @param  mixed
     *  @return void
     */
    public function assertIsBoolean($var) : void
    {
        $type = gettype($var);
        if (!is_bool($var)) throw new Error("Expected {$var} to be a boolean. Instead got a {$type}.");
    }
}
