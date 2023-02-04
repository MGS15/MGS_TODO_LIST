<?php if (!defined('APP_START')) exit('<pre>No direct script access allowed!</pre>');
class Task
{
/**
 * @author          Soufiane Elkhamlichi <selkhamlichi97@gmail.com>
 * @version         1.0
 * @date            2022-02-04
 * @name            Task.php
 */
	private string	$id;
	private string	$name;
	private string	$description;
	private string	$owner;
	private string	$tasks;
	private string	$permissions;
	private	string	$createdBy;
	private	string	$updatedBy;
	private	$creationDate;
	private	$lastUpdateDate;

	/* Getters */
	public function	getID() : string { return $this->id; }
	public function	getName() : string { return $this->name; }
	public function	getDescription() : string { return $this->description; }
	public function	getOwners() : string { return $this->owner; }
	public function	getTasks() : string { return $this->tasks; }
	public function	getPermissions() : string { return $this->permissions; }
	public function	getCreatedBy() : string { return $this->createdBy; }
	public function	getUpdatedBy() : string { return $this->updatedBy; }
	public function getCreationDate() { return $this->creationDate; }
	public function	getLastUpdateDate() { return $this->lastUpdateDate; }

	/* Setters */
	public function setID($value) { $this->id = $value; }
	public function setName($value) { $this->name = $value; }
	public function setDescription($value) { $this->description = $value; }
	public function setOwner($value) { $this->owner = $value; }
	public function setTasks($value) { $this->tasks = $value; }
	public function setPermissions($value) { $this->permissions = $value; }
	public function setCreatedBy($value) { $this->createdBy = $value; }
	public function setUpdatedBy($value) { $this->updatedBy = $value; }
	public function setCreationDate($value) { $this->creationDate = $value; }
	public function setLastUpdateDate($value) { $this->lastUpdateDate = $value; }
}
?>