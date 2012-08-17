-- Скрипт сгенерирован Devart dbForge Studio for MySQL, Версия 5.0.82.1
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 17.08.2012 20:44:44
-- Версия сервера: 5.5.25a
-- Версия клиента: 4.1

-- 
-- Отключение внешних ключей
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Установка кодировки, с использованием которой клиент будет посылать запросы на сервер
--
SET NAMES 'utf8';

-- 
-- Установка базы данных по умолчанию
--
USE g1525;

--
-- Описание для таблицы g1525_banner
--
DROP TABLE IF EXISTS g1525_banner;
CREATE TABLE g1525_banner (
  bid INT(11) NOT NULL AUTO_INCREMENT,
  cid INT(11) NOT NULL DEFAULT 0,
  type VARCHAR(30) NOT NULL DEFAULT 'banner',
  name VARCHAR(255) NOT NULL DEFAULT '',
  alias VARCHAR(255) NOT NULL DEFAULT '',
  imptotal INT(11) NOT NULL DEFAULT 0,
  impmade INT(11) NOT NULL DEFAULT 0,
  clicks INT(11) NOT NULL DEFAULT 0,
  imageurl VARCHAR(100) NOT NULL DEFAULT '',
  clickurl VARCHAR(200) NOT NULL DEFAULT '',
  `date` DATETIME DEFAULT NULL,
  showBanner TINYINT(1) NOT NULL DEFAULT 0,
  checked_out TINYINT(1) NOT NULL DEFAULT 0,
  checked_out_time DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  editor VARCHAR(50) DEFAULT NULL,
  custombannercode TEXT DEFAULT NULL,
  catid INT(10) UNSIGNED NOT NULL DEFAULT 0,
  description TEXT NOT NULL,
  sticky TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
  ordering INT(11) NOT NULL DEFAULT 0,
  publish_up DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  publish_down DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  tags TEXT NOT NULL,
  params TEXT NOT NULL,
  PRIMARY KEY (bid),
  INDEX idx_banner_catid (catid),
  INDEX viewbanner (showBanner)
)
ENGINE = INNODB
AUTO_INCREMENT = 9
AVG_ROW_LENGTH = 2048
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_bannerclient
--
DROP TABLE IF EXISTS g1525_bannerclient;
CREATE TABLE g1525_bannerclient (
  cid INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL DEFAULT '',
  contact VARCHAR(255) NOT NULL DEFAULT '',
  email VARCHAR(255) NOT NULL DEFAULT '',
  extrainfo TEXT NOT NULL,
  checked_out TINYINT(1) NOT NULL DEFAULT 0,
  checked_out_time TIME DEFAULT NULL,
  editor VARCHAR(50) DEFAULT NULL,
  PRIMARY KEY (cid)
)
ENGINE = INNODB
AUTO_INCREMENT = 2
AVG_ROW_LENGTH = 16384
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_bannertrack
--
DROP TABLE IF EXISTS g1525_bannertrack;
CREATE TABLE g1525_bannertrack (
  track_date DATE NOT NULL,
  track_type INT(10) UNSIGNED NOT NULL,
  banner_id INT(10) UNSIGNED NOT NULL
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_categories
--
DROP TABLE IF EXISTS g1525_categories;
CREATE TABLE g1525_categories (
  id INT(11) NOT NULL AUTO_INCREMENT,
  parent_id INT(11) NOT NULL DEFAULT 0,
  title VARCHAR(255) NOT NULL DEFAULT '',
  name VARCHAR(255) NOT NULL DEFAULT '',
  alias VARCHAR(255) NOT NULL DEFAULT '',
  image VARCHAR(255) NOT NULL DEFAULT '',
  section VARCHAR(50) NOT NULL DEFAULT '',
  image_position VARCHAR(30) NOT NULL DEFAULT '',
  description TEXT NOT NULL,
  published TINYINT(1) NOT NULL DEFAULT 0,
  checked_out INT(11) UNSIGNED NOT NULL DEFAULT 0,
  checked_out_time DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  editor VARCHAR(50) DEFAULT NULL,
  ordering INT(11) NOT NULL DEFAULT 0,
  access TINYINT(3) UNSIGNED NOT NULL DEFAULT 0,
  count INT(11) NOT NULL DEFAULT 0,
  params TEXT NOT NULL,
  PRIMARY KEY (id),
  INDEX cat_idx (section, published, access),
  INDEX idx_access (access),
  INDEX idx_checkout (checked_out)
)
ENGINE = INNODB
AUTO_INCREMENT = 34
AVG_ROW_LENGTH = 780
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_components
--
DROP TABLE IF EXISTS g1525_components;
CREATE TABLE g1525_components (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL DEFAULT '',
  link VARCHAR(255) NOT NULL DEFAULT '',
  menuid INT(11) UNSIGNED NOT NULL DEFAULT 0,
  parent INT(11) UNSIGNED NOT NULL DEFAULT 0,
  admin_menu_link VARCHAR(255) NOT NULL DEFAULT '',
  admin_menu_alt VARCHAR(255) NOT NULL DEFAULT '',
  `option` VARCHAR(50) NOT NULL DEFAULT '',
  ordering INT(11) NOT NULL DEFAULT 0,
  admin_menu_img VARCHAR(255) NOT NULL DEFAULT '',
  iscore TINYINT(4) NOT NULL DEFAULT 0,
  params TEXT NOT NULL,
  enabled TINYINT(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (id),
  INDEX parent_option (parent, `option`(32))
)
ENGINE = INNODB
AUTO_INCREMENT = 67
AVG_ROW_LENGTH = 356
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_contact_details
--
DROP TABLE IF EXISTS g1525_contact_details;
CREATE TABLE g1525_contact_details (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL DEFAULT '',
  alias VARCHAR(255) NOT NULL DEFAULT '',
  con_position VARCHAR(255) DEFAULT NULL,
  address TEXT DEFAULT NULL,
  suburb VARCHAR(100) DEFAULT NULL,
  state VARCHAR(100) DEFAULT NULL,
  country VARCHAR(100) DEFAULT NULL,
  postcode VARCHAR(100) DEFAULT NULL,
  telephone VARCHAR(255) DEFAULT NULL,
  fax VARCHAR(255) DEFAULT NULL,
  misc MEDIUMTEXT DEFAULT NULL,
  image VARCHAR(255) DEFAULT NULL,
  imagepos VARCHAR(20) DEFAULT NULL,
  email_to VARCHAR(255) DEFAULT NULL,
  default_con TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
  published TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
  checked_out INT(11) UNSIGNED NOT NULL DEFAULT 0,
  checked_out_time DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  ordering INT(11) NOT NULL DEFAULT 0,
  params TEXT NOT NULL,
  user_id INT(11) NOT NULL DEFAULT 0,
  catid INT(11) NOT NULL DEFAULT 0,
  access TINYINT(3) UNSIGNED NOT NULL DEFAULT 0,
  mobile VARCHAR(255) NOT NULL DEFAULT '',
  webpage VARCHAR(255) NOT NULL DEFAULT '',
  PRIMARY KEY (id),
  INDEX catid (catid)
)
ENGINE = INNODB
AUTO_INCREMENT = 4
AVG_ROW_LENGTH = 5461
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_content
--
DROP TABLE IF EXISTS g1525_content;
CREATE TABLE g1525_content (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL DEFAULT '',
  alias VARCHAR(255) NOT NULL DEFAULT '',
  title_alias VARCHAR(255) NOT NULL DEFAULT '',
  introtext MEDIUMTEXT NOT NULL,
  `fulltext` MEDIUMTEXT NOT NULL,
  state TINYINT(3) NOT NULL DEFAULT 0,
  sectionid INT(11) UNSIGNED NOT NULL DEFAULT 0,
  mask INT(11) UNSIGNED NOT NULL DEFAULT 0,
  catid INT(11) UNSIGNED NOT NULL DEFAULT 0,
  created DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  created_by INT(11) UNSIGNED NOT NULL DEFAULT 0,
  created_by_alias VARCHAR(255) NOT NULL DEFAULT '',
  modified DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  modified_by INT(11) UNSIGNED NOT NULL DEFAULT 0,
  checked_out INT(11) UNSIGNED NOT NULL DEFAULT 0,
  checked_out_time DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  publish_up DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  publish_down DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  images TEXT NOT NULL,
  urls TEXT NOT NULL,
  attribs TEXT NOT NULL,
  version INT(11) UNSIGNED NOT NULL DEFAULT 1,
  parentid INT(11) UNSIGNED NOT NULL DEFAULT 0,
  ordering INT(11) NOT NULL DEFAULT 0,
  metakey TEXT NOT NULL,
  metadesc TEXT NOT NULL,
  access INT(11) UNSIGNED NOT NULL DEFAULT 0,
  hits INT(11) UNSIGNED NOT NULL DEFAULT 0,
  metadata TEXT NOT NULL,
  PRIMARY KEY (id),
  INDEX idx_access (access),
  INDEX idx_catid (catid),
  INDEX idx_checkout (checked_out),
  INDEX idx_createdby (created_by),
  INDEX idx_section (sectionid),
  INDEX idx_state (state)
)
ENGINE = INNODB
AUTO_INCREMENT = 47
AVG_ROW_LENGTH = 2493
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_content_frontpage
--
DROP TABLE IF EXISTS g1525_content_frontpage;
CREATE TABLE g1525_content_frontpage (
  content_id INT(11) NOT NULL DEFAULT 0,
  ordering INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (content_id)
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_content_rating
--
DROP TABLE IF EXISTS g1525_content_rating;
CREATE TABLE g1525_content_rating (
  content_id INT(11) NOT NULL DEFAULT 0,
  rating_sum INT(11) UNSIGNED NOT NULL DEFAULT 0,
  rating_count INT(11) UNSIGNED NOT NULL DEFAULT 0,
  lastip VARCHAR(50) NOT NULL DEFAULT '',
  PRIMARY KEY (content_id)
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_core_acl_aro
--
DROP TABLE IF EXISTS g1525_core_acl_aro;
CREATE TABLE g1525_core_acl_aro (
  id INT(11) NOT NULL AUTO_INCREMENT,
  section_value VARCHAR(240) NOT NULL DEFAULT '0',
  value VARCHAR(240) NOT NULL DEFAULT '',
  order_value INT(11) NOT NULL DEFAULT 0,
  name VARCHAR(255) NOT NULL DEFAULT '',
  hidden INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id),
  INDEX g1525_gacl_hidden_aro (hidden),
  UNIQUE INDEX g1525_section_value_value_aro (section_value(100), value(100))
)
ENGINE = INNODB
AUTO_INCREMENT = 16
AVG_ROW_LENGTH = 4096
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_core_acl_aro_groups
--
DROP TABLE IF EXISTS g1525_core_acl_aro_groups;
CREATE TABLE g1525_core_acl_aro_groups (
  id INT(11) NOT NULL AUTO_INCREMENT,
  parent_id INT(11) NOT NULL DEFAULT 0,
  name VARCHAR(255) NOT NULL DEFAULT '',
  lft INT(11) NOT NULL DEFAULT 0,
  rgt INT(11) NOT NULL DEFAULT 0,
  value VARCHAR(255) NOT NULL DEFAULT '',
  PRIMARY KEY (id),
  INDEX g1525_gacl_lft_rgt_aro_groups (lft, rgt),
  INDEX g1525_gacl_parent_id_aro_groups (parent_id)
)
ENGINE = INNODB
AUTO_INCREMENT = 38
AVG_ROW_LENGTH = 1024
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_core_acl_aro_map
--
DROP TABLE IF EXISTS g1525_core_acl_aro_map;
CREATE TABLE g1525_core_acl_aro_map (
  acl_id INT(11) NOT NULL DEFAULT 0,
  section_value VARCHAR(230) NOT NULL DEFAULT '0',
  value VARCHAR(100) NOT NULL,
  PRIMARY KEY (acl_id, section_value, value)
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_core_acl_aro_sections
--
DROP TABLE IF EXISTS g1525_core_acl_aro_sections;
CREATE TABLE g1525_core_acl_aro_sections (
  id INT(11) NOT NULL AUTO_INCREMENT,
  value VARCHAR(230) NOT NULL DEFAULT '',
  order_value INT(11) NOT NULL DEFAULT 0,
  name VARCHAR(230) NOT NULL DEFAULT '',
  hidden INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id),
  INDEX g1525_gacl_hidden_aro_sections (hidden),
  UNIQUE INDEX g1525_gacl_value_aro_sections (value)
)
ENGINE = INNODB
AUTO_INCREMENT = 11
AVG_ROW_LENGTH = 16384
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_core_acl_groups_aro_map
--
DROP TABLE IF EXISTS g1525_core_acl_groups_aro_map;
CREATE TABLE g1525_core_acl_groups_aro_map (
  group_id INT(11) NOT NULL DEFAULT 0,
  section_value VARCHAR(240) NOT NULL DEFAULT '',
  aro_id INT(11) NOT NULL DEFAULT 0,
  UNIQUE INDEX group_id_aro_id_groups_aro_map (group_id, section_value, aro_id)
)
ENGINE = INNODB
AVG_ROW_LENGTH = 4096
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_core_log_items
--
DROP TABLE IF EXISTS g1525_core_log_items;
CREATE TABLE g1525_core_log_items (
  time_stamp DATE NOT NULL DEFAULT '0000-00-00',
  item_table VARCHAR(50) NOT NULL DEFAULT '',
  item_id INT(11) UNSIGNED NOT NULL DEFAULT 0,
  hits INT(11) UNSIGNED NOT NULL DEFAULT 0
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_core_log_searches
--
DROP TABLE IF EXISTS g1525_core_log_searches;
CREATE TABLE g1525_core_log_searches (
  search_term VARCHAR(128) NOT NULL DEFAULT '',
  hits INT(11) UNSIGNED NOT NULL DEFAULT 0
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_groups
--
DROP TABLE IF EXISTS g1525_groups;
CREATE TABLE g1525_groups (
  id TINYINT(3) UNSIGNED NOT NULL DEFAULT 0,
  name VARCHAR(50) NOT NULL DEFAULT '',
  PRIMARY KEY (id)
)
ENGINE = INNODB
AVG_ROW_LENGTH = 5461
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_jea_advantages
--
DROP TABLE IF EXISTS g1525_jea_advantages;
CREATE TABLE g1525_jea_advantages (
  id INT(11) NOT NULL AUTO_INCREMENT,
  value VARCHAR(255) NOT NULL DEFAULT '',
  ordering INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 24
AVG_ROW_LENGTH = 712
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_jea_areas
--
DROP TABLE IF EXISTS g1525_jea_areas;
CREATE TABLE g1525_jea_areas (
  id INT(11) NOT NULL AUTO_INCREMENT,
  value VARCHAR(255) NOT NULL DEFAULT '',
  town_id INT(11) NOT NULL DEFAULT 0,
  ordering INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 12
AVG_ROW_LENGTH = 1489
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_jea_conditions
--
DROP TABLE IF EXISTS g1525_jea_conditions;
CREATE TABLE g1525_jea_conditions (
  id INT(11) NOT NULL AUTO_INCREMENT,
  value VARCHAR(255) NOT NULL DEFAULT '',
  ordering INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 5
AVG_ROW_LENGTH = 4096
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_jea_departments
--
DROP TABLE IF EXISTS g1525_jea_departments;
CREATE TABLE g1525_jea_departments (
  id INT(11) NOT NULL AUTO_INCREMENT,
  value VARCHAR(255) NOT NULL DEFAULT '',
  ordering INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id),
  INDEX name (value)
)
ENGINE = INNODB
AUTO_INCREMENT = 3
AVG_ROW_LENGTH = 8192
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_jea_heatingtypes
--
DROP TABLE IF EXISTS g1525_jea_heatingtypes;
CREATE TABLE g1525_jea_heatingtypes (
  id INT(11) NOT NULL AUTO_INCREMENT,
  value VARCHAR(255) NOT NULL DEFAULT '',
  ordering INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 4
AVG_ROW_LENGTH = 5461
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_jea_hotwatertypes
--
DROP TABLE IF EXISTS g1525_jea_hotwatertypes;
CREATE TABLE g1525_jea_hotwatertypes (
  id INT(11) NOT NULL AUTO_INCREMENT,
  value VARCHAR(255) NOT NULL DEFAULT '',
  ordering INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 4
AVG_ROW_LENGTH = 5461
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_jea_owners
--
DROP TABLE IF EXISTS g1525_jea_owners;
CREATE TABLE g1525_jea_owners (
  id INT(11) NOT NULL AUTO_INCREMENT,
  value VARCHAR(255) NOT NULL DEFAULT '',
  telephone1 VARCHAR(20) NOT NULL DEFAULT '',
  telephone2 VARCHAR(20) NOT NULL DEFAULT '',
  telephone3 VARCHAR(20) NOT NULL DEFAULT '',
  sendEmail TINYINT(4) DEFAULT 0,
  agent_id INT(11) DEFAULT NULL,
  email VARCHAR(255) DEFAULT '',
  ordering INT(11) DEFAULT NULL,
  PRIMARY KEY (id),
  INDEX agent_id (agent_id)
)
ENGINE = INNODB
AUTO_INCREMENT = 3
AVG_ROW_LENGTH = 8192
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_jea_properties
--
DROP TABLE IF EXISTS g1525_jea_properties;
CREATE TABLE g1525_jea_properties (
  id INT(11) NOT NULL AUTO_INCREMENT,
  ref VARCHAR(20) NOT NULL DEFAULT '',
  title VARCHAR(255) NOT NULL DEFAULT '',
  alias VARCHAR(255) NOT NULL DEFAULT '',
  type_id INT(11) NOT NULL DEFAULT 0,
  is_renting TINYINT(1) NOT NULL DEFAULT 1,
  price DECIMAL(12, 2) NOT NULL DEFAULT 0.00,
  adress VARCHAR(255) NOT NULL DEFAULT '',
  town_id INT(11) NOT NULL DEFAULT 0,
  area_id INT(11) NOT NULL DEFAULT 0,
  zip_code VARCHAR(10) NOT NULL DEFAULT '',
  department_id TINYINT(3) NOT NULL DEFAULT 0,
  condition_id INT(11) NOT NULL DEFAULT 0,
  living_space INT(11) NOT NULL DEFAULT 0,
  land_space INT(11) NOT NULL DEFAULT 0,
  rooms INT(11) NOT NULL DEFAULT 0,
  charges DECIMAL(12, 2) NOT NULL DEFAULT 0.00,
  fees DECIMAL(12, 2) NOT NULL DEFAULT 0.00,
  deposit DECIMAL(12, 2) NOT NULL DEFAULT 0.00,
  hot_water_type TINYINT(1) NOT NULL DEFAULT 0,
  heating_type TINYINT(2) NOT NULL DEFAULT 0,
  bathrooms TINYINT(3) NOT NULL DEFAULT 0,
  toilets TINYINT(3) NOT NULL DEFAULT 0,
  availability DATE NOT NULL DEFAULT '0000-00-00',
  floor INT(11) NOT NULL DEFAULT 0,
  advantages VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'amenities list',
  description TEXT NOT NULL,
  slogan_id INT(11) NOT NULL DEFAULT 0,
  published TINYINT(1) NOT NULL DEFAULT 0,
  ordering INT(11) NOT NULL DEFAULT 0,
  emphasis TINYINT(1) NOT NULL DEFAULT 0 COMMENT 'featured property',
  date_insert DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  checked_out INT(11) NOT NULL DEFAULT 0,
  checked_out_time DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  created_by INT(11) NOT NULL DEFAULT 0,
  hits INT(11) NOT NULL DEFAULT 0,
  latitude VARCHAR(20) NOT NULL DEFAULT '0',
  longitude VARCHAR(20) NOT NULL DEFAULT '0',
  price_monthly DECIMAL(12, 2) DEFAULT 0.00,
  agent_id INT(11) DEFAULT NULL COMMENT 'Агент подавший объявление',
  help_geo TINYINT(2) UNSIGNED DEFAULT 0 COMMENT 'Если 1 то просят указать местоположение на карте',
  telephone1 VARCHAR(255) DEFAULT NULL COMMENT 'Первый телефон объявления',
  telephone2 VARCHAR(255) DEFAULT NULL COMMENT 'Второй телефон объявления',
  telephone3 VARCHAR(255) DEFAULT NULL COMMENT 'Третий телефон объявления',
  PRIMARY KEY (id),
  INDEX idx_jea_departmentid (department_id),
  INDEX idx_jea_isrenting (is_renting),
  UNIQUE INDEX idx_jea_ref (ref),
  INDEX idx_jea_townid (town_id),
  INDEX idx_jea_typeid (type_id)
)
ENGINE = INNODB
AUTO_INCREMENT = 17
AVG_ROW_LENGTH = 1638
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_jea_slogans
--
DROP TABLE IF EXISTS g1525_jea_slogans;
CREATE TABLE g1525_jea_slogans (
  id INT(11) NOT NULL AUTO_INCREMENT,
  value VARCHAR(255) NOT NULL DEFAULT '',
  ordering INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 5
AVG_ROW_LENGTH = 4096
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_jea_towns
--
DROP TABLE IF EXISTS g1525_jea_towns;
CREATE TABLE g1525_jea_towns (
  id INT(11) NOT NULL AUTO_INCREMENT,
  value VARCHAR(255) NOT NULL DEFAULT '',
  department_id INT(11) NOT NULL DEFAULT 0,
  ordering INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 5
AVG_ROW_LENGTH = 4096
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_jea_types
--
DROP TABLE IF EXISTS g1525_jea_types;
CREATE TABLE g1525_jea_types (
  id INT(11) NOT NULL AUTO_INCREMENT,
  value VARCHAR(255) NOT NULL DEFAULT '',
  ordering INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 9
AVG_ROW_LENGTH = 2340
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_menu
--
DROP TABLE IF EXISTS g1525_menu;
CREATE TABLE g1525_menu (
  id INT(11) NOT NULL AUTO_INCREMENT,
  menutype VARCHAR(75) DEFAULT NULL,
  name VARCHAR(255) DEFAULT NULL,
  alias VARCHAR(255) NOT NULL DEFAULT '',
  link TEXT DEFAULT NULL,
  type VARCHAR(50) NOT NULL DEFAULT '',
  published TINYINT(1) NOT NULL DEFAULT 0,
  parent INT(11) UNSIGNED NOT NULL DEFAULT 0,
  componentid INT(11) UNSIGNED NOT NULL DEFAULT 0,
  sublevel INT(11) DEFAULT 0,
  ordering INT(11) DEFAULT 0,
  checked_out INT(11) UNSIGNED NOT NULL DEFAULT 0,
  checked_out_time DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  pollid INT(11) NOT NULL DEFAULT 0,
  browserNav TINYINT(4) DEFAULT 0,
  access TINYINT(3) UNSIGNED NOT NULL DEFAULT 0,
  utaccess TINYINT(3) UNSIGNED NOT NULL DEFAULT 0,
  params TEXT NOT NULL,
  lft INT(11) UNSIGNED NOT NULL DEFAULT 0,
  rgt INT(11) UNSIGNED NOT NULL DEFAULT 0,
  home INT(1) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (id),
  INDEX componentid (componentid, menutype, published, access),
  INDEX menutype (menutype)
)
ENGINE = INNODB
AUTO_INCREMENT = 65
AVG_ROW_LENGTH = 655
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_menu_types
--
DROP TABLE IF EXISTS g1525_menu_types;
CREATE TABLE g1525_menu_types (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  menutype VARCHAR(75) NOT NULL DEFAULT '',
  title VARCHAR(255) NOT NULL DEFAULT '',
  description VARCHAR(255) NOT NULL DEFAULT '',
  PRIMARY KEY (id),
  UNIQUE INDEX menutype (menutype)
)
ENGINE = INNODB
AUTO_INCREMENT = 8
AVG_ROW_LENGTH = 5461
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_messages
--
DROP TABLE IF EXISTS g1525_messages;
CREATE TABLE g1525_messages (
  message_id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  user_id_from INT(10) UNSIGNED NOT NULL DEFAULT 0,
  user_id_to INT(10) UNSIGNED NOT NULL DEFAULT 0,
  folder_id INT(10) UNSIGNED NOT NULL DEFAULT 0,
  date_time DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  state INT(11) NOT NULL DEFAULT 0,
  priority INT(1) UNSIGNED NOT NULL DEFAULT 0,
  subject TEXT NOT NULL,
  message TEXT NOT NULL,
  PRIMARY KEY (message_id),
  INDEX useridto_state (user_id_to, state)
)
ENGINE = INNODB
AUTO_INCREMENT = 1
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_messages_cfg
--
DROP TABLE IF EXISTS g1525_messages_cfg;
CREATE TABLE g1525_messages_cfg (
  user_id INT(10) UNSIGNED NOT NULL DEFAULT 0,
  cfg_name VARCHAR(100) NOT NULL DEFAULT '',
  cfg_value VARCHAR(255) NOT NULL DEFAULT '',
  UNIQUE INDEX idx_user_var_name (user_id, cfg_name)
)
ENGINE = INNODB
AVG_ROW_LENGTH = 5461
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_migration_backlinks
--
DROP TABLE IF EXISTS g1525_migration_backlinks;
CREATE TABLE g1525_migration_backlinks (
  itemid INT(11) NOT NULL,
  name VARCHAR(100) NOT NULL,
  url TEXT NOT NULL,
  sefurl TEXT NOT NULL,
  newurl TEXT NOT NULL,
  PRIMARY KEY (itemid)
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_modules
--
DROP TABLE IF EXISTS g1525_modules;
CREATE TABLE g1525_modules (
  id INT(11) NOT NULL AUTO_INCREMENT,
  title TEXT NOT NULL,
  content TEXT NOT NULL,
  ordering INT(11) NOT NULL DEFAULT 0,
  position VARCHAR(50) DEFAULT NULL,
  checked_out INT(11) UNSIGNED NOT NULL DEFAULT 0,
  checked_out_time DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  published TINYINT(1) NOT NULL DEFAULT 0,
  module VARCHAR(50) DEFAULT NULL,
  numnews INT(11) NOT NULL DEFAULT 0,
  access TINYINT(3) UNSIGNED NOT NULL DEFAULT 0,
  showtitle TINYINT(3) UNSIGNED NOT NULL DEFAULT 1,
  params TEXT NOT NULL,
  iscore TINYINT(4) NOT NULL DEFAULT 0,
  client_id TINYINT(4) NOT NULL DEFAULT 0,
  control TEXT NOT NULL,
  PRIMARY KEY (id),
  INDEX newsfeeds (module, published),
  INDEX published (published, access)
)
ENGINE = INNODB
AUTO_INCREMENT = 48
AVG_ROW_LENGTH = 655
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_modules_menu
--
DROP TABLE IF EXISTS g1525_modules_menu;
CREATE TABLE g1525_modules_menu (
  moduleid INT(11) NOT NULL DEFAULT 0,
  menuid INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (moduleid, menuid)
)
ENGINE = INNODB
AVG_ROW_LENGTH = 963
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_newsfeeds
--
DROP TABLE IF EXISTS g1525_newsfeeds;
CREATE TABLE g1525_newsfeeds (
  catid INT(11) NOT NULL DEFAULT 0,
  id INT(11) NOT NULL AUTO_INCREMENT,
  name TEXT NOT NULL,
  alias VARCHAR(255) NOT NULL DEFAULT '',
  link TEXT NOT NULL,
  filename VARCHAR(200) DEFAULT NULL,
  published TINYINT(1) NOT NULL DEFAULT 0,
  numarticles INT(11) UNSIGNED NOT NULL DEFAULT 1,
  cache_time INT(11) UNSIGNED NOT NULL DEFAULT 3600,
  checked_out TINYINT(3) UNSIGNED NOT NULL DEFAULT 0,
  checked_out_time DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  ordering INT(11) NOT NULL DEFAULT 0,
  rtl TINYINT(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (id),
  INDEX catid (catid),
  INDEX published (published)
)
ENGINE = INNODB
AUTO_INCREMENT = 15
AVG_ROW_LENGTH = 1170
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_plugins
--
DROP TABLE IF EXISTS g1525_plugins;
CREATE TABLE g1525_plugins (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL DEFAULT '',
  element VARCHAR(100) NOT NULL DEFAULT '',
  folder VARCHAR(100) NOT NULL DEFAULT '',
  access TINYINT(3) UNSIGNED NOT NULL DEFAULT 0,
  ordering INT(11) NOT NULL DEFAULT 0,
  published TINYINT(3) NOT NULL DEFAULT 0,
  iscore TINYINT(3) NOT NULL DEFAULT 0,
  client_id TINYINT(3) NOT NULL DEFAULT 0,
  checked_out INT(11) UNSIGNED NOT NULL DEFAULT 0,
  checked_out_time DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  params TEXT NOT NULL,
  PRIMARY KEY (id),
  INDEX idx_folder (published, client_id, access, folder)
)
ENGINE = INNODB
AUTO_INCREMENT = 45
AVG_ROW_LENGTH = 409
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_poll_data
--
DROP TABLE IF EXISTS g1525_poll_data;
CREATE TABLE g1525_poll_data (
  id INT(11) NOT NULL AUTO_INCREMENT,
  pollid INT(11) NOT NULL DEFAULT 0,
  `text` TEXT NOT NULL,
  hits INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id),
  INDEX pollid (pollid, `text`(1))
)
ENGINE = INNODB
AUTO_INCREMENT = 13
AVG_ROW_LENGTH = 1365
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_poll_date
--
DROP TABLE IF EXISTS g1525_poll_date;
CREATE TABLE g1525_poll_date (
  id BIGINT(20) NOT NULL AUTO_INCREMENT,
  `date` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  vote_id INT(11) NOT NULL DEFAULT 0,
  poll_id INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id),
  INDEX poll_id (poll_id)
)
ENGINE = INNODB
AUTO_INCREMENT = 12
AVG_ROW_LENGTH = 1489
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_poll_menu
--
DROP TABLE IF EXISTS g1525_poll_menu;
CREATE TABLE g1525_poll_menu (
  pollid INT(11) NOT NULL DEFAULT 0,
  menuid INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (pollid, menuid)
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_polls
--
DROP TABLE IF EXISTS g1525_polls;
CREATE TABLE g1525_polls (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL DEFAULT '',
  alias VARCHAR(255) NOT NULL DEFAULT '',
  voters INT(9) NOT NULL DEFAULT 0,
  checked_out INT(11) NOT NULL DEFAULT 0,
  checked_out_time DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  published TINYINT(1) NOT NULL DEFAULT 0,
  access INT(11) NOT NULL DEFAULT 0,
  lag INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 15
AVG_ROW_LENGTH = 16384
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_sections
--
DROP TABLE IF EXISTS g1525_sections;
CREATE TABLE g1525_sections (
  id INT(11) NOT NULL AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL DEFAULT '',
  name VARCHAR(255) NOT NULL DEFAULT '',
  alias VARCHAR(255) NOT NULL DEFAULT '',
  image TEXT NOT NULL,
  scope VARCHAR(50) NOT NULL DEFAULT '',
  image_position VARCHAR(30) NOT NULL DEFAULT '',
  description TEXT NOT NULL,
  published TINYINT(1) NOT NULL DEFAULT 0,
  checked_out INT(11) UNSIGNED NOT NULL DEFAULT 0,
  checked_out_time DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  ordering INT(11) NOT NULL DEFAULT 0,
  access TINYINT(3) UNSIGNED NOT NULL DEFAULT 0,
  count INT(11) NOT NULL DEFAULT 0,
  params TEXT NOT NULL,
  PRIMARY KEY (id),
  INDEX idx_scope (scope)
)
ENGINE = INNODB
AUTO_INCREMENT = 5
AVG_ROW_LENGTH = 5461
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_session
--
DROP TABLE IF EXISTS g1525_session;
CREATE TABLE g1525_session (
  username VARCHAR(150) DEFAULT '',
  `time` VARCHAR(14) DEFAULT '',
  session_id VARCHAR(200) NOT NULL DEFAULT '0',
  guest TINYINT(4) DEFAULT 1,
  userid INT(11) DEFAULT 0,
  usertype VARCHAR(50) DEFAULT '',
  gid TINYINT(3) UNSIGNED NOT NULL DEFAULT 0,
  client_id TINYINT(3) UNSIGNED NOT NULL DEFAULT 0,
  `data` LONGTEXT DEFAULT NULL,
  PRIMARY KEY (session_id),
  INDEX `time` (`time`),
  INDEX userid (userid),
  INDEX whosonline (guest, usertype)
)
ENGINE = INNODB
AVG_ROW_LENGTH = 16384
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_stats_agents
--
DROP TABLE IF EXISTS g1525_stats_agents;
CREATE TABLE g1525_stats_agents (
  agent VARCHAR(255) NOT NULL DEFAULT '',
  type TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
  hits INT(11) UNSIGNED NOT NULL DEFAULT 1
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_templates_menu
--
DROP TABLE IF EXISTS g1525_templates_menu;
CREATE TABLE g1525_templates_menu (
  template VARCHAR(255) NOT NULL DEFAULT '',
  menuid INT(11) NOT NULL DEFAULT 0,
  client_id TINYINT(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (menuid, client_id, template)
)
ENGINE = INNODB
AVG_ROW_LENGTH = 8192
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_users
--
DROP TABLE IF EXISTS g1525_users;
CREATE TABLE g1525_users (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL DEFAULT '',
  username VARCHAR(150) NOT NULL DEFAULT '',
  email VARCHAR(100) NOT NULL DEFAULT '',
  `password` VARCHAR(100) NOT NULL DEFAULT '',
  usertype VARCHAR(25) NOT NULL DEFAULT '',
  block TINYINT(4) NOT NULL DEFAULT 0,
  sendEmail TINYINT(4) DEFAULT 0,
  gid TINYINT(3) UNSIGNED NOT NULL DEFAULT 1,
  registerDate DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  lastvisitDate DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  activation VARCHAR(100) NOT NULL DEFAULT '',
  params TEXT NOT NULL,
  telephone1 VARCHAR(255) DEFAULT NULL COMMENT 'Первый телефон агента',
  telephone2 VARCHAR(255) DEFAULT NULL COMMENT 'Второй телефон агента',
  telephone3 VARCHAR(255) DEFAULT NULL COMMENT 'Третий телефон агента',
  PRIMARY KEY (id),
  INDEX email (email),
  INDEX gid_block (gid, block),
  INDEX idx_name (name),
  INDEX username (username),
  INDEX usertype (usertype)
)
ENGINE = INNODB
AUTO_INCREMENT = 68
AVG_ROW_LENGTH = 4096
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы g1525_weblinks
--
DROP TABLE IF EXISTS g1525_weblinks;
CREATE TABLE g1525_weblinks (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  catid INT(11) NOT NULL DEFAULT 0,
  sid INT(11) NOT NULL DEFAULT 0,
  title VARCHAR(250) NOT NULL DEFAULT '',
  alias VARCHAR(255) NOT NULL DEFAULT '',
  url VARCHAR(250) NOT NULL DEFAULT '',
  description TEXT NOT NULL,
  `date` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  hits INT(11) NOT NULL DEFAULT 0,
  published TINYINT(1) NOT NULL DEFAULT 0,
  checked_out INT(11) NOT NULL DEFAULT 0,
  checked_out_time DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  ordering INT(11) NOT NULL DEFAULT 0,
  archived TINYINT(1) NOT NULL DEFAULT 0,
  approved TINYINT(1) NOT NULL DEFAULT 1,
  params TEXT NOT NULL,
  PRIMARY KEY (id),
  INDEX catid (catid, published, archived)
)
ENGINE = INNODB
AUTO_INCREMENT = 7
AVG_ROW_LENGTH = 2730
CHARACTER SET utf8
COLLATE utf8_general_ci;

DELIMITER $$

--
-- Описание для функции get_sequence
--
DROP FUNCTION IF EXISTS get_sequence$$
CREATE FUNCTION get_sequence(TABLENAME VARCHAR(255), PARAM1 VARCHAR(255))
  RETURNS int(11)
  SQL SECURITY INVOKER
  READS SQL DATA
  COMMENT 'NEXTVAL - в зависимости от таблицы и аргументов возвращать следующее значение ключа'
BEGIN
  DECLARE L_max INT(11);

  IF tablename = 'g1525_jea_properties' THEN
  SELECT max(ref)
  INTO
    l_max
  FROM
    g1525_jea_properties;
  IF (l_max IS NULL) OR (L_max = 0) THEN
    SET l_max = 1;
  ELSE
    SET l_max = l_max + 1;
  END IF;
  RETURN L_max;
END IF;

RETURN 0;  

END
$$

DELIMITER ;

--
-- Описание для представления g1525_jea_agents_v
--
DROP VIEW IF EXISTS g1525_jea_agents_v CASCADE;
CREATE OR REPLACE 
	SQL SECURITY INVOKER
VIEW g1525_jea_agents_v
AS
	select `u`.`id` AS `id`,`u`.`username` AS `name`,`u`.`email` AS `email`,`u`.`sendEmail` AS `sendEmail`,`u`.`registerDate` AS `registerDate`,`u`.`lastvisitDate` AS `lastvisitDate`,`u`.`activation` AS `activation`,(case when (length(trim(`d`.`mobile`)) > 0) then `d`.`mobile` else ' ' end) AS `telephone1`,(case when (length(trim(`d`.`telephone`)) > 0) then `d`.`telephone` else ' ' end) AS `telephone2`,(case when (length(trim(`d`.`fax`)) > 0) then `d`.`fax` else ' ' end) AS `telephone3` from (`g1525_users` `u` left join `g1525_contact_details` `d` on((`u`.`id` = `d`.`user_id`)));

--
-- Описание для представления g1525_jea_owners_v
--
DROP VIEW IF EXISTS g1525_jea_owners_v CASCADE;
CREATE OR REPLACE 
	SQL SECURITY INVOKER
VIEW g1525_jea_owners_v
AS
	select `g1525_jea_owners`.`id` AS `id`,' ' AS `name`,(case when (length(trim(`g1525_jea_owners`.`telephone1`)) > 0) then `g1525_jea_owners`.`telephone1` else ' ' end) AS `telephone1`,(case when (length(trim(`g1525_jea_owners`.`telephone2`)) > 0) then concat(' ,',`g1525_jea_owners`.`telephone2`) else ' ' end) AS `telephone2`,(case when (length(trim(`g1525_jea_owners`.`telephone3`)) > 0) then concat(' ,',`g1525_jea_owners`.`telephone3`) else ' ' end) AS `telephone3`,`g1525_jea_owners`.`sendEmail` AS `sendEmail`,`g1525_jea_owners`.`agent_id` AS `agent_id`,`g1525_jea_owners`.`email` AS `email` from `g1525_jea_owners`;

-- 
-- Вывод данных для таблицы g1525_banner
--
INSERT INTO g1525_banner VALUES 
  (1, 1, 'banner', 'OSM 1', 'osm-1', 0, 43, 0, 'osmbanner1.png', 'http://www.opensourcematters.org', '2004-07-07 15:31:29', 1, 0, '0000-00-00 00:00:00', '', '', 13, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
  (2, 1, 'banner', 'OSM 2', 'osm-2', 0, 49, 0, 'osmbanner2.png', 'http://www.opensourcematters.org', '2004-07-07 15:31:29', 1, 0, '0000-00-00 00:00:00', '', '', 13, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
  (3, 1, '', 'Joomla!', 'joomla', 0, 32, 0, '', 'http://www.joomla.org', '2006-05-29 14:21:28', 1, 0, '0000-00-00 00:00:00', '', '<a href="{CLICKURL}" target="_blank">{NAME}</a>\r\n<br/>\r\nJoomla! The most popular and widely used Open Source CMS Project in the world.', 14, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
  (4, 1, '', 'JoomlaCode', 'joomlacode', 0, 32, 0, '', 'http://joomlacode.org', '2006-05-29 14:19:26', 1, 0, '0000-00-00 00:00:00', '', '<a href="{CLICKURL}" target="_blank">{NAME}</a>\r\n<br/>\r\nJoomlaCode, development and distribution made easy.', 14, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
  (5, 1, '', 'Joomla! Extensions', 'joomla-extensions', 0, 27, 0, '', 'http://extensions.joomla.org', '2006-05-29 14:23:21', 1, 0, '0000-00-00 00:00:00', '', '<a href="{CLICKURL}" target="_blank">{NAME}</a>\r\n<br/>\r\nJoomla! Components, Modules, Plugins and Languages by the bucket load.', 14, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
  (6, 1, '', 'Joomla! Shop', 'joomla-shop', 0, 27, 0, '', 'http://shop.joomla.org', '2006-05-29 14:23:21', 1, 0, '0000-00-00 00:00:00', '', '<a href="{CLICKURL}" target="_blank">{NAME}</a>\r\n<br/>\r\nFor all your Joomla! merchandise.', 14, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
  (7, 1, '', 'Joomla! Promo Shop', 'joomla-promo-shop', 0, 13, 1, 'shop-ad.jpg', 'http://shop.joomla.org', '2007-09-19 17:26:24', 1, 0, '0000-00-00 00:00:00', '', '', 33, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
  (8, 1, '', 'Joomla! Promo Books', 'joomla-promo-books', 0, 12, 0, 'shop-ad-books.jpg', 'http://shop.joomla.org/amazoncom-bookstores.html', '2007-09-19 17:28:01', 1, 0, '0000-00-00 00:00:00', '', '', 33, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '');

-- 
-- Вывод данных для таблицы g1525_bannerclient
--
INSERT INTO g1525_bannerclient VALUES 
  (1, 'Open Source Matters', 'Administrator', 'admin@opensourcematters.org', '', 0, '00:00:00', NULL);

-- 
-- Вывод данных для таблицы g1525_bannertrack
--
-- Таблица g1525.g1525_bannertrack не содержит данных

-- 
-- Вывод данных для таблицы g1525_categories
--
INSERT INTO g1525_categories VALUES 
  (1, 0, 'Latest', '', 'latest-news', 'taking_notes.jpg', '1', 'left', 'The latest news from the Joomla! Team', 0, 0, '0000-00-00 00:00:00', '', 1, 0, 1, ''),
  (2, 0, 'Joomla! Specific Links', '', 'joomla-specific-links', 'clock.jpg', 'com_weblinks', 'left', 'A selection of links that are all related to the Joomla! Project.', 1, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, ''),
  (3, 0, 'Newsflash', '', 'newsflash', '', '1', 'right', '', 0, 0, '0000-00-00 00:00:00', '', 2, 2, 0, ''),
  (4, 0, 'Joomla!', '', 'joomla', '', 'com_newsfeeds', 'left', '', 0, 0, '0000-00-00 00:00:00', NULL, 2, 0, 0, ''),
  (5, 0, 'Free and Open Source Software', '', 'free-and-open-source-software', '', 'com_newsfeeds', 'left', 'Read the latest news about free and open source software from some of its leading advocates.', 0, 0, '0000-00-00 00:00:00', NULL, 3, 0, 0, ''),
  (6, 0, 'Related Projects', '', 'related-projects', '', 'com_newsfeeds', 'left', 'Joomla builds on and collaborates with many other free and open source projects. Keep up with the latest news from some of them.', 0, 0, '0000-00-00 00:00:00', NULL, 4, 0, 0, ''),
  (12, 0, 'Contacts', '', 'contacts', '', 'com_contact_details', 'left', 'Contact Details for this Web site', 1, 62, '2012-08-07 13:52:05', NULL, 0, 0, 0, ''),
  (13, 0, 'Joomla', '', 'joomla', '', 'com_banner', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, ''),
  (14, 0, 'Text Ads', '', 'text-ads', '', 'com_banner', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, ''),
  (15, 0, 'Features', '', 'features', '', 'com_content', 'left', '', 0, 0, '0000-00-00 00:00:00', NULL, 6, 0, 0, ''),
  (17, 0, 'Benefits', '', 'benefits', '', 'com_content', 'left', '', 0, 0, '0000-00-00 00:00:00', NULL, 4, 0, 0, ''),
  (18, 0, 'Platforms', '', 'platforms', '', 'com_content', 'left', '', 0, 0, '0000-00-00 00:00:00', NULL, 3, 0, 0, ''),
  (19, 0, 'Other Resources', '', 'other-resources', '', 'com_weblinks', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 2, 0, 0, ''),
  (25, 0, 'The Project', '', 'the-project', '', '4', 'left', 'General facts about Joomla!<br />', 1, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, ''),
  (27, 0, 'New to Joomla!', '', 'new-to-joomla', '', '3', 'left', 'Questions for new users of Joomla!', 0, 0, '0000-00-00 00:00:00', NULL, 3, 0, 0, ''),
  (28, 0, 'Current Users', '', 'current-users', '', '3', 'left', 'Questions that users migrating to Joomla! 1.5 are likely to raise<br />', 0, 62, '2012-08-07 13:52:24', NULL, 2, 0, 0, ''),
  (29, 0, 'The CMS', '', 'the-cms', '', '4', 'left', 'Information about the software behind Joomla!<br />', 0, 0, '0000-00-00 00:00:00', NULL, 2, 0, 0, ''),
  (30, 0, 'The Community', '', 'the-community', '', '4', 'left', 'About the millions of Joomla! users and Web sites<br />', 0, 0, '0000-00-00 00:00:00', NULL, 3, 0, 0, ''),
  (31, 0, 'General', '', 'general', '', '3', 'left', 'General questions about the Joomla! CMS', 0, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, ''),
  (32, 0, 'Languages', '', 'languages', '', '3', 'left', 'Questions related to localisation and languages', 0, 0, '0000-00-00 00:00:00', NULL, 4, 0, 0, ''),
  (33, 0, 'Joomla! Promo', '', 'joomla-promo', '', 'com_banner', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, '');

-- 
-- Вывод данных для таблицы g1525_components
--
INSERT INTO g1525_components VALUES 
  (1, 'Banners', '', 0, 0, '', 'Banner Management', 'com_banners', 0, 'js/ThemeOffice/component.png', 0, 'track_impressions=0\ntrack_clicks=0\ntag_prefix=\n\n', 1),
  (2, 'Banners', '', 0, 1, 'option=com_banners', 'Active Banners', 'com_banners', 1, 'js/ThemeOffice/edit.png', 0, '', 1),
  (3, 'Clients', '', 0, 1, 'option=com_banners&c=client', 'Manage Clients', 'com_banners', 2, 'js/ThemeOffice/categories.png', 0, '', 1),
  (4, 'Web Links', 'option=com_weblinks', 0, 0, '', 'Manage Weblinks', 'com_weblinks', 0, 'js/ThemeOffice/component.png', 0, 'show_comp_description=1\ncomp_description=\nshow_link_hits=1\nshow_link_description=1\nshow_other_cats=1\nshow_headings=1\nshow_page_title=1\nlink_target=0\nlink_icons=\n\n', 1),
  (5, 'Links', '', 0, 4, 'option=com_weblinks', 'View existing weblinks', 'com_weblinks', 1, 'js/ThemeOffice/edit.png', 0, '', 1),
  (6, 'Categories', '', 0, 4, 'option=com_categories&section=com_weblinks', 'Manage weblink categories', '', 2, 'js/ThemeOffice/categories.png', 0, '', 1),
  (7, 'Contacts', 'option=com_contact', 0, 0, '', 'Edit contact details', 'com_contact', 0, 'js/ThemeOffice/component.png', 1, 'contact_icons=0\nicon_address=\nicon_email=\nicon_telephone=\nicon_fax=\nicon_misc=\nshow_headings=1\nshow_position=1\nshow_email=0\nshow_telephone=1\nshow_mobile=1\nshow_fax=1\nbannedEmail=\nbannedSubject=\nbannedText=\nsession=1\ncustomReply=0\n\n', 1),
  (8, 'Contacts', '', 0, 7, 'option=com_contact', 'Edit contact details', 'com_contact', 0, 'js/ThemeOffice/edit.png', 1, '', 1),
  (9, 'Categories', '', 0, 7, 'option=com_categories&section=com_contact_details', 'Manage contact categories', '', 2, 'js/ThemeOffice/categories.png', 1, 'contact_icons=0\nicon_address=\nicon_email=\nicon_telephone=\nicon_fax=\nicon_misc=\nshow_headings=1\nshow_position=1\nshow_email=0\nshow_telephone=1\nshow_mobile=1\nshow_fax=1\nbannedEmail=\nbannedSubject=\nbannedText=\nsession=1\ncustomReply=0\n\n', 1),
  (10, 'Polls', 'option=com_poll', 0, 0, 'option=com_poll', 'Manage Polls', 'com_poll', 0, 'js/ThemeOffice/component.png', 0, '', 1),
  (11, 'News Feeds', 'option=com_newsfeeds', 0, 0, '', 'News Feeds Management', 'com_newsfeeds', 0, 'js/ThemeOffice/component.png', 0, '', 0),
  (12, 'Feeds', '', 0, 11, 'option=com_newsfeeds', 'Manage News Feeds', 'com_newsfeeds', 1, 'js/ThemeOffice/edit.png', 0, 'show_headings=1\nshow_name=1\nshow_articles=1\nshow_link=1\nshow_cat_description=1\nshow_cat_items=1\nshow_feed_image=1\nshow_feed_description=1\nshow_item_description=1\nfeed_word_count=0\n\n', 1),
  (13, 'Categories', '', 0, 11, 'option=com_categories&section=com_newsfeeds', 'Manage Categories', '', 2, 'js/ThemeOffice/categories.png', 0, '', 1),
  (14, 'User', 'option=com_user', 0, 0, '', '', 'com_user', 0, '', 1, '', 1),
  (15, 'Search', 'option=com_search', 0, 0, 'option=com_search', 'Search Statistics', 'com_search', 0, 'js/ThemeOffice/component.png', 1, 'enabled=0\n\n', 1),
  (16, 'Categories', '', 0, 1, 'option=com_categories&section=com_banner', 'Categories', '', 3, '', 1, '', 1),
  (17, 'Wrapper', 'option=com_wrapper', 0, 0, '', 'Wrapper', 'com_wrapper', 0, '', 1, '', 1),
  (18, 'Mail To', '', 0, 0, '', '', 'com_mailto', 0, '', 1, '', 1),
  (19, 'Media Manager', '', 0, 0, 'option=com_media', 'Media Manager', 'com_media', 0, '', 1, 'upload_extensions=bmp,csv,doc,epg,gif,ico,jpg,odg,odp,ods,odt,pdf,png,ppt,swf,txt,xcf,xls,BMP,CSV,DOC,EPG,GIF,ICO,JPG,ODG,ODP,ODS,ODT,PDF,PNG,PPT,SWF,TXT,XCF,XLS\nupload_maxsize=10000000\nfile_path=images\nimage_path=images/stories\nrestrict_uploads=1\nallowed_media_usergroup=3\ncheck_mime=1\nimage_extensions=bmp,gif,jpg,png\nignore_extensions=\nupload_mime=image/jpeg,image/gif,image/png,image/bmp,application/x-shockwave-flash,application/msword,application/excel,application/pdf,application/powerpoint,text/plain,application/x-zip\nupload_mime_illegal=text/html\nenable_flash=0\n\n', 1),
  (20, 'Articles', 'option=com_content', 0, 0, '', '', 'com_content', 0, '', 1, 'show_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=0\n\n', 1),
  (21, 'Configuration Manager', '', 0, 0, '', 'Configuration', 'com_config', 0, '', 1, '', 1),
  (22, 'Installation Manager', '', 0, 0, '', 'Installer', 'com_installer', 0, '', 1, '', 1),
  (23, 'Language Manager', '', 0, 0, '', 'Languages', 'com_languages', 0, '', 1, 'site=ru-RU\nadministrator=ru-RU\n\n', 1),
  (24, 'Mass mail', '', 0, 0, '', 'Mass Mail', 'com_massmail', 0, '', 1, 'mailSubjectPrefix=\nmailBodySuffix=\n\n', 1),
  (25, 'Menu Editor', '', 0, 0, '', 'Menu Editor', 'com_menus', 0, '', 1, '', 1),
  (27, 'Messaging', '', 0, 0, '', 'Messages', 'com_messages', 0, '', 1, '', 1),
  (28, 'Modules Manager', '', 0, 0, '', 'Modules', 'com_modules', 0, '', 1, '', 1),
  (29, 'Plugin Manager', '', 0, 0, '', 'Plugins', 'com_plugins', 0, '', 1, '', 1),
  (30, 'Template Manager', '', 0, 0, '', 'Templates', 'com_templates', 0, '', 1, '', 1),
  (31, 'User Manager', '', 0, 0, '', 'Users', 'com_users', 0, '', 1, 'allowUserRegistration=1\nnew_usertype=Registered\nuseractivation=1\nfrontend_userparams=1\n\n', 1),
  (32, 'Cache Manager', '', 0, 0, '', 'Cache', 'com_cache', 0, '', 1, '', 1),
  (33, 'Control Panel', '', 0, 0, '', 'Control Panel', 'com_cpanel', 0, '', 1, '', 1),
  (49, 'Joomla Estate Agency', 'option=com_jea', 0, 0, 'option=com_jea', 'Joomla Estate Agency', 'com_jea', 0, '../media/com_jea/images/menu/icon-16-jea.png', 0, 'surface_measure=m²\ncurrency_symbol=грн.\nthousands_separator= \ndecimals_separator=.\nsymbol_place=1\norderby=\norderby_direction=asc\nsort_date=0\nsort_price=0\nsort_livingspace=0\nsort_landspace=0\nsort_hits=0\nsort_towns=0\nsort_departements=0\nsort_areas=0\nlist_limit=10\nimages_layout=squeezebox\nshow_print_icon=0\nshow_pdf_icon=0\nshow_contactform=1\ndefault_mail=\nsend_form_to_agent=1\nshow_googlemap=1\njpg_quality=90\nmax_thumbnails_width=120\nmax_thumbnails_height=90\nmax_previews_width=400\nmax_previews_height=400\ncrop_thumbnails=1\nsecondaries_img_upload_number=5\nrelationship_dpts_towns_area=0\n\n', 1),
  (54, 'Renting management', '', 0, 49, 'option=com_jea&controller=properties&cat=renting', 'Renting management', 'com_jea', 0, 'icon', 0, '', 1),
  (55, 'Selling management', '', 0, 49, 'option=com_jea&controller=properties&cat=selling', 'Selling management', 'com_jea', 1, 'icon', 0, '', 1),
  (56, 'Properties features', '', 0, 49, 'option=com_jea&controller=features', 'Properties features', 'com_jea', 2, 'icon', 0, '', 1),
  (57, 'Configuration', '', 0, 49, 'option=com_jea&controller=config', 'Configuration', 'com_jea', 3, 'icon', 0, '', 1),
  (58, 'Phoca Gallery', 'option=com_phocagallery', 0, 0, 'option=com_phocagallery', 'Phoca Gallery', 'com_phocagallery', 0, 'components/com_phocagallery/assets/images/icon-16-menu.png', 0, '', 1),
  (59, 'Control Panel', '', 0, 58, 'option=com_phocagallery', 'Control Panel', 'com_phocagallery', 0, 'components/com_phocagallery/assets/images/icon-16-control-panel.png', 0, '', 1),
  (60, 'Images', '', 0, 58, 'option=com_phocagallery&view=phocagallerys', 'Images', 'com_phocagallery', 1, 'components/com_phocagallery/assets/images/icon-16-menu-gal.png', 0, '', 1),
  (61, 'Categories', '', 0, 58, 'option=com_phocagallery&view=phocagallerycs', 'Categories', 'com_phocagallery', 2, 'components/com_phocagallery/assets/images/icon-16-menu-cat.png', 0, '', 1),
  (62, 'Themes', '', 0, 58, 'option=com_phocagallery&view=phocagalleryt', 'Themes', 'com_phocagallery', 3, 'components/com_phocagallery/assets/images/icon-16-menu-theme.png', 0, '', 1),
  (63, 'Rating', '', 0, 58, 'option=com_phocagallery&view=phocagalleryra', 'Rating', 'com_phocagallery', 4, 'components/com_phocagallery/assets/images/icon-16-menu-vote.png', 0, '', 1),
  (64, 'Comments', '', 0, 58, 'option=com_phocagallery&view=phocagallerycos', 'Comments', 'com_phocagallery', 5, 'components/com_phocagallery/assets/images/icon-16-menu-comment.png', 0, '', 1),
  (65, 'Info', '', 0, 58, 'option=com_phocagallery&view=phocagalleryin', 'Info', 'com_phocagallery', 6, 'components/com_phocagallery/assets/images/icon-16-menu-info.png', 0, '', 1),
  (66, 'TinCaptcha', '', 0, 0, '', 'TinCaptcha', 'com_tincaptcha', 0, '', 0, '', 1);

-- 
-- Вывод данных для таблицы g1525_contact_details
--
INSERT INTO g1525_contact_details VALUES 
  (1, 'Name', 'name', 'Position', 'Street', 'Suburb', 'State', 'Country', 'Zip Code', 'Telephone', 'Fax', 'Miscellanous info', 'powered_by.png', 'top', 'email@email.com', 1, 1, 0, '0000-00-00 00:00:00', 1, 'show_name=1\r\nshow_position=1\r\nshow_email=0\r\nshow_street_address=1\r\nshow_suburb=1\r\nshow_state=1\r\nshow_postcode=1\r\nshow_country=1\r\nshow_telephone=1\r\nshow_mobile=1\r\nshow_fax=1\r\nshow_webpage=1\r\nshow_misc=1\r\nshow_image=1\r\nallow_vcard=0\r\ncontact_icons=0\r\nicon_address=\r\nicon_email=\r\nicon_telephone=\r\nicon_fax=\r\nicon_misc=\r\nshow_email_form=1\r\nemail_description=1\r\nshow_email_copy=1\r\nbanned_email=\r\nbanned_subject=\r\nbanned_text=', 0, 12, 0, '', ''),
  (2, 'Сергей', '2012-08-07-13-49-33', '', '', '', '', '', '', '(050)321-45-65', '(063)12-13-14', '', '', NULL, 'sergey@gmail.com', 0, 1, 62, '2012-08-07 13:54:37', 2, 'show_name=1\nshow_position=1\nshow_email=0\nshow_street_address=1\nshow_suburb=1\nshow_state=1\nshow_postcode=1\nshow_country=1\nshow_telephone=1\nshow_mobile=1\nshow_fax=1\nshow_webpage=1\nshow_misc=1\nshow_image=1\nallow_vcard=0\ncontact_icons=0\nicon_address=\nicon_email=\nicon_telephone=\nicon_mobile=\nicon_fax=\nicon_misc=\nshow_email_form=1\nemail_description=\nshow_email_copy=1\nbanned_email=\nbanned_subject=\nbanned_text=', 63, 12, 1, '(067)123-56-98', 'http://inns.in.ua/sergey'),
  (3, 'Василий', 'agent2', 'агент', '', 'Харьков', '', '', '', '(050)988-54-32', '(063)987-43-21', '', '', NULL, 'vasily@gmail.com', 0, 1, 0, '0000-00-00 00:00:00', 3, 'show_name=1\nshow_position=1\nshow_email=0\nshow_street_address=1\nshow_suburb=1\nshow_state=1\nshow_postcode=1\nshow_country=1\nshow_telephone=1\nshow_mobile=1\nshow_fax=1\nshow_webpage=1\nshow_misc=1\nshow_image=1\nallow_vcard=0\ncontact_icons=0\nicon_address=\nicon_email=\nicon_telephone=\nicon_mobile=\nicon_fax=\nicon_misc=\nshow_email_form=1\nemail_description=\nshow_email_copy=1\nbanned_email=\nbanned_subject=\nbanned_text=', 64, 12, 1, '(067)905-23-32', 'http://inns.in.ua/vasily');

-- 
-- Вывод данных для таблицы g1525_content
--
INSERT INTO g1525_content VALUES 
  (1, 'Welcome to Joomla!', 'welcome-to-joomla', '', '<div align="left"><strong>Joomla! is a free open source framework and content publishing system designed for quickly creating highly interactive multi-language Web sites, online communities, media portals, blogs and eCommerce applications. <br /></strong></div><p><strong><br /></strong><img src="images/stories/powered_by.png" border="0" alt="Joomla! Logo" title="Example Caption" hspace="6" vspace="0" width="165" height="68" align="left" />Joomla! provides an easy-to-use graphical user interface that simplifies the management and publishing of large volumes of content including HTML, documents, and rich media.  Joomla! is used by organisations of all sizes for intranets and extranets and is supported by a community of tens of thousands of users. </p>', 'With a fully documented library of developer resources, Joomla! allows the customisation of every aspect of a Web site including presentation, layout, administration, and the rapid integration with third-party applications.<p>Joomla! now provides more developer power while making the user experience all the more friendly. For those who always wanted increased extensibility, Joomla! 1.5 can make this happen.</p><p>A new framework, ground-up refactoring, and a highly-active development team brings the excitement of ''the next generation CMS'' to your fingertips.  Whether you are a systems architect or a complete ''noob'' Joomla! can take you to the next level of content delivery. ''More than a CMS'' is something we have been playing with as a catchcry because the new Joomla! API has such incredible power and flexibility, you are free to take whatever direction your creative mind takes you and Joomla! can help you get there so much more easily than ever before.</p><p>Thinking Web publishing? Think Joomla!</p>', -1, 1, 0, 1, '2008-08-12 10:00:00', 62, '', '2008-08-12 10:00:00', 62, 0, '0000-00-00 00:00:00', '2006-01-03 01:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 29, 0, 1, '', '', 0, 92, 'robots=\nauthor='),
  (2, 'Newsflash 1', 'newsflash-1', '', '<p>Joomla! makes it easy to launch a Web site of any kind. Whether you want a brochure site or you are building a large online community, Joomla! allows you to deploy a new site in minutes and add extra functionality as you need it. The hundreds of available Extensions will help to expand your site and allow you to deliver new services that extend your reach into the Internet.</p>', '', -1, 1, 0, 3, '2008-08-10 06:30:34', 62, '', '2008-08-10 06:30:34', 62, 0, '0000-00-00 00:00:00', '2004-08-09 10:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 7, 0, 3, '', '', 0, 1, 'robots=\nauthor='),
  (3, 'Newsflash 2', 'newsflash-2', '', '<p>The one thing about a Web site, it always changes! Joomla! makes it easy to add Articles, content, images, videos, and more. Site administrators can edit and manage content ''in-context'' by clicking the ''Edit'' link. Webmasters can also edit content through a graphical Control Panel that gives you complete control over your site.</p>', '', -1, 1, 0, 3, '2008-08-09 22:30:34', 62, '', '2008-08-09 22:30:34', 62, 0, '0000-00-00 00:00:00', '2004-08-09 06:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 6, 0, 4, '', '', 0, 0, 'robots=\nauthor='),
  (4, 'Newsflash 3', 'newsflash-3', '', '<p>With a library of thousands of free <a href="http://extensions.joomla.org" target="_blank" title="The Joomla! Extensions Directory">Extensions</a>, you can add what you need as your site grows. Don''t wait, look through the <a href="http://extensions.joomla.org/" target="_blank" title="Joomla! Extensions">Joomla! Extensions</a>  library today. </p>', '', -1, 1, 0, 3, '2008-08-10 06:30:34', 62, '', '2008-08-10 06:30:34', 62, 0, '0000-00-00 00:00:00', '2004-08-09 10:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 7, 0, 5, '', '', 0, 1, 'robots=\nauthor='),
  (5, 'Joomla! License Guidelines', 'joomla-license-guidelines', 'joomla-license-guidelines', '<p>This Web site is powered by <a href="http://joomla.org/" target="_blank" title="Joomla!">Joomla!</a> The software and default templates on which it runs are Copyright 2005-2008 <a href="http://www.opensourcematters.org/" target="_blank" title="Open Source Matters">Open Source Matters</a>. The sample content distributed with Joomla! is licensed under the <a href="http://docs.joomla.org/JEDL" target="_blank" title="Joomla! Electronic Document License">Joomla! Electronic Documentation License.</a> All data entered into this Web site and templates added after installation, are copyrighted by their respective copyright owners.</p> <p>If you want to distribute, copy, or modify Joomla!, you are welcome to do so under the terms of the <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html#SEC1" target="_blank" title="GNU General Public License"> GNU General Public License</a>. If you are unfamiliar with this license, you might want to read <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html#SEC4" target="_blank" title="How To Apply These Terms To Your Program">''How To Apply These Terms To Your Program''</a> and the <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0-faq.html" target="_blank" title="GNU General Public License FAQ">''GNU General Public License FAQ''</a>.</p> <p>The Joomla! licence has always been GPL.</p>', '', -1, 4, 0, 25, '2008-08-20 10:11:07', 62, '', '2008-08-20 10:11:07', 62, 0, '0000-00-00 00:00:00', '2004-08-19 06:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 7, 0, 2, '', '', 0, 100, 'robots=\nauthor='),
  (6, 'We are Volunteers', 'we-are-volunteers', '', '<p>The Joomla Core Team and Working Group members are volunteer developers, designers, administrators and managers who have worked together to take Joomla! to new heights in its relatively short life. Joomla! has some wonderfully talented people taking Open Source concepts to the forefront of industry standards.  Joomla! 1.5 is a major leap forward and represents the most exciting Joomla! release in the history of the project. </p>', '', -1, 1, 0, 1, '2007-07-07 09:54:06', 62, '', '2007-07-07 09:54:06', 62, 0, '0000-00-00 00:00:00', '2004-07-06 22:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 10, 0, 4, '', '', 0, 54, 'robots=\nauthor='),
  (9, 'Millions of Smiles', 'millions-of-smiles', '', '<p>The Joomla! team has millions of good reasons to be smiling about the Joomla! 1.5. In its current incarnation, it''s had millions of downloads, taking it to an unprecedented level of popularity.  The new code base is almost an entire re-factor of the old code base.  The user experience is still extremely slick but for developers the API is a dream.  A proper framework for real PHP architects seeking the best of the best.</p><p>If you''re a former Mambo User or a 1.0 series Joomla! User, 1.5 is the future of CMSs for a number of reasons.  It''s more powerful, more flexible, more secure, and intuitive.  Our developers and interface designers have worked countless hours to make this the most exciting release in the content management system sphere.</p><p>Go on ... get your FREE copy of Joomla! today and spread the word about this benchmark project. </p>', '', -1, 1, 0, 1, '2007-07-07 09:54:06', 62, '', '2007-07-07 09:54:06', 62, 0, '0000-00-00 00:00:00', '2004-07-06 22:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 5, 0, 7, '', '', 0, 23, 'robots=\nauthor='),
  (10, 'How do I localise Joomla! to my language?', 'how-do-i-localise-joomla-to-my-language', '', '<h4>General<br /></h4><p>In Joomla! 1.5 all User interfaces can be localised. This includes the installation, the Back-end Control Panel and the Front-end Site.</p><p>The core release of Joomla! 1.5 is shipped with multiple language choices in the installation but, other than English (the default), languages for the Site and Administration interfaces need to be added after installation. Links to such language packs exist below.</p>', '<p>Translation Teams for Joomla! 1.5 may have also released fully localised installation packages where site, administrator and sample data are in the local language. These localised releases can be found in the specific team projects on the <a href="http://extensions.joomla.org/component/option,com_mtree/task,listcats/cat_id,1837/Itemid,35/" target="_blank" title="JED">Joomla! Extensions Directory</a>.</p><h4>How do I install language packs?</h4><ul><li>First download both the admin and the site language packs that you require.</li><li>Install each pack separately using the Extensions-&gt;Install/Uninstall Menu selection and then the package file upload facility.</li><li>Go to the Language Manager and be sure to select Site or Admin in the sub-menu. Then select the appropriate language and make it the default one using the Toolbar button.</li></ul><h4>How do I select languages?</h4><ul><li>Default languages can be independently set for Site and for Administrator</li><li>In addition, users can define their preferred language for each Site and Administrator. This takes affect after logging in.</li><li>While logging in to the Administrator Back-end, a language can also be selected for the particular session.</li></ul><h4>Where can I find Language Packs and Localised Releases?</h4><p><em>Please note that Joomla! 1.5 is new and language packs for this version may have not been released at this time.</em> </p><ul><li><a href="http://joomlacode.org/gf/project/jtranslation/" target="_blank" title="Accredited Translations">The Joomla! Accredited Translations Project</a>  - This is a joint repository for language packs that were developed by teams that are members of the Joomla! Translations Working Group.</li><li><a href="http://extensions.joomla.org/component/option,com_mtree/task,listcats/cat_id,1837/Itemid,35/" target="_blank" title="Translations">The Joomla! Extensions Site - Translations</a>  </li><li><a href="http://community.joomla.org/translations.html" target="_blank" title="Translation Work Group Teams">List of Translation Teams and Translation Partner Sites for Joomla! 1.5</a> </li></ul>', -1, 3, 0, 32, '2008-07-30 14:06:37', 62, '', '2008-07-30 14:06:37', 62, 0, '0000-00-00 00:00:00', '2006-09-29 10:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 9, 0, 5, '', '', 0, 10, 'robots=\nauthor='),
  (11, 'How do I upgrade to Joomla! 1.5 ?', 'how-do-i-upgrade-to-joomla-15', '', '<p>Joomla! 1.5 does not provide an upgrade path from earlier versions. Converting an older site to a Joomla! 1.5 site requires creation of a new empty site using Joomla! 1.5 and then populating the new site with the content from the old site. This migration of content is not a one-to-one process and involves conversions and modifications to the content dump.</p> <p>There are two ways to perform the migration:</p>', ' <div id="post_content-107"><li>An automated method of migration has been provided which uses a migrator Component to create the migration dump out of the old site (Mambo 4.5.x up to Joomla! 1.0.x) and a smart import facility in the Joomla! 1.5 Installation that performs required conversions and modifications during the installation process.</li> <li>Migration can be performed manually. This involves exporting the required tables, manually performing required conversions and modifications and then importing the content to the new site after it is installed.</li>  <p><!--more--></p> <h2><strong> Automated migration</strong></h2>  <p>This is a two phased process using two tools. The first tool is a migration Component named <font face="courier new,courier">com_migrator</font>. This Component has been contributed by Harald Baer and is based on his <strong>eBackup </strong>Component. The migrator needs to be installed on the old site and when activated it prepares the required export dump of the old site''s data. The second tool is built into the Joomla! 1.5 installation process. The exported content dump is loaded to the new site and all conversions and modification are performed on-the-fly.</p> <h3><u> Step 1 - Using com_migrator to export data from old site:</u></h3> <li>Install the <font face="courier new,courier">com_migrator</font> Component on the <u><strong>old</strong></u> site. It can be found at the <a href="http://joomlacode.org/gf/project/pasamioprojects/frs/" target="_blank" title="JoomlaCode">JoomlaCode developers forge</a>.</li> <li>Select the Component in the Component Menu of the Control Panel.</li> <li>Click on the <strong>Dump it</strong> icon. Three exported <em>gzipped </em>export scripts will be created. The first is a complete backup of the old site. The second is the migration content of all core elements which will be imported to the new site. The third is a backup of all 3PD Component tables.</li> <li>Click on the download icon of the particular exports files needed and store locally.</li> <li>Multiple export sets can be created.</li> <li>The exported data is not modified in anyway and the original encoding is preserved. This makes the <font face="courier new,courier">com_migrator</font> tool a recommended tool to use for manual migration as well.</li> <h3><u> Step 2 - Using the migration facility to import and convert data during Joomla! 1.5 installation:</u></h3><p>Note: This function requires the use of the <em><font face="courier new,courier">iconv </font></em>function in PHP to convert encodings. If <em><font face="courier new,courier">iconv </font></em>is not found a warning will be provided.</p> <li>In step 6 - Configuration select the ''Load Migration Script'' option in the ''Load Sample Data, Restore or Migrate Backed Up Content'' section of the page.</li> <li>Enter the table prefix used in the content dump. For example: ''jos_'' or ''site2_'' are acceptable values.</li> <li>Select the encoding of the dumped content in the dropdown list. This should be the encoding used on the pages of the old site. (As defined in the _ISO variable in the language file or as seen in the browser page info/encoding/source)</li> <li>Browse the local host and select the migration export and click on <strong>Upload and Execute</strong></li> <li>A success message should appear or alternately a listing of database errors</li> <li>Complete the other required fields in the Configuration step such as Site Name and Admin details and advance to the final step of installation. (Admin details will be ignored as the imported data will take priority. Please remember admin name and password from the old site)</li> <p><u><br /></u></p></div>', -1, 3, 0, 28, '2008-07-30 20:27:52', 62, '', '2008-07-30 20:27:52', 62, 0, '0000-00-00 00:00:00', '2006-09-29 12:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 10, 0, 3, '', '', 0, 14, 'robots=\nauthor='),
  (12, 'Why does Joomla! 1.5 use UTF-8 encoding?', 'why-does-joomla-15-use-utf-8-encoding', '', '<p>Well... how about never needing to mess with encoding settings again?</p><p>Ever needed to display several languages on one page or site and something always came up in Giberish?</p><p>With utf-8 (a variant of Unicode) glyphs (character forms) of basically all languages can be displayed with one single encoding setting. </p>', '', -1, 3, 0, 31, '2008-08-05 01:11:29', 62, '', '2008-08-05 01:11:29', 62, 0, '0000-00-00 00:00:00', '2006-10-03 10:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 8, 0, 8, '', '', 0, 29, 'robots=\nauthor='),
  (13, 'What happened to the locale setting?', 'what-happened-to-the-locale-setting', '', 'This is now defined in the Language [<em>lang</em>].xml file in the Language metadata settings. If you are having locale problems such as dates do not appear in your language for example, you might want to check/edit the entries in the locale tag. Note that multiple locale strings can be set and the host will usually accept the first one recognised.', '', -1, 3, 0, 28, '2008-08-06 16:47:35', 62, '', '2008-08-06 16:47:35', 62, 0, '0000-00-00 00:00:00', '2006-10-05 14:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 7, 0, 2, '', '', 0, 11, 'robots=\nauthor='),
  (14, 'What is the FTP layer for?', 'what-is-the-ftp-layer-for', '', '<p>The FTP Layer allows file operations (such as installing Extensions or updating the main configuration file) without having to make all the folders and files writable. This has been an issue on Linux and other Unix based platforms in respect of file permissions. This makes the site admin''s life a lot easier and increases security of the site.</p><p>You can check the write status of relevent folders by going to ''''Help-&gt;System Info" and then in the sub-menu to "Directory Permissions". With the FTP Layer enabled even if all directories are red, Joomla! will operate smoothly.</p><p>NOTE: the FTP layer is not required on a Windows host/server. </p>', '', -1, 3, 0, 31, '2008-08-06 21:27:49', 62, '', '2008-08-06 21:27:49', 62, 0, '0000-00-00 00:00:00', '2006-10-05 16:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=', 6, 0, 6, '', '', 0, 23, 'robots=\nauthor='),
  (15, 'Can Joomla! 1.5 operate with PHP Safe Mode On?', 'can-joomla-15-operate-with-php-safe-mode-on', '', '<p>Yes it can! This is a significant security improvement.</p><p>The <em>safe mode</em> limits PHP to be able to perform actions only on files/folders who''s owner is the same as PHP is currently using (this is usually ''apache''). As files normally are created either by the Joomla! application or by FTP access, the combination of PHP file actions and the FTP Layer allows Joomla! to operate in PHP Safe Mode.</p>', '', -1, 3, 0, 31, '2008-08-06 19:28:35', 62, '', '2008-08-06 19:28:35', 62, 0, '0000-00-00 00:00:00', '2006-10-05 14:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 7, 0, 4, '', '', 0, 8, 'robots=\nauthor='),
  (16, 'Only one edit window! How do I create "Read more..."?', 'only-one-edit-window-how-do-i-create-read-more', '', '<p>This is now implemented by inserting a <strong>Read more...</strong> tag (the button is located below the editor area) a dotted line appears in the edited text showing the split location for the <em>Read more....</em> A new Plugin takes care of the rest.</p><p>It is worth mentioning that this does not have a negative effect on migrated data from older sites. The new implementation is fully backward compatible.</p>', '', -1, 3, 0, 28, '2008-08-06 19:29:28', 62, '', '2008-08-06 19:29:28', 62, 0, '0000-00-00 00:00:00', '2006-10-05 14:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 7, 0, 4, '', '', 0, 20, 'robots=\nauthor='),
  (17, 'My MySQL database does not support UTF-8. Do I have a problem?', 'my-mysql-database-does-not-support-utf-8-do-i-have-a-problem', '', 'No you don''t. Versions of MySQL lower than 4.1 do not have built in UTF-8 support. However, Joomla! 1.5 has made provisions for backward compatibility and is able to use UTF-8 on older databases. Let the installer take care of all the settings and there is no need to make any changes to the database (charset, collation, or any other).', '', -1, 3, 0, 31, '2008-08-07 09:30:37', 62, '', '2008-08-07 09:30:37', 62, 0, '0000-00-00 00:00:00', '2006-10-05 20:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 10, 0, 7, '', '', 0, 9, 'robots=\nauthor='),
  (18, 'Joomla! Features', 'joomla-features', '', '<h4><font color="#ff6600">Joomla! features:</font></h4> <ul><li>Completely database driven site engines </li><li>News, products, or services sections fully editable and manageable</li><li>Topics sections can be added to by contributing Authors </li><li>Fully customisable layouts including <em>left</em>, <em>center</em>, and <em>right </em>Menu boxes </li><li>Browser upload of images to your own library for use anywhere in the site </li><li>Dynamic Forum/Poll/Voting booth for on-the-spot results </li><li>Runs on Linux, FreeBSD, MacOSX server, Solaris, and AIX', '  </li></ul> <h4>Extensive Administration:</h4> <ul><li>Change order of objects including news, FAQs, Articles etc. </li><li>Random Newsflash generator </li><li>Remote Author submission Module for News, Articles, FAQs, and Links </li><li>Object hierarchy - as many Sections, departments, divisions, and pages as you want </li><li>Image library - store all your PNGs, PDFs, DOCs, XLSs, GIFs, and JPEGs online for easy use </li><li>Automatic Path-Finder. Place a picture and let Joomla! fix the link </li><li>News Feed Manager. Easily integrate news feeds into your Web site.</li><li>E-mail a friend and Print format available for every story and Article </li><li>In-line Text editor similar to any basic word processor software </li><li>User editable look and feel </li><li>Polls/Surveys - Now put a different one on each page </li><li>Custom Page Modules. Download custom page Modules to spice up your site </li><li>Template Manager. Download Templates and implement them in seconds </li><li>Layout preview. See how it looks before going live </li><li>Banner Manager. Make money out of your site.</li></ul>', -1, 4, 0, 29, '2008-08-08 23:32:45', 62, '', '2008-08-08 23:32:45', 62, 0, '0000-00-00 00:00:00', '2006-10-07 06:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 11, 0, 4, '', '', 0, 59, 'robots=\nauthor='),
  (19, 'Joomla! Overview', 'joomla-overview', '', '<p>If you''re new to Web publishing systems, you''ll find that Joomla! delivers sophisticated solutions to your online needs. It can deliver a robust enterprise-level Web site, empowered by endless extensibility for your bespoke publishing needs. Moreover, it is often the system of choice for small business or home users who want a professional looking site that''s simple to deploy and use. <em>We do content right</em>.<br /> </p><p>So what''s the catch? How much does this system cost?</p><p> Well, there''s good news ... and more good news! Joomla! 1.5 is free, it is released under an Open Source license - the GNU/General Public License v 2.0. Had you invested in a mainstream, commercial alternative, there''d be nothing but moths left in your wallet and to add new functionality would probably mean taking out a second mortgage each time you wanted something adding!</p><p>Joomla! changes all that ... <br />Joomla! is different from the normal models for content management software. For a start, it''s not complicated. Joomla! has been developed for everybody, and anybody can develop it further. It is designed to work (primarily) with other Open Source, free, software such as PHP, MySQL, and Apache. </p><p>It is easy to install and administer, and is reliable. </p><p>Joomla! doesn''t even require the user or administrator of the system to know HTML to operate it once it''s up and running.</p><p>To get the perfect Web site with all the functionality that you require for your particular application may take additional time and effort, but with the Joomla! Community support that is available and the many Third Party Developers actively creating and releasing new Extensions for the 1.5 platform on an almost daily basis, there is likely to be something out there to meet your needs. Or you could develop your own Extensions and make these available to the rest of the community. </p>', '', -1, 4, 0, 29, '2008-08-09 07:49:20', 62, '', '2008-08-09 07:49:20', 62, 0, '0000-00-00 00:00:00', '2006-10-07 10:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 13, 0, 2, '', '', 0, 150, 'robots=\nauthor='),
  (20, 'Support and Documentation', 'support-and-documentation', '', '<h1>Support </h1><p>Support for the Joomla! CMS can be found on several places. The best place to start would be the <a href="http://docs.joomla.org/" target="_blank" title="Joomla! Official Documentation Wiki">Joomla! Official Documentation Wiki</a>. Here you can help yourself to the information that is regularly published and updated as Joomla! develops. There is much more to come too!</p> <p>Of course you should not forget the Help System of the CMS itself. On the <em>topmenu </em>in the Back-end Control panel you find the Help button which will provide you with lots of explanation on features.</p> <p>Another great place would of course be the <a href="http://forum.joomla.org/" target="_blank" title="Forum">Forum</a> . On the Joomla! Forum you can find help and support from Community members as well as from Joomla! Core members and Working Group members. The forum contains a lot of information, FAQ''s, just about anything you are looking for in terms of support.</p> <p>Two other resources for Support are the <a href="http://developer.joomla.org/" target="_blank" title="Joomla! Developer Site">Joomla! Developer Site</a> and the <a href="http://extensions.joomla.org/" target="_blank" title="Joomla! Extensions Directory">Joomla! Extensions Directory</a> (JED). The Joomla! Developer Site provides lots of technical information for the experienced Developer as well as those new to Joomla! and development work in general. The JED whilst not a support site in the strictest sense has many of the Extensions that you will need as you develop your own Web site.</p> <p>The Joomla! Developers and Bug Squad members are regularly posting their blog reports about several topics such as programming techniques and security issues.</p> <h1>Documentation</h1> <p>Joomla! Documentation can of course be found on the <a href="http://docs.joomla.org/" target="_blank" title="Joomla! Official Documentation Wiki">Joomla! Official Documentation Wiki</a>. You can find information for beginners, installation, upgrade, Frequently Asked Questions, developer topics, and a lot more. The Documentation Team helps oversee the wiki but you are invited to contribute content, as well.</p> <p>There are also books written about Joomla! You can find a listing of these books in the <a href="http://shop.joomla.org/" target="_blank" title="Joomla! Shop">Joomla! Shop</a>.</p>', '', -1, 4, 0, 25, '2008-08-09 08:33:57', 62, '', '2008-08-09 08:33:57', 62, 0, '0000-00-00 00:00:00', '2006-10-07 10:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 13, 0, 1, '', '', 0, 6, 'robots=\nauthor='),
  (21, 'Joomla! Facts', 'joomla-facts', '', '<p>Here are some interesting facts about Joomla!</p><ul><li><span>Over 210,000 active registered Users on the <a href="http://forum.joomla.org" target="_blank" title="Joomla Forums">Official Joomla! community forum</a> and more on the many international community sites.</span><ul><li><span>over 1,000,000 posts in over 200,000 topics</span></li><li>over 1,200 posts per day</li><li>growing at 150 new participants each day!</li></ul></li><li><span>1168 Projects on the JoomlaCode (<a href="http://joomlacode.org/" target="_blank" title="JoomlaCode">joomlacode.org</a> ). All for open source addons by third party developers.</span><ul><li><span>Well over 6,000,000 downloads of Joomla! since the migration to JoomlaCode in March 2007.<br /></span></li></ul></li><li><span>Nearly 4,000 extensions for Joomla! have been registered on the <a href="http://extensions.joomla.org" target="_blank" title="http://extensions.joomla.org">Joomla! Extension Directory</a>  </span></li><li><span>Joomla.org exceeds 2 TB of traffic per month!</span></li></ul>', '', -1, 4, 0, 30, '2008-08-09 16:46:37', 62, '', '2008-08-09 16:46:37', 62, 0, '0000-00-00 00:00:00', '2006-10-07 14:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 13, 0, 1, '', '', 0, 50, 'robots=\nauthor='),
  (22, 'What''s New in 1.5?', 'whats-new-in-15', '', '<p>As with previous releases, Joomla! provides a unified and easy-to-use framework for delivering content for Web sites of all kinds. To support the changing nature of the Internet and emerging Web technologies, Joomla! required substantial restructuring of its core functionality and we also used this effort to simplify many challenges within the current user interface. Joomla! 1.5 has many new features.</p>', '<p style="margin-bottom: 0in">In Joomla! 1.5, you''ll notice: </p>    <ul><li>     <p style="margin-bottom: 0in">       Substantially improved usability, manageability, and scalability far beyond the original Mambo foundations</p>   </li><li>     <p style="margin-bottom: 0in"> Expanded accessibility to support internationalisation, double-byte characters and right-to-left support for Arabic, Farsi, and Hebrew languages among others</p>   </li><li>     <p style="margin-bottom: 0in"> Extended integration of external applications through Web services and remote authentication such as the Lightweight Directory Access Protocol (LDAP)</p>   </li><li>     <p style="margin-bottom: 0in"> Enhanced content delivery, template and presentation capabilities to support accessibility standards and content delivery to any destination</p>   </li><li>     <p style="margin-bottom: 0in">       A more sustainable and flexible framework for Component and Extension developers</p>   </li><li>     <p style="margin-bottom: 0in">Backward compatibility with previous releases of Components, Templates, Modules, and other Extensions</p></li></ul>', -1, 4, 0, 29, '2008-08-11 22:13:58', 62, '', '2008-08-11 22:13:58', 62, 0, '0000-00-00 00:00:00', '2006-10-10 18:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 10, 0, 1, '', '', 0, 92, 'robots=\nauthor='),
  (23, 'Platforms and Open Standards', 'platforms-and-open-standards', '', '<p class="MsoNormal">Joomla! runs on any platform including Windows, most flavours of Linux, several Unix versions, and the Apple OS/X platform.  Joomla! depends on PHP and the MySQL database to deliver dynamic content.  </p>            <p class="MsoNormal">The minimum requirements are:</p>      <ul><li>Apache 1.x, 2.x and higher</li><li>PHP 4.3 and higher</li><li>MySQL 3.23 and higher</li></ul>It will also run on alternative server platforms such as Windows IIS - provided they support PHP and MySQL - but these require additional configuration in order for the Joomla! core package to be successful installed and operated.', '', -1, 4, 0, 25, '2008-08-11 04:22:14', 62, '', '2008-08-11 04:22:14', 62, 0, '0000-00-00 00:00:00', '2006-10-10 08:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 7, 0, 3, '', '', 0, 11, 'robots=\nauthor='),
  (24, 'Content Layouts', 'content-layouts', '', '<p>Joomla! provides plenty of flexibility when displaying your Web content. Whether you are using Joomla! for a blog site, news or a Web site for a company, you''ll find one or more content styles to showcase your information. You can also change the style of content dynamically depending on your preferences. Joomla! calls how a page is laid out a <strong>layout</strong>. Use the guide below to understand which layouts are available and how you might use them. </p> <h2>Content </h2> <p>Joomla! makes it extremely easy to add and display content. All content  is placed where your mainbody tag in your template is located. There are three main types of layouts available in Joomla! and all of them can be customised via parameters. The display and parameters are set in the Menu Item used to display the content your working on. You create these layouts by creating a Menu Item and choosing how you want the content to display.</p> <h3>Blog Layout<br /> </h3> <p>Blog layout will show a listing of all Articles of the selected blog type (Section or Category) in the mainbody position of your template. It will give you the standard title, and Intro of each Article in that particular Category and/or Section. You can customise this layout via the use of the Preferences and Parameters, (See Article Parameters) this is done from the Menu not the Section Manager!</p> <h3>Blog Archive Layout<br /> </h3> <p>A Blog Archive layout will give you a similar output of Articles as the normal Blog Display but will add, at the top, two drop down lists for month and year plus a search button to allow Users to search for all Archived Articles from a specific month and year.</p> <h3>List Layout<br /> </h3> <p>Table layout will simply give you a <em>tabular </em>list<em> </em>of all the titles in that particular Section or Category. No Intro text will be displayed just the titles. You can set how many titles will be displayed in this table by Parameters. The table layout will also provide a filter Section so that Users can reorder, filter, and set how many titles are listed on a single page (up to 50)</p> <h2>Wrapper</h2> <p>Wrappers allow you to place stand alone applications and Third Party Web sites inside your Joomla! site. The content within a Wrapper appears within the primary content area defined by the "mainbody" tag and allows you to display their content as a part of your own site. A Wrapper will place an IFRAME into the content Section of your Web site and wrap your standard template navigation around it so it appears in the same way an Article would.</p> <h2>Content Parameters</h2> <p>The parameters for each layout type can be found on the right hand side of the editor boxes in the Menu Item configuration screen. The parameters available depend largely on what kind of layout you are configuring.</p>', '', -1, 4, 0, 29, '2008-08-12 22:33:10', 62, '', '2008-08-12 22:33:10', 62, 0, '0000-00-00 00:00:00', '2006-10-11 06:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 11, 0, 5, '', '', 0, 70, 'robots=\nauthor='),
  (25, 'What are the requirements to run Joomla! 1.5?', 'what-are-the-requirements-to-run-joomla-15', '', '<p>Joomla! runs on the PHP pre-processor. PHP comes in many flavours, for a lot of operating systems. Beside PHP you will need a Web server. Joomla! is optimized for the Apache Web server, but it can run on different Web servers like Microsoft IIS it just requires additional configuration of PHP and MySQL. Joomla! also depends on a database, for this currently you can only use MySQL. </p>Many people know from their own experience that it''s not easy to install an Apache Web server and it gets harder if you want to add MySQL, PHP and Perl. XAMPP, WAMP, and MAMP are easy to install distributions containing Apache, MySQL, PHP and Perl for the Windows, Mac OSX and Linux operating systems. These packages are for localhost installations on non-public servers only.<br />The minimum version requirements are:<br /><ul><li>Apache 1.x or 2.x</li><li>PHP 4.3 or up</li><li>MySQL 3.23 or up</li></ul>For the latest minimum requirements details, see <a href="http://www.joomla.org/about-joomla/technical-requirements.html" target="_blank" title="Joomla! Technical Requirements">Joomla! Technical Requirements</a>.', '', -1, 3, 0, 31, '2008-08-11 00:42:31', 62, '', '2008-08-11 00:42:31', 62, 0, '0000-00-00 00:00:00', '2006-10-10 06:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 6, 0, 5, '', '', 0, 26, 'robots=\nauthor='),
  (26, 'Extensions', 'extensions', '', '<p>Out of the box, Joomla! does a great job of managing the content needed to make your Web site sing. But for many people, the true power of Joomla! lies in the application framework that makes it possible for developers all around the world to create powerful add-ons that are called <strong>Extensions</strong>. An Extension is used to add capabilities to Joomla! that do not exist in the base core code. Here are just some examples of the hundreds of available Extensions:</p> <ul>   <li>Dynamic form builders</li>   <li>Business or organisational directories</li>   <li>Document management</li>   <li>Image and multimedia galleries</li>   <li>E-commerce and shopping cart engines</li>   <li>Forums and chat software</li>   <li>Calendars</li>   <li>E-mail newsletters</li>   <li>Data collection and reporting tools</li>   <li>Banner advertising systems</li>   <li>Paid subscription services</li>   <li>and many, many, more</li> </ul> <p>You can find more examples over at our ever growing <a href="http://extensions.joomla.org" target="_blank" title="Joomla! Extensions Directory">Joomla! Extensions Directory</a>. Prepare to be amazed at the amount of exciting work produced by our active developer community!</p><p>A useful guide to the Extension site can be found at:<br /><a href="http://extensions.joomla.org/content/view/15/63/" target="_blank" title="Guide to the Joomla! Extension site">http://extensions.joomla.org/content/view/15/63/</a> </p> <h3>Types of Extensions </h3><p>There are five types of extensions:</p> <ul>   <li>Components</li>   <li>Modules</li>   <li>Templates</li>   <li>Plugins</li>   <li>Languages</li> </ul> <p>You can read more about the specifics of these using the links in the Article Index - a Table of Contents (yet another useful feature of Joomla!) - at the top right or by clicking on the <strong>Next </strong>link below.<br /> </p> <hr title="Components" class="system-pagebreak" /> <h3><img src="images/stories/ext_com.png" border="0" alt="Component - Joomla! Extension Directory" title="Component - Joomla! Extension Directory" width="17" height="17" /> Components</h3> <p>A Component is the largest and most complex of the Extension types.  Components are like mini-applications that render the main body of the  page. An analogy that might make the relationship easier to understand  would be that Joomla! is a book and all the Components are chapters in  the book. The core Article Component (<font face="courier new,courier">com_content</font>), for example, is the  mini-application that handles all core Article rendering just as the  core registration Component (<font face="courier new,courier">com_user</font>) is the mini-application  that handles User registration.</p> <p>Many of Joomla!''s core features are provided by the use of default Components such as:</p> <ul>   <li>Contacts</li>   <li>Front Page</li>   <li>News Feeds</li>   <li>Banners</li>   <li>Mass Mail</li>   <li>Polls</li></ul><p>A Component will manage data, set displays, provide functions, and in general can perform any operation that does not fall under the general functions of the core code.</p> <p>Components work hand in hand with Modules and Plugins to provide a rich variety of content display and functionality aside from the standard Article and content display. They make it possible to completely transform Joomla! and greatly expand its capabilities.</p>  <hr title="Modules" class="system-pagebreak" /> <h3><img src="images/stories/ext_mod.png" border="0" alt="Module - Joomla! Extension Directory" title="Module - Joomla! Extension Directory" width="17" height="17" /> Modules</h3> <p>A more lightweight and flexible Extension used for page rendering is a Module. Modules are used for small bits of the page that are generally  less complex and able to be seen across different Components. To  continue in our book analogy, a Module can be looked at as a footnote  or header block, or perhaps an image/caption block that can be rendered  on a particular page. Obviously you can have a footnote on any page but  not all pages will have them. Footnotes also might appear regardless of  which chapter you are reading. Simlarly Modules can be rendered  regardless of which Component you have loaded.</p> <p>Modules are like little mini-applets that can be placed anywhere on your site. They work in conjunction with Components in some cases and in others are complete stand alone snippets of code used to display some data from the database such as Articles (Newsflash) Modules are usually used to output data but they can also be interactive form items to input data for example the Login Module or Polls.</p> <p>Modules can be assigned to Module positions which are defined in your Template and in the back-end using the Module Manager and editing the Module Position settings. For example, "left" and "right" are common for a 3 column layout. </p> <h4>Displaying Modules</h4> <p>Each Module is assigned to a Module position on your site. If you wish it to display in two different locations you must copy the Module and assign the copy to display at the new location. You can also set which Menu Items (and thus pages) a Module will display on, you can select all Menu Items or you can pick and choose by holding down the control key and selecting multiple locations one by one in the Modules [Edit] screen</p> <p>Note: Your Main Menu is a Module! When you create a new Menu in the Menu Manager you are actually copying the Main Menu Module (<font face="courier new,courier">mod_mainmenu</font>) code and giving it the name of your new Menu. When you copy a Module you do not copy all of its parameters, you simply allow Joomla! to use the same code with two separate settings.</p> <h4>Newsflash Example</h4> <p>Newsflash is a Module which will display Articles from your site in an assignable Module position. It can be used and configured to display one Category, all Categories, or to randomly choose Articles to highlight to Users. It will display as much of an Article as you set, and will show a <em>Read more...</em> link to take the User to the full Article.</p> <p>The Newsflash Component is particularly useful for things like Site News or to show the latest Article added to your Web site.</p>  <hr title="Plugins" class="system-pagebreak" /> <h3><img src="images/stories/ext_plugin.png" border="0" alt="Plugin - Joomla! Extension Directory" title="Plugin - Joomla! Extension Directory" width="17" height="17" /> Plugins</h3> <p>One  of the more advanced Extensions for Joomla! is the Plugin. In previous  versions of Joomla! Plugins were known as Mambots. Aside from changing their name their  functionality has been expanded. A Plugin is a section of code that  runs when a pre-defined event happens within Joomla!. Editors are Plugins, for example, that execute when the Joomla! event <font face="courier new,courier">onGetEditorArea</font> occurs. Using a Plugin allows a developer to change  the way their code behaves depending upon which Plugins are installed  to react to an event.</p>  <hr title="Languages" class="system-pagebreak" /> <h3><img src="images/stories/ext_lang.png" border="0" alt="Language - Joomla! Extensions Directory" title="Language - Joomla! Extensions Directory" width="17" height="17" /> Languages</h3> <p>New  to Joomla! 1.5 and perhaps the most basic and critical Extension is a Language. Joomla! is released with multiple Installation Languages but the base Site and Administrator are packaged in just the one Language <strong>en-GB</strong> - being English with GB spelling for example. To include all the translations currently available would bloat the core package and make it unmanageable for uploading purposes. The Language files enable all the User interfaces both Front-end and Back-end to be presented in the local preferred language. Note these packs do not have any impact on the actual content such as Articles. </p> <p>More information on languages is available from the <br />   <a href="http://community.joomla.org/translations.html" target="_blank" title="Joomla! Translation Teams">http://community.joomla.org/translations.html</a></p>', '', -1, 4, 0, 29, '2008-08-11 06:00:00', 62, '', '2008-08-11 06:00:00', 62, 0, '0000-00-00 00:00:00', '2006-10-10 22:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 24, 0, 3, 'About Joomla!, General, Extensions', '', 0, 102, 'robots=\nauthor='),
  (27, 'The Joomla! Community', 'the-joomla-community', '', '<p><strong>Got a question? </strong>With more than 210,000 members, the Joomla! Discussion Forums at <a href="http://forum.joomla.org/" target="_blank" title="Forums">forum.joomla.org</a> are a great resource for both new and experienced users. Ask your toughest questions the community is waiting to see what you''ll do with your Joomla! site.</p><p><strong>Do you want to show off your new Joomla! Web site?</strong> Visit the <a href="http://forum.joomla.org/viewforum.php?f=514" target="_blank" title="Site Showcase">Site Showcase</a> section of our forum.</p><p><strong>Do you want to contribute?</strong></p><p>If you think working with Joomla is fun, wait until you start working on it. We''re passionate about helping Joomla users become contributors. There are many ways you can help Joomla''s development:</p><ul>\t<li>Submit news about Joomla. We syndicate Joomla-related news on <a href="http://news.joomla.org" target="_blank" title="JoomlaConnect">JoomlaConnect<sup>TM</sup></a>. If you have Joomla news that you would like to share with the community, find out how to get connected <a href="http://community.joomla.org/connect.html" target="_blank" title="JoomlaConnect">here</a>.</li>\t<li>Report bugs and request features in our <a href="http://joomlacode.org/gf/project/joomla/tracker/" target="_blank" title="Joomla! developement trackers">trackers</a>. Please read <a href="http://docs.joomla.org/Filing_bugs_and_issues" target="_blank" title="Reporting Bugs">Reporting Bugs</a>, for details on how we like our bug reports served up</li><li>Submit patches for new and/or fixed behaviour. Please read <a href="http://docs.joomla.org/Patch_submission_guidelines" target="_blank" title="Submitting Patches">Submitting Patches</a>, for details on how to submit a patch.</li><li>Join the <a href="http://forum.joomla.org/viewforum.php?f=509" target="_blank" title="Joomla! development forums">developer forums</a> and share your ideas for how to improve Joomla. We''re always open to suggestions, although we''re likely to be sceptical of large-scale suggestions without some code to back it up.</li><li>Join any of the <a href="http://www.joomla.org/about-joomla/the-project/working-groups.html" target="_blank" title="Joomla! working groups">Joomla Working Groups</a> and bring your personal expertise to the Joomla community. </li></ul><p>These are just a few ways you can contribute. See <a href="http://www.joomla.org/about-joomla/contribute-to-joomla.html" target="_blank" title="Contribute">Contribute to Joomla</a> for many more ways.</p>', '', -1, 4, 0, 30, '2008-08-12 16:50:48', 62, '', '2008-08-12 16:50:48', 62, 0, '0000-00-00 00:00:00', '2006-10-11 02:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 12, 0, 2, '', '', 0, 52, 'robots=\nauthor='),
  (28, 'How do I install Joomla! 1.5?', 'how-do-i-install-joomla-15', '', '<p>Installing of Joomla! 1.5 is pretty easy. We assume you have set-up your Web site, and it is accessible with your browser.<br /><br />Download Joomla! 1.5, unzip it and upload/copy the files into the directory you Web site points to, fire up your browser and enter your Web site address and the installation will start.  </p><p>For full details on the installation processes check out the <a href="http://help.joomla.org/content/category/48/268/302" target="_blank" title="Joomla! 1.5 Installation Manual">Installation Manual</a> on the <a href="http://help.joomla.org" target="_blank" title="Joomla! Help Site">Joomla! Help Site</a> where you will also find download instructions for a PDF version too. </p>', '', -1, 3, 0, 31, '2008-08-11 01:10:59', 62, '', '2008-08-11 01:10:59', 62, 0, '0000-00-00 00:00:00', '2006-10-10 06:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 5, 0, 3, '', '', 0, 5, 'robots=\nauthor='),
  (29, 'What is the purpose of the collation selection in the installation screen?', 'what-is-the-purpose-of-the-collation-selection-in-the-installation-screen', '', 'The collation option determines the way ordering in the database is done. In languages that use special characters, for instance the German umlaut, the database collation determines the sorting order. If you don''t know which collation you need, select the "utf8_general_ci" as most languages use this. The other collations listed are exceptions in regards to the general collation. If your language is not listed in the list of collations it most likely means that "utf8_general_ci is suitable.', '', -1, 3, 0, 32, '2008-08-11 03:11:38', 62, '', '2008-08-11 03:11:38', 62, 0, '0000-00-00 00:00:00', '2006-10-10 08:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=', 4, 0, 4, '', '', 0, 6, 'robots=\nauthor='),
  (30, 'What languages are supported by Joomla! 1.5?', 'what-languages-are-supported-by-joomla-15', '', 'Within the Installer you will find a wide collection of languages. The installer currently supports the following languages: Arabic, Bulgarian, Bengali, Czech, Danish, German, Greek, English, Spanish, Finnish, French, Hebrew, Devanagari(India), Croatian(Croatia), Magyar (Hungary), Italian, Malay, Norwegian bokmal, Dutch, Portuguese(Brasil), Portugues(Portugal), Romanian, Russian, Serbian, Svenska, Thai and more are being added all the time.<br />By default the English language is installed for the Back and Front-ends. You can download additional language files from the <a href="http://extensions.joomla.org" target="_blank" title="Joomla! Extensions Directory">Joomla!Extensions Directory</a>. ', '', -1, 3, 0, 32, '2008-08-11 01:12:18', 62, '', '2008-08-11 01:12:18', 62, 0, '0000-00-00 00:00:00', '2006-10-10 06:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 5, 0, 2, '', '', 0, 8, 'robots=\nauthor='),
  (31, 'Is it useful to install the sample data?', 'is-it-useful-to-install-the-sample-data', '', 'Well you are reading it right now! This depends on what you want to achieve. If you are new to Joomla! and have no clue how it all fits together, just install the sample data. If you don''t like the English sample data because you - for instance - speak Chinese, then leave it out.', '', -1, 3, 0, 27, '2008-08-11 09:12:55', 62, '', '2008-08-11 09:12:55', 62, 62, '2012-05-27 12:37:48', '2006-10-10 10:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 6, 0, 3, '', '', 0, 3, 'robots=\nauthor='),
  (32, 'Where is the Static Content Item?', 'where-is-the-static-content', '', '<p>In Joomla! versions prior to 1.5 there were separate processes for creating a Static Content Item and normal Content Items. The processes have been combined now and whilst both content types are still around they are renamed as Articles for Content Items and Uncategorized Articles for Static Content Items. </p><p>If you want to create a static item, create a new Article in the same way as for standard content and rather than relating this to a particular Section and Category just select <span style="font-style: italic">Uncategorized</span> as the option in the Section and Category drop down lists.</p>', '', -1, 3, 0, 28, '2008-08-10 23:13:33', 62, '', '2008-08-10 23:13:33', 62, 0, '0000-00-00 00:00:00', '2006-10-10 04:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 6, 0, 6, '', '', 0, 5, 'robots=\nauthor='),
  (33, 'What is an Uncategorised Article?', 'what-is-uncategorised-article', '', 'Most Articles will be assigned to a Section and Category. In many cases, you might not know where you want it to appear so put the Article in the <em>Uncategorized </em>Section/Category. The Articles marked as <em>Uncategorized </em>are handled as static content.', '', -1, 3, 0, 31, '2008-08-11 15:14:11', 62, '', '2008-08-11 15:14:11', 62, 0, '0000-00-00 00:00:00', '2006-10-10 12:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 8, 0, 2, '', '', 0, 6, 'robots=\nauthor='),
  (34, 'Does the PDF icon render pictures and special characters?', 'does-the-pdf-icon-render-pictures-and-special-characters', '', 'Yes! Prior to Joomla! 1.5, only the text values of an Article and only for ISO-8859-1 encoding was allowed in the PDF rendition. With the new PDF library in place, the complete Article including images is rendered and applied to the PDF. The PDF generator also handles the UTF-8 texts and can handle any character sets from any language. The appropriate fonts must be installed but this is done automatically during a language pack installation.', '', -1, 3, 0, 32, '2008-08-11 17:14:57', 62, '', '2008-08-11 17:14:57', 62, 0, '0000-00-00 00:00:00', '2006-10-10 14:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 7, 0, 3, '', '', 0, 6, 'robots=\nauthor='),
  (35, 'Is it possible to change A Menu Item''s Type?', 'is-it-possible-to-change-the-types-of-menu-entries', '', '<p>You indeed can change the Menu Item''s Type to whatever you want, even after they have been created. </p><p>If, for instance, you want to change the Blog Section of a Menu link, go to the Control Panel-&gt;Menus Menu-&gt;[menuname]-&gt;Menu Item Manager and edit the Menu Item. Select the <strong>Change Type</strong> button and choose the new style of Menu Item Type from the available list. Thereafter, alter the Details and Parameters to reconfigure the display for the new selection  as you require it.</p>', '', -1, 3, 0, 31, '2008-08-10 23:15:36', 62, '', '2008-08-10 23:15:36', 62, 0, '0000-00-00 00:00:00', '2006-10-10 04:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 6, 0, 1, '', '', 0, 18, 'robots=\nauthor='),
  (36, 'Where did the Installers go?', 'where-did-the-installer-go', '', 'The improved Installer can be found under the Extensions Menu. With versions prior to Joomla! 1.5 you needed to select a specific Extension type when you wanted to install it and use the Installer associated with it, with Joomla! 1.5 you just select the Extension you want to upload, and click on install. The Installer will do all the hard work for you.', '', -1, 3, 0, 28, '2008-08-10 23:16:20', 62, '', '2008-08-10 23:16:20', 62, 0, '0000-00-00 00:00:00', '2006-10-10 04:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 6, 0, 1, '', '', 0, 4, 'robots=\nauthor='),
  (37, 'Where did the Mambots go?', 'where-did-the-mambots-go', '', '<p>Mambots have been renamed as Plugins. </p><p>Mambots were introduced in Mambo and offered possibilities to add plug-in logic to your site mainly for the purpose of manipulating content. In Joomla! 1.5, Plugins will now have much broader capabilities than Mambots. Plugins are able to extend functionality at the framework layer as well.</p>', '', -1, 3, 0, 28, '2008-08-11 09:17:00', 62, '', '2008-08-11 09:17:00', 62, 0, '0000-00-00 00:00:00', '2006-10-10 10:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 6, 0, 5, '', '', 0, 4, 'robots=\nauthor='),
  (38, 'I installed with my own language, but the Back-end is still in English', 'i-installed-with-my-own-language-but-the-back-end-is-still-in-english', '', '<p>A lot of different languages are available for the Back-end, but by default this language may not be installed. If you want a translated Back-end, get your language pack and install it using the Extension Installer. After this, go to the Extensions Menu, select Language Manager and make your language the default one. Your Back-end will be translated immediately.</p><p>Users who have access rights to the Back-end may choose the language they prefer in their Personal Details parameters. This is of also true for the Front-end language.</p><p> A good place to find where to download your languages and localised versions of Joomla! is <a href="http://extensions.joomla.org/index.php?option=com_mtree&task=listcats&cat_id=1837&Itemid=35" target="_blank" title="Translations for Joomla!">Translations for Joomla!</a> on JED.</p>', '', -1, 3, 0, 32, '2008-08-11 17:18:14', 62, '', '2008-08-11 17:18:14', 62, 0, '0000-00-00 00:00:00', '2006-10-10 14:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 7, 0, 1, '', '', 0, 7, 'robots=\nauthor='),
  (39, 'How do I remove an Article?', 'how-do-i-remove-an-article', '', '<p>To completely remove an Article, select the Articles that you want to delete and move them to the Trash. Next, open the Article Trash in the Content Menu and select the Articles you want to delete. After deleting an Article, it is no longer available as it has been deleted from the database and it is not possible to undo this operation.  </p>', '', -1, 3, 0, 27, '2008-08-11 09:19:01', 62, '', '2008-08-11 09:19:01', 62, 0, '0000-00-00 00:00:00', '2006-10-10 10:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 6, 0, 2, '', '', 0, 4, 'robots=\nauthor='),
  (40, 'What is the difference between Archiving and Trashing an Article? ', 'what-is-the-difference-between-archiving-and-trashing-an-article', '', '<p>When you <em>Archive </em>an Article, the content is put into a state which removes it from your site as published content. The Article is still available from within the Control Panel and can be <em>retrieved </em>for editing or republishing purposes. Trashed Articles are just one step from being permanently deleted but are still available until you Remove them from the Trash Manager. You should use Archive if you consider an Article important, but not current. Trash should be used when you want to delete the content entirely from your site and from future search results.  </p>', '', -1, 3, 0, 27, '2008-08-11 05:19:43', 62, '', '2008-08-11 05:19:43', 62, 0, '0000-00-00 00:00:00', '2006-10-10 06:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 8, 0, 1, '', '', 0, 5, 'robots=\nauthor='),
  (41, 'Newsflash 5', 'newsflash-5', '', 'Joomla! 1.5 - ''Experience the Freedom''!. It has never been easier to create your own dynamic Web site. Manage all your content from the best CMS admin interface and in virtually any language you speak.', '', -1, 1, 0, 3, '2008-08-12 00:17:31', 62, '', '2008-08-12 00:17:31', 62, 0, '0000-00-00 00:00:00', '2006-10-11 06:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 5, 0, 2, '', '', 0, 4, 'robots=\nauthor='),
  (42, 'Newsflash 4', 'newsflash-4', '', 'Yesterday all servers in the U.S. went out on strike in a bid to get more RAM and better CPUs. A spokes person said that the need for better RAM was due to some fool increasing the front-side bus speed. In future, buses will be told to slow down in residential motherboards.', '', -1, 1, 0, 3, '2008-08-12 00:25:50', 62, '', '2008-08-12 00:25:50', 62, 0, '0000-00-00 00:00:00', '2006-10-11 06:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 5, 0, 1, '', '', 0, 5, 'robots=\nauthor='),
  (43, 'Example Pages and Menu Links', 'example-pages-and-menu-links', '', '<p>This page is an example of content that is <em>Uncategorized</em>; that is, it does not belong to any Section or Category. You will see there is a new Menu in the left column. It shows links to the same content presented in 4 different page layouts.</p><ul><li>Section Blog</li><li>Section Table</li><li> Blog Category</li><li>Category Table</li></ul><p>Follow the links in the <strong>Example Pages</strong> Menu to see some of the options available to you to present all the different types of content included within the default installation of Joomla!.</p><p>This includes Components and individual Articles. These links or Menu Item Types (to give them their proper name) are all controlled from within the <strong><font face="courier new,courier">Menu Manager-&gt;[menuname]-&gt;Menu Items Manager</font></strong>. </p>', '', -1, 0, 0, 0, '2008-08-12 09:26:52', 62, '', '2008-08-12 09:26:52', 62, 0, '0000-00-00 00:00:00', '2006-10-11 10:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 7, 0, 1, 'Uncategorized, Uncategorized, Example Pages and Menu Links', '', 0, 43, 'robots=\nauthor='),
  (44, 'Joomla! Security Strike Team', 'joomla-security-strike-team', '', '<p>The Joomla! Project has assembled a top-notch team of experts to form the new Joomla! Security Strike Team. This new team will solely focus on investigating and resolving security issues. Instead of working in relative secrecy, the JSST will have a strong public-facing presence at the <a href="http://developer.joomla.org/security.html" target="_blank" title="Joomla! Security Center">Joomla! Security Center</a>.</p>', '<p>The new JSST will call the new <a href="http://developer.joomla.org/security.html" target="_blank" title="Joomla! Security Center">Joomla! Security Center</a> their home base. The Security Center provides a public presence for <a href="http://developer.joomla.org/security/news.html" target="_blank" title="Joomla! Security News">security issues</a> and a platform for the JSST to <a href="http://developer.joomla.org/security/articles-tutorials.html" target="_blank" title="Joomla! Security Articles">help the general public better understand security</a> and how it relates to Joomla!. The Security Center also offers users a clearer understanding of how security issues are handled. There''s also a <a href="http://feeds.joomla.org/JoomlaSecurityNews" target="_blank" title="Joomla! Security News Feed">news feed</a>, which provides subscribers an up-to-the-minute notification of security issues as they arise.</p>', -1, 1, 0, 1, '2007-07-07 09:54:06', 62, '', '2007-07-07 09:54:06', 62, 0, '0000-00-00 00:00:00', '2004-07-06 22:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 1, 0, 3, '', '', 0, 0, 'robots=\nauthor='),
  (45, 'Joomla! Community Portal', 'joomla-community-portal', '', '<p>The <a href="http://community.joomla.org/" target="_blank" title="Joomla! Community Portal">Joomla! Community Portal</a> is now online. There, you will find a constant source of information about the activities of contributors powering the Joomla! Project. Learn about <a href="http://community.joomla.org/events.html" target="_blank" title="Joomla! Events">Joomla! Events</a> worldwide, and see if there is a <a href="http://community.joomla.org/user-groups.html" target="_blank" title="Joomla! User Groups">Joomla! User Group</a> nearby.</p><p>The <a href="http://magazine.joomla.org/" target="_blank" title="Joomla! Community Magazine">Joomla! Community Magazine</a> promises an interesting overview of feature articles, community accomplishments, learning topics, and project updates each month. Also, check out <a href="http://community.joomla.org/connect.html" target="_blank" title="JoomlaConnect">JoomlaConnect&#0153;</a>. This aggregated RSS feed brings together Joomla! news from all over the world in your language. Get the latest and greatest by clicking <a href="http://community.joomla.org/connect.html" target="_blank" title="JoomlaConnect">here</a>.</p>', '', -1, 1, 0, 1, '2007-07-07 09:54:06', 62, '', '2007-07-07 09:54:06', 62, 0, '0000-00-00 00:00:00', '2004-07-06 22:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 2, 0, 2, '', '', 0, 5, 'robots=\nauthor='),
  (46, 'Тестовая страница', 'test-page', '', '<p>Привет всем.</p>\r\n<p>Тестовая страница для отображения моих примеров.</p>\r\n<p>Показываем картинку из локальной папки.</p>\r\n<p><img src="images/stories/pastarchives.jpg" border="0" /></p>\r\n<p>А теперь цифру считанную из БД.</p>\r\n<!--?php $query = ''SELECT * FROM  `g1525_groups`  where id = 1''; $db =& JFactory::getDBO(); $db --->\r\n<p> </p>', '', 1, 0, 0, 0, '2012-05-27 12:38:24', 62, '', '2012-05-27 13:21:31', 62, 62, '2012-06-07 18:24:56', '2012-05-27 12:38:24', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 8, 0, 1, '', '', 0, 22, 'robots=\nauthor=');

-- 
-- Вывод данных для таблицы g1525_content_frontpage
--
-- Таблица g1525.g1525_content_frontpage не содержит данных

-- 
-- Вывод данных для таблицы g1525_content_rating
--
-- Таблица g1525.g1525_content_rating не содержит данных

-- 
-- Вывод данных для таблицы g1525_core_acl_aro
--
INSERT INTO g1525_core_acl_aro VALUES 
  (10, 'users', '62', 0, 'Админ', 0),
  (11, 'users', '63', 0, 'agent', 0),
  (12, 'users', '64', 0, 'agent2', 0),
  (15, 'users', '67', 0, 'agent3', 0);

-- 
-- Вывод данных для таблицы g1525_core_acl_aro_groups
--
INSERT INTO g1525_core_acl_aro_groups VALUES 
  (17, 0, 'ROOT', 1, 32, 'ROOT'),
  (18, 29, 'Registered', 4, 21, 'Registered'),
  (19, 18, 'Author', 5, 10, 'Author'),
  (20, 19, 'Editor', 6, 9, 'Editor'),
  (21, 20, 'Publisher', 7, 8, 'Publisher'),
  (23, 30, 'Manager', 24, 29, 'Manager'),
  (24, 23, 'Administrator', 25, 28, 'Administrator'),
  (25, 24, 'Super Administrator', 26, 27, 'Super Administrator'),
  (28, 17, 'USERS', 2, 31, 'USERS'),
  (29, 28, 'Public Frontend', 3, 22, 'Public Frontend'),
  (30, 28, 'Public Backend', 23, 30, 'Public Backend'),
  (32, 18, 'Jea Agent', 11, 12, 'Jea Agent'),
  (34, 18, 'Jea Agent', 13, 14, 'Jea Agent'),
  (35, 18, 'Jea Agent', 15, 16, 'Jea Agent'),
  (36, 18, 'Jea Agent', 17, 18, 'Jea Agent'),
  (37, 18, 'Jea Agent', 19, 20, 'Jea Agent');

-- 
-- Вывод данных для таблицы g1525_core_acl_aro_map
--
-- Таблица g1525.g1525_core_acl_aro_map не содержит данных

-- 
-- Вывод данных для таблицы g1525_core_acl_aro_sections
--
INSERT INTO g1525_core_acl_aro_sections VALUES 
  (10, 'users', 1, 'Users', 0);

-- 
-- Вывод данных для таблицы g1525_core_acl_groups_aro_map
--
INSERT INTO g1525_core_acl_groups_aro_map VALUES 
  (25, '', 10),
  (32, '', 11),
  (32, '', 12),
  (32, '', 15);

-- 
-- Вывод данных для таблицы g1525_core_log_items
--
-- Таблица g1525.g1525_core_log_items не содержит данных

-- 
-- Вывод данных для таблицы g1525_core_log_searches
--
-- Таблица g1525.g1525_core_log_searches не содержит данных

-- 
-- Вывод данных для таблицы g1525_groups
--
INSERT INTO g1525_groups VALUES 
  (0, 'Public'),
  (1, 'Registered'),
  (2, 'Special');

-- 
-- Вывод данных для таблицы g1525_jea_advantages
--
INSERT INTO g1525_jea_advantages VALUES 
  (1, 'Посуда', 1),
  (2, 'Кухонная плита', 2),
  (3, 'Ванна', 3),
  (4, 'Душевая кабинка', 4),
  (5, 'Джакузи', 5),
  (6, 'Бронедверь', 6),
  (7, 'Кондиционер', 7),
  (8, 'Балкон', 8),
  (9, 'Микроволновка', 9),
  (10, 'Электрочайник', 10),
  (11, 'Тостер', 11),
  (12, 'Фен для волос', 12),
  (13, 'Холодильник', 13),
  (14, 'Утюг', 14),
  (15, 'Стиральная машина', 15),
  (16, 'Телефон', 16),
  (17, 'Интернет', 17),
  (18, 'Кабельное ТВ', 18),
  (19, 'Спутниковое ТВ', 19),
  (20, 'Плазменный телевизор', 20),
  (21, 'Ноутбук или компьютер', 21),
  (22, 'DVD-плеер', 22),
  (23, 'Банные принадлежности', 23);

-- 
-- Вывод данных для таблицы g1525_jea_areas
--
INSERT INTO g1525_jea_areas VALUES 
  (1, 'Голосеевский район', 1, 2),
  (2, 'Соломенский район', 1, 3),
  (3, 'Святошинский район', 1, 4),
  (4, 'Оболонский район', 1, 5),
  (5, 'Подольский район', 1, 6),
  (6, 'Печерский район', 1, 7),
  (7, 'Шевченковский район', 1, 8),
  (8, 'Дарницкий район', 1, 9),
  (9, 'Днепровский район', 1, 10),
  (10, 'Деснянский район', 1, 11),
  (11, 'Не указан или неизвестен', 1, 1);

-- 
-- Вывод данных для таблицы g1525_jea_conditions
--
INSERT INTO g1525_jea_conditions VALUES 
  (1, 'Отличное', 1),
  (2, 'Хорошее', 2),
  (3, 'Удовлетворительное', 3),
  (4, 'Плохое', 4);

-- 
-- Вывод данных для таблицы g1525_jea_departments
--
INSERT INTO g1525_jea_departments VALUES 
  (1, 'Any', 1),
  (2, 'Украина', 2);

-- 
-- Вывод данных для таблицы g1525_jea_heatingtypes
--
INSERT INTO g1525_jea_heatingtypes VALUES 
  (1, 'Центральное отопление', 1),
  (2, 'Индивидуальное отопление (Газ)', 2),
  (3, 'Отопление отдельного здания', 3);

-- 
-- Вывод данных для таблицы g1525_jea_hotwatertypes
--
INSERT INTO g1525_jea_hotwatertypes VALUES 
  (1, 'Постоянно (автономный обогрев)', 1),
  (2, 'Постоянно (без перебоев)', 2),
  (3, 'Случаются перебои или отключения', 3);

-- 
-- Вывод данных для таблицы g1525_jea_owners
--
INSERT INTO g1525_jea_owners VALUES 
  (1, 'Владелец1', '(050)0010101', '(067)0010101', '(063)0010101', 0, 1, '', NULL),
  (2, 'Сидор Сидорович', '(044)0020202', '(050)0020202', ' ', 0, 2, '', NULL);

-- 
-- Вывод данных для таблицы g1525_jea_properties
--
INSERT INTO g1525_jea_properties VALUES 
  (7, '1006', 'Своя квартира на Павловом поле', '----', 3, 1, 105.00, 'ул. Ленина 20', 4, 0, '', 0, 2, 40, 0, 0, 0.00, 0.00, 0.00, 1, 0, 0, 0, '2012-07-24', 0, '-1-2-3-4-7-8-9-10-11-12-14-15-16-17-18-19-20-21-22-23-', '<p>Сдам посуточно 1к. кв. студию в 5 мин. от к-тр им. Довженка новый современный ремонт вся бытовая техника класса люкс кондиционер wi-fi уютно 5й этаж 300грн. 066-881-92-45.</p>', 0, 1, 5, 0, '2012-06-08 13:35:19', 0, '0000-00-00 00:00:00', 62, 97, '50.032941', '36.214125', 120.00, 1, 0, '(067)1234-45-67', '(050)1234-45-67', '(093)1234-45-67'),
  (8, '1007', '1-комн возле Госпрома', '1---', 3, 1, 80.00, 'пр. Ленина', 4, 0, '', 0, 1, 52, 0, 1, 0.00, 0.00, 0.00, 0, 0, 0, 0, '2012-07-23', 0, '', '<p>Сдам посуточно свою 1 комн. квартиру в центре (рядом с Госпромом), комфортная, вся техника, 150 грн в сутки.</p>', 0, 1, 6, 0, '2012-06-08 13:37:06', 0, '0000-00-00 00:00:00', 62, 113, '50.015485', '36.232671', 0.00, 1, 0, '(067)1234-45-67', '(050)1234-45-67', '(093)1234-45-67'),
  (9, '1008', '2-комнатная на Холодной Горе', '2----', 6, 1, 100.00, 'м. Холодная Гора, Полтавский шлях', 4, 0, '', 0, 2, 60, 0, 0, 0.00, 0.00, 0.00, 0, 0, 0, 0, '1899-12-30', 0, '-1-7-', '<p>М. Хол. гора, своя 1к. кв-ра посуточно, почасово. Отл. ремонт, новый дом, душ. кабина, бойлер, каб-е Тв, DVD, высокоскор-ой Wi-Fi Триолан, новая кровать, холодильник, кондиционер, фен, утюг, посуда, свеж белье. Чеки. 067-812-52-80, 066-314-42-60.</p>', 0, 1, 7, 0, '2012-06-08 13:40:10', 0, '0000-00-00 00:00:00', 62, 30, '49.986371', '36.193156', 102.00, 1, 0, '(067)1234-45-67', '(050)1234-45-67', '(093)1234-45-67'),
  (10, '1010', 'Василий заплатил за 2 месяца', '---2-', 6, 1, 80.00, 'пр. Героев Труда, 16', 4, 0, '', 0, 3, 25, 0, 0, 0.00, 0.00, 0.00, 1, 1, 0, 0, '2012-07-24', 0, '-1-2-3-4-5-6-7-13-', '<p><span style="color: #434243; font-family: ''Droid Sans'', Tahoma, Geneva, sans-serif; line-height: normal; background-color: #e2f1ff;">Однокомнатная квартира, 9/9 этажного дома, рядом со ст. м. Барабашова, общая площадь 30 кв.м, жилая 15 кв.м. Хороший ремонт, новая мебель, сантехника. Холодильник, микроволновая печь, электрочайник, утюг, гладильная доска, телевизор, DVD, кондиционер, интернет (по договоренности), 4 спальных места (2 дивана-книжки), чистая постель, полотенца, тапочки.</span></p>', 0, 1, 8, 0, '2012-06-08 16:25:26', 0, '0000-00-00 00:00:00', 64, 31, '50.000546', '36.300035', 1000.00, 1, 0, '(067)1234-45-67', '(050)1234-45-67', '(093)1234-45-67'),
  (11, '1011', '2-комнатная на пл. Конституции', '2----_2', 6, 1, 110.00, 'пл. Конституции, 7', 4, 0, '', 0, 1, 50, 0, 0, 0.00, 0.00, 0.00, 1, 1, 0, 0, '1899-12-30', 0, '-1-3-7-13-19-', '<p><span style="color: #434243; font-family: Tahoma, sans-serif; line-height: normal; background-color: #fffaf0;">Сдам почасово-посуточно 2-ком. кв. пл. Конституции. Квартира с евроремонтом, с/у в кафеле, горячая вода круглосуточно, на кухне плитка, новая кухонная мебель. В комнате новая 2-х спальная кровать и одноместный диван, бронированная дверь, пластиковые окна, окна выходят на тихий зеленый дворик. Рядом  Макдональс, развлекательный комплекс. Транспортная развязка удобная, центр города</span></p>', 0, 1, 9, 0, '2012-06-08 16:42:39', 0, '0000-00-00 00:00:00', 64, 28, '49.989546', '36.232282', 112.00, 2, 0, '(067)1234-45-67', '(050)1234-45-67', '(093)1234-45-67'),
  (12, '1012', '2-комнатная возле м. Университет', '2----_2', 6, 1, 120.00, 'ул. Сумская, 15', 0, 0, '', 0, 2, 65, 0, 0, 0.00, 0.00, 0.00, 1, 0, 0, 0, '1899-12-30', 0, '-3-', '<p><span style="color: #434243; font-family: ''Droid Sans'', Tahoma, Geneva, sans-serif; line-height: normal; background-color: #e2f1ff;">10 мин ходьбы до м. "Университет",во дворе магазин, 5 мин ходьбы до набережной на пляж, кафе и сауны, удобная развязка. </span><br style="margin: 0px; padding: 0px; border: none; color: #434243; font-family: ''Droid Sans'', Tahoma, Geneva, sans-serif; line-height: normal; background-color: #e2f1ff;" /><span style="color: #434243; font-family: ''Droid Sans'', Tahoma, Geneva, sans-serif; line-height: normal; background-color: #e2f1ff;">Двухкомнатная, уютная, чистая квартира от хозяйки. Вся бытовая техника, постельные и банные принадлежности, командировочным документы, есть другие варианты! </span><br style="margin: 0px; padding: 0px; border: none; color: #434243; font-family: ''Droid Sans'', Tahoma, Geneva, sans-serif; line-height: normal; background-color: #e2f1ff;" /><span style="color: #434243; font-family: ''Droid Sans'', Tahoma, Geneva, sans-serif; line-height: normal; background-color: #e2f1ff;">Возможно ПОЧАСОВАЯ  аренда цена от 100 грн. </span><br style="margin: 0px; padding: 0px; border: none; color: #434243; font-family: ''Droid Sans'', Tahoma, Geneva, sans-serif; line-height: normal; background-color: #e2f1ff;" /><span style="color: #434243; font-family: ''Droid Sans'', Tahoma, Geneva, sans-serif; line-height: normal; background-color: #e2f1ff;">Круглосуточное заселение! Бронирование. </span><br style="margin: 0px; padding: 0px; border: none; color: #434243; font-family: ''Droid Sans'', Tahoma, Geneva, sans-serif; line-height: normal; background-color: #e2f1ff;" /><span style="color: #434243; font-family: ''Droid Sans'', Tahoma, Geneva, sans-serif; line-height: normal; background-color: #e2f1ff;">Добро пожаловать, всегда рады!</span></p>', 0, 1, 10, 0, '2012-06-08 16:49:28', 0, '1899-12-30 00:00:00', 64, 28, '49.996515', '36.232853', 122.00, 2, 0, '(067)1234-45-67', '(050)1234-45-67', '(093)1234-45-67'),
  (13, '1013', '2-комнатная ул. Ленина', '2---_2', 6, 1, 65.00, 'ул. Ленина 20', 0, 0, '', 0, 1, 0, 0, 0, 0.00, 0.00, 0.00, 1, 0, 0, 0, '1899-12-30', 0, '-3-', '<p><span style="color: #434243; font-family: Tahoma, sans-serif; line-height: normal; background-color: #fffaf0;">Квартира возле м. Научная. Рядом рынок, Институт Неврологии, Дет. Педиатрич. Больница, институт ПАГ. Вся бытовая техника, кондиционер, ТВ. Постоянным клиентам скидки</span></p>', 4, 1, 11, 0, '2012-06-08 17:05:51', 0, '1899-12-30 00:00:00', 64, 26, '50.012714', '36.232144', 67.00, 2, 0, '(067)1234-45-67', '(050)1234-45-67', '(093)1234-45-67'),
  (14, '1015', '2-комнатная пр. Победы', '2---', 6, 1, 60.00, 'Пр. Победы 40', 0, 0, '', 0, 2, 0, 0, 0, 0.00, 0.00, 0.00, 0, 1, 0, 0, '1899-12-30', 0, '', '<p><span style="color: #434243; font-family: Tahoma, sans-serif; line-height: normal; background-color: #fffaf0;">Уютная двухкомнатная мансарда, расположена в 2-х минутах ходьбы от ст.м. Интернациональная.В квартире, большая гостиная, спальная с двуспальным диваном, санузел совмещен. Кухня полностью укомплектована бытовой техникой и столовыми приборами. Постельные и банные принадлежности прилагаются. Приятного время проведения в Харькове!!!!</span></p>', 0, 1, 12, 0, '2012-06-08 17:14:49', 0, '1899-12-30 00:00:00', 64, 16, '50.04997', '36.192241', 62.00, 2, 0, '(067)1234-45-67', '(050)1234-45-67', '(093)1234-45-67'),
  (15, '1021', '', '', 3, 1, 0.00, 'Харьков, ул. Ленина 6', 4, 0, '', 0, 0, 0, 0, 0, 0.00, 0.00, 0.00, 0, 0, 0, 0, '0000-00-00', 0, '', '', 0, 0, 6, 0, '2012-07-28 03:05:46', 62, '2012-08-07 11:57:33', 62, 0, '0', '0', 0.00, NULL, 0, '(067)1234-45-67', '(050)1234-45-67', '(093)1234-45-67'),
  (16, '1022', '', '_2', 6, 1, 0.00, 'пр. Героев Сталинграда 10', 4, 0, '', 0, 0, 0, 0, 0, 0.00, 0.00, 0.00, 0, 0, 0, 0, '0000-00-00', 0, '', '', 0, 1, 7, 0, '2012-07-28 03:06:55', 0, '0000-00-00 00:00:00', 62, 0, '0', '0', 0.00, NULL, 0, '(067)1234-45-67', '(050)1234-45-67', '(093)1234-45-67');

-- 
-- Вывод данных для таблицы g1525_jea_slogans
--
INSERT INTO g1525_jea_slogans VALUES 
  (1, 'В центре возле Хрещатика', 1),
  (2, 'Недалеко от центра (Хрещатика)', 2),
  (3, 'Возле станции метро', 3),
  (4, 'В исторической части Киева (на Подоле)', 4);

-- 
-- Вывод данных для таблицы g1525_jea_towns
--
INSERT INTO g1525_jea_towns VALUES 
  (1, 'Киев', 0, 1),
  (2, 'Львов', 0, 2),
  (3, 'Донецк', 0, 3),
  (4, 'Харьков', 0, 4);

-- 
-- Вывод данных для таблицы g1525_jea_types
--
INSERT INTO g1525_jea_types VALUES 
  (2, 'Дом', 1),
  (3, '1-комн квартира', 2),
  (4, 'Хостес', 6),
  (5, 'Гостница', 7),
  (6, '2-комн квартира', 3),
  (7, '3-комн квартира', 4),
  (8, '4-комн квартира', 5);

-- 
-- Вывод данных для таблицы g1525_menu
--
INSERT INTO g1525_menu VALUES 
  (1, 'mainmenu', 'Home', 'home', 'index.php?option=com_content&view=frontpage', 'component', -2, 0, 20, 0, 4, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, 'show_page_title=1\npage_title=Welcome to the Frontpage\nshow_description=0\nshow_description_image=0\nnum_leading_articles=1\nnum_intro_articles=4\nnum_columns=2\nnum_links=4\nshow_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\norderby_pri=\norderby_sec=front\nshow_pagination=2\nshow_pagination_results=1\nshow_noauth=0\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\n\n', 0, 0, 0),
  (2, 'mainmenu', 'Joomla! License', 'joomla-license', 'index.php?option=com_content&view=article&id=5', 'component', -2, 0, 20, 0, 12, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'pageclass_sfx=\nmenu_image=-1\nsecure=0\nshow_noauth=0\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\n\n', 0, 0, 0),
  (20, 'agentmenu', 'Ваши данные', 'your-details', 'index.php?option=com_user&view=user&task=edit', 'component', 1, 0, 14, 0, 3, 0, '0000-00-00 00:00:00', 0, 0, 1, 3, 'welcome_desc=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
  (24, 'agentmenu', 'Выйти', 'logout', 'index.php?option=com_user&view=login', 'component', 1, 0, 14, 0, 6, 0, '0000-00-00 00:00:00', 0, 0, 1, 3, 'show_login_title=1\nheader_login=\nlogin=\nlogin_message=0\ndescription_login=0\ndescription_login_text=\nimage_login=\nimage_login_align=right\nshow_logout_title=1\nheader_logout=\nlogout=\nlogout_message=1\ndescription_logout=1\ndescription_logout_text=\nimage_logout=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
  (27, 'mainmenu', 'Joomla! Overview', 'joomla-overview', 'index.php?option=com_content&view=article&id=19', 'component', -2, 0, 20, 0, 10, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'pageclass_sfx=\nmenu_image=-1\nsecure=0\nshow_noauth=0\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\n\n', 0, 0, 0),
  (34, 'mainmenu', 'What''s New in 1.5?', 'what-is-new-in-1-5', 'index.php?option=com_content&view=article&id=22', 'component', -2, 0, 20, 1, 9, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'pageclass_sfx=\nmenu_image=-1\nsecure=0\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\n\n', 0, 0, 0),
  (37, 'mainmenu', 'More about Joomla!', 'more-about-joomla', 'index.php?option=com_content&view=section&id=4', 'component', -2, 0, 20, 0, 8, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_page_title=1\nshow_description=0\nshow_description_image=0\nshow_categories=1\nshow_empty_categories=0\nshow_cat_num_articles=1\nshow_category_description=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\norderby=\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1', 0, 0, 0),
  (41, 'mainmenu', 'FAQ', 'faq', 'index.php?option=com_content&view=section&id=3', 'component', -2, 0, 20, 0, 11, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_page_title=1\nshow_description=0\nshow_description_image=0\nshow_categories=1\nshow_empty_categories=0\nshow_cat_num_articles=1\nshow_category_description=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\norderby=\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1', 0, 0, 0),
  (48, 'mainmenu', 'Web Links', 'web-links', 'index.php?option=com_weblinks&view=categories', 'component', -2, 0, 4, 0, 7, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'page_title=Weblinks\nimage=-1\nimage_align=right\npageclass_sfx=\nmenu_image=-1\nsecure=0\nshow_comp_description=1\ncomp_description=\nshow_link_hits=1\nshow_link_description=1\nshow_other_cats=1\nshow_headings=1\nshow_page_title=1\nlink_target=0\nlink_icons=\n\n', 0, 0, 0),
  (49, 'mainmenu', 'News Feeds', 'news-feeds', 'index.php?option=com_newsfeeds&view=categories', 'component', -2, 0, 11, 0, 6, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_page_title=1\npage_title=Newsfeeds\nshow_comp_description=1\ncomp_description=\nimage=-1\nimage_align=right\npageclass_sfx=\nmenu_image=-1\nsecure=0\nshow_headings=1\nshow_name=1\nshow_articles=1\nshow_link=1\nshow_other_cats=1\nshow_cat_description=1\nshow_cat_items=1\nshow_feed_image=1\nshow_feed_description=1\nshow_item_description=1\nfeed_word_count=0\n\n', 0, 0, 0),
  (50, 'mainmenu', 'The News', 'the-news', 'index.php?option=com_content&view=category&layout=blog&id=1', 'component', -2, 0, 20, 0, 5, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_page_title=1\npage_title=The News\nshow_description=0\nshow_description_image=0\nnum_leading_articles=1\nnum_intro_articles=4\nnum_columns=2\nnum_links=4\nshow_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\norderby_pri=\norderby_sec=\nshow_pagination=2\nshow_pagination_results=1\nshow_noauth=0\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\n\n', 0, 0, 0),
  (51, 'agentmenu', 'Опубликовать объект', 'submit-an-object', 'index.php?option=com_content&view=article&layout=form', 'component', -2, 0, 20, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 2, 0, 'show_noauth=\nshow_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_item_navigation=\nshow_readmore=\nshow_vote=\nshow_icons=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nshow_hits=\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
  (52, 'agentmenu', 'Submit a Web Link', 'submit-a-web-link', 'index.php?option=com_weblinks&view=weblink&layout=form', 'component', -2, 0, 4, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 2, 0, '', 0, 0, 0),
  (53, 'mainmenu', 'Главная', 'main', 'index.php?option=com_jea&view=properties', 'component', 1, 0, 49, 0, 13, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'cat=renting\ntype_id=0\ndepartment_id=0\ntown_id=0\narea_id=0\nshow_creation_date=0\nshow_feed_link=1\norderby=\norderby_direction=\nsort_date=\nsort_price=\nsort_livingspace=\nsort_landspace=\nsort_hits=\nlist_limit=10\npage_title=\nshow_page_title=0\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 1),
  (54, 'mainmenu', 'Sell', 'sell', 'index.php?option=com_jea&view=properties', 'component', -2, 0, 49, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'cat=selling\ntype_id=0\ndepartment_id=0\ntown_id=0\narea_id=0\nshow_creation_date=0\nshow_feed_link=1\norderby=\norderby_direction=\nsort_date=\nsort_price=\nsort_livingspace=\nsort_landspace=\nsort_hits=\nlist_limit=10\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
  (55, 'mainmenu', 'Поиск', 'search', 'index.php?option=com_jea&view=properties&layout=search', 'component', 1, 0, 49, 0, 15, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'advanced_search=1\nuse_ajax=1\ncategory=0\nshow_types=1\nshow_departments=1\nshow_towns=1\norderby=\norderby_direction=\nsort_date=\nsort_price=\nsort_livingspace=\nsort_landspace=\nsort_hits=\nlist_limit=10\npage_title=\nshow_page_title=0\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
  (56, 'agentmenu', 'Добавить предложение', '2012-05-07-14-29-31', 'index.php?option=com_jea&view=manage&layout=form', 'component', 1, 0, 49, 0, 4, 0, '0000-00-00 00:00:00', 0, 0, 1, 0, 'orderby=\norderby_direction=\nsort_date=\nsort_price=\nsort_livingspace=\nsort_landspace=\nsort_hits=\nlist_limit=10\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
  (57, 'agentmenu', 'Редактирование', '2012-05-07-14-30-29', 'index.php?option=com_jea&view=manage', 'component', 1, 0, 49, 0, 5, 0, '0000-00-00 00:00:00', 0, 0, 2, 0, 'cat=renting\norderby=\norderby_direction=\nsort_date=\nsort_price=\nsort_livingspace=\nsort_landspace=\nsort_hits=\nlist_limit=10\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
  (58, 'mainmenu', 'Main', 'main', 'index.php?option=com_jea&view=properties', 'component', -2, 0, 49, 0, 3, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'cat=renting\ntype_id=0\ndepartment_id=0\ntown_id=0\narea_id=0\nshow_creation_date=0\nshow_feed_link=0\norderby=\norderby_direction=\nsort_date=\nsort_price=\nsort_livingspace=\nsort_landspace=\nsort_hits=\nlist_limit=10\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
  (59, 'mainmenu', 'Гостиницы и отели Украины', 'inns-a-hotels', 'index.php?option=com_content&view=frontpage', 'component', 1, 0, 20, 0, 14, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'num_leading_articles=1\nnum_intro_articles=4\nnum_columns=2\nnum_links=4\norderby_pri=\norderby_sec=front\nmulti_column_order=1\nshow_pagination=2\nshow_pagination_results=1\nshow_feed_link=1\nshow_noauth=\nshow_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_item_navigation=\nshow_readmore=\nshow_vote=\nshow_icons=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nshow_hits=\nfeed_summary=\npage_title=\nshow_page_title=0\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
  (60, 'mainmenu', 'Для агентов', 'for-agents', 'index.php?option=com_user&view=login', 'component', 1, 0, 14, 0, 16, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_login_title=0\nheader_login=\nlogin=\nlogin_message=0\ndescription_login=0\ndescription_login_text=\nimage_login=\nimage_login_align=right\nshow_logout_title=1\nheader_logout=\nlogout=\nlogout_message=1\ndescription_logout=1\ndescription_logout_text=\nimage_logout=\npage_title=\nshow_page_title=0\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
  (61, 'mainmenu', 'test', 'test', 'index.php?option=com_content&view=article&id=46', 'component', -2, 0, 20, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_noauth=\nshow_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_item_navigation=\nshow_readmore=\nshow_vote=\nshow_icons=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nshow_hits=\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
  (62, 'FrontEndUserMenu', 'Напоминание пароля', '2012-06-07-13-09-11', 'index.php?option=com_user&view=remind', 'component', 1, 0, 14, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 1, 0, 'page_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
  (63, 'FrontEndUserMenu', 'Сброс по умолчанию', '2012-06-07-13-09-48', 'index.php?option=com_user&view=reset', 'component', 1, 0, 14, 0, 2, 62, '2012-06-07 13:12:07', 0, 0, 1, 0, 'page_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
  (64, 'FrontEndUserMenu', 'Разметка по умолчанию для пользователя', '2012-06-07-13-13-25', 'index.php?option=com_user&view=user', 'component', 1, 0, 14, 0, 3, 62, '2012-06-07 13:13:48', 0, 0, 1, 0, 'welcome_desc=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0);

-- 
-- Вывод данных для таблицы g1525_menu_types
--
INSERT INTO g1525_menu_types VALUES 
  (1, 'mainmenu', 'Main Menu', 'The main menu for the site'),
  (2, 'agentmenu', 'Меню агента', 'A Menu for logged in Users'),
  (7, 'FrontEndUserMenu', 'Меню регистрации объявлений', 'Меню регистрации объявлений');

-- 
-- Вывод данных для таблицы g1525_messages
--
-- Таблица g1525.g1525_messages не содержит данных

-- 
-- Вывод данных для таблицы g1525_messages_cfg
--
INSERT INTO g1525_messages_cfg VALUES 
  (62, 'auto_purge', '7'),
  (62, 'lock', '0'),
  (62, 'mail_on_new', '1');

-- 
-- Вывод данных для таблицы g1525_migration_backlinks
--
-- Таблица g1525.g1525_migration_backlinks не содержит данных

-- 
-- Вывод данных для таблицы g1525_modules
--
INSERT INTO g1525_modules VALUES 
  (1, 'Главное меню', '', 0, 'user4', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 1, 'menutype=mainmenu\nmenu_style=list\nstartLevel=0\nendLevel=0\nshowAllChildren=0\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=\nmoduleclass_sfx=_menu\nmaxdepth=10\nmenu_images=0\nmenu_images_align=0\nmenu_images_link=0\nexpand_menu=0\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=\n\n', 1, 0, ''),
  (2, 'Login', '', 1, 'login', 0, '0000-00-00 00:00:00', 1, 'mod_login', 0, 0, 1, '', 1, 1, ''),
  (3, 'Popular', '', 3, 'cpanel', 0, '0000-00-00 00:00:00', 1, 'mod_popular', 0, 2, 1, '', 0, 1, ''),
  (4, 'Recent added Articles', '', 4, 'cpanel', 0, '0000-00-00 00:00:00', 1, 'mod_latest', 0, 2, 1, 'ordering=c_dsc\nuser_id=0\ncache=0\n\n', 0, 1, ''),
  (5, 'Menu Stats', '', 5, 'cpanel', 0, '0000-00-00 00:00:00', 1, 'mod_stats', 0, 2, 1, '', 0, 1, ''),
  (6, 'Unread Messages', '', 1, 'header', 0, '0000-00-00 00:00:00', 1, 'mod_unread', 0, 2, 1, '', 1, 1, ''),
  (7, 'Online Users', '', 2, 'header', 0, '0000-00-00 00:00:00', 1, 'mod_online', 0, 2, 1, '', 1, 1, ''),
  (8, 'Toolbar', '', 1, 'toolbar', 0, '0000-00-00 00:00:00', 1, 'mod_toolbar', 0, 2, 1, '', 1, 1, ''),
  (9, 'Quick Icons', '', 1, 'icon', 0, '0000-00-00 00:00:00', 1, 'mod_quickicon', 0, 2, 1, '', 1, 1, ''),
  (10, 'Logged in Users', '', 2, 'cpanel', 0, '0000-00-00 00:00:00', 1, 'mod_logged', 0, 2, 1, '', 0, 1, ''),
  (11, 'Footer', '', 0, 'footer', 0, '0000-00-00 00:00:00', 1, 'mod_footer', 0, 0, 1, '', 1, 1, ''),
  (12, 'Admin Menu', '', 1, 'menu', 0, '0000-00-00 00:00:00', 1, 'mod_menu', 0, 2, 1, '', 0, 1, ''),
  (13, 'Admin SubMenu', '', 1, 'submenu', 0, '0000-00-00 00:00:00', 1, 'mod_submenu', 0, 2, 1, '', 0, 1, ''),
  (14, 'User Status', '', 1, 'status', 0, '0000-00-00 00:00:00', 1, 'mod_status', 0, 2, 1, '', 0, 1, ''),
  (15, 'Title', '', 1, 'title', 0, '0000-00-00 00:00:00', 1, 'mod_title', 0, 2, 1, '', 0, 1, ''),
  (30, 'Banners', '', 1, 'footer', 0, '0000-00-00 00:00:00', 0, 'mod_banners', 0, 0, 0, 'target=1\ncount=1\ncid=1\ncatid=33\ntag_search=0\nordering=random\nheader_text=\nfooter_text=\nmoduleclass_sfx=\ncache=1\ncache_time=15\n\n', 1, 0, ''),
  (33, 'Footer', '', 2, 'footer', 0, '0000-00-00 00:00:00', 1, 'mod_footer', 0, 0, 0, 'cache=1\n\n', 1, 0, ''),
  (35, 'Breadcrumbs', '', 1, 'breadcrumb', 0, '0000-00-00 00:00:00', 1, 'mod_breadcrumbs', 0, 0, 1, 'moduleclass_sfx=\ncache=0\nshowHome=1\nhomeText=Home\nshowComponent=1\nseparator=\n\n', 1, 0, ''),
  (41, 'Welcome to Joomla!', '<div style="padding: 5px">  <p>   Congratulations on choosing Joomla! as your content management system. To   help you get started, check out these excellent resources for securing your   server and pointers to documentation and other helpful resources. </p> <p>   <strong>Security</strong><br /> </p> <p>   On the Internet, security is always a concern. For that reason, you are   encouraged to subscribe to the   <a href="http://feedburner.google.com/fb/a/mailverify?uri=JoomlaSecurityNews" target="_blank">Joomla!   Security Announcements</a> for the latest information on new Joomla! releases,   emailed to you automatically. </p> <p>   If this is one of your first Web sites, security considerations may   seem complicated and intimidating. There are three simple steps that go a long   way towards securing a Web site: (1) regular backups; (2) prompt updates to the   <a href="http://www.joomla.org/download.html" target="_blank">latest Joomla! release;</a> and (3) a <a href="http://docs.joomla.org/Security_Checklist_2_-_Hosting_and_Server_Setup" target="_blank" title="good Web host">good Web host</a>. There are many other important security considerations that you can learn about by reading the <a href="http://docs.joomla.org/Category:Security_Checklist" target="_blank" title="Joomla! Security Checklist">Joomla! Security Checklist</a>. </p> <p>If you believe your Web site was attacked, or you think you have discovered a security issue in Joomla!, please do not post it in the Joomla! forums. Publishing this information could put other Web sites at risk. Instead, report possible security vulnerabilities to the <a href="http://developer.joomla.org/security/contact-the-team.html" target="_blank" title="Joomla! Security Task Force">Joomla! Security Task Force</a>.</p><p><strong>Learning Joomla!</strong> </p> <p>   A good place to start learning Joomla! is the   "<a href="http://docs.joomla.org/beginners" target="_blank">Absolute Beginner''s   Guide to Joomla!.</a>" There, you will find a Quick Start to Joomla!   <a href="http://help.joomla.org/ghop/feb2008/task048/joomla_15_quickstart.pdf" target="_blank">guide</a>   and <a href="http://help.joomla.org/ghop/feb2008/task167/index.html" target="_blank">video</a>,   amongst many other tutorials. The   <a href="http://community.joomla.org/magazine/view-all-issues.html" target="_blank">Joomla!   Community Magazine</a> also has   <a href="http://community.joomla.org/magazine/article/522-introductory-learning-joomla-using-sample-data.html" target="_blank">articles   for new learners</a> and experienced users, alike. A great place to look for   answers is the   <a href="http://docs.joomla.org/Category:FAQ" target="_blank">Frequently Asked   Questions (FAQ)</a>. If you are stuck on a particular screen in the   Administrator (which is where you are now), try clicking the Help toolbar   button to get assistance specific to that page. </p> <p>   If you still have questions, please feel free to use the   <a href="http://forum.joomla.org/" target="_blank">Joomla! Forums.</a> The forums   are an incredibly valuable resource for all levels of Joomla! users. Before   you post a question, though, use the forum search (located at the top of each   forum page) to see if the question has been asked and answered. </p> <p>   <strong>Getting Involved</strong> </p> <p>   <a name="twjs" title="twjs"></a> If you want to help make Joomla! better, consider getting   involved. There are   <a href="http://www.joomla.org/about-joomla/contribute-to-joomla.html" target="_blank">many ways   you can make a positive difference.</a> Have fun using Joomla!.</p></div>', 0, 'cpanel', 0, '0000-00-00 00:00:00', 1, 'mod_custom', 0, 2, 1, 'moduleclass_sfx=\n\n', 1, 1, ''),
  (42, 'Joomla! Security Newsfeed', '', 6, 'cpanel', 62, '2008-10-25 20:15:17', 1, 'mod_feed', 0, 0, 1, 'cache=1\ncache_time=15\nmoduleclass_sfx=\nrssurl=http://feeds.joomla.org/JoomlaSecurityNews\nrssrtl=0\nrsstitle=1\nrssdesc=0\nrssimage=1\nrssitems=1\nrssitemdesc=1\nword_count=0\n\n', 0, 1, ''),
  (43, 'Специальное предложение', '', 5, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_jea_emphasis', 0, 0, 1, 'selection=emphasis\ndisplay_thumbnails=1\ndisplay_details=1\norder_by=ordering\nnumber_to_display=5\nsales_itemid=\nrentals_itemid=\nmoduleclass_sfx=\n\n', 0, 0, ''),
  (44, 'Search ', '', 3, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_jea_search', 0, 0, 1, 'use_ajax=1\ncategory=2\nshow_types=1\nshow_departments=1\nshow_towns=1\nsales_itemid=\nrentals_itemid=\nmoduleclass_sfx=\n\n', 0, 0, ''),
  (45, 'Меню агента', '', 4, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 1, 1, 'menutype=agentmenu\nmenu_style=list\nstartLevel=0\nendLevel=0\nshowAllChildren=1\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=\nmoduleclass_sfx=\nmaxdepth=10\nmenu_images=0\nmenu_images_align=0\nmenu_images_link=0\nexpand_menu=0\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=\n\n', 0, 0, ''),
  (46, 'Регистрация', '', 1, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_login', 0, 0, 1, 'cache=0\nmoduleclass_sfx=\npretext=\nposttext=\nlogin=\nlogout=\ngreeting=1\nname=0\nusesecure=0\n\n', 0, 0, ''),
  (47, 'Меню_Регистрации_Объявлений', '', 2, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_mainmenu', 0, 0, 1, 'menutype=FrontEndUserMenu', 0, 0, '');

-- 
-- Вывод данных для таблицы g1525_modules_menu
--
INSERT INTO g1525_modules_menu VALUES 
  (1, 0),
  (29, 0),
  (30, 0),
  (31, 1),
  (33, 0),
  (35, 0),
  (39, 43),
  (39, 44),
  (39, 45),
  (39, 46),
  (39, 47),
  (40, 0),
  (43, 53),
  (44, 0),
  (45, 0),
  (46, 53),
  (47, 0);

-- 
-- Вывод данных для таблицы g1525_newsfeeds
--
INSERT INTO g1525_newsfeeds VALUES 
  (4, 1, 'Joomla! Announcements', 'joomla-official-news', 'http://feeds.joomla.org/JoomlaAnnouncements', '', 1, 5, 3600, 0, '0000-00-00 00:00:00', 1, 0),
  (4, 2, 'Joomla! Core Team Blog', 'joomla-core-team-blog', 'http://feeds.joomla.org/JoomlaCommunityCoreTeamBlog', '', 1, 5, 3600, 0, '0000-00-00 00:00:00', 2, 0),
  (4, 3, 'Joomla! Community Magazine', 'joomla-community-magazine', 'http://feeds.joomla.org/JoomlaMagazine', '', 1, 20, 3600, 0, '0000-00-00 00:00:00', 3, 0),
  (4, 4, 'Joomla! Developer News', 'joomla-developer-news', 'http://feeds.joomla.org/JoomlaDeveloper', '', 1, 5, 3600, 0, '0000-00-00 00:00:00', 4, 0),
  (4, 5, 'Joomla! Security News', 'joomla-security-news', 'http://feeds.joomla.org/JoomlaSecurityNews', '', 1, 5, 3600, 0, '0000-00-00 00:00:00', 5, 0),
  (5, 6, 'Free Software Foundation Blogs', 'free-software-foundation-blogs', 'http://www.fsf.org/blogs/RSS', NULL, 1, 5, 3600, 0, '0000-00-00 00:00:00', 4, 0),
  (5, 7, 'Free Software Foundation', 'free-software-foundation', 'http://www.fsf.org/news/RSS', NULL, 1, 5, 3600, 62, '2008-09-14 00:24:25', 3, 0),
  (5, 8, 'Software Freedom Law Center Blog', 'software-freedom-law-center-blog', 'http://www.softwarefreedom.org/feeds/blog/', NULL, 1, 5, 3600, 0, '0000-00-00 00:00:00', 2, 0),
  (5, 9, 'Software Freedom Law Center News', 'software-freedom-law-center', 'http://www.softwarefreedom.org/feeds/news/', NULL, 1, 5, 3600, 0, '0000-00-00 00:00:00', 1, 0),
  (5, 10, 'Open Source Initiative Blog', 'open-source-initiative-blog', 'http://www.opensource.org/blog/feed', NULL, 1, 5, 3600, 0, '0000-00-00 00:00:00', 5, 0),
  (6, 11, 'PHP News and Announcements', 'php-news-and-announcements', 'http://www.php.net/feed.atom', NULL, 1, 5, 3600, 62, '2008-09-14 00:25:37', 1, 0),
  (6, 12, 'Planet MySQL', 'planet-mysql', 'http://www.planetmysql.org/rss20.xml', NULL, 1, 5, 3600, 62, '2008-09-14 00:25:51', 2, 0),
  (6, 13, 'Linux Foundation Announcements', 'linux-foundation-announcements', 'http://www.linuxfoundation.org/press/rss20.xml', NULL, 1, 5, 3600, 62, '2008-09-14 00:26:11', 3, 0),
  (6, 14, 'Mootools Blog', 'mootools-blog', 'http://feeds.feedburner.com/mootools-blog', NULL, 1, 5, 3600, 62, '2008-09-14 00:26:51', 4, 0);

-- 
-- Вывод данных для таблицы g1525_plugins
--
INSERT INTO g1525_plugins VALUES 
  (1, 'Authentication - Joomla', 'joomla', 'authentication', 0, 1, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
  (2, 'Authentication - LDAP', 'ldap', 'authentication', 0, 2, 0, 1, 0, 0, '0000-00-00 00:00:00', 'host=\nport=389\nuse_ldapV3=0\nnegotiate_tls=0\nno_referrals=0\nauth_method=bind\nbase_dn=\nsearch_string=\nusers_dn=\nusername=\npassword=\nldap_fullname=fullName\nldap_email=mail\nldap_uid=uid\n\n'),
  (3, 'Authentication - GMail', 'gmail', 'authentication', 0, 4, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
  (4, 'Authentication - OpenID', 'openid', 'authentication', 0, 3, 0, 0, 0, 0, '0000-00-00 00:00:00', ''),
  (5, 'User - Joomla!', 'joomla', 'user', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', 'autoregister=1\n\n'),
  (6, 'Search - Content', 'content', 'search', 0, 1, 1, 1, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\nsearch_content=1\nsearch_uncategorised=1\nsearch_archived=1\n\n'),
  (7, 'Search - Contacts', 'contacts', 'search', 0, 3, 1, 1, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\n\n'),
  (8, 'Search - Categories', 'categories', 'search', 0, 4, 1, 0, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\n\n'),
  (9, 'Search - Sections', 'sections', 'search', 0, 5, 1, 0, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\n\n'),
  (10, 'Search - Newsfeeds', 'newsfeeds', 'search', 0, 6, 1, 0, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\n\n'),
  (11, 'Search - Weblinks', 'weblinks', 'search', 0, 2, 1, 1, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\n\n'),
  (12, 'Content - Pagebreak', 'pagebreak', 'content', 0, 10000, 1, 1, 0, 0, '0000-00-00 00:00:00', 'enabled=1\ntitle=1\nmultipage_toc=1\nshowall=1\n\n'),
  (13, 'Content - Rating', 'vote', 'content', 0, 4, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
  (14, 'Content - Email Cloaking', 'emailcloak', 'content', 0, 5, 1, 0, 0, 0, '0000-00-00 00:00:00', 'mode=1\n\n'),
  (15, 'Content - Code Hightlighter (GeSHi)', 'geshi', 'content', 0, 5, 0, 0, 0, 0, '0000-00-00 00:00:00', ''),
  (16, 'Content - Load Module', 'loadmodule', 'content', 0, 6, 1, 0, 0, 0, '0000-00-00 00:00:00', 'enabled=1\nstyle=0\n\n'),
  (17, 'Content - Page Navigation', 'pagenavigation', 'content', 0, 2, 1, 1, 0, 0, '0000-00-00 00:00:00', 'position=1\n\n'),
  (18, 'Editor - No Editor', 'none', 'editors', 0, 0, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
  (19, 'Editor - TinyMCE', 'tinymce', 'editors', 0, 0, 1, 1, 0, 0, '0000-00-00 00:00:00', 'mode=advanced\nskin=0\ncompressed=0\ncleanup_startup=0\ncleanup_save=2\nentity_encoding=raw\nlang_mode=0\nlang_code=en\ntext_direction=ltr\ncontent_css=1\ncontent_css_custom=\nrelative_urls=1\nnewlines=0\ninvalid_elements=applet\nextended_elements=\ntoolbar=top\ntoolbar_align=left\nhtml_height=550\nhtml_width=750\nelement_path=1\nfonts=1\npaste=1\nsearchreplace=1\ninsertdate=1\nformat_date=%Y-%m-%d\ninserttime=1\nformat_time=%H:%M:%S\ncolors=1\ntable=1\nsmilies=1\nmedia=1\nhr=1\ndirectionality=1\nfullscreen=1\nstyle=1\nlayer=1\nxhtmlxtras=1\nvisualchars=1\nnonbreaking=1\ntemplate=0\nadvimage=1\nadvlink=1\nautosave=1\ncontextmenu=1\ninlinepopups=1\nsafari=1\ncustom_plugin=\ncustom_button=\n\n'),
  (20, 'Editor - XStandard Lite 2.0', 'xstandard', 'editors', 0, 0, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
  (21, 'Editor Button - Image', 'image', 'editors-xtd', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
  (22, 'Editor Button - Pagebreak', 'pagebreak', 'editors-xtd', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
  (23, 'Editor Button - Readmore', 'readmore', 'editors-xtd', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
  (24, 'XML-RPC - Joomla', 'joomla', 'xmlrpc', 0, 7, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
  (25, 'XML-RPC - Blogger API', 'blogger', 'xmlrpc', 0, 7, 0, 1, 0, 0, '0000-00-00 00:00:00', 'catid=1\nsectionid=0\n\n'),
  (27, 'System - SEF', 'sef', 'system', 0, 1, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
  (28, 'System - Debug', 'debug', 'system', 0, 2, 1, 0, 0, 0, '0000-00-00 00:00:00', 'queries=1\nmemory=1\nlangauge=1\n\n'),
  (29, 'System - Legacy', 'legacy', 'system', 0, 3, 1, 1, 0, 0, '0000-00-00 00:00:00', 'route=0\n\n'),
  (30, 'System - Cache', 'cache', 'system', 0, 4, 0, 1, 0, 0, '0000-00-00 00:00:00', 'browsercache=0\ncachetime=15\n\n'),
  (31, 'System - Log', 'log', 'system', 0, 5, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
  (32, 'System - Remember Me', 'remember', 'system', 0, 6, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
  (33, 'System - Backlink', 'backlink', 'system', 0, 7, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
  (34, 'System - Mootools Upgrade', 'mtupgrade', 'system', 0, 8, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
  (35, 'JEA - DPE', 'dpe', 'jea', 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', ''),
  (36, 'Search - Jea', 'jea', 'search', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\nsearch_ref=1\nsearch_title=1\n'),
  (37, 'System - TinCaptcha', 'tincaptcha', 'system', 0, 0, 1, 0, 0, 62, '2012-07-24 18:22:37', 'length=4\nsize=20\ntxtcolor=black\nbgcolor=white\n\n'),
  (41, 'System - Sourcerer', 'sourcerer', 'system', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
  (42, 'Editor Button - Sourcerer', 'sourcerer', 'editors-xtd', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
  (43, 'System - NoNumber Elements', 'nonumberelements', 'system', 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', ''),
  (44, 'System - NoNumber Framework', 'nnframework', 'system', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', '');

-- 
-- Вывод данных для таблицы g1525_poll_data
--
INSERT INTO g1525_poll_data VALUES 
  (1, 14, 'Community Sites', 2),
  (2, 14, 'Public Brand Sites', 3),
  (3, 14, 'eCommerce', 1),
  (4, 14, 'Blogs', 0),
  (5, 14, 'Intranets', 0),
  (6, 14, 'Photo and Media Sites', 2),
  (7, 14, 'All of the Above!', 3),
  (8, 14, '', 0),
  (9, 14, '', 0),
  (10, 14, '', 0),
  (11, 14, '', 0),
  (12, 14, '', 0);

-- 
-- Вывод данных для таблицы g1525_poll_date
--
INSERT INTO g1525_poll_date VALUES 
  (1, '2006-10-09 13:01:58', 1, 14),
  (2, '2006-10-10 15:19:43', 7, 14),
  (3, '2006-10-11 11:08:16', 7, 14),
  (4, '2006-10-11 15:02:26', 2, 14),
  (5, '2006-10-11 15:43:03', 7, 14),
  (6, '2006-10-11 15:43:38', 7, 14),
  (7, '2006-10-12 00:51:13', 2, 14),
  (8, '2007-05-10 19:12:29', 3, 14),
  (9, '2007-05-14 14:18:00', 6, 14),
  (10, '2007-06-10 15:20:29', 6, 14),
  (11, '2007-07-03 12:37:53', 2, 14);

-- 
-- Вывод данных для таблицы g1525_poll_menu
--
-- Таблица g1525.g1525_poll_menu не содержит данных

-- 
-- Вывод данных для таблицы g1525_polls
--
INSERT INTO g1525_polls VALUES 
  (14, 'Joomla! is used for?', 'joomla-is-used-for', 11, 0, '0000-00-00 00:00:00', 1, 0, 86400);

-- 
-- Вывод данных для таблицы g1525_sections
--
INSERT INTO g1525_sections VALUES 
  (1, 'News', '', 'news', 'articles.jpg', 'content', 'right', '<p>Select a news topic from the list below, then select a news article to read.</p>', 0, 0, '0000-00-00 00:00:00', 3, 2, 4, ''),
  (3, 'FAQs', '', 'faqs', 'key.jpg', 'content', 'left', 'From the list below choose one of our FAQs topics, then select an FAQ to read. If you have a question which is not in this section, please contact us.', 0, 0, '0000-00-00 00:00:00', 5, 0, 23, ''),
  (4, 'About Joomla!', '', 'about-joomla', '', 'content', 'left', '', 0, 0, '0000-00-00 00:00:00', 2, 0, 14, '');

-- 
-- Вывод данных для таблицы g1525_session
--
INSERT INTO g1525_session VALUES 
  ('', '1345222728', '1066fa37aa0d75b936071dfee2aa4825', 1, 0, '', 0, 1, '__default|a:8:{s:22:"session.client.browser";s:99:"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.79 Safari/537.1";s:15:"session.counter";i:2;s:8:"registry";O:9:"JRegistry":3:{s:17:"_defaultNameSpace";s:7:"session";s:9:"_registry";a:1:{s:7:"session";a:1:{s:4:"data";O:8:"stdClass":0:{}}}s:7:"_errors";a:0:{}}s:4:"user";O:5:"JUser":19:{s:2:"id";i:0;s:4:"name";N;s:8:"username";N;s:5:"email";N;s:8:"password";N;s:14:"password_clear";s:0:"";s:8:"usertype";N;s:5:"block";N;s:9:"sendEmail";i:0;s:3:"gid";i:0;s:12:"registerDate";N;s:13:"lastvisitDate";N;s:10:"activation";N;s:6:"params";N;s:3:"aid";i:0;s:5:"guest";i:1;s:7:"_params";O:10:"JParameter":7:{s:4:"_raw";s:0:"";s:4:"_xml";N;s:9:"_elements";a:0:{}s:12:"_elementPath";a:1:{i:0;s:81:"C:\\Program Files\\Zend\\Apache2\\htdocs\\inns\\libraries\\joomla\\html\\parameter\\element";}s:17:"_defaultNameSpace";s:8:"_default";s:9:"_registry";a:1:{s:8:"_default";a:1:{s:4:"data";O:8:"stdClass":0:{}}}s:7:"_errors";a:0:{}}s:9:"_errorMsg";N;s:7:"_errors";a:0:{}}s:19:"session.timer.start";i:1345222728;s:18:"session.timer.last";i:1345222728;s:17:"session.timer.now";i:1345222728;s:13:"session.token";s:32:"747ab1cb5e25078ed310020a75822908";}');

-- 
-- Вывод данных для таблицы g1525_stats_agents
--
-- Таблица g1525.g1525_stats_agents не содержит данных

-- 
-- Вывод данных для таблицы g1525_templates_menu
--
INSERT INTO g1525_templates_menu VALUES 
  ('siteground-j15-194', 0, 0),
  ('khepri', 0, 1);

-- 
-- Вывод данных для таблицы g1525_users
--
INSERT INTO g1525_users VALUES 
  (62, 'Админ', 'admin', 'yande2000@gmail.com', 'c6a9b2be3b992406746bd2b59c341ede:92NMuMhjIva7lfb01I047pwt6cK904zh', 'Super Administrator', 0, 1, 25, '2012-04-24 17:06:27', '2012-08-17 15:03:42', 'e6674b7f98c0de1025b7c4ee8cb82f77:$1$82f15750$', 'admin_language=\nlanguage=\neditor=tinymce\nhelpsite=\ntimezone=2\npage_title=Редактировать ваши данные\nshow_page_title=1\n\n', '(050)987-654-321', '(050)987-654-322', '(050)987-654-323'),
  (63, 'agent', 'agent', 'b@gmail.com', '703bda31608edea9bbda97e1ce5431fa:QDFBKpiJOKKkEzRVlDFLTVBJG8JZoN7l', 'Jea Agent', 0, 0, 32, '2012-05-07 15:38:39', '2012-05-08 18:23:42', '', 'language=\ntimezone=0\nadmin_language=\neditor=\nhelpsite=\n\n', '(050)987-654-111', '(050)987-654-112', '(050)987-654-113'),
  (64, 'agent2', 'agent2', 'a@gmail.com', 'd06341290a50ba72d39deab0ed29a6f6:Gcid2ygSXLClodnGq3wETXE6po6n4InD', 'Jea Agent', 0, 0, 32, '2012-05-08 18:37:59', '2012-08-17 14:43:28', '', 'page_title=Редактировать ваши данные\nshow_page_title=1\nlanguage=ru-RU\ntimezone=2\nadmin_language=\neditor=\nhelpsite=\n\n', '(050)987-654-211', '(050)987-654-212', '(050)987-654-213'),
  (67, 'agent3', 'agent3', 'agent3@gmail.com', 'f4cd491d322fee1a3d6ff757c19f9191:JJej7yY2sSw6lVH4mfSJQt2l7nUca52C', 'Jea Agent', 0, 0, 32, '2012-06-07 06:41:03', '2012-06-08 20:36:18', '', 'admin_language=\nlanguage=\neditor=\nhelpsite=\ntimezone=2\n\n', NULL, NULL, NULL);

-- 
-- Вывод данных для таблицы g1525_weblinks
--
INSERT INTO g1525_weblinks VALUES 
  (1, 2, 0, 'Joomla!', 'joomla', 'http://www.joomla.org', 'Home of Joomla!', '2005-02-14 15:19:02', 3, 1, 0, '0000-00-00 00:00:00', 1, 0, 1, 'target=0'),
  (2, 2, 0, 'php.net', 'php', 'http://www.php.net', 'The language that Joomla! is developed in', '2004-07-07 11:33:24', 6, 1, 0, '0000-00-00 00:00:00', 3, 0, 1, ''),
  (3, 2, 0, 'MySQL', 'mysql', 'http://www.mysql.com', 'The database that Joomla! uses', '2004-07-07 10:18:31', 1, 1, 0, '0000-00-00 00:00:00', 5, 0, 1, ''),
  (4, 2, 0, 'OpenSourceMatters', 'opensourcematters', 'http://www.opensourcematters.org', 'Home of OSM', '2005-02-14 15:19:02', 11, 1, 0, '0000-00-00 00:00:00', 2, 0, 1, 'target=0'),
  (5, 2, 0, 'Joomla! - Forums', 'joomla-forums', 'http://forum.joomla.org', 'Joomla! Forums', '2005-02-14 15:19:02', 4, 1, 0, '0000-00-00 00:00:00', 4, 0, 1, 'target=0'),
  (6, 2, 0, 'Ohloh Tracking of Joomla!', 'ohloh-tracking-of-joomla', 'http://www.ohloh.net/projects/20', 'Objective reports from Ohloh about Joomla''s development activity. Joomla! has some star developers with serious kudos.', '2007-07-19 09:28:31', 1, 1, 0, '0000-00-00 00:00:00', 6, 0, 1, 'target=0\n\n');

DELIMITER $$

--
-- Описание для триггера trigger1
--
DROP TRIGGER IF EXISTS trigger1$$
CREATE 
	DEFINER = 'root'@'localhost'
TRIGGER trigger1
	BEFORE UPDATE
	ON g1525_jea_properties
	FOR EACH ROW
BEGIN
  IF old.is_renting = 0 THEN
  SET new.is_renting = 1;
END IF; 
END
$$

DELIMITER ;

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;