<?php
namespace MVC\Important\TemplateEngine;
abstract class TemplateEngine
{
    public $startHTML = "startHTML.php";
    public $head = "head.php";
    public $jsHead = "jsHead.php";
    public $startBody = "startBody.php";
    public $header = "header.php";
    public $footer = "footer.php";
    public $endBody = "endBody.php";
    public $jsFooter = "jsFooter.php";
    public $endHTML = "endHTML.php";
    public $_VIEW_TEMPLATE = _VIEW_TEMPLATE;
    protected $_Assets_Folder = "Assets/";
    protected $_Back = 20;
    /**
     * Use the function:
     * getAssets()
     * getStartHTML()
     * getHead()
     * getJSHead()
     * getStartBody()
     * getHeader()
     * getFooter()
     * getEndBody()
     * getJSFooter()
     * getEndHTML()
     */
    public function getAssets()
    {
        $here = "./";
        $back = "../";
        $pathFile = $this->_Assets_Folder;
        $path = $pathFile;
        for($count=1;$count<=$this->_Back;$count++)
        {
            if(file_exists($here.$path))
                return $here.$path;
            $path =  $back.$path;
        } 
        // return _ASSETS;
    }
    public function getStartHTML()
    {
        return self::checkFileExists($this->startHTML);
    }
    public function getHead()
    {
        return self::checkFileExists($this->head);
    }
    public function getJSHead()
    {
        return self::checkFileExists($this->jsHead);
    }
    public function getStartBody()
    {
        return self::checkFileExists($this->startBody);
    }
    public function getHeader()
    {
        return self::checkFileExists($this->header);
    }
    public function getFooter()
    {
        return self::checkFileExists($this->footer);
    }
    public function getEndBody()
    {
        return self::checkFileExists($this->endBody);
    }
    public function getJSFooter()
    {
        return self::checkFileExists($this->jsFooter);
    }
    public function getEndHTML()
    {
        return self::checkFileExists($this->endHTML);
    }
    protected function checkFileExists(string $name)
    {
        if(file_exists(_VIEW_TEMPLATE.$name))
        {
            return _VIEW_TEMPLATE.$name;
        }

    }
}

?>