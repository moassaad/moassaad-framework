<?php
namespace MVC\Important;
class Autoload
{
    public static function autoload($className)
    {
        $className = str_replace('MVC\\',"",$className);
        $className = str_replace('\\',DS,$className);
        require $className . ".php";
    }
}
spl_autoload_register(__NAMESPACE__ . "\Autoload::autoload");