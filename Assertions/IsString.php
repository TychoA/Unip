<?php
/**
 *  Trait for asserting variables for string values.
 *
 *  @author     Tycho Atsma <tycho.atsma@gmail.com>
 *  @copyright  Tycho Atsma
 */

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
trait IsString
{
    /**
     *  Method to assert if a variable is a string.
     *  @param  mixed
     *  @return void
     */
    public function assertIsString($var) : void
    {
        $type = gettype($var);
        if (!is_string($var)) throw new Error("Expected {$var} to be a string. Instead got a {$type}.");
    }
}
