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
	public function	getID() : string { return $this->id; }
	public function	getName() : string { return $this->name; }
	public function	getDescription() : string { return $this->description; }
	public function	getOwner() : string { return $this->owner; }
	public function	getPermissions() : string { return $this->permissions; }
	public function	getCreatedBy() : string { return $this->createdBy; }
	public function	getUpdatedBy() : string { return $this->updatedBy; }
	public function	getCreationDate() { return $this->creationDate; }
	public function	getLastUpdateDate() { return $this->lastUpdateDate; }
	
	/* Setters */
	public function	setID($value) { $this->id = $value; }
	public function	setName($value) { $this->name = $value; }
	public function	setDescription($value) { $this->description = $value; }
	public function	setOwner($value) { $this->owner = $value; }
	public function	setPermissions($value) { $this->permissions = $value; }
	public function	setCreatedBy($value) { $this->createdBy = $value; }
	public function	setUpdatedBy($value) { $this->updatedBy = $value; }
	public function	setCreationDate($value) { $this->creationDate = $value; }
	public function	setLastUpdateDate($value) { $this->lastUpdateDate = $value; }
}
?>