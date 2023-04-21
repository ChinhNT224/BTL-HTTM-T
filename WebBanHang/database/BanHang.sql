
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


DROP DATABASE IF EXISTS BanHang;
CREATE DATABASE BanHang;
USE BanHang;

-- --------------------------------------------------------
--
-- Table structure for table `Manager`
--
CREATE TABLE IF NOT EXISTS `Manager`(
ManagerID VARCHAR(6) NOT NULL PRIMARY KEY,
ManagerName VARCHAR(30) NOT NULL,
ManagerPassword  VARCHAR(20),
ManagerLogInName VARCHAR(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Manager`
--
INSERT INTO `Manager` VALUES
('MA01', 'Chính', '123456', 'ChinhNT');

-- --------------------------------------------------------
--
-- Table structure for table `Sales`
--
CREATE TABLE IF NOT EXISTS `Sales`(
SalesID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
ManagerID VARCHAR(6) NOT NULL,
AccName VARCHAR(30) NOT NULL,
AccPassword  VARCHAR(20) NOT NULL,
AccPhoneNo VARCHAR(10) NOT NULL UNIQUE KEY,
AccEmail VARCHAR(50) NOT NULL UNIQUE KEY,
salary_unit INT NOT NULL,
total_hours INT NOT NULL,
FOREIGN KEY (ManagerID) REFERENCES `Manager` (ManagerID) ON DELETE CASCADE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Sales`
--
INSERT INTO `Sales`(ManagerID, AccName, AccPassword, AccPhoneNo, AccEmail) VALUES
("MA01", "Ngọc Yến", 'NgocYen*2102', '0963566858', 'ngocyen210201@gmail.com'),
("MA01", "Hoài Thu", 'HoaiThu*2811', '0962370612', 'hoaithu281101@gmail.com'),
("MA01", "Hiền Thanh", 'HienThanh*1903', '0962156842', 'hienthanh190301@gmail.com');

-- --------------------------------------------------------
--
-- Table structure for table `Admin`
--
CREATE TABLE IF NOT EXISTS `Categories`(
CategoryID VARCHAR(10) NOT NULL PRIMARY KEY,
ManagerID VARCHAR(6) NOT NULL,
CategoryName VARCHAR(200) NOT NULL,
ThumbnailImage VARCHAR(50) NOT NULL,
CreateDate timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
FOREIGN KEY (ManagerID) REFERENCES `Manager` (ManagerID) ON DELETE CASCADE
)
ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;

INSERT INTO `Categories` (ManagerID, CategoryID, CategoryName, ThumbnailImage) VALUES
("MA01", 'Com1','Cơm Chiên Hải Sản', 'Cơm chiên hải sản.jpg'),
("MA01", 'Com2','Cơm Chiên Xúc Xích', 'Cơm chiên xúc xích.jpg'),
("MA01", 'Com3','Cơm Gà Xối Mỡ', 'Cơm gà xối mỡ.jpg'),
("MA01", 'Com4','Cơm Rang Dưa Bò', 'Cơm rang dưa bò.jpg'),
("MA01", 'Com5','Cơm Rang Dương Châu', 'Cơm rang Dương Châu.jpg'),
("MA01", 'Com6','Cơm Rang Thập Cẩm', 'Cơm Rang Thập Cẩm.jpg'),
("MA01", 'Com7','Cơm Tấm Thịt Nướng', 'Cơm tấm thịt nướng.jpg');

CREATE TABLE IF NOT EXISTS Product(
CategoryID VARCHAR(10) NOT NULL,
ProductID VARCHAR(10) NOT NULL PRIMARY KEY,
ManagerID VARCHAR(6) NOT NULL,
ProductName VARCHAR(255) NOT NULL,
Price INT UNSIGNED NOT NULL,
ProductQuantity INT UNSIGNED NOT NULL,
Date_expired DATE NOT NULL,
FOREIGN KEY (CategoryID) REFERENCES `Categories` (CategoryID) ON DELETE CASCADE,
FOREIGN KEY (ManagerID) REFERENCES `Manager` (ManagerID) ON DELETE CASCADE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;

INSERT INTO Product (ManagerID, CategoryID, ProductID, ProductName, Price) VALUES
("MA01", 'Com1', 'Com1', 'Cơm chiên hải sản', 25000),
("MA01", 'Com2', 'Com2', 'Cơm chiên xúc xích', 30000),
("MA01", 'Com3', 'Com3', 'Cơm gà xối mỡ', 65000),
("MA01", 'Com4', 'Com4', 'Cơm rang dưa bò', 25000),
("MA01", 'Com5', 'Com5', 'Cơm rang Dương Châu', 45000),
("MA01", 'Com6', 'Com6', 'Cơm Rang Thập Cẩm', 20000),
("MA01", 'Com7', 'Com7', 'Cơm tấm thịt nướng', 40000);

CREATE TABLE `Bill` (
OrderID varchar(50) NOT NULL PRIMARY KEY,
ManagerID VARCHAR(6) NOT NULL,
Total int(11) NOT NULL,
SalesID int(255) NOT NULL,
ProductID varchar(30) NOT NULL,
amount int(255) NOT NULL, 
Cost float NOT NULL,
CustomerName varchar(50) NOT NULL,
CustomerPhoneNo varchar(50) NOT NULL,
CustomerAddress varchar(255) NOT NULL,
CreateDate timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
FOREIGN KEY (SalesID) REFERENCES `Sales` (SalesID) ON DELETE CASCADE,
FOREIGN KEY (ProductID) REFERENCES `Product` (ProductID) ON DELETE CASCADE,
FOREIGN KEY (ManagerID) REFERENCES `Manager` (ManagerID) ON DELETE CASCADE)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





CREATE TABLE IF NOT EXISTS `Cart` (
  SalesID INT NOT NULL,
  ProductID VARCHAR(10) NOT NULL, 
  ManagerID VARCHAR(6) NOT NULL,
  ProductQuantity INT NOT NULL,
  FOREIGN KEY (SalesID) REFERENCES `Sales` (SalesID) ON DELETE CASCADE,
  FOREIGN KEY (ManagerID) REFERENCES `Manager` (ManagerID) ON DELETE CASCADE)
  ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 ;






-- --------------------------------------------------------
--
-- Table structure for table `Admin`
--
CREATE TABLE IF NOT EXISTS `Admin`(
AdminID VARCHAR(6) NOT NULL PRIMARY KEY,
AdminName VARCHAR(30) NOT NULL,
AdminPassword  VARCHAR(20),
AdminLogInName VARCHAR(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` VALUES
('ADM01', 'Admin', '123456', 'Admin');





