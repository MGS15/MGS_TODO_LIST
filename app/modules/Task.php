<?php if (!defined('APP_START')) exit('<pre>No direct script access allowed!</pre>');
/**
 * @author          Soufiane Elkhamlichi <selkhamlichi97@gmail.com>
 * @version         1.0
 * @date            2022-02-05
 * @name            Task.php
 */

require_once "TaskElement.php";

class Task extends TaskElement
{
	private string	$taskFor;
	private			$status;
	private			$startDate;
	private			$dueDate;

	/* Getters */
	public function	getTaskFor() : string { return $this->taskFor; }
	public function getStatus() { return $this->status; }
	public function	getStartDate() { return $this->startDate; }
	public function getDueDate() { return $this->dueDate; }
	
	/* Setters */
	public function setTaskFor($value) { $this->taskFor = $value; }
	public function setStatus($value) { $this->status = $value; }
	public function setStartDate($value) { $this->startDate = $value; }
	public function setDueDate($value) { $this->dueDate = $value; }

	/* Abstraction */
	protected function doSomething() { }
}
?>