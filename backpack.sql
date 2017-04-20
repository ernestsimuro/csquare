/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : backpack

Target Server Type    : MYSQL
Target Server Version : 100116
File Encoding         : 65001

Date: 2017-04-19 22:25:51
*/

SET FOREIGN_KEY_CHECKS=0;
DROP DATABASE IF EXISTS backpack;
CREATE DATABASE  backpack;

-- ----------------------------
-- Table structure for backpacks
-- ----------------------------
DROP TABLE IF EXISTS `backpacks`;
CREATE TABLE `backpacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bp_item` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of backpacks
-- ----------------------------
INSERT INTO `backpacks` VALUES ('1', 'pencil', null, null);
INSERT INTO `backpacks` VALUES ('2', 'notebook', null, null);
INSERT INTO `backpacks` VALUES ('3', 'eraser', '2017-04-20 01:15:56', '2017-04-20 01:15:56');
INSERT INTO `backpacks` VALUES ('4', 'books', '2017-04-20 01:17:26', '2017-04-20 01:17:26');
INSERT INTO `backpacks` VALUES ('5', 'pen', '2017-04-20 01:22:58', '2017-04-20 01:22:58');
INSERT INTO `backpacks` VALUES ('6', 'apple', '2017-04-20 01:23:57', '2017-04-20 01:23:57');
INSERT INTO `backpacks` VALUES ('7', 'water', '2017-04-20 01:25:00', '2017-04-20 01:25:00');
INSERT INTO `backpacks` VALUES ('9', 'shampoo', '2017-04-20 01:30:31', '2017-04-20 01:30:31');
SET FOREIGN_KEY_CHECKS=1;
