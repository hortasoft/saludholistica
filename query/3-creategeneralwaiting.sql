CREATE TABLE `waiting_general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `priority` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `section` int(1) NOT NULL,
  PRIMARY KEY (`id`)
)
