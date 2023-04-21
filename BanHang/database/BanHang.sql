
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Hẻm Decor`
--

DROP DATABASE IF EXISTS BanHang;
CREATE DATABASE BanHang;
USE BanHang;




-- --------------------------------------------------------
--
-- Table structure for table `Account`
--
CREATE TABLE IF NOT EXISTS `Account`(
AccountID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
AccName VARCHAR(30) NOT NULL,
AccPassword  VARCHAR(20) NOT NULL,
AccPhoneNo VARCHAR(10) NOT NULL UNIQUE KEY,
AccEmail VARCHAR(50) NOT NULL UNIQUE KEY
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Account`
--
INSERT INTO `Account`(AccName, AccPassword, AccPhoneNo, AccEmail) VALUES
("Ngọc Yến", 'NgocYen*2102', '0963566858', 'ngocyen210201@gmail.com'),
("Hoài Thu", 'HoaiThu*2811', '0962370612', 'hoaithu281101@gmail.com'),
("Hiền Thanh", 'HienThanh*1903', '0962156842', 'hienthanh190301@gmail.com');

-- --------------------------------------------------------
--
-- Table structure for table `Admin`
--
CREATE TABLE IF NOT EXISTS `Categories`(
CategoryID VARCHAR(10) NOT NULL PRIMARY KEY,
CategoryName VARCHAR(200) NOT NULL,
ThumbnailImage VARCHAR(50) NOT NULL,
CreateDate timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
)
ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;

INSERT INTO `Categories` (CategoryID, CategoryName, ThumbnailImage) VALUES
('Com1','Cơm Chiên Hải Sản', 'Cơm chiên hải sản.jpg'),
('Com2','Cơm Chiên Xúc Xích', 'Cơm chiên xúc xích.jpg'),
('Com3','Cơm Gà Xối Mỡ', 'Cơm gà xối mỡ.jpg'),
('Com4','Cơm Rang Dưa Bò', 'Cơm rang dưa bò.jpg'),
('Com5','Cơm Rang Dương Châu', 'Cơm rang Dương Châu.jpg'),
('Com6','Cơm Rang Thập Cẩm', 'Cơm Rang Thập Cẩm.jpg'),
('Com7','Cơm Tấm Thịt Nướng', 'Cơm tấm thịt nướng.jpg');

CREATE TABLE IF NOT EXISTS Product(
CategoryID VARCHAR(10) NOT NULL,
ProductID VARCHAR(10) NOT NULL PRIMARY KEY,
ProductName VARCHAR(255) NOT NULL,
Price INT UNSIGNED NOT NULL,
ProductQuantity INT UNSIGNED NOT NULL,
CreateDate timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
FOREIGN KEY (CategoryID) REFERENCES Categories(CategoryID) ON DELETE CASCADE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;

INSERT INTO Product (CategoryID, ProductID, ProductName, Price, ProductQuantity) VALUES
('Com1', 'Com1', 'Cơm chiên hải sản', 25000, 3),
('Com2', 'Com2', 'Cơm chiên xúc xích', 30000, 5),
('Com3', 'Com3', 'Cơm gà xối mỡ', 65000, 7),
('Com4', 'Com4', 'Cơm rang dưa bò', 25000, 8),
('Com5', 'Com5', 'Cơm rang Dương Châu', 45000, 8),
('Com6', 'Com6', 'Cơm Rang Thập Cẩm', 20000, 9),
('Com7', 'Com7', 'Cơm tấm thịt nướng', 40000, 10);

CREATE TABLE `Order` (
OrderID varchar(50) NOT NULL,
Cost float NOT NULL,
Total int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Order` (`OrderID`,`Cost`, `Total`) VALUES
('7dtu3q', 900000, 4);


CREATE TABLE `Order_Details` (
  AccountID int(255) NOT NULL,
  ProductID varchar(30) NOT NULL,
  amount int(255) NOT NULL, 
  Cost float NOT NULL,
  CustomerName varchar(50) NOT NULL,
  CustomerPhoneNo varchar(50) NOT NULL,
  CustomerAddress varchar(255) NOT NULL,
  OrderDate timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  OrderID varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `Order_Details` (`AccountID`, `ProductID`, `amount`, `Cost`, `CustomerName`, `CustomerPhoneNo`, `CustomerAddress`, `OrderID`) VALUES
(1, 'Com1', 4, 3600000, 'Nguyễn Trọng Chính', '0986477228', 'Nam Từ Liêm - Hà Nội', '7dtu3q');

CREATE TABLE IF NOT EXISTS `Cart` (
  AccountID INT NOT NULL,
  ProductID VARCHAR(10) NOT NULL, 
  ProductQuantity INT NOT NULL,
  FOREIGN KEY (AccountID) REFERENCES `Account` (AccountID) ON DELETE CASCADE)
  ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 ;


INSERT INTO `Cart` (`AccountID`, `ProductID`,`ProductQuantity`) VALUES
(1, 'Com1', 4);



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





