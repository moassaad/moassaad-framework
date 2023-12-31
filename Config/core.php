<?php
namespace MVC;

/**
 * Base Core
 */
define('PROJECT_NAME','MVC');
define('VERSION','v1.0.0');
define('DASH','-');
define('APPLICATION',PROJECT_NAME . DASH . VERSION . DASH);

define('DS', DIRECTORY_SEPARATOR);
define('PS', PATH_SEPARATOR);

define('APP_PATH', realpath(dirname(__FILE__)) . DS . ".." . DS);

/**
 * Folder App
 */
define('_ASSETS' , APP_PATH . "Assets" . DS);
define('_CONTROLLER',APP_PATH . "Controller" . DS);
define('_STORAGE', APP_PATH . "Storage" . DS);
define('_MODEL', APP_PATH . "Model" . DS);
define('_UTILS', APP_PATH . "Utils" . DS);
define('_VIEW', APP_PATH . "View" . DS);
define('_VIEW_TEMPLATE', _VIEW . "Template" . DS);
define('_LIB', APP_PATH . "lib" . DS);

define('_IMPORTANT', APP_PATH . "Important" . DS);
define('_ROUTE_MANAGEMENT', _IMPORTANT . "RouteManagement" . DS);
define('_TEMPLATE_ENGINE', _IMPORTANT . "TemplateEngine" . DS);

/**
 * Set Include Path
 */
define('_SET_INCLUDE_PATH_', 
        get_include_path() . PS . 
        APP_PATH . PS . 
        _CONTROLLER . PS . 
        _MODEL . PS . 
        _UTILS . PS . 
        _LIB . PS . 
        _IMPORTANT );
set_include_path(_SET_INCLUDE_PATH_);

include APP_PATH . "Important/Autoload.php";

?>