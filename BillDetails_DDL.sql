CREATE TABLE IF NOT EXISTS `BILL_DETAILS` (
  `Test_id` INT NOT NULL,
  `Bill_no` INT NOT NULL,
  `Doc_name` VARCHAR(45) NOT NULL,
  `Doc_id` INT NOT NULL,
  `Patient_name` VARCHAR(45) NOT NULL,
  `Patient_id` INT NOT NULL,
  `Consultant_fee` INT NULL,
  `Date` DATE NOT NULL,
  `Test_fee` INT NULL,
  FOREIGN KEY (Patient_id) REFERENCES PATIENT(Patient_id),
  FOREIGN KEY (Doc_id) REFERENCES DOCTOR(Doc_id),
  FOREIGN KEY (Test_id) REFERENCES LABORATORY(Test_id),
  PRIMARY KEY (`Bill_no`),
  UNIQUE INDEX `Labtest_id_UNIQUE` (`Test_id` ASC) VISIBLE,
  UNIQUE INDEX `Bill_no_UNIQUE` (`Bill_no` ASC) VISIBLE);
  
  insert into bill_details (Test_id, Bill_no, Doc_name, Doc_id, Patient_name, Patient_id, Consultant_fee, Date, Test_fee) values
  (3001, 5001, 'Dr.M.Aravindhan', 1006, 'Pramodh', 2001, 400, '2022-04-15', 300),
  (3002, 5002, 'Dr.A.Ravichandar', 1007, 'Jashwanth', 2002, 300, '2022-04-17', 650),
  (3003, 5003, 'Dr.A.Nandhini', 1002, 'Sakthi', 2006, 350, '2022-04-16', 750),
  (3004, 5004, 'Dr.K.Jessie', 1005, 'Ramakrishnan', 2004, 500, '2022-04-18', 1100),
  (3005, 5005, 'Dr.P.Ramanujam', 1001, 'Premchandran', 2007, 450, '2022-04-21', 950); 
  
  