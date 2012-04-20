<?php

/**
 * SettingsController decides which model to choose and to which view to send it. It only works with Settings page.
 * 
 * @author V.Istatkov
 */
class SettingsController {
    
    private $registry;
    
    function __construct($registry) {
        $this->registry = $registry;
    }
    
    /**
     * @todo Enter a page to be shown  
     */
    public function index() {
        $this->registry->template->show('');
    }
     
}
?>
