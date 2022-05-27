CREATE TABLE IF NOT EXISTS `ADMIN` (
  `Admin_id` INT NOT NULL,
  `Name` VARCHAR(45) NOT NULL,
  `Age` INT NOT NULL,
  `Gender` VARCHAR(45) NOT NULL,
  `PhNumber` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`Admin_id`),
  UNIQUE INDEX `Admin_id_UNIQUE` (`Admin_id` ASC) VISIBLE);
  
  insert into admin (admin_id, name, age, gender, PhNumber) values
  (9001, 'M.Dharmalingam', 52, 'Male', '9629426743'),
  (9002, 'S.Priyadharshini', 45, 'Female', '9555283488'),
  (9003, 'A.Natarajan', 47, 'Male', '9443234545');
  