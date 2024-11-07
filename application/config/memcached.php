<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Memcached settings
| -------------------------------------------------------------------------
| Your Memcached servers can be specified below.
|
|	See: https://codeigniter.com/user_guide/libraries/caching.html#memcached
|
*/

$config = array(
    'default' => array(
        'hostname' => getenv('MEMCACHIER_SERVERS') ? getenv('MEMCACHIER_SERVERS') : '127.0.0.1',
        'port'     => getenv('MEMCACHIER_PORT') ? getenv('MEMCACHIER_PORT') : '11211',
        'weight'   => '1',
    ),
);
