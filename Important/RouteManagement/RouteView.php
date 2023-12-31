<?php
namespace MVC\Important\RouteManagement;
use MVC\Utils\SystemUtils\RouteManagement\RouteViewUtils as RouteViewUtils;
class RouteView{
    // private $LinkView = $_SERVER['HTTP_HOST'];
    // private $LinkView = $_SERVER['SERVER_NAME'];
    /**
     * Use the function:
     * route(string $view) : string
     */
    private $LinkView = "/MVC/View/";
    private $DefaultRoute = "index";
    // private $routeView = RouteViewUtils::$routeView;

    public function route(string $view) : string{
        if($this->checkRouteExists($view)){
            return $this->LinkView . RouteViewUtils::$routeView[$view];
        }
        return $this->LinkView . RouteViewUtils::$routeView[$this->DefaultRoute];
    }
    private function checkRouteExists(string $view) : bool
    {
        return in_array(RouteViewUtils::$routeView[$view],RouteViewUtils::$routeView);
    }
}