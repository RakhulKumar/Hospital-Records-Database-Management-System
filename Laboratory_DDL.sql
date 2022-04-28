CREATE TABLE IF NOT EXISTS `LABORATORY` (
  `Test_id` INT NOT NULL,
  `Test_name` VARCHAR(45) NOT NULL,
  `Lab_number` INT NOT NULL,
  `Patient_id` INT NOT NULL,
  `Patient_name` VARCHAR(45) NOT NULL,
  `Doc_id` INT NOT NULL,
  `Doc_name` VARCHAR(45) NOT NULL,
  `Date` DATETIME NOT NULL,
  `Lab_fee` VARCHAR(45) NOT NULL,
  UNIQUE INDEX `Test_id_UNIQUE` (`Test_id` ASC) VISIBLE,
  PRIMARY KEY (`Test_id`));