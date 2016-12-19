<?php if(!defined('ROOT_PATH'))exit;
return array (
  'bid' => 
  array (
    'field' => 'bid',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'bname' => 
  array (
    'field' => 'bname',
    'type' => 'varchar(45)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'logo' => 
  array (
    'field' => 'logo',
    'type' => 'varchar(45)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'sort' => 
  array (
    'field' => 'sort',
    'type' => 'smallint(6)',
    'null' => 'YES',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'ishot' => 
  array (
    'field' => 'ishot',
    'type' => 'tinyint(10)',
    'null' => 'YES',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
);
?>