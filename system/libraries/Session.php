<?php
/**
 * Session Class 0.2
 *
 * @author		JREAM
 * @link		http://jream.com
 * @copyright		2011 Jesse Boyer (contact@jream.com)
 * @license		GNU General Public License 3 (http://www.gnu.org/licenses/)
 *
 * This program is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the
 * Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details:
 * http://www.gnu.org/licenses/
 */

class Session {

	/** @var boolean $_sessionStarted A flag to tell whether we've run session_start() */
	private static $_sessionStarted = false;

	/**
	* Starts a session and only allows it to run once (Singleton-like)
	*/
	public static function start()
	{
		if (self::$_sessionStarted == false)
		{
			session_start();
			self::$_sessionStarted = true;
		}
	}

	/**
	 * Sets a session value
	 * @param string $key The name
	 * @param string $value The value 
	 */
	public static function set($key, $value)
	{
		$_SESSION[$key] = $value;
	}
	
	/**
	 * Grabs a value from the session
	 * @param string $key the name of the Session KEY
	 * @param string $secondKey the name of a Second Session KEY (Within a Session Multi-Dimensional Array)
	 * @return mixed Either the value or false
	 */
	public static function get($key, $secondKey = false)
	{
		if ($secondKey == true)
		{
			if (isset($_SESSION[$key][$secondKey]))
			return $_SESSION[$key][$secondKey];
		}
		else
		{
			if (isset($_SESSION[$key]))
			return $_SESSION[$key];
		}
		
		return false;
	}

	/**
	 * Display the session with pre tags
	 */
	public static function display()
	{
		echo '<pre>';
		print_r($_SESSION);
		echo '</pre>';
	}
	
	/**
	 * Destroy the entire session
	 */
	public static function destroy() 
	{
		if (self::$_sessionStarted == true)
		{
			session_unset(); // Might need work
			session_destroy();
		}
	}
}
