<?php
namespace MVC\View\Template;
use \MVC\Important\Page as Page;
use \MVC\Important\RouteManagement\RouteView as RouteView;

{
  $TITLE = Page::getPageFileName();
  $ROUTE_VIEW = new RouteView();
  $PAGE = new Page($TITLE);
}

?>

  <head>
    <meta charset="utf-8" />
    <title><?php echo $PAGE->getFormalTitle();?></title>
    <meta name="description" content="" />
    
  </head>