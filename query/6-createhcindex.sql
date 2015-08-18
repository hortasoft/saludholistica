CREATE TABLE `hcindex` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `document` int(11) NOT NULL,
  `documentType` int(11) NOT NULL,
  `HCId` varchar(50) NOT NULL,
  `creationDate` datetime NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
