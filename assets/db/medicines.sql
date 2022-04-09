CREATE TABLE `medicine` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `med_name` varchar(80) NOT NULL, 
  `group_` varchar(10) NOT NULL,
  `category` varchar(80) NOT NULL,
  `benefit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;