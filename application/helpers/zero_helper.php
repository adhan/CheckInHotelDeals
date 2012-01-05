<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('zero_string_right')){
	function zero_string_right($string, $count){
		return substr($string, ($count*-1));
	}
}

if ( ! function_exists('zero_string_left')){
	function zero_string_left($string, $count){
		return substr($string, 0, $count);
	}
}

