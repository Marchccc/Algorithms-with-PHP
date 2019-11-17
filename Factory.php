<?php

class Factory
{
    /**
     * @param string $name
     * @param array  $arguments
     *
     * @return object
     */
    public static function make($name, $arguments = [])
    {
        $Application = "\\{$name}\\Application";
        self::loadClass($Application);

        return new $Application($arguments);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }

    public static function loadClass($class)
    {
        $class = str_replace('\\', '/', $class);
        $class = "./" . $class . ".php";
        require_once $class;
    }
}
