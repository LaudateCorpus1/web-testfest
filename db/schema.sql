
CREATE TABLE `contributors` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `testfiles` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `filename` varchar(100) NOT NULL,
  `description` tinytext NOT NULL,
  `status` enum('Uploaded','Confirmed','In Review','Accepted','Refused') NOT NULL,
  `uploaded_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `refusal_reason` tinytext,
  PRIMARY KEY  (`id`),
  KEY `filename` (`filename`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;