<?php

if(! function_exists('page_title'))
{
	function page_title($title)
	{
		$default_title = 'Laracarte list-of-artisans';
		if($title === '')
		{
			return $default_title;
		}
		return $title  . ' | ' .  $default_title;
	}
}

