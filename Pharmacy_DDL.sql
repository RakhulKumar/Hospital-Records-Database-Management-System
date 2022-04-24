CREATE TABLE `HospitalManagement`.`PHARMACY` (
  `Bill_number` INT NOT NULL,
  `Medicine` VARCHAR(45) NOT NULL,
  `Stock` INT NOT NULL,
  `Price` INT NOT NULL,
  `Patient_id` INT NOT NULL,
  `Doc_id` INT NOT NULL,
  `Patient_name` VARCHAR(45) NOT NULL,
  `TotalAmount` INT NOT NULL,
  PRIMARY KEY (`Bill_number`),
  UNIQUE INDEX `Bill_number_UNIQUE` (`Bill_number` ASC) VISIBLE,
  UNIQUE INDEX `Medicine_UNIQUE` (`Medicine` ASC) VISIBLE);