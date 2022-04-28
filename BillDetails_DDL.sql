CREATE TABLE IF NOT EXISTS `BILL_DETAILS` (
  `Test_id` INT NOT NULL,
  `Bill_no` INT NOT NULL,
  `Doc_name` VARCHAR(45) NOT NULL,
  `Doc_id` VARCHAR(45) NULL,
  `Patient_name` VARCHAR(45) NOT NULL,
  `Patient_id` INT NOT NULL,
  `Consultant_fee` INT NULL,
  `Date` DATETIME NOT NULL,
  `Test_fee` INT NULL,
  UNIQUE INDEX `Labtest_id_UNIQUE` (`Test_id` ASC) VISIBLE,
  PRIMARY KEY (`Bill_no`),
  UNIQUE INDEX `Bill_no_UNIQUE` (`Bill_no` ASC) VISIBLE);
  
  
  
  