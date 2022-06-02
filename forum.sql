CREATE TABLE `users` (
  `Uid` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(64),
  `email` varchar(128),
  `password` char(40),
  `createdT` timestamp DEFAULT CURRENT_TIMESTAMP()
);

CREATE TABLE `posts` (
  `Pid` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(40),
  `Uid` int,
  `content` LONGTEXT,
  `createdT` timestamp DEFAULT CURRENT_TIMESTAMP()
);

CREATE TABLE `coments` (
  `Cid` int PRIMARY KEY AUTO_INCREMENT,
  `Uid` int,
  `Pid` int,
  `content` LONGTEXT,
  `createdT` timestamp DEFAULT CURRENT_TIMESTAMP()
);

ALTER TABLE `posts` ADD FOREIGN KEY (`Uid`) REFERENCES `users` (`Uid`);

ALTER TABLE `coments` ADD FOREIGN KEY (`Uid`) REFERENCES `users` (`Uid`);

ALTER TABLE `coments` ADD FOREIGN KEY (`Pid`) REFERENCES `posts` (`Pid`);
