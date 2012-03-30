<?php

/** 
 * The registry is place, where site wide variable, can be stored without to use
 * of globals. 
 * 
 * @author K.Kolarov
 */
Class Registry {

    private $vars = array();

    public function __set($index, $value) {
        $this->vars[$index] = $value;
    }

    public function __get($index) {
        return $this->vars[$index];
    }

}
