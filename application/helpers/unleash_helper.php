<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Dump helper. Does nicely formatted PHP dump to screen.
 * @author Joost van Veen
 * @version 1.0
 */
if (!function_exists('dump')) 
{
    function dump ($var, $label = 'Unleash Dump', $echo = true)
    {
        // Store dump in variable 
        ob_start();

        var_dump($var);

        $output = ob_get_clean();
        
        // Add formatting
        $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);

        $output = '<pre style="background: #FFFEEF; color: #000; border: 1px dotted #000; padding: 10px; margin: 10px 0; text-align: left;">' . $label . ':' . $output . '</pre>';
        
        // Output
        if ($echo == true) 
        {
            echo $output;
        }
        else 
        {
            return $output;
        }
    }
}

/**
 * Dump + Exit Helper. Does nicely formatted PHP dump to screen and exits.
 * @author Joost van Veen
 * @version 1.0
 */
if (!function_exists('dump_exit')) 
{

    function dump_exit($var, $label = 'Unleash Dump', $echo = true) 
    {
        dump ($var, $label, $echo);
        exit;
    }
}