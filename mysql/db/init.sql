CREATE DATABASE sample_db;
use sample_db


CREATE TABLE `score` (
  `num` int(32) NOT NULL AUTO_INCREMENT,
  `id` int(4) NOT NULL,
  `score` int(8) NOT NULL,
  `great` int(4) NOT NULL,
  `good` int(4) NOT NULL,
  `bad` int(4) NOT NULL,
  `datetime` DATETIME NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;


CREATE TABLE `music` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `max` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;


INSERT INTO `music` (`name`, `max`) VALUES
("ピタゴラスイッチ", 100),
("きらきら星", 200);
COMMIT;


INSERT INTO `score` (`id`, `score`, `great`, `good`, `bad`, `datetime`) VALUES
(1, 100, 25, 50, 0, '2021-04-23 21:45:31');
COMMIT;
