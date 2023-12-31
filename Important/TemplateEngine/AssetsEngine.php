<?php
namespace MVC\Important\TemplateEngine;
abstract class AssetsEngine
{
    /**
     * Use the function:
     * getAssets()
     */
    protected $here = "./";
    protected $back = "../";
    protected $Assets_Folder = "Assets/";
    protected $CountBack = 20;
    public function getAssets()
    {
        $pathFile = $this->Assets_Folder;
        $path = $pathFile;
        for($count=1;$count<=$this->CountBack;$count++)
        {
            if(file_exists($this->here.$path))
                return $this->here.$path;
            $path =  $this->back.$path;
        } 
    }
}