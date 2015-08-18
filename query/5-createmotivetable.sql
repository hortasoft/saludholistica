CREATE TABLE `motive_table` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `HCId` varchar(45) NOT NULL,
  `motive` text,
  `symptom` text,
  `date` datetime DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
