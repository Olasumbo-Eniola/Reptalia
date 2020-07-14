<?php
//heroku db

$active_group = 'default';

$query_builder = TRUE;

$db['default'] = array(
    'dsn' =>  ' ',
    'hostname' => 'us-cdbr-east-02.cleardb.com',
    'username' => 'bc338613db81a5:7313a808',
    'password' => '7313a808',
    'database' => 'heroku_bee7e5df67aa676',
    'dbdriver' => 'mysqli',
    'dbprefix' => ' ',
    'pconnect' => FALSE, 
    'db_debug' => (ENVIROMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => ' ',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => ' ',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'striction' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
?>