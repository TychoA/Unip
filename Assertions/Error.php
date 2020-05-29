<?php
/**
 *  Class for defining an assertion error, which allows the suite to gracefully
 *  catch user defined exceptions. Anything else, is exceptional and would not
 *  be related to the actual test, which you would need to figure out.
 *
 *  @author     Tycho Atsma <tycho.atsma@gmail.com>
 *  @copyright  Tycho Atsma
 */

/**
 *  Namespace.
 */
namespace Unip\Assertions;

/**
 *  Class definition.
 *  @extends    \Exception
 */
class Error extends \Exception {}
