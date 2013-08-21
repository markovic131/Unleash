<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Very Simple Assets Library
 * Developed for Unleash
 *
 * @author Marko Aleksic <iam@markoaleksic.com>
 * @copyright Copyright (c) 2013 Marko Aleksic.
 * @link https://github.com/psybaron/Unleash
 * @license https://raw.github.com/psybaron/Unleash/master/LICENSE 
 * @package Unleash
 */
class Assets
{
    public static $config;

    public function __construct($config = array())
    {
        if ( ! empty($config))
        {
            $this->initialize($config);
        }

        log_message('debug', 'Assets Class Initialized');
    }

    public function initialize($config = array())
    {
        foreach($config as $key => $value)
        {
            static::$config[$key] = $value;
        }
    }

    public static function getConfig($key)
    {
        return static::$config[$key];
    }

    public static function loadJs($type = 'public')
    {
        $CdnJavaScripts = static::$config[$type]['js-cdn'];

        $out = '';

        foreach ($CdnJavaScripts as $key => $value) 
        {
            $out .= '<script src="'.$value.'" async></script>'."\n";
        }

        $localJavaScripts = static::$config[$type]['js'];

        foreach ($localJavaScripts as $key => $value) 
        {
            $out .= '<script src="' . static::$config['jsFolder'] . '/' . $value . '" async></script>'."\n";
        }

        return $out;
    }

    public static function loadCss($type = 'public')
    {
        $CdnStyles = static::$config[$type]['css-cdn'];

        $out = '';

        foreach ($CdnStyles as $key => $value) 
        {
            $out .= '<link href="'.$value.'" rel="stylesheet">'."\n";
        }

        $localStyles = static::$config[$type]['css'];

        foreach ($localStyles as $key => $value) 
        {
            $out .= '<link href="' . static::$config['cssFolder'] . '/' . $value . '" rel="stylesheet">'."\n";
        }

        return $out;
    }
}