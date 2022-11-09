# ABMS : MySQL database backup
#
# Generated: Monday 28. March 2022
# Hostname: localhost:3306
# Database: web
# --------------------------------------------------------


#
# Delete any existing table `bis`
#

DROP TABLE IF EXISTS `bis`;


#
# Table structure of table `bis`
#



CREATE TABLE `bis` (
  `ID` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO bis VALUES("1","admin","admin");



#
# Delete any existing table `tbl_support`
#

DROP TABLE IF EXISTS `tbl_support`;


#
# Table structure of table `tbl_support`
#



CREATE TABLE `tbl_support` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;




#
# Delete any existing table `tbl_users`
#

DROP TABLE IF EXISTS `tbl_users`;


#
# Table structure of table `tbl_users`
#



CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_type` varchar(20) DEFAULT NULL,
  `avatar` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_users VALUES("11","admin","d033e22ae348aeb5660fc2140aec35850c4da997","administrator","29012022041329bn.jpg","2021-05-03 10:33:03");
INSERT INTO tbl_users VALUES("12","arjay","9770e6a801b6c326724dc84aabc54a12c5209df4","staff","","2022-01-29 11:31:18");
INSERT INTO tbl_users VALUES("15","aj","2048b22ac0881f917af3e938105055ab85498548","staff","","2022-03-05 17:07:18");



#
# Delete any existing table `tblblotter`
#

DROP TABLE IF EXISTS `tblblotter`;


#
# Table structure of table `tblblotter`
#



CREATE TABLE `tblblotter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complainant` varchar(100) DEFAULT NULL,
  `respondent` varchar(100) DEFAULT NULL,
  `victim` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `details` varchar(10000) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO tblblotter VALUES("27","totoy","natoy","utoy","Amicable","dito","2022-01-29","09:38:00","nambugbug","Scheduled");
INSERT INTO tblblotter VALUES("28","totoy","natoy","0921231","curfew violator","dito","2022-01-31","14:21:00","adadadadad","Active");
INSERT INTO tblblotter VALUES("29","ada","asdad","ada","sadad","adad","2022-01-31","00:11:00","qeqe","Active");



#
# Delete any existing table `tblbrgy_info`
#

DROP TABLE IF EXISTS `tblbrgy_info`;


#
# Table structure of table `tblbrgy_info`
#



CREATE TABLE `tblbrgy_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province` varchar(100) DEFAULT NULL,
  `town` varchar(100) DEFAULT NULL,
  `brgy_name` varchar(50) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `city_logo` varchar(100) DEFAULT NULL,
  `brgy_logo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblbrgy_info VALUES("1","Nueva Ecija","Cabanatuan City","Barangay Campo Tinio","0968559743","may ayuda tayo PUNTA NA KAYO","29012022095143271678071_677703893241216_4447484875401940837_n.png","29012022042347272211151_686347589026781_1649041725538917193_n.png","29012022042347bn.jpg");



#
# Delete any existing table `tblchairmanship`
#

DROP TABLE IF EXISTS `tblchairmanship`;


#
# Table structure of table `tblchairmanship`
#



CREATE TABLE `tblchairmanship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblchairmanship VALUES("2","Presiding Officer");
INSERT INTO tblchairmanship VALUES("3","Committee on Appropriation");
INSERT INTO tblchairmanship VALUES("4","Committee on Peace & Order");
INSERT INTO tblchairmanship VALUES("5","Committee on Health");
INSERT INTO tblchairmanship VALUES("6","Committee on Education");
INSERT INTO tblchairmanship VALUES("7","Committee on Rules");
INSERT INTO tblchairmanship VALUES("8","Committee on Infra");
INSERT INTO tblchairmanship VALUES("9","Committee on Solid Waste");
INSERT INTO tblchairmanship VALUES("10","Committee on Sports");
INSERT INTO tblchairmanship VALUES("11","No Chairmanship");



#
# Delete any existing table `tblhouse`
#

DROP TABLE IF EXISTS `tblhouse`;


#
# Table structure of table `tblhouse`
#



CREATE TABLE `tblhouse` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `name1` varchar(100) DEFAULT NULL,
  `name2` varchar(100) DEFAULT NULL,
  `name3` varchar(100) DEFAULT NULL,
  `name4` varchar(100) DEFAULT NULL,
  `name5` varchar(100) DEFAULT NULL,
  `name6` varchar(100) DEFAULT NULL,
  `name7` varchar(100) DEFAULT NULL,
  `name8` varchar(100) DEFAULT NULL,
  `name9` varchar(100) DEFAULT NULL,
  `name10` varchar(100) DEFAULT NULL,
  `name11` varchar(100) DEFAULT NULL,
  `name12` varchar(100) DEFAULT NULL,
  `name13` varchar(100) DEFAULT NULL,
  `name14` varchar(100) DEFAULT NULL,
  `name15` varchar(100) DEFAULT NULL,
  `blk` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




#
# Delete any existing table `tblofficials`
#

DROP TABLE IF EXISTS `tblofficials`;


#
# Table structure of table `tblofficials`
#



CREATE TABLE `tblofficials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `chairmanship` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `termstart` date DEFAULT NULL,
  `termend` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblofficials VALUES("1","Anita Sakay Pascual","2","4","2021-04-29","2021-05-01","Active");
INSERT INTO tblofficials VALUES("14","Thelma Orencia Agudo","3","14","2022-03-03","2022-03-25","Active");



#
# Delete any existing table `tblpayments`
#

DROP TABLE IF EXISTS `tblpayments`;


#
# Table structure of table `tblpayments`
#



CREATE TABLE `tblpayments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `details` varchar(100) DEFAULT NULL,
  `amounts` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblpayments VALUES("34","Barangay Clearance","sdasdasd","2022-03-03","admin"," Norly V. Cayanga");
INSERT INTO tblpayments VALUES("35","Barangay Indegency","sdasdas","2022-03-03","admin"," Norly V. Cayanga");
INSERT INTO tblpayments VALUES("36","Business Permit","sdasdasd","2022-03-03","admin"," Mafia cut hair");
INSERT INTO tblpayments VALUES("37","Barangay Clearance","dfad","2022-03-03","admin"," Norly V. Cayanga");
INSERT INTO tblpayments VALUES("39","Barangay Clearance","business","2022-03-06","admin"," Angelita B Lucido");
INSERT INTO tblpayments VALUES("40","Barangay Indegency","ala","2022-03-06","admin"," Norly V. Cayanga");
INSERT INTO tblpayments VALUES("41","Barangay Clearance","reert","2022-03-11","admin"," Norly V. Cayanga");
INSERT INTO tblpayments VALUES("42","Barangay Indegency","jkkjhkjhkjh","2022-03-16","admin"," Norly V. Cayanga");
INSERT INTO tblpayments VALUES("43","Business Permit","uuu","2022-03-16","admin"," Fafddad");
INSERT INTO tblpayments VALUES("44","Business Permit","Job","2022-03-17","admin"," Mafia cut hair");
INSERT INTO tblpayments VALUES("45","Barangay Indegency","jkkjhkjhkjh","2022-03-21","admin"," Norly V. Cayanga");
INSERT INTO tblpayments VALUES("46","Barangay Indegency","","2022-03-21","admin"," Norly V. Cayanga");
INSERT INTO tblpayments VALUES("47","Barangay Indegency","jkkjhkjhkjh","2022-03-21","admin"," Norly V. Cayanga");
INSERT INTO tblpayments VALUES("48","Barangay Indegency","jkkjhkjhkjh","2022-03-21","admin"," Norly V. Cayanga");
INSERT INTO tblpayments VALUES("49","Barangay Clearance","Job","2022-03-22","admin"," Norly V. Cayanga");
INSERT INTO tblpayments VALUES("50","Barangay Indegency","jkkjhkjhkjh","2022-03-22","admin"," Norly V. Cayanga");
INSERT INTO tblpayments VALUES("51","Barangay Indegency","Job","2022-03-22","admin"," Angelita Cruz Lucido");
INSERT INTO tblpayments VALUES("52","Barangay Indegency","Job","2022-03-22","admin"," Norly V. Cayanga");
INSERT INTO tblpayments VALUES("53","Barangay Indegency","jkkjhkjhkjh","2022-03-22","admin"," Norly V. Cayanga");
INSERT INTO tblpayments VALUES("54","Barangay Indegency","","2022-03-22","admin"," Norly V. Cayanga");
INSERT INTO tblpayments VALUES("55","Business Permit","Job","2022-03-22","admin"," Adad");



#
# Delete any existing table `tblpermit`
#

DROP TABLE IF EXISTS `tblpermit`;


#
# Table structure of table `tblpermit`
#



CREATE TABLE `tblpermit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `owner1` varchar(200) DEFAULT NULL,
  `owner2` varchar(80) DEFAULT NULL,
  `nature` varchar(220) DEFAULT NULL,
  `applied` date DEFAULT NULL,
  `add` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblpermit VALUES("6","mafia cut hair","arjay","christian","barber shop","2022-01-29","");
INSERT INTO tblpermit VALUES("10","fafddad","dadad","ad","asdad","2022-03-16","");
INSERT INTO tblpermit VALUES("11","qeqe","qeq","eqeq","qeqe","2022-03-22","");
INSERT INTO tblpermit VALUES("12","adad","dad","adad","adada","2022-03-22","");
INSERT INTO tblpermit VALUES("13","qeqe","qeq","qeqeq","qeeqe","2022-03-22","");
INSERT INTO tblpermit VALUES("14","qwe","qeq","ad","asdad","2022-03-22","");



#
# Delete any existing table `tblposition`
#

DROP TABLE IF EXISTS `tblposition`;


#
# Table structure of table `tblposition`
#



CREATE TABLE `tblposition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(50) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblposition VALUES("4","Captain","1");
INSERT INTO tblposition VALUES("7","Councilor 1","2");
INSERT INTO tblposition VALUES("8","Councilor 2","3");
INSERT INTO tblposition VALUES("9","Councilor 3","4");
INSERT INTO tblposition VALUES("10","Councilor 4","5");
INSERT INTO tblposition VALUES("11","Councilor 5","6");
INSERT INTO tblposition VALUES("12","Councilor 6","7");
INSERT INTO tblposition VALUES("13","Councilor 7","8");
INSERT INTO tblposition VALUES("14","SK Chairman","9");
INSERT INTO tblposition VALUES("15","Secretary","10");
INSERT INTO tblposition VALUES("16","Treasurer","11");



#
# Delete any existing table `tblprecinct`
#

DROP TABLE IF EXISTS `tblprecinct`;


#
# Table structure of table `tblprecinct`
#



CREATE TABLE `tblprecinct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `precinct` varchar(100) DEFAULT NULL,
  `details` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




#
# Delete any existing table `tblpurok`
#

DROP TABLE IF EXISTS `tblpurok`;


#
# Table structure of table `tblpurok`
#



CREATE TABLE `tblpurok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblpurok VALUES("17","Zone 01","HighSchool ");
INSERT INTO tblpurok VALUES("18","Zone 02","Highway");
INSERT INTO tblpurok VALUES("19","Zone 03","nanana");
INSERT INTO tblpurok VALUES("20","Zone 04","asdas");
INSERT INTO tblpurok VALUES("21","Block 03","dss");
INSERT INTO tblpurok VALUES("22","Block 04","sddas");
INSERT INTO tblpurok VALUES("23","Block 05","dfd");
INSERT INTO tblpurok VALUES("24","Block 06","gfgf");
INSERT INTO tblpurok VALUES("25","Block 07","fsdf");
INSERT INTO tblpurok VALUES("26","Block 08","klk");
INSERT INTO tblpurok VALUES("27","Block 09","jhjh");
INSERT INTO tblpurok VALUES("28","Block 10","l;l;");
INSERT INTO tblpurok VALUES("29","Block 11","kjkjk");
INSERT INTO tblpurok VALUES("30","Block 13",";l;");
INSERT INTO tblpurok VALUES("31","Block 14","lll");
INSERT INTO tblpurok VALUES("32","Block 15","''''");
INSERT INTO tblpurok VALUES("33","Nawasa","sdsdad");
INSERT INTO tblpurok VALUES("34","Block 01 ","sdada");
INSERT INTO tblpurok VALUES("35","Block 02","dqwe");
INSERT INTO tblpurok VALUES("36","525th","akdadad");
INSERT INTO tblpurok VALUES("37","Block 12","qeqweq");
INSERT INTO tblpurok VALUES("38","Block 16","aaaa");



#
# Delete any existing table `tblresident`
#

DROP TABLE IF EXISTS `tblresident`;


#
# Table structure of table `tblresident`
#



CREATE TABLE `tblresident` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `national_id` varchar(100) DEFAULT NULL,
  `gv_id` varchar(100) DEFAULT NULL,
  `citizenship` varchar(50) DEFAULT NULL,
  `picture` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `firstname` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `middlename` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `alias` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `birthplace` varchar(80) CHARACTER SET utf8mb4 DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `civilstatus` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `con` varchar(50) DEFAULT NULL,
  `gender` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `purok` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `voterstatus` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `identified_as` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `employed` varchar(50) DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `resident_type` int(11) DEFAULT 1,
  `remarks` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=217 DEFAULT CHARSET=latin1;

INSERT INTO tblresident VALUES("183","0089098032","National ID","Filipino","data:image/jpeg;base64,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","Norly","V.","Cayanga","Norly","Zambuanga city","1975-09-15","70","Single","Normal","Male","Block 16","Yes","","0976876876","norly@gmail.com","Brgy. Tanod","None","Blk15, Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("186","1246134123","National ID","Filipino","data:image/jpeg;base64,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","Angelita","Cruz","Lucido","Angie","Cabanatuan City","2000-04-11","22","Single","Normal","Female","Block 02","Yes","","09252162342","angielucido@ymail.com","Brgy. Treasurer","Employed","Blk02. Campo Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("187","8878657856","National ID","Filipino","data:image/jpeg;base64,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","James","Balintino","Cabuyaw","Angie","Cabanatuan City","2000-02-22","22","Single","Normal","Male","Block 03","Yes","","09343646374","christina@gmail.com","Student","None","Blk3. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("190","2133414","National ID","Filipino","person.png","Erlinda","Munar","Bordeos","Linda","Cabanatuan","1989-04-02","33","Married","Normal","Female","Block 04","Yes","","09268112285","lindabor@gmail.com","Teacher","Employed","Blk4, CampTinio. Cabanatuan City","1","");
INSERT INTO tblresident VALUES("191","9040343480","National ID","Filipino","person.png","Daisy","Francia","Calaogan","Daiz","Quezon CIty","1995-12-22","27","Single","Normal","Female","Block 05","No","","09213789812","daisycal@gmail.com","Sales Lady","Employed","Blk5. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("192","092032977","National ID","Filipino","person.png","Mark Andrew","Bal","Sano","Mak","Navotas CIty","1997-03-03","25","Single","Normal","Male","Block 06","Yes","","09213456781","maksano@gmail.com","Army","Employed","Blk06. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("193","938920427","National ID","Filipino","person.png","Daniel","Velasquez","Monti","Dan","Makati CIty","1999-09-23","23","Single","Normal","Male","Block 07","Yes","","09865436765","danyel@gmail.com","Student","None","Blk07. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("194","27761757218","Voters ID","Filipino","person.png","Pearl","Montinegro","Pilar","Ros","Malabon City","2002-03-06","18","Single","Normal","Female","Block 08","Yes","","0965467876544","pear@gmail.com","Student","None","Blk08. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("195","28773838838","National ID","Filipino","person.png","Christian","Undan","Mamaclay","Chris","Cabanatuan City","2000-12-05","22","Single","Normal","Male","Block 09","Yes","","0976563543267","chris@gmail.com","Waiter","Employed","Blk09. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("196","84875403","Driver Licence ID","Filipino","person.png","Robin ","Guy","Santiago","Rg","Talavera ","2010-08-09","12","Single","PWD","Male","Block 10","No","","098735267625","rob@gmail.com","Student","Employed","Blk10. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("197","89382902","SSS ID","Filipino","person.png","David","Palma","Cruz","Dave","Quezon CIty","2015-08-09","7","Single","Normal","Male","Block 11","No","","0","dave@gmail.com","N/A","None","Blk11. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("198","7288191977","National ID","Filipino","person.png","Monica","Cala","Montes","Mon","General Santos City","1968-08-09","54","Divorced","Normal","Female","Block 13","Yes","","098376278765","mon@gmail.com","Engineer","Employed","Blk11. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("199","82738719","National ID","Filipino","person.png","Arjay","Delos","Pobres","Jay","Dingalan","1995-09-21","27","Single","Normal","Female","Block 14","Yes","","09876537652","jay@gmail.com","Barbershop","Self-employed","Blk14. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("200","32424325","National ID","Filipino","person.png","Rhian Zoey","Calaoagan","Santiago","Zoey","Cabanatuan City","2009-08-21","13","Single","Normal","Female","Block 03","No","","09345678292","zoey@gmail.com","Student","None","Blk03. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("201","8783782982","Passport ID","Filipino","person.png","Jonna","Valen","Navarro","Jonna","Sto.Domingo, Nueva Ecija","1995-03-29","27","Single","Normal","Female","Zone 01","","","09893765241","jon@gmail.com","Factory Worker","Employed","Zone1. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("202","21727683","National ID","Filipino","person.png","Carla","Salgsag","Cabrera","Carla","Sto.Domingo, Nueva Ecija","2000-09-25","22","Single","Normal","Female","Block 09","Yes","","09272621567","carla@gmail.com","Student","None","Blk9. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("203","84232978427","National ID","Filipino","person.png","Mild Seven","Puerto","Corpuz","Seve","Cabanatuan City","2005-01-22","17","Single","Normal","Male","Zone 02","Yes","","09837265726","sev@gmail.com","Student","None","Zone2. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("204","8733897249238","National ID","Filipino","person.png","Joshua","Zin","Garcia","Josh","Makati CIty","2008-12-08","14","Single","Normal","Male","Block 11","No","","09882763516","josh@gmail.com","Student","None","Blk11. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("205","9271878989","National ID","Filipino","person.png","Marco","Gand","Gumabao","Marc","Quezon CIty","1995-08-29","27","Single","Normal","Male","Block 09","Yes","","09326736532","marc@gmail.com","Service Crew","Employed","Blk9. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("206","9438549398589","SSS ID","Filipino","person.png","Andrea","Gray","Brilliant","Andeng","Mandaluyong City","1997-10-22","25","Single","Normal","Female","Block 14","","","09826263678","and@gmail.com","CEO of Crash Tea","Self-employed","Blk14. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("207","84382928974","Passport ID","Filipino","person.png","Ethan","Alfaro","Dominguez","Al","Batangas City","1994-09-08","28","Married","Normal","Male","Block 15","Yes","","09836728765","ethan@gmail.com","Wedding Planner","Employed","Blk15. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("208","287188721889","SSS ID","Filipino","person.png","Park","Sojun","Cavin","Park","Baguio City","2001-06-07","21","Single","Normal","Male","Zone 03","Yes","","09827265245","park@gmail.com","Engineer","Employed","Zone3. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("209","7832787382","National ID","Filipino","person.png","Raymart","Din","De Jesus","Ray","Gapan City","2015-08-31","7","Single","Special Child","Male","Block 10","No","","09827536761","ray@gmail.com","None","None","Blk10. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("210","78632637628","Passport ID","Filipino","person.png","Liza","Adin","Soverano","Liza","Bulacan City","2000-11-09","22","Single","Normal","Female","Block 10","Yes","","09816789765","liza@gmail.com","Student","None","Blk10. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("211","838782732892","National ID","Filipino","person.png","Ivan","Alfozo","Alawi","Van","Tagaytay City","2001-11-09","21","Single","Normal","Male","Zone 01","Yes","","09876567876","ivan@gmail.com","Student","None","Zone1. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("212","8372873827","National ID","Filipino","person.png","Justin","Vazquez","Balbino","Tin","Cebu City","2002-12-27","20","Single","Special Child","Male","Block 04","","","09876556789","tin@gmail.com","Student","None","Blk4. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("213","3278437387428","SSS ID","Filipino","person.png","Reign Chloe","Calaoagan","Santiago","Chloe","Cabanatuan City","1992-11-30","30","Married","Normal","Female","Block 11","Yes","","09276357876","chloe@gmail.com","Flight Attendant","Employed","Blk11. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("214","873878284293","Passport ID","Filipino","person.png","Novy Chlarisse","Salgsag","Cabrera","Novy","Sto.Domingo, Nueva Ecija","1998-09-08","24","Single","Normal","Female","Block 06","Yes","","09736478726","novy@gmail.com","Teacher","Employed","Blk6. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("215","487573573984","National ID","Filipino","person.png","Enrique","Gil","Gillado","Ken","Quezon CIty","2000-07-21","22","Single","Normal","Male","Block 11","Yes","","0973627897","ken@gmail.com","Student","None","Blk11. Camp Tinio, Cabanatuan City","1","");
INSERT INTO tblresident VALUES("216","894784728","Passport ID","Filipino","person.png","Bell","Salgsag","Enriquez","Bell","Calipahan, Talavera ","2001-01-28","21","Single","Normal","Female","Block 04","Yes","","09836728762","bell@gmail.com","Student","None","Blk4. Camp Tinio, Cabanatuan City","1","");

