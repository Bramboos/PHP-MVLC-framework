<?php
/**
 * Email 0.2
 *
 * @author		JREAM
 * @link		http://jream.com
 * @copyright		2010 Jesse Boyer (contact@jream.com)
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
 *
 * @uses

	$email = new Email('sendto@thisperson.com', 'you@yoursite.com');
	$email->content('Welcome Email', 'Hey there, I just wanted to welcome you!');
	$email->send();

	// To see the result (boolean)
	echo $email->result;
 *
 */

class Email
{

	/** For checking if the email sent after you use Send() */
	public $result = 0;

	/**	Sending Details */
	private $_to;
	private $_from;
	private $_bcc;
	
	/** Content Details */
	private $_subject;
	private $_message;
	
	/**
	 * @param <string> $to Who is the email going to?
	 * @param <string> $from Who is the email coming from? (You)
	 */
	public function construct($to, $from)
	{
		$this->_To = $to;
		$this->_From = $from;
	}

	/**
	 * @param <string> $subject The subject line of the email
	 * @param <string> $message All the contents of the message.
	 */
	public function content($subject, $message)
	{
		$this->_subject = $subject;
		$this->_message = $message;
	}

	/**
	 * @param <string> $bcc Use CSV format for BCC
	 */	
	public function bcc($bcc)
	{
		$this->_bcc = $bcc;
	}

	
	/**
	 * @desc Sends the email, by default this is sent in HTML format just because it will revert to text
	 * 		 if the users html feature is disabled.
	 */	
	public function send()
	{
	
		$headers =	"From: {$this->_From}" . "\r\n";
		$headers .=	"Reply-To: {$this->_From}" . "\r\n";
		$headers .=	"Bcc: {$this->_Bcc}" . "\r\n";
		$headers .=	'MIME-Version: 1.0' . "\r\n" ;
		$headers .=	'Content-type: text/html; charset=iso-8859-1' . "\r\n" ;
		$headers .=	'X-Mailer: PHP/' . phpversion();

		if (mail($this->_to, $this->_subject, $this->_message, $headers))
		$this->result = 1;
	}

}
