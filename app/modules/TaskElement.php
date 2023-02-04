<?php if (!defined('APP_START')) exit('<pre>No direct script access allowed!</pre>');
/**
 * @author          Soufiane Elkhamlichi <selkhamlichi97@gmail.com>
 * @version         1.0
 * @date            2022-02-05
 * @name            TaskElement.php
 */

abstract class TaskElement
{
	protected string	$id;
	protected string	$name;
	protected string	$description;
	protected string	$owner;
	protected string	$permissions;
	protected string	$createdBy;
	protected string	$updatedBy;
	protected			$creationDate;
	protected			$lastUpdateDate;

	abstract protected function doSomething();

	/* Getters */
	protected function	getID() : string { return $this->id; }
	protected function	getName() : string { return $this->name; }
	protected function	getDescription() : string { return $this->description; }
	protected function	getOwner() : string { return $this->owner; }
	protected function	getPermissions() : string { return $this->permissions; }
	protected function	getCreatedBy() : string { return $this->createdBy; }
	protected function	getUpdatedBy() : string { return $this->updatedBy; }
	protected function	getCreationDate() { return $this->creationDate; }
	protected function	getLastUpdateDate() { return $this->lastUpdateDate; }
	
	/* Setters */
	protected function	setID($value) { $this->id = $value; }
	protected function	setName($value) { $this->name = $value; }
	protected function	setDescription($value) { $this->description = $value; }
	protected function	setOwner($value) { $this->owner = $value; }
	protected function	setPermissions($value) { $this->permissions = $value; }
	protected function	setCreatedBy($value) { $this->createdBy = $value; }
	protected function	setUpdatedBy($value) { $this->updatedBy = $value; }
	protected function	setCreationDate($value) { $this->creationDate = $value; }
	protected function	setLastUpdateDate($value) { $this->lastUpdateDate = $value; }
}
?>