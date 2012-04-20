<?php

/**
 * The router is responsible for loading up the correct controller. 
 * 
 * @author K.Kolarov
 */
class Router {

    private $registry;
    private $controller;
    private $file;
    private $path;
    private $action;

    public function __construct($registry) {
        $this->registry = $registry;
    }

    /**
     * Sets the controller directory path.
     * 
     * @param string $path
     * @return void 
     */
    public function setPath($path) {
        $this->path = $path;
    }

    /**
     * Gets the controller and loads it.
     * 
     * @return void
     */
    public function loader() {
        $this->getController();

        include $this->file;

        $class = $this->controller . 'Controller';
        $controller = new $class($this->registry);

        if (is_callable(array($controller, $this->action)) == false) {
            $action = 'index';
        } else {
            $action = $this->action;
        }

        $controller->$action();
    }

    /**
     * Decides which controller to be loaded.
     * 
     * @return void
     */
    public function getController() {
        $route = (empty($_GET['rt'])) ? '' : $_GET['rt'];

        if (empty($route)) {
            $route = 'index';
        } else {
            $parts = explode('/', $route);
            $this->controller = $parts[0];
            if (isset($parts[1])) {
                $this->action = $parts[1];
            }
        }
        if (empty($this->controller)) {
            $this->controller = 'index';
        }
        $this->file = $this->path . '/' . $this->controller . 'Controller.php';
    }

}