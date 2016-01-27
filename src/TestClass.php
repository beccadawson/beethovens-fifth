<?php

namespace BeccaDawson\BeethovensFifth;

/**
* Test Class
*/
class TestClass
{
	
	function TestFunction()
	{
		echo "Are you KP? (yes/no)";
		$answer = \Seld\CliPrompt\CliPrompt::prompt();

		if($answer == "yes") {
			echo "Happy birthday!\n";
		} else {
			echo "Screw you :)\n";
		}
	}
}