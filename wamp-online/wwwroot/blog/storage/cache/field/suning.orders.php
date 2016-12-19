<?php if(!defined('ROOT_PATH'))exit;
return array (
  'oid' => 
  array (
    'field' => 'oid',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'number' => 
  array (
    'field' => 'number',
    'type' => 'varchar(45)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'consignee' => 
  array (
    'field' => 'consignee',
    'type' => 'varchar(20)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'address' => 
  array (
    'field' => 'address',
    'type' => 'varchar(60)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'mobile' => 
  array (
    'field' => 'mobile',
    'type' => 'varchar(20)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'total' => 
  array (
    'field' => 'total',
    'type' => 'decimal(10,0)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'time' => 
  array (
    'field' => 'time',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'remark' => 
  array (
    'field' => 'remark',
    'type' => 'varchar(45)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'status' => 
  array (
    'field' => 'status',
    'type' => 'enum(\'未付款\',\'待发货\',\'已发货\',\'退货中\',\'已完成\')',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'uid' => 
  array (
    'field' => 'uid',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
);
?>