CREATE TABLE IF NOT EXISTS `PATIENT` (
  `Patient_id` INT NOT NULL,
  `Patient_name` VARCHAR(50) NOT NULL,
  `DOB` DATE NOT NULL,
  `Gender` VARCHAR(45) NOT NULL,
  `Address` VARCHAR(45) NOT NULL,
  `Diagnosis` VARCHAR(45) NOT NULL,
  `PhNumber` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`Patient_id`),
  UNIQUE INDEX `Patient_id_UNIQUE` (`Patient_id` ASC) VISIBLE);
   
/*
  insert into PATIENT (Patient_id, DOB, Gender, Address, Diagnosis, PhNumber, Patient_name) values
  (2001, '2001-10-21', 'Male', 'B3-11D Olympia Grande', 'Asthma', '9182736451','Pramodh'),
  (2002, '2001-09-19', 'Male', 'B3-11C Olympia Grande', 'Sore Throat', '927736451', 'Amudhapriyan'),
  (2003, '2002-05-02', 'Male', '7, Richard Avenue', 'Airline Fracture', '9992746233','Jashwanth'),  
  (2004, '2002-02-20', 'Male', 'B3-11B Olympia Grande', 'Aortic Valve Blockage', '9837426214', 'Ramakrishnan'),  
  (2005, '2001-06-09', 'Male', '10 Downing Street', 'Bronchial Ruptures', '9173647294', 'Rakhul'),  
  (2006, '2002-10-29', 'Female', '14 Spring View Road', 'Selective Amnesia', '7203986451', 'Sakthi'),   
  (2007, '2002-01-05', 'Male', '1, Sea Breeze Avenue', 'Kidney Failure', '912896451', 'Premchandran'),  
  (2008, '1994-05-23', 'Female', '24 Highrise Block', 'Borderline Personality Disorder', '918235451', 'Susan')
  ;
  */
  
  select * from patient
