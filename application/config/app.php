<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  Application global configuration file
 * 
 * @author Marko Aleksic <iam@markoaleksic.com>
 * @package Unleash
 */
$config = array(
        'appName'       => 'Unleash',
        'appVersion'    => 'Version 0.1',
        'defaultLayout' => 'default',
        'loginRoute'    => '/auth/login',
        'postLoginRoute'    => '/auth/postLogin',
        'logoutRoute'   => '/auth/logout'
    );