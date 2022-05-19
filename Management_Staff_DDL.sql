CREATE TABLE `hospital_management`.`management_staff` (
  `Staff_id` INT NOT NULL,
  `Staff_name` VARCHAR(20) NOT NULL,
  `Age` INT NOT NULL,
  `Gender` VARCHAR(10) NOT NULL,
  `Address` VARCHAR(45) NOT NULL,
  `Salary` INT NOT NULL,
  `PhNumber` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`Staff_id`));
  
  insert into management_staff (Staff_id, Staff_name, Age, Gender, Address, Salary, PhNumber) values
  (8001, 'A.Ahmad', 21, 'Male', '16 Nehru Street', 10000, 8975461432),
  (8002, 'C.Guru', 20, 'Male', '12 Gandhi Street', 9000, 8975235343),
  (8003, 'B.Kavya', 19, 'Female', '13 Patel Street', 85000, 8975678432),
  (8004, 'D.Priya', 20, 'Female', '21 Murugan Street', 9000, 8974531432),
  (8005, 'F.Ravi', 21, 'Male', '29 Lake Street', 10000, 8975466782),
  (8006, 'E.Karthik', 20, 'Male', '31 Nanak Street', 13000, 8947861432),
  (8007, 'H.Mani', 21, 'Male', '15 Highpoint Street', 14000, 8901461432),
  (8008, 'G.Gautham', 19, 'Male', '14 Cherry Street', 10000, 8923461432);
  
  CREATE TABLE `hospital_management`.`receptionist` (
  `Rec_id` INT NOT NULL,
  `Staff_id` INT NOT NULL,
  `Shift` INT NOT NULL,
  `Working_Years` INT NOT NULL,
  PRIMARY KEY (`Rec_id`),
  FOREIGN KEY (Staff_id) REFERENCES management_staff(Staff_id));
  
  insert into receptionist (Rec_id, Staff_id, Shift, Working_Years) values
  (8101, 8001, 1, 3),
  (8102, 8002, 2, 2);

CREATE TABLE `hospital_management`.`nurse` (
  `Nurse_id` INT NOT NULL,
  `Staff_id` INT NOT NULL,
  `Shift` INT NOT NULL,
  `Working_Years` INT NOT NULL,
  PRIMARY KEY (`Nurse_id`),
  FOREIGN KEY (Staff_id) REFERENCES management_staff(Staff_id));
  
  insert into nurse (Nurse_id, Staff_id, Shift, Working_Years) values
  (8201, 8003, 1, 1),
  (8202, 8004, 2, 2);
  
  CREATE TABLE `hospital_management`.`lab_staff` (
  `Labstaff_id` INT NOT NULL,
  `Staff_id` INT NOT NULL,
  `Shift` INT NOT NULL,
  `Working_Years` INT NOT NULL,
  PRIMARY KEY (`Labstaff_id`),
  FOREIGN KEY (Staff_id) REFERENCES management_staff(Staff_id));
  
  insert into lab_staff (Labstaff_id, Staff_id, Shift, Working_Years) values
  (8301, 8005, 1, 3),
  (8302, 8006, 2, 2);
  
  CREATE TABLE `hospital_management`.`pharmacist` (
  `Pharm_id` INT NOT NULL,
  `Staff_id` INT NOT NULL,
  `Shift` INT NOT NULL,
  `Working_Years` INT NOT NULL,
  PRIMARY KEY (`Pharm_id`),
  FOREIGN KEY (Staff_id) REFERENCES management_staff(Staff_id));
  
  insert into receptionist (Rec_id, Staff_id, Shift, Working_Years) values
  (8401, 8007, 1, 3),
  (8402, 8008, 2, 1);
  
  


