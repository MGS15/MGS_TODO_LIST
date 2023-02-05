<?php if (!defined('APP_START')) exit('<pre>No direct script access allowed!</pre>');
/**
 * @author          Soufiane Elkhamlichi <selkhamlichi97@gmail.com>
 * @version         1.0
 * @date            2022-02-05
 * @name            permissions.php
 */

enum PermissionsLevel
{
	case	OWNER;
	case	VIEW;
	case	UPDATE_STATUS;
	case	UPDATE_DETAILS;
	case	DELETE;
	case	ADD_NEW_TASK;
}

?>