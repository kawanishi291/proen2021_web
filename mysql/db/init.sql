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
("ピタゴラスイッチ", 1000),
("きらきら星", 1000);
COMMIT;


INSERT INTO `score` (`id`, `score`, `great`, `good`, `bad`, `datetime`) VALUES
(1, 305, 25, 51, 24, '2021-06-01 21:45:31'),
(1, 700, 50, 40, 10, '2021-06-02 21:45:31'),
(2, 625, 40, 45, 15, '2021-06-03 21:45:31'),
(1, 125, 5, 15, 80, '2021-06-03 21:45:31');
COMMIT;
