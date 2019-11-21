<?php
   if (isset($_REQUEST["lastname"]) || isset ($_REQUEST["age"]) || isset ($_REQUEST["pass"])){


	if (preg_match("/[^A-Za-z-]/", $_REQUEST["pass"])){
		echo "welcome".$_REQUEST['lastname']."<br/>";
		echo "you are".$_REQUEST['age'].'"year old <br/>';
		echo "my password is".$_REQUEST['pass']."."."this is secured";
	}
	else {
		die("password complexity does not meet. your password must contain.");
	}
}