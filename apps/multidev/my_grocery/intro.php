<?php
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	switch ($lang){
		case "en":
			//echo "PAGE EN";
			include("intro_en.php");
			break;
		case "id":
			//echo "PAGE EN";
			include("intro_id.php");
			break;  			
		default:
			//echo "PAGE EN - Setting Default";
			include("intro_en.php");//include EN in all other cases of different lang detection
			break;
	}
?>