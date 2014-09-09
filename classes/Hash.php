<?php 
class Hash {
	// This is class is used for security	
	
	public static function make($string, $salt = '') {
		// Add Salt to password, Salt is random generated characters.
		return hash('sha256', $string . $salt);
	}
	
	public static function salt($length) {
		// Create a strong Salt
		return mcrypt_create_iv($length);	
	}	
	
	public static function unique() {
		return self::make(uniqid());
	}
}