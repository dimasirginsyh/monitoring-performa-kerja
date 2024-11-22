/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
DROP TABLE IF EXISTS roles;
CREATE TABLE `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rolename` varchar(20) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS task;
CREATE TABLE `task` (
  `id` int NOT NULL AUTO_INCREMENT,
  `activity` text NOT NULL,
  `activity_date` date NOT NULL DEFAULT (curdate()),
  `count` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `task_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT COLLATE=utf8_general_ci;

INSERT INTO roles(id,rolename,description) VALUES(1,'''employee''','X''70656b65726a61'''),(2,'''manager''','X''6d616e61676572'''),(3,'''admin''','X''61646d696e''');

INSERT INTO users(id,username,password,name,role_id) VALUES(1,'''pekerja1''','''$2y$10$fSRd1wlEaCsXIixbDT01Zu3l9ecAHkCaa6CZh0sxQqMT07y.PCgdG''','''pekerja1''',1),(2,'''manager1''','''$2y$10$fSRd1wlEaCsXIixbDT01Zu3l9ecAHkCaa6CZh0sxQqMT07y.PCgdG''','''manager1''',2),(3,'''admin''','''$2y$10$fSRd1wlEaCsXIixbDT01Zu3l9ecAHkCaa6CZh0sxQqMT07y.PCgdG''','''admin''',3);