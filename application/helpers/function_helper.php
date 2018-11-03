<?php

	if(!function_exists("selected"))
	{
		function selected($value,$data){
			if($value == $data)
			{
				return "selected='selected'";
			}else{
				return "";
			}
		}
	}

?>