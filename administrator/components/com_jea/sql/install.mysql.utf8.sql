
-- --------------------------------------------------------

-- 
-- Table schema `#__jea_advantages`
-- 

CREATE TABLE IF NOT EXISTS `#__jea_advantages` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(255) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table schema `#__jea_areas`
-- 

CREATE TABLE IF NOT EXISTS `#__jea_areas` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(255) NOT NULL default '',
  `town_id` int(11) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table schema `#__jea_conditions`
-- 

CREATE TABLE IF NOT EXISTS `#__jea_conditions` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(255) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table schema `#__jea_departments`
-- 

CREATE TABLE IF NOT EXISTS `#__jea_departments` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(255) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `name` (`value`)
) AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table schema `#__jea_heatingtypes`
-- 

CREATE TABLE IF NOT EXISTS `#__jea_heatingtypes` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(255) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table schema `#__jea_hotwatertypes`
-- 

CREATE TABLE IF NOT EXISTS `#__jea_hotwatertypes` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(255) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table schema `#__jea_properties`
-- 

CREATE TABLE IF NOT EXISTS `#__jea_properties` (
  `id` int(11) NOT NULL auto_increment,
  `ref` varchar(20) NOT NULL default '',
  `title` varchar(255) NOT NULL default '',
  `alias` varchar(255) NOT NULL default '',
  `type_id` int(11) NOT NULL default '0',
  `is_renting` tinyint(1) NOT NULL default '0',
  `price` decimal(12,2) NOT NULL default '0.00',
  `adress` varchar(255) NOT NULL default '',
  `town_id` int(11) NOT NULL default '0',
  `area_id` int(11) NOT NULL default '0',
  `zip_code` varchar(10) NOT NULL default '',
  `department_id` tinyint(3) NOT NULL default '0',
  `condition_id` int(11) NOT NULL default '0',
  `living_space` int(11) NOT NULL default '0',
  `land_space` int(11) NOT NULL default '0',
  `rooms` int(11) NOT NULL default '0',
  `charges` decimal(12,2) NOT NULL default '0.00',
  `fees` decimal(12,2) NOT NULL default '0.00',
  `deposit` decimal(12,2) NOT NULL default '0.00',
  `hot_water_type` tinyint(1) NOT NULL default '0',
  `heating_type` tinyint(2) NOT NULL default '0',
  `bathrooms` tinyint(3) NOT NULL default '0',
  `toilets` tinyint(3) NOT NULL default '0',
  `availability` date NOT NULL default '0000-00-00',
  `floor` int(11) NOT NULL default '0',
  `advantages` varchar(255) NOT NULL default '' COMMENT 'amenities list',
  `description` text NOT NULL,
  `slogan_id` int(11) NOT NULL default '0',
  `published` tinyint(1) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `emphasis` tinyint(1) NOT NULL default '0' COMMENT 'featured property',
  `date_insert` datetime NOT NULL default '0000-00-00 00:00:00',
  `checked_out` int(11) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL default '0',
  `hits` int(11) NOT NULL default '0',
  `latitude` varchar(20) NOT NULL default '0',
  `longitude` varchar(20) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `idx_jea_ref` (`ref`),
  KEY `idx_jea_isrenting` (`is_renting`),
  KEY `idx_jea_typeid` (`type_id`),
  KEY `idx_jea_departmentid` (`department_id`),
  KEY `idx_jea_townid` (`town_id`)
) AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table schema `#__jea_slogans`
-- 

CREATE TABLE IF NOT EXISTS `#__jea_slogans` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(255) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table schema `#__jea_towns`
-- 

CREATE TABLE IF NOT EXISTS `#__jea_towns` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(255) NOT NULL default '',
  `department_id` int(11) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table schema `#__jea_types`
-- 

CREATE TABLE IF NOT EXISTS `#__jea_types` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(255) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

