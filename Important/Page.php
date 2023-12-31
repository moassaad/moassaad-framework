<?php

namespace MVC\Important;
// include_once "../../Utils/Header.php";
use \MVC\Utils\SystemUtils\PageUtils as PageUtils;

class Page {

    private $TITLE;
    private static $ProjectName = PROJECT_NAME;
    public function __construct()
    {
        /** SOURCE
         * Source : https://www.amitmerchant.com/multiple-constructors-php/
         * __construct0();
         * __construct1($x);
         * __construct2($x,$y);
         * __construct3($x,$y,$z);
         */
        $arguments = func_get_args(); //Gets an array of the function's argument list.
        $numberOfArguments = func_num_args(); //Gets the number of arguments passed to the function.

        if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);//Calls the callback given by the first parameter with the parameters in args
        }
        /*********************************************************************** */
    
    }
    /**
     * Use the function:
     * getFormalTitle()
     * title()
     * checkTitle()
     * getPageFileName()
     */
    public function __construct1($TITLE)
    {
        $this->TITLE = $TITLE;
    }
    public function getFormalTitle()
    {
        return self::$ProjectName . ' | ' . $this->getTitle();
    }
    public function getTitle()
    {
        return $this->checkTitle();
    }

    /********************************************/
    private function checkTitle()
    {
        foreach(PageUtils::$TITLE as $name => $title)
        {
            if($name === $this->TITLE)
                return $title;
        }
        return self::$ProjectName;
    }
    public static function getPageFileName()
    {
        // return basename(__FILE__,".php");
        return basename($_SERVER["SCRIPT_FILENAME"],".php");
    }

}

?>