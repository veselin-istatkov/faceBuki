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
     * Visualizes the HTML in the file $file_name.
     * 
     * @param string $file_name This is the path to the file which will be visialized.
     * The file must be .php but must have HTML in it.
     * @return void
     */
    public function show($file_name) {
        $path = __SITE_PATH . '/view' . '/' . $file_name . '.php';
        if (file_exists($path) == false) {
            throw new Exception('Template not found in ' . $path);
            return false;
        }

        foreach ($this->vars as $key => $value) {
            $key = $value;
        }

        include ($path);
    }

}

?>
