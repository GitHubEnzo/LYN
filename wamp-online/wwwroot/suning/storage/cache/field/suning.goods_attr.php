<?php if(!defined('ROOT_PATH'))exit;
return array (
  'gtid' => 
  array (
    'field' => 'gtid',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'gtvalue' => 
  array (
    'field' => 'gtvalue',
    'type' => 'char(15)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'added' => 
  array (
    'field' => 'added',
    'type' => 'decimal(10,0)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'taid' => 
  array (
    'field' => 'taid',
    'type' => 'int(10) unsigned',
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