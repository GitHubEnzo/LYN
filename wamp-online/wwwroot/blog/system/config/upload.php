<?php
/**
CREATE TABLE `hd_core_attachment` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(80) NOT NULL,
`filename` varchar(300) NOT NULL COMMENT '文件名',
`path` varchar(300) NOT NULL COMMENT '相对路径',
`extension` varchar(10) NOT NULL DEFAULT '' COMMENT '类型',
`createtime` int(10) NOT NULL COMMENT '上传时间',
`size` mediumint(9) NOT NULL COMMENT '文件大小',
`data` varchar(100) NOT NULL DEFAULT '' COMMENT '辅助信息',
`hash` char(50) NOT NULL DEFAULT '' COMMENT '标识用于区分资源',
PRIMARY KEY (`id`),
KEY `data` (`data`),
KEY `extension` (`extension`),
KEY `hash` (`hash`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='附件';
 */
return [
	//允许上传类型
	'type' => 'jpg,jpeg,gif,png,zip,rar,doc,txt,pem',
	//允许上传大小单位KB
	'size' => 10000,
	//上传路径
	'path' => 'attachment',
];