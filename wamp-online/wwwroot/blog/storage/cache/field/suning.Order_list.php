<?php if(!defined('ROOT_PATH'))exit;
return array (
  'olid' => 
  array (
    'field' => 'olid',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'quantity' => 
  array (
    'field' => 'quantity',
    'type' => 'smallint(6) unsigned',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'subtotal' => 
  array (
    'field' => 'subtotal',
    'type' => 'decimal(10,0)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'explain' => 
  array (
    'field' => 'explain',
    'type' => 'varchar(45)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
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
  'oid' => 
  array (
    'field' => 'oid',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'glid' => 
  array (
    'field' => 'glid',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'glnumber' => 
  array (
    'field' => 'glnumber',
    'type' => 'char(30)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
);
?>