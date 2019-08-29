<?php 

if(!function_exists('inputDateFormat')) {
    function inputDateFormat($string) {
        return str_replace(' ', 'T', $string);
    }
}

if(!function_exists('displayDateFormat')) {
    function displayDateFormat($string) {
        if($string) {
            $date = date_create($string);
            return date_format($date, 'd M Y - h:i a');
        }
    }
}
