-- --------------------------------------------------------
-- 主機:                           127.0.0.1
-- 伺服器版本:                        5.7.26 - MySQL Community Server (GPL)
-- 伺服器作業系統:                      Win64
-- HeidiSQL 版本:                  11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- 傾印 tp6_demo 的資料庫結構
CREATE DATABASE IF NOT EXISTS `tp6_demo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `tp6_demo`;

-- 傾印  資料表 tp6_demo.think6_member 結構
CREATE TABLE IF NOT EXISTS `think6_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) unsigned NOT NULL COMMENT '加入意向',
  `city_name` varchar(30) NOT NULL COMMENT '城市',
  `true_name` varchar(30) NOT NULL COMMENT '姓名',
  `sex` tinyint(1) unsigned NOT NULL COMMENT '性別',
  `mobile` varchar(30) NOT NULL COMMENT '手機',
  `remark` varchar(50) DEFAULT '' COMMENT '補充說明',
  `head_pic` varchar(50) NOT NULL COMMENT '圖片名稱',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否刪除',
  `create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '建立時間',
  `update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新時間',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- 正在傾印表格  tp6_demo.think6_member 的資料：0 rows
DELETE FROM `think6_member`;
/*!40000 ALTER TABLE `think6_member` DISABLE KEYS */;
/*!40000 ALTER TABLE `think6_member` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
