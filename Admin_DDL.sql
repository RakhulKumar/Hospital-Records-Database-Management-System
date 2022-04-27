CREATE TABLE `HospitalManagement`.`ADMIN` (
  `Admin_id` VARCHAR(10) NOT NULL,
  `Name` VARCHAR(45) NOT NULL,
  `Age` INT NOT NULL,
  `Gender` VARCHAR(45) NOT NULL,
  `PhNumber` INT NOT NULL,
  PRIMARY KEY (`Admin_id`),
  UNIQUE INDEX `Admin_id_UNIQUE` (`Admin_id` ASC) VISIBLE);