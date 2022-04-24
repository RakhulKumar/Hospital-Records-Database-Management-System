CREATE TABLE `HospitalManagement`.`PATIENT` (
  `Patient_id` INT NOT NULL,
  `D.O.B` DATETIME NOT NULL,
  `Gender` VARCHAR(45) NOT NULL,
  `Address` VARCHAR(45) NOT NULL,
  `Diagnosis` VARCHAR(45) NOT NULL,
  `PhNumber` VARCHAR(10) NOT NULL,
  `Age` INT NOT NULL,
  PRIMARY KEY (`Patient_id`),
  UNIQUE INDEX `Patient_id_UNIQUE` (`Patient_id` ASC) VISIBLE);
