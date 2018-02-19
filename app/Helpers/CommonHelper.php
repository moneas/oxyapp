<?php 
if (! function_exists('show_date')) {
    function show_date($date = '')
    {
    	if($date == '') return false;
    	return date('d-m-Y', strtotime($date));
    }
}

if (! function_exists('show_datetime')) {
    function show_datetime($date = '')
    {
    	if($date == '') return false;
    	return date('d-m-Y H:i:s', strtotime($date));
    }
}
?>