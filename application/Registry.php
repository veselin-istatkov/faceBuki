<?php

/** 
 * Registry is the place, where site wide variable, can be stored without usage
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
