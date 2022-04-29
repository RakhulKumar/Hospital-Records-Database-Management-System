CREATE TABLE if not exists `PHARMACY` (
  `Med_id` INT NOT NULL,
  `Med_name` VARCHAR(45) NOT NULL,
  `Med_type` VARCHAR(45) NOT NULL,
  `Quantity` VARCHAR(45) NOT NULL,
  `Price` VARCHAR(45) NOT NULL,
  `Expiry_date` DATE NOT NULL,
  `Storage_temp` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Med_id`));
  

  insert into PHARMACY (Med_id, Med_name, Med_type, Quantity, Price, Expiry_date, Storage_temp) values
  (67001, 'Xoloft 35', 'Tablet', 17, 37, '2023-09-09', '25°C'),
  (62003, 'Benadryl', 'Syrup', 55, 100, '2023-04-05', '25°C'),
  (64034, 'Flumazenil 0.1', 'Injection', 20, 150, '2023-01-01', '5°C'),
  (67007, 'Penicillamine 250', 'Tablet', 70, 100, '2022-09-08', '30°C'),
  (64032, 'Naloxone 0.4', 'Injection', 34, 220, '2022-07-06', '15°C'), 
  (64004, 'Phenobarbitone 200', 'Injection', 30, 75, '2023-05-06', '15°C'),
  (67004, 'Phenobarbitone 30', 'Tablet', 30, 75, '2023-05-06', '30°C'),
  (62004, 'Phenobarbitone 20', 'Syrup', 30, 75, '2023-05-06', '30°C'),
  (64011, 'Lorazepam 2', 'Injection', 10, 175, '2023-06-05','3°C'), 
  (67015, 'Praziquantel 600', 'Tablet', 100, 300, '2022-10-07','25°C'),
  (62005, 'Amoxicillin 125 ', 'Syrup', 15, 375, '2022-11-07','27°C')
  ;


  select * from PHARMACY
