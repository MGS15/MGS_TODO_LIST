<?php if (!defined('APP_START')) exit('<pre>No direct script access allowed!</pre>');
/**
 * @author          Soufiane Elkhamlichi <selkhamlichi97@gmail.com>
 * @version         1.0
 * @date            2022-02-04
 * @name            TasksGroup.php
 */

require_once "TaskElement.php";

class TasksGroup extends TaskElement
{
	private string	$tasks;

	function __construct()
	{
		$this->id = uniqid('tsg_', true);
	}

	/* Getters */
	public function	getTasks() : string { return $this->tasks; }

	/* Stters */
	public function setTasks($value) { $this->tasks = $value; }

	/* Abstraction */
	protected function doSomething() { }
}
?>