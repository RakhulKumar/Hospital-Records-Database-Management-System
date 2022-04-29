 
CREATE TABLE IF NOT EXISTS `ROOM` (
  `Room_no` INT NOT NULL,
  `Ward` VARCHAR(45) NOT NULL,
  `Type` VARCHAR(45) NOT NULL,
  `Patient_id` INT NOT NULL,
  `Doc_id` int NULL,
  PRIMARY KEY (`Room_no`),
  FOREIGN KEY (Patient_id) REFERENCES PATIENT(Patient_id),
  FOREIGN KEY (Doc_id) REFERENCES DOCTOR(Doc_id),
  UNIQUE INDEX `Room_no_UNIQUE` (`Room_no` ASC) VISIBLE);
  

 

INSERT INTO ROOM(Room_no, Ward, Type, Patient_id, Doc_id)
VALUES
(1001,'G-Ward','NonAC-Double-Sharing',2001,1004),
(7001,'E-Ward','Executive',2004,1002),
(2011,'J-Ward','Private',2003,1003),
(2001,'J-Ward','Semi-Private',2002,1005),
(1011,'G-Ward','AC-Double-Sharing',2005,1001);


SELECT * FROM ROOM;

