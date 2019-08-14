<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
CREATE TABLE IF NOT EXISTS `new_jaljale_banner_slider` (`id` int(11) NOT NULL AUTO_INCREMENT,`image_url` varchar(250) DEFAULT NULL,`image_link` varchar(250) DEFAULT NULL,`image_title` varchar(250) DEFAULT NULL,`image_caption` varchar(250) DEFAULT NULL,`is_active` varchar(5) DEFAULT NULL, PRIMARY KEY (`id`))
SQLTEXT;

$installer->run($sql);
//demo 
//Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 