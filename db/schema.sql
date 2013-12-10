CREATE DATABASE cr8v;

'CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `security_question` varchar(100) DEFAULT NULL,
  `security_answer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1';

-- SAMPLE DATA

INSERT INTO 
	users(first_name, last_name, email, avatar, birth_date, gender, username, passwd, security_question, security_answer) 
VALUES 
	('Romack',
	'Natividad',
	'romacknatividad@gmail.com',
	'https://lh3.googleusercontent.com/-HEoftI3L4UA/AAAAAAAAAAI/AAAAAAAAEn8/FgYmQWWe268/photo.jpg',
	'1982-11-19',
	'male',
	'romack',
	MD5('secret123'),
	'What is your nickname?',
	'macki');