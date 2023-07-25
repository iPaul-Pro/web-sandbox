<?php
	class Account {
		// Properties
		public $username;
		public $password;

		// Methods
		function set_username($username) {
			$this->username = $username;
		}
		function get_username() {
			return $this->username;
		}
		function set_password($password) {
			$this->password = $password;
		}
		function get_password() {
			return $this->password;
		}
	}
?>