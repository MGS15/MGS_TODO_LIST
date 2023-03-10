<?php if (!defined('APP_START')) exit('<pre>No direct script access allowed!</pre>');
/**
 * @author          Soufiane Elkhamlichi <selkhamlichi97@gmail.com>
 * @version         1.0
 * @date            2022-02-04
 * @name            User.php
 */
class User
{
	private string	$id;
	private string	$firstName;
	private string	$lastName;
	private string	$userName;
	private string	$email;
	private string	$password;
	private string	$avatar;


	function __construct()
	{
		$this->id = uniqid('usr_', true);
	}
	
	/* Getters */
	public function getUserID() { return $this->id; }
	public function getFirstName() { return $this->firstName; }
	public function getLastName() { return $this->lastName; }
	public function getUserName() { return $this->userName; }
	public function getEmail() { return $this->email; }
	public function getPassword() { return $this->password; }
	public function getAvatar() { return $this->avatar; }
	/* Setters */
	public function setUserID(string $userID) { $this->id = $userID; }
	public function setFirstName(string $firstName) { $this->firstName = $firstName; }
	public function setLastName(string $lastName) { $this->lastName = $lastName; }
	public function setUserName(string $userName) { $this->userName = $userName; }
	public function setEmail(string $email) { $this->email = $email; }
	public function setPassword(string $password) { $this->password = $password; }
	public function setAvatar(string $avatar) { $this->avatar = $avatar; }
}
?>