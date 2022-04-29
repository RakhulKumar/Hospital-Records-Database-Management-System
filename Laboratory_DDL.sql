CREATE TABLE IF NOT EXISTS `LABORATORY` (
  `Test_id` INT NOT NULL,
  `Test_name` VARCHAR(45) NOT NULL,
  `Lab_number` INT NOT NULL,
  `Patient_id` INT NOT NULL,
  `Patient_name` VARCHAR(45) NOT NULL,
  `Doc_id` INT NOT NULL,
  `Doc_name` VARCHAR(45) NOT NULL,
  `Date` DATE NOT NULL,
  `Test_fee` INT NOT NULL,
  FOREIGN KEY (Patient_id) REFERENCES PATIENT(Patient_id),
  FOREIGN KEY (Doc_id) REFERENCES DOCTOR(Doc_id),
  UNIQUE INDEX `Test_id_UNIQUE` (`Test_id` ASC) VISIBLE,
  PRIMARY KEY (`Test_id`));
  
  insert into laboratory (Test_id, Test_name, Lab_number, Patient_id, Patient_name, Doc_id, Doc_name, Date, test_fee) values
  (3001, 'blood_test', 501, 2001, 'Pramodh', 1006, 'Dr.M.Aravindhan', '2022-04-15', 300),
  (3002, 'x-ray', 502, 2002, 'Jashwanth', 1007, 'Dr.A.Ravichandar', '2022-04-17', 650),
  (3003, 'brain_scan', 505, 2006, 'Sakthi', 1002, 'Dr.A.Nandhini', '2022-04-16', 750),
  (3004, 'echocardiograph', 503, 2004, 'Ramakrishnan', 1005, 'Dr.K.Jessie', '2022-04-18', 1100),
  (3005, 'kidney_function_test', 504, 2007, 'Premchandran', 1001, 'Dr.P.Ramanujam', '2022-04-21', 950); 
  
  
  