/* Script généré automatiquement par Katyusha MCD v0.4.5 pour mysql */
DROP database IF EXISTS `ama`;
CREATE database ama;
USE ama;

/* Table : employee */
DROP TABLE IF EXISTS `employee`;
CREATE TABLE employee (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT, 
    `firstname` VARCHAR(100) NOT NULL, 
    `lastname` VARCHAR(100) NOT NULL, 
    `gender` CHAR NOT NULL,
    `birthday` DATE NOT NULL, 
    `num_security` BIGINT(15) NOT NULL UNIQUE, 
    `nationality` VARCHAR(60) NOT NULL,
    `birth_country` VARCHAR(60) NOT NULL,
    `email` VARCHAR(255) NOT NULL UNIQUE, 
    `phone` INTEGER NULL UNIQUE, 
    `adress` VARCHAR(255) NOT NULL,
    `navigo` CHAR NOT NULL,
    `contract_id` INTEGER DEFAULT (1)
) ;

/* Table : salary */
DROP TABLE IF EXISTS `salary`;
CREATE TABLE salary (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT, 
    `amount` FLOAT NOT NULL, 
    `year` INTEGER NOT NULL, 
    `month` INTEGER NOT NULL, 
    `employee_id` INTEGER NOT NULL
) ;


/* Table : student */
DROP TABLE IF EXISTS `student`;
CREATE TABLE student (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT, 
    `firstname` VARCHAR(100) NOT NULL, 
    `lastname` VARCHAR(100) NOT NULL, 
    `year` VARCHAR(9) NOT NULL, 
    `planing_id` INTEGER NOT NULL
) ;


/* Table : planing */
DROP TABLE IF EXISTS `planing`;
CREATE TABLE planing (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT, 
    `day` CHAR(30) NOT NULL,
    `matter` VARCHAR(30) NOT NULL,
    `level` VARCHAR(30) NOT NULL,
    `employee_id` INTEGER, 
    `student_id` INTEGER NOT NULL
) ;
DROP TABLE IF EXISTS `contract`;
CREATE TABLE contract (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT, 
    `begin_date` DATE NOT NULL, 
    `end_date` DATE NULL, 
    `type` VARCHAR(100) NULL,
    `hourly_volume` FLOAT NOT NULL
) ;

   INSERT INTO `employee` (`firstname`, `lastname` , `gender`, `birthday`, `num_security`, `nationality`, `birth_country`, `email`, `phone`, `adress`, `navigo`, `contract_id`)
VALUES 
('Aicha', 'Abed', 'F', '1979-06-17', '279069935255192', 'française', 'Algérie', 'aichaabed@hotmail.fr', NULL, '19 rue des cités, 93300  Aubervilliers', 'N', 4),
('Aicha', 'Hmichane', 'F', '1975-05-04', '275059935034058', 'française', 'Maroc', 'hmichaneaicha@gmail.com', 0652447190, '93 rue des écoles, 93300  Aubervilliers', 'N', 8),
('Fatma', 'Alaya Ben Khalifa', 'F', '1981-06-16', '281039935114393', 'tunisienne', 'Tunisie', 'aziz93300@live.fr', NULL, '11 allée Nicolas de Stael, 93300 Aubervilliers', 'N', 1),
('Hafida', 'Jalal', 'F', '1976-11-01', '276119935059049', 'marocaine', 'Maroc', 'hafidajalal30@gmail.com', NULL, '162 rue des Cités, 93300  Aubervilliers', 'N', 7),
('Hasna', 'Makhlouk', 'F', '1984-06-06', '284069935052035', 'française', 'Maroc', 'mhaa-2@live.fr', NULL, '3 rue Réchossière, 93300 Aubervilliers', 'N', 2),
('Kamel', 'Hamrouni', 'H', '0000-00-00', '179109935102583', 'inconnue', 'inconnue', 'kamelh419@gmail.com', 0621126674, '34 rue du Goulet, 93300  Aubervilliers', 'N', 10),
('Mouctar', 'Nimaga', 'H', '1967-07-08', '167079932305872', 'française', 'République centrafricaine', 'mnimaga@gmail.com', '0760609512', '84 rue Sadi Carnot, 93300  Aubervilliers', 'N', 9),
('Nadia', 'Eisa', 'F', '1968-09-27', '268099935276874', 'algérienne', 'Algérie', 'haifnadia00@gmail.com', 0605765103, '76 boulevard Félix Faure, 93300  Aubervilliers', 'N', 5),
('Nour El Houda', 'Ben Mhenni', 'F', '1999-11-07', '299119935117385', 'tunisienne', 'Tunisie', 'benmhenninourelhouda@gmail.com', NULL, '16 rue Pompadour, 94290 Villeneuve-le-Roi', 'N', 7),
('Salem', 'Addali', 'H', '0000-00-00', '172119935136703', 'inconnue', 'inconnue', 'jamiladu93300@hotmail.fr', 0758105835, '2 place Jean Renoir, 93300  Aubervilliers', 'N', 10),
('Sana', 'Hamrouni', 'F', '1987-01-15', '287019935110202', 'tunisienne', 'Tunisie', 'sanasouissi1987@gmail.com', NULL, '56 rue des Cités, 93300  Aubervilliers', 'N', 6),
('Yasmina', 'Hocine', 'F', '1993-09-15', '293099935304725', 'algérienne', 'Algérie', 'hocine.yasmina.h@gmail.com', NULL, '5 rue Henri Murger, 93210  Saint-Denis', 'N', 3);


INSERT INTO `contract` (`begin_date`, `end_date`, `type`, `hourly_volume`) VALUES
('2022-10-01','2022-06-30',	'CDD', '72.20'),
('2022-10-01','2022-06-30',	'CDD', '62.78'),
('2022-10-01','2022-06-30',	'CDD', '58.60'),
('2022-10-01','2022-06-30',	'CDD', '51.27'),
('2022-10-01','2022-06-30',	'CDD', '33.49'),
('2022-10-01','2022-06-30',	'CDD', '13.60'),
('2022-10-01','2022-06-30',	'CDD', '27.21'),
('2022-10-01','2022-06-30',	'CDD', '119.29'),
('2022-10-01','2022-06-30',	'CDD', '146.50');

ALTER TABLE `employee`
ADD FOREIGN KEY (`contract_id`) REFERENCES 
ALTER TABLE `planing`
ADD FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`),
ADD FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

ALTER TABLE `salary`
ADD FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`);

ALTER TABLE `student`
ADD FOREIGN KEY (`planing_id`) REFERENCES `planing` (`id`);