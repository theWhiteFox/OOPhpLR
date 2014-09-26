<?php 
class Hash {
	/* One way hash with salt
	Add Salt to password, Salt is random generated characters. */	
	public static function make($string, $salt = '') {		
		return hash('sha256', $string . $salt);
	}	
	// Create a strong Salt 
	public static function salt($length) {		
		return mcrypt_create_iv($length);	
	}	
	// Create a unique hash
	public static function unique() {
		return self::make(uniqid());
	}
}