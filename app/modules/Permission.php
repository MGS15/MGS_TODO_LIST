<?php if (!defined('APP_START')) exit('<pre>No direct script access allowed!</pre>');
/**
 * @author          Soufiane Elkhamlichi <selkhamlichi97@gmail.com>
 * @version         1.0
 * @date            2022-02-05
 * @name            permission.php
 */

class permission
{
	/*
	 * @name ID
	 * @type string
	 * @description Random ID for permission
	*/
	private string	$id;
	/*
	 * @name permittedBy
	 * @type string
	 * @description Permission Granted by user
	*/
	private string	$permittedBy;
	/*
	 * @name permittedTo
	 * @type string
	 * @description Permission Granted to user
	*/
	private string	$permittedTo;
	/*
	 * @name permittedOn
	 * @type string
	 * @description Permission Granted On specific Group or Task
	*/
	private string	$permittedOn;
	/*
	 * @name permittedFor
	 * @type string
	 * @description Permission Granted for specific action
	*/
	private string	$permittedFor;
	/*
	 * @name permissionDate
	 * @type string
	 * @description Date of granting permission
	*/
	private	$permissionDate;

	function __construct()
	{
		$this->id = uniqid('prm_', true);
	}

	/* Getters */
	public function getID() { return $this->id; }
	public function	getPermittedBy() { return $this->permittedBy; }
	public function	getPermittedTo() { return $this->permittedTo; }
	public function	getPermittedOn() { return $this->permittedOn; }
	public function	getPermittedFor() { return $this->permittedFor; }
	public function	getPermissionDate() { return $this->permissionDate; }

	/* Setters */
	public function setID($value) { $this->id = $value; }
	public function	setPermittedBy($value) { $this->permittedBy = $value; }
	public function	setPermittedTo($value) { $this->permittedTo = $value; }
	public function	setPermittedOn($value) { $this->permittedOn = $value; }
	public function	setPermittedFor($value) { $this->permittedFor = $value; }
	public function setPermissionDate($value) { $this->permissionDate = $value; }
}

?>