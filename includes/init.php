<?php

/**
 * The idea of this file is to:
 *  1)include the basic files,
 *  2)autoload a file if not manually included
 * here and include this file(init.php) every time when you need something to include.
 */

include_once __SITE_PATH . '/application/' . 'Registry.php';

include_once __SITE_PATH . '/application/' . 'Router.php';

include_once __SITE_PATH . '/application/' . 'Template.php';

include_once __SITE_PATH . '/application/' . 'Bootstrap.php';

include_once __SITE_PATH . '/application/' . 'EncryptionPassword.php';

/**
 * This function autoincludes a file when you need it. Searches in 'model/Entities'.
 * 
 * @param 
 *  $class The class that you need to include.
 * 
 * @return
 *  boolean Returns false if class/file is not found. If found includes the file.
 */
function model($class) {
    $filename = $class . '.php';
    $file = 'model/Entities/' . $filename;
    if (!file_exists($file)) {
        return false;
    }
    include $file;
}

spl_autoload_register('model');

$registry = new Registry();
$registry->database = Bootstrap::getInstance();
