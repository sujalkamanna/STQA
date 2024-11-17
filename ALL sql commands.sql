CREATE TABLE `blood_bank`.`donor_info` (`D_ID` INT NOT NULL AUTO_INCREMENT , `D_NAME` VARCHAR(40) NOT NULL , `D_DOB` DATE NOT NULL , `D_GENDER` VARCHAR(10) NOT NULL , `D_BLOOD_GP` VARCHAR(5) NOT NULL , `D_CONTACT_NO` VARCHAR(15) NOT NULL , `D_EMAIL_ID` VARCHAR(30) NOT NULL , `D_ADDRESS` VARCHAR(50) NOT NULL , PRIMARY KEY (`D_ID`)) ENGINE = InnoDB CHARSET=latin1 COLLATE latin1_swedish_ci;

CREATE TABLE `blood_bank`.`seeker_info` (`S_ID` INT NOT NULL AUTO_INCREMENT , `S_NAME` VARCHAR(40) NOT NULL , `S_CONTACT` VARCHAR(15) NOT NULL , `P_NAME` VARCHAR(40) NOT NULL , `P_DOB` DATE NOT NULL , `P_GENDER` VARCHAR(10) NOT NULL , `P_BG` VARCHAR(5) NOT NULL , `HOSPITAL_NAME` VARCHAR(40) NOT NULL , `HOSPITAL_ADD` VARCHAR(50) NOT NULL , `BLOOD_REQ_DATE` DATE NOT NULL , PRIMARY KEY (`S_ID`)) ENGINE = InnoDB CHARSET=latin1 COLLATE latin1_swedish_ci;

CREATE TABLE `blood_bank`.`hospital_info` (`H_ID` INT NOT NULL AUTO_INCREMENT , `H_NAME` VARCHAR(50) NOT NULL , `BLOOD_REQ_DATE` DATE NOT NULL , `REQ_BLOOD_GP` VARCHAR(5) NOT NULL , `NO_OF_UNITS` INT(4) NOT NULL , `H_CONTACT` VARCHAR(15) NOT NULL , `H_EMAIL` VARCHAR(40) NOT NULL , `H_ADD` VARCHAR(50) NOT NULL , PRIMARY KEY (`H_ID`)) ENGINE = InnoDB CHARSET=latin1 COLLATE latin1_swedish_ci;

CREATE TABLE `blood_bank`.`employee_info` (`EMP_ID` INT NOT NULL AUTO_INCREMENT , `EMP_NAME` VARCHAR(35) NOT NULL , `EMP_GENDER` VARCHAR(10) NOT NULL , `EMP_BG` VARCHAR(5) NOT NULL , `EMP_CONTACT` VARCHAR(15) NOT NULL , `EMP_EMAIL` VARCHAR(30) NOT NULL , `EMP_ADD` VARCHAR(50) NOT NULL , `EMP_USER_NAME` VARCHAR(15) NOT NULL , `EMP_PASS` VARCHAR(15) NOT NULL , `EMP_CPASS` VARCHAR(15) NOT NULL , PRIMARY KEY (`EMP_ID`)) ENGINE = InnoDB CHARSET=latin1 COLLATE latin1_swedish_ci;

CREATE TABLE `blood_bank`.`bloodstock` (`stock_id` INT NOT NULL AUTO_INCREMENT , `blood_g` VARCHAR(5) NOT NULL , `Status` VARCHAR(15) NOT NULL , `Quantity` INT(6) NOT NULL , PRIMARY KEY (`stock_id`)) ENGINE = InnoDB CHARSET=latin1 COLLATE latin1_swedish_ci;


INSERT INTO `bloodstock` (`stock_id`, `blood_g`, `Status`, `Quantity`) VALUES ('1', 'A+ve', 'Available', '25'), ('2', 'A-ve', 'Available', '10');

INSERT INTO `bloodstock` (`stock_id`, `blood_g`, `Status`, `Quantity`) VALUES ('5', 'AB+', 'Available', '40');

INSERT INTO `bloodstock` (`stock_id`, `blood_g`, `Status`, `Quantity`) VALUES ('6', 'AB-', 'Available ', '50');

INSERT INTO `bloodstock` (`stock_id`, `blood_g`, `Status`, `Quantity`) VALUES ('7', 'O+', 'Available', '70');

INSERT INTO `bloodstock` (`stock_id`, `blood_g`, `Status`, `Quantity`) VALUES ('8', 'O-', 'Available', '20');

INSERT INTO `donor_info` (`D_ID`, `D_NAME`, `D_DOB`, `D_GENDER`, `D_BLOOD_GP`, `D_CONTACT_NO`, `D_EMAIL_ID`, `D_ADDRESS`) VALUES (NULL, 'Viraj Manchekar', '1994-05-11', 'male', 'A+', '6514254521', 'virmanchekar@gmail.com', 'Shivane Pune-92');

INSERT INTO `employee_info` (`EMP_ID`, `EMP_NAME`, `EMP_GENDER`, `EMP_BG`, `EMP_CONTACT`, `EMP_EMAIL`, `EMP_ADD`, `EMP_USER_NAME`, `EMP_PASS`, `EMP_CPASS`) VALUES (NULL, 'Shital Manchekar', 'female ', 'B+', '4265889745', 'shital1445@gmail.com', 'Appar Pune-99', 'shital4567', '45678', '45678');

INSERT INTO `bloodstock` (`stock_id`, `blood_g`, `Status`, `Quantity`) VALUES (NULL, 'AB-', 'Available ', '30');

INSERT INTO `hospital_info` (`H_ID`, `H_NAME`, `BLOOD_REQ_DATE`, `REQ_BLOOD_GP`, `NO_OF_UNITS`, `H_CONTACT`, `H_EMAIL`, `H_ADD`) VALUES (NULL, 'Ruby Hospital', '2023-05-10', 'AB-', '25', '5485236584', 'rubyhospital@gmail.com', 'Swarget Pune - 43');

UPDATE `bloodstock` SET `Quantity` = '50' WHERE `bloodstock`.`stock_id` = 1;



CREATE TABLE `blood_bank`.`tri_upblst` (`id` INT NOT NULL AUTO_INCREMENT , `stock_id` INT NOT NULL , `blood_g` VARCHAR(5) NOT NULL , `action` VARCHAR(8) NOT NULL , `cdate` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TRIGGER `up_bl_st` AFTER UPDATE ON `bloodstock` FOR EACH ROW INSERT INTO tri_upblst VALUES(null, NEW.stock_id, NEW.blood_g, "Updated", NOW());

CREATE TABLE `blood_bank`.`tri_d` (`id` INT NOT NULL AUTO_INCREMENT , `D_id` INT NOT NULL , `D_blg` VARCHAR(5) NOT NULL , `action` VARCHAR(8) NOT NULL , `cdate` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TRIGGER `D_in_t` AFTER INSERT ON `donor_info` FOR EACH ROW INSERT INTO tri_d VALUES (null, NEW.D_ID, NEW.D_BLOOD_GP, "Inserted", NOW());

CREATE TRIGGER `delete_D_t` AFTER DELETE ON `donor_info` FOR EACH ROW INSERT INTO tri_d VALUES(null, OLD.D_ID, OLD.D_BLOOD_GP, "DELETED", NOW());