CREATE TABLE if not exists `DOCTOR` (
  `Doc_id` INT NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Gender` varchar(45) NOT NULL,
  `PhNumber` DOUBLE NOT NULL,
  `Experience` INT NOT NULL,
  `Specialization` varchar(45) NOT NULL,
  `Shift` INT NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Salary` INT NOT NULL,
  
  PRIMARY KEY (`Doc_id`),
  UNIQUE KEY `Doctor_id_UNIQUE` (`Doc_id`),
  UNIQUE KEY `PhNumber_UNIQUE` (`PhNumber`),
  UNIQUE KEY `Email_id_UNIQUE` (`Email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ;




INSERT INTO Doctor(Doc_id, Name, Address, Gender, PhNumber, Experience, Specialization, Shift, Email_id)
VALUES
(1001, 'Dr.P.Ramanujam', '2 Park Avenue', 'Male', '908012345', 3, 'Nephrology', 2,'pramanujam@yahoo.com'),
(1002, 'Dr.A.Nandhini', '7 Bus Pass Street', 'Female', '967893546', 1, 'Psychology', 1,'nandhini@anniyan.com'),
(1003, 'Dr.R.Raghavan', '17 Kamal Nagar', 'Male', '962356235', 15, 'Opthalmologist', 3,'raghavan@ips.com'),
(1004, 'Dr.P.Kadhambari', '9 Pondi Nagar', 'Female', '936132842', 4, 'ENT', 1,'kadhambari@rojamail.com'),
(1005, 'Dr.K.Jessie', '2 SkyCross Avenue', 'Female', '908012365', 12, 'Cardiology', 2,'jessie@sky.com'),
(1006, 'Dr.M.Aravindhan', '24 Sri Nagar', 'Male', '904356365', 7, 'Pulmonology', 3,'araindhandoc@yahoo.com'),
(1007, 'Dr.A.Ravichandar', '5 Lakeview Avenue', 'Male', '967832365', 8, 'Orthopedic', 2,'ravi242@gmail.com');


SELECT * FROM DOCTOR;


