<?php

class Cipher1
{
  

	function Cipher($ch, $key)
	{
		if (!ctype_alpha($ch))
			return $ch;

		$offset = ord(ctype_upper($ch) ? 'A' : 'a');
		return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
	}
	function Encipher($input, $key)
	{
		$output = "";

		$inputArr = str_split($input);
		foreach ($inputArr as $ch)
			$output .= $this->Cipher($ch, $key);

		echo $output."\n";
	}
}
class Cipher2 extends Cipher1
{

//child class
}
$childclass=new Cipher2;
$text = "The quick brown fox jumps over the lazy dog";
$childclass->Encipher($text, 3);

?>