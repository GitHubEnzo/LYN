<?php if(!defined('ROOT_PATH'))exit;
return array (
  'glid' => 
  array (
    'field' => 'glid',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'combine' => 
  array (
    'field' => 'combine',
    'type' => 'char(50)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'number' => 
  array (
    'field' => 'number',
    'type' => 'char(30)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'inventory' => 
  array (
    'field' => 'inventory',
    'type' => 'smallint(6) unsigned',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'gid' => 
  array (
    'field' => 'gid',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
);
?>