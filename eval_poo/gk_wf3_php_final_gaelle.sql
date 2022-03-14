-- Adminer 4.8.1 MySQL 8.0.15 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `gk_wf3_php_final_gaelle`;
CREATE DATABASE `gk_wf3_php_final_gaelle` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `gk_wf3_php_final_gaelle`;

DROP TABLE IF EXISTS `contest`;
CREATE TABLE `contest` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `game_id` int(11) NOT NULL,
                           `start_date` date NOT NULL,
                           `winner_id` int(11) NOT NULL,
                           PRIMARY KEY (`id`),
                           KEY `game_id` (`game_id`),
                           CONSTRAINT `contest_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `game` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `contest` (`id`, `game_id`, `start_date`, `winner_id`) VALUES
                                                                       (1,	23,	'2019-12-25',	2),
                                                                       (2,	25,	'0202-12-25',	0);

DROP TABLE IF EXISTS `game`;
CREATE TABLE `game` (
                        `id` int(11) NOT NULL AUTO_INCREMENT,
                        `title` varchar(255) NOT NULL,
                        `min_players` int(11) NOT NULL,
                        `max_players` int(11) NOT NULL,
                        PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

INSERT INTO `game` (`id`, `title`, `min_players`, `max_players`) VALUES
                                                                     (23,	'7 Wonders',	2,	7),
                                                                     (24,	'Ticket to Ride',	2,	5),
                                                                     (25,	'Pandemic',	2,	4),
                                                                     (26,	'Munchkin',	3,	6);

DROP TABLE IF EXISTS `player`;
CREATE TABLE `player` (
                          `id` int(11) NOT NULL AUTO_INCREMENT,
                          `email` varchar(255) NOT NULL,
                          `nickname` varchar(255) NOT NULL,
                          PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `player` (`id`, `email`, `nickname`) VALUES
                                                     (1,	'luke.skywalker@rogue.sw',	'Luke'),
                                                     (2,	'amidala.padme@naboo.gov',	'Padme'),
                                                     (3,	'han.solo@millenium-falcon.com',	'HanSolo'),
                                                     (4,	'chewbacca@wook.ie',	'Chewbie'),
                                                     (5,	'rey@jakku.planet',	'Rey');

DROP TABLE IF EXISTS `player_contest`;
CREATE TABLE `player_contest` (
                                  `id` int(11) NOT NULL AUTO_INCREMENT,
                                  `player_id` int(11) NOT NULL,
                                  `contest_id` int(11) NOT NULL,
                                  PRIMARY KEY (`id`),
                                  KEY `player_id` (`player_id`),
                                  KEY `contest_id` (`contest_id`),
                                  CONSTRAINT `player_contest_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `player` (`id`),
                                  CONSTRAINT `player_contest_ibfk_2` FOREIGN KEY (`contest_id`) REFERENCES `contest` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `player_contest` (`id`, `player_id`, `contest_id`) VALUES
                                                                   (1,	1,	1),
                                                                   (2,	2,	1),
                                                                   (3,	3,	1),
                                                                   (4,	4,	1),
                                                                   (5,	5,	1),
                                                                   (6,	2,	2),
                                                                   (7,	3,	2),
                                                                   (8,	5,	2);

-- 2022-03-14 09:18:30