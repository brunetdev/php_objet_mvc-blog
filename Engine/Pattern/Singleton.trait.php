<?php
/**
 * @author           jonathan brunet
 * @copyright        (c) 2017 Jonathan Brunet <http://www.brunetdev.com>
 * @link             http://www.brunetdev.com
 */

namespace TestProject\Engine\Pattern;

trait Singleton
{
    use Base;

    protected static $_oInstance = null;

    /**
     * Get instance of class.
     *
     * @access public
     * @static
     * @return object Return the instance class or create first instance of the class.
     */
    public static function getInstance()
    {
        return (null === static::$_oInstance) ? static::$_oInstance = new static : static::$_oInstance;
    }
}
