CREATE TABLE IF NOT EXISTS `HospitalManagement`.`PATIENT` (
  `Patient_id` INT NOT NULL,
  `D.O.B` DATETIME NOT NULL,
  `Gender` VARCHAR(45) NOT NULL,
  `Address` VARCHAR(45) NOT NULL,
  `Diagnosis` VARCHAR(45) NOT NULL,
  `PhNumber` VARCHAR(10) NOT NULL,
  `Age` INT NOT NULL,
  PRIMARY KEY (`Patient_id`),
  UNIQUE INDEX `Patient_id_UNIQUE` (`Patient_id` ASC) VISIBLE);
   /* 
  alter table PATIENT add Patient_name varchar(45);
  alter table PATIENT drop column Age;
    */

  insert into PATIENT (Patient_id, D.O.B, Gender, Address, Diagnosis, PhNumber, Patient_name) values
  (2001, '21-10-2001', 'Male', 'B3-11D Olympia Grande', 'Asthma', '9182736451','Pramodh'),
  (2002, '19-09-2001', 'Male', 'B3-11C Olympia Grande', 'Sore Throat', '927736451', 'Amudhapriyan'),
  (2003, '02-05-2001', 'Male', '7, Richard Avenue', 'Airline Fracture', '9992746233','Jashwanth'),  
  (2004, '20-02-2002', 'Male', 'B3-11B Olympia Grande', 'Aortic Valve Blockage', '98837426214', 'Ramakrishnan'),  
  (2005, '09-06-2001', 'Male', '10 Downing Street', 'Bronchial Ruptures', '9173647294', 'Rakhul'),  
  (2006, '29-10-2002', 'Female', '14 Spring View Road', 'Selective Amnesia', '7203986451', 'Sakthi'),   
  (2007, '05-01-2002', 'Male', '1, Sea Breeze Avenue', 'Kidney Failure', '912896451', 'Premchandran'),  
  (2008, '23-05-1994', 'Female', '24 Highrise Block', 'Borderline Personality Disorder', '918235451', 'Susan')
  ;
  

  
  select * from patient
