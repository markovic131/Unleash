<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  Asssets configuration file
 * 
 * @author Marko Aleksic <iam@markoaleksic.com>
 * @package Unleash
 */

$config['cssFolder'] = '/css';

$config['jsFolder'] = '/js';

$config['public'] = array(
    'js-cdn' => array(
        'jquery'    => '//code.jquery.com/jquery.js',
        'bootstrap' => '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js',
        ),
    'js' => array(
        'app'       => 'app.js'
        ),
    'css-cdn' => array(
        'bootstrap'    => '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css',
        'font-awesome' => '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css'
        ),
    'css' => array(
        'style'        => 'default.css'
        )
    );

$config['user'] = array(
    'js-cdn' => array(
        'jquery'    => '//code.jquery.com/jquery.js',
        'bootstrap' => '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js',
        ),
    'js' => array(
        'app'       => 'app.js'
        ),
    'css-cdn' => array(
        'bootstrap'    => '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css',
        'font-awesome' => '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css'
        ),
    'css' => array(
        'style'      => 'default.css',
        'user-style' => 'user.css'
        )
    );

$config['admin'] = array(
    'js-cdn' => array(
        'jquery'    => '//code.jquery.com/jquery.js',
        'bootstrap' => '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js',
        ),
    'js' => array(
        'app'       => 'app.js',
        'admin-js'  => 'admin.js'
        ),
    'css-cdn' => array(
        'bootstrap'    => '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css',
        'font-awesome' => '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css'
        ),
    'css' => array(
        'style'       => 'default.css',
        'admin-style' => 'admin.css'
        )
    );