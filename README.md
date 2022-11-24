# oefening_swd2

DROP TABLE IF EXISTS `myTable`;

CREATE TABLE `myTable` (
`id` mediumint(8) unsigned NOT NULL auto_increment,
`name` varchar(255) default NULL,
`phone` varchar(100) default NULL,
`email` varchar(255) default NULL,
`address` varchar(255) default NULL,
`country` varchar(100) default NULL,
`region` varchar(50) default NULL,
`postalZip` varchar(10) default NULL,
PRIMARY KEY (`id`)
) AUTO_INCREMENT=1;

INSERT INTO `myTable` (`name`,`phone`,`email`,`address`,`country`,`region`,`postalZip`)
VALUES
("Avram Greer","1-384-755-6381","auctor.mauris@yahoo.edu","P.O. Box 766, 5602 Euismod Rd.","Peru","Arauca","471075"),
("Velma Holmes","(243) 127-1115","ac@icloud.edu","385-7552 Diam St.","Poland","South Island","5482"),
("Maile Alston","(857) 101-7304","aliquet.proin.velit@aol.com","P.O. Box 740, 3196 Vel Rd.","Poland","Maule","24318"),
("Angelica Curry","(202) 888-1241","aliquam.rutrum.lorem@icloud.com","Ap #419-5309 Magna Rd.","China","Ternopil oblast","06548"),
("Shaine Vazquez","(220) 322-5375","nulla.interdum@outlook.net","7358 Ligula Road","Poland","São Paulo","929331"),
("Xanthus Rowe","(148) 442-1185","per.inceptos.hymenaeos@yahoo.com","149-7987 Sem Ave","Poland","Rostov Oblast","747312"),
("Quinn Allison","1-755-835-2526","augue.ac@aol.com","Ap #606-9748 Cras Avenue","Philippines","Putumayo","21383"),
("Cain Arnold","(584) 379-4949","eget.venenatis@icloud.net","562-4321 Semper Street","France","Trentino-Alto Adige","568621"),
("Kirestin Park","1-771-466-5815","commodo.tincidunt@yahoo.net","5037 Et Street","Sweden","Nuevo León","1664"),
("Sophia Wheeler","1-876-732-5442","integer.mollis.integer@yahoo.org","Ap #793-5971 Pulvinar Av.","Mexico","Illinois","10471");
INSERT INTO `myTable` (`name`,`phone`,`email`,`address`,`country`,`region`,`postalZip`)
VALUES
("Reed Spears","(617) 232-4562","in.scelerisque@icloud.ca","547-8179 Tortor. Road","Ukraine","Chiapas","76435"),
("Sawyer Mcleod","(781) 825-2576","vehicula.aliquet@protonmail.ca","P.O. Box 327, 5476 Lorem Road","United States","Castilla - La Mancha","356921"),
("Bruce Luna","(614) 242-4323","phasellus@aol.net","370-3619 Aliquet. St.","South Africa","Oost-Vlaanderen","5827 WR"),
("Quamar Austin","1-431-980-5435","lacus.nulla@hotmail.com","150-7623 In Avenue","Sweden","Derbyshire","55297"),
("Marsden Workman","1-533-542-1241","laoreet.libero@aol.com","190-9911 Egestas. St.","United States","Bayern","A2C 4X8"),
("Kaye Conrad","(746) 682-8372","vestibulum.ante.ipsum@protonmail.couk","Ap #588-9763 Ac St.","Sweden","Umbria","427028"),
("Cassady Ball","1-451-858-1365","sed.sem@yahoo.ca","Ap #567-418 Tincidunt Street","New Zealand","Western Australia","4735"),
("Fulton Hayes","(324) 533-2250","diam@yahoo.ca","P.O. Box 496, 7784 Lacus. Street","Pakistan","Argyllshire","T2B 6G0"),
("Nero Johnson","(416) 692-5528","et.magnis@hotmail.com","Ap #166-8148 Eu, Av.","United States","Gyeonggi","628719"),
("Felicia Olson","(796) 211-8465","ac.mi@yahoo.net","123-1014 Mattis. Ave","Indonesia","Hessen","20125");

