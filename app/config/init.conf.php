<?php
/**
 * @author          Soufiane Elkhamlichi <selkhamlichi97@gmail.com>
 * @version         1.0
 * @date            2022-02-04
 * @name            init.conf.php	
 */
# defining start time
define('APP_START',microtime(true));

# Information
define('AUTHOR', 'Soufiane Elkhamlichi');

# defining separators
define('DS', DIRECTORY_SEPARATOR);

# Defining the base path
define('BASE_PATH', dirname(__FILE__, 2));

# Defining framework directories
define('CONFIG_PATH', BASE_PATH . DS . 'config');
define('CONTROERS_PATH', BASE_PATH . DS . 'controllers');
define('MODULES_PATH', BASE_PATH . DS . 'modules');
define('HELPERS_PATH', BASE_PATH . DS . 'helpers');
define('ASSETS_PATH', BASE_PATH . DS . 'assets');
define('STORAGE_PATH', BASE_PATH . DS . 'storage');

# defining coockies information
define('COOKIE_EXPIRE', time() + 60 * 60 * 24);
?>