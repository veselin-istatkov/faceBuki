<?php

/**
 * The template are basically HTML files with a little PHP embedded.
 * 
 * @author K.Kolarov  
 */
Class Template {
    
    private $registry;
    private $vars = array();

    function __construct($registry) {
        $this->registry = $registry;
    }
    
    public function __set($index, $value) {
        $this->vars[$index] = $value;
    }
    
    /**
     * The only thing, that it make is visualize the HTML about a respective file $name.
     * 
     * @param string $name
     * @return void
     */
    public function show($name) {
        $path = __SITE_PATH . '/view' . '/' . $name . '.php';
        if (file_exists($path) == false) {
            throw new Exception('Template not found in ' . $path);
            return false;
        }

        foreach ($this->vars as $key => $value) {
            $$key = $value;
        }

        include ($path);
    }

}

?>
