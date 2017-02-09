<?php
$installer = $this;  
$installer->startSetup();
$installer->run("
	DROP TABLE IF EXISTS `test`;
  CREATE TABLE `test` (
  
  `name` varchar(300) DEFAULT NULL,
  `pname` varchar(300) DEFAULT NULL,
  `age` varchar(300) DEFAULT NULL,
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)         
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
$installer->endSetup(); 