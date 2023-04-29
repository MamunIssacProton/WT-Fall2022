CREATE TABLE `bkash`.`activeDirectory` (`username` VARCHAR(11) NOT NULL , `password` VARCHAR(6) NOT NULL , `secAns` VARCHAR(20) NOT NULL , PRIMARY KEY (`username`(11))) ENGINE = InnoDB;


CREATE TABLE `bkash`.`agentsData` (`userID` VARCHAR(11) NOT NULL , `agentID` INT(4) NOT NULL , `agentName` VARCHAR(20) NOT NULL , `shopAddress` VARCHAR(20) NOT NULL , `transactionTier` INT(10) NOT NULL , PRIMARY KEY (`userID`(11))) ENGINE = InnoDB;

CREATE TABLE `bkash`.`balanceSheets` (`userID` VARCHAR(11) NOT NULL , `availableBalance` INT(6) NOT NULL , `currentLimit` INT(6) NOT NULL , `totalLimit` INT(6) NOT NULL , `due` INT(6) NOT NULL , PRIMARY KEY (`userID`(11))) ENGINE = InnoDB;


CREATE TABLE `bkash`.`transactionHistory` (`id` VARCHAR(6) NOT NULL , `sender` VARCHAR(11) NOT NULL , `reciever` VARCHAR(11) NOT NULL , `amount` VARCHAR(6) NOT NULL , `time` VARCHAR(120) NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `bkash`.`usersData` (`userID` VARCHAR(11) NOT NULL , `firstName` VARCHAR(15) NOT NULL , `lastName` VARCHAR(15) NOT NULL , `dob` VARCHAR(11) NOT NULL , `permanentAddress` VARCHAR(70) NOT NULL , `currentAddress` VARCHAR(70) NOT NULL , `primaryContact` VARCHAR(11) NOT NULL , `division` VARCHAR(10) NOT NULL , `district` VARCHAR(10) NOT NULL , `primaryEmail` VARCHAR(50) NOT NULL , PRIMARY KEY (`userID`(11))) ENGINE = InnoDB;

CREATE TABLE `bkash`.`businessInfo` (`agentNumber` VARCHAR(11) NOT NULL , `businessName` VARCHAR(50) NOT NULL , `businessAddress` VARCHAR(50) NOT NULL , `transactionTier` VARCHAR(20) NOT NULL , PRIMARY KEY (`agentNumber`(11))) ENGINE = InnoDB;

CREATE TABLE `bkash`.`basicInfo` (`agentNumber` VARCHAR(11) NOT NULL , `firstName` VARCHAR(20) NOT NULL , `lastName` VARCHAR(20) NOT NULL , `dob` VARCHAR(120) NOT NULL , `primaryContact` VARCHAR(11) NOT NULL , `gender` VARCHAR(10) NOT NULL , PRIMARY KEY (`agentNumber`(11))) ENGINE = InnoDB;

CREATE TABLE `bkash`.`contactInfo` (`agentNumber` VARCHAR(11) NOT NULL , `permanentAddress` VARCHAR(50) NOT NULL , `currentAddress` VARCHAR(50) NOT NULL , `division` VARCHAR(20) NOT NULL , `district` VARCHAR(20) NOT NULL , PRIMARY KEY (`agentNumber`(11))) ENGINE = InnoDB;


CREATE TABLE `bkash`.`billTransactionHistory` (`recipientNumber` VARCHAR(11) NOT NULL , `recipientName` VARCHAR(20) NOT NULL , `billtype` VARCHAR(20) NOT NULL , `subscription` VARCHAR(20) NOT NULL , `payOfMonth` INT(120) NOT NULL , `provider` VARCHAR(20) NOT NULL , `amount` VARCHAR(10) NOT NULL , `balanceAfterPayment` VARCHAR(10) NOT NULL , `limitAfterPayment` INT NOT NULL , PRIMARY KEY (`balanceAfterPayment`)) ENGINE = InnoDB;

CREATE TABLE `bkash`.`gasbillTransactionHistory` (`recipientNumber` VARCHAR(11) NOT NULL , `recipientName` VARCHAR(20) NOT NULL , `billtype` VARCHAR(20) NOT NULL , `subscription` VARCHAR(20) NOT NULL , `payOfMonth` INT(120) NOT NULL , `provider` VARCHAR(10) NOT NULL , `amount` VARCHAR(6) NOT NULL , `balanceAfterPayment` VARCHAR(10) NOT NULL , `limitAfterPayment` VARCHAR(10) NOT NULL ) ENGINE = InnoDB;


INSERT INTO billTransactionHistory (recipientNumber,recipientName,billtype,subscription,payOfMonth,provider,amount,balanceAfterPayment,limitAfterPayment) VALUES ('09434372','pro','prem','subs','12-20-2121','or','120','1222','12343');
