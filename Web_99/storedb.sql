-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2020 lúc 05:17 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `storedb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `Position` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`, `Position`) VALUES
(1, 'DIET', 1),
(2, 'BIRTHDAY', 0),
(3, 'CUPCAKE', 3),
(5, 'DRINK', 4),
(6, 'COMBO', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `GroupID` int(11) NOT NULL,
  `GroupName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`GroupID`, `GroupName`) VALUES
(1, 'Admin'),
(3, 'Khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufacturers`
--

CREATE TABLE `manufacturers` (
  `ManufacturerID` int(11) NOT NULL,
  `ManufacturerName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `manufacturers`
--

INSERT INTO `manufacturers` (`ManufacturerID`, `ManufacturerName`) VALUES
(1, 'ABC Bakery'),
(2, 'Như Lan'),
(3, 'Brodard Bakery'),
(7, 'Tous les Jours'),
(8, 'Givral'),
(9, 'Dallas Cakes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderitems`
--

CREATE TABLE `orderitems` (
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orderitems`
--

INSERT INTO `orderitems` (`OrderID`, `ProductID`, `Quantity`) VALUES
(27, 33, 1),
(27, 34, 1),
(27, 36, 1),
(27, 37, 1),
(27, 38, 1),
(28, 24, 1),
(28, 25, 1),
(28, 34, 1),
(28, 35, 1),
(28, 36, 1),
(29, 30, 1),
(29, 32, 1),
(29, 33, 1),
(29, 34, 1),
(29, 35, 1),
(29, 36, 1),
(30, 28, 1),
(30, 38, 1),
(30, 39, 1),
(30, 40, 1),
(31, 38, 1),
(31, 39, 2),
(32, 38, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `AddedDate` datetime NOT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Sum` int(11) DEFAULT NULL,
  `Status` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`OrderID`, `UserID`, `AddedDate`, `Address`, `Phone`, `Sum`, `Status`) VALUES
(27, 23, '2020-07-03 11:27:34', 'Nhà nội', '109201920', 60600000, b'0'),
(28, 23, '2020-07-03 11:28:14', 'Ngoại tui mua cho tui', '92839283', 49690000, b'0'),
(29, 23, '2020-07-03 11:29:01', 'Trường tui', '9283928', 96800000, b'0'),
(30, 23, '2020-07-04 00:30:00', 'Nhà chú 5', '9283928', 63800000, b'0'),
(31, 23, '2020-07-04 10:01:05', 'Nhà tui', '9849839', 41800000, b'0'),
(32, 1, '2020-07-04 10:05:37', 'Nhà tui', '1298493', 13200000, b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ManufacturerID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ImageUrl` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL DEFAULT '0',
  `Quantity` int(11) NOT NULL DEFAULT '0',
  `Description` varchar(1000) NOT NULL,
  `Body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ProductID`, `ManufacturerID`, `CategoryID`, `ProductName`, `ImageUrl`, `Price`, `Quantity`, `Description`, `Body`) VALUES
(21, 1, 1, 'High Fiber Bread', '922795919m1.jpg', 79000, 10, ' N\'High Fiber được làm từ bột mì thô giàu chất xơ của Đức với hàm lượng chất xơ cao, nhiều hạt dinh dưỡng', 'Trọng lượng thô: 360 grams\r\nHình dáng: Ổ dài, chia thành 12 lát\r\nCalories ước tính: 202 – 225 calories/100 grams\r\nHạn Sử Dụng:\r\n- Dùng trong 4 ngày ở nhiệt độ phòng thoáng mát\r\n- Dùng trong 1 tháng ở ngăn đông, lưu ý cần cột kỹ miệng túi để tránh làm khô bánh'),
(22, 1, 1, 'Rye Caraway Bagels', '126189364m2.jpg', 80000, 10, 'Rye Bagel được làm từ bột mì đen, thêm bột mì protein cao và hạt thì là ba tư nổi tiếng', 'rọng lượng thô: 100 gram/cái\r\nHình dáng: Ổ tròn hình donut\r\nSố lượng: Túi 3 cái\r\nCalories ước tính: 259 – 280cal/100gr\r\nCách sử dụng:\r\n- Dùng bánh trong 3-4 ngày ở nơi khô thoáng kể từ ngày sản xuất\r\n- Dùng bánh trong 1 tháng ở ngăn đông kể từ ngày để vào ngăn đông'),
(23, 1, 1, 'Mocha Hazelnut Chiffon Cake', '1193827678m3.jpg', 250000, 10, 'Được làm từ bột bánh Chiffo thượng hạng kết hợp cùng vị thơm béo của hạt dẻ', ''),
(24, 2, 2, 'Crown Birthday Cake', '761400621m4.jpg', 690000, 10, 'Bánh Sinh Nhật Cao Tầng Vương Miện\r\n	 sang chảnh với bánh bông lan mịn xốp cùng lớp kem mềm mịn', ''),
(25, 2, 3, 'Bánh Cầu Vòng', '10883788422.jpg', 30000, 10, 'Chiếc bánh thơm ngon với lớp vỏ ngoài giòn rụm\r\n	 kết hơp với nhân bánh táo mềm mềm đặc trưng của táo Mỹ', ''),
(26, 1, 2, 'BlueBerry Coffee Cake', '1643007194s2.jpg', 400000, 10, 'Chiếc bánh vỏ ngoài giòn rụm kết hợp với\r\n	 những trái việt quất căng mọng đặc trưng khiến thực khách nhớ mãi.', ''),
(28, 8, 2, 'Orange Cranbery Tart', '826400613s7.jpg', 249000, 10, 'Bánh Tart Cam làm món đặc trưng của Lappetit. \r\n	Với hương vị thơm mát của cam kết hợp với vụn bánh Cookie trải đều trên bề mặt đẹp mắt', ''),
(29, 1, 1, 'Stripe Rubber Slide', '393316035.jpg', 6950000, 10, '', ''),
(30, 9, 3, 'WaterMelon Sorbet', '88579726712.jpg', 60000, 10, 'Sự thanh mát của dưa hấu kết hợp với \r\n	 vị mát lạnh của đá xay là sự lựa chọn hoàn hảo cho mùa hè nóng bức', ''),
(32, 7, 3, 'Vanilla Cupcake', '47590365314.jpg', 79000, 10, 'Vanila Cupcake với chất bánh mềm mại được làm từ tinh chất \r\n	trái Vani ngâm nhiều tháng, cho ra nước Vani thơm và an toàn cho thực khách', ''),
(33, 2, 3, 'Bánh Dâu', '16057033376.jpg', 39000, 10, '', ''),
(34, 2, 3, 'Bánh Chery Mĩ', '6784815137.jpg', 29000, 10, '', ''),
(35, 8, 5, 'Americano', '725899030americano.jpg', 25000, 10, '', ''),
(36, 8, 5, 'Coffee Latte', '127320449cafe_latte.jpg', 25000, 10, '', ''),
(37, 8, 5, 'Cappucino', '1710568483cappuccino.jpg', 25000, 10, '', ''),
(38, 8, 5, 'Latte Machiato', '1579086871latte_machiato.jpg', 25000, 10, '', ''),
(39, 8, 5, 'Expresso', '1994704226espresso.jpg', 25000, 10, '', ''),
(40, 1, 5, 'Coffee Mocha', '776358092cafe_mocha.jpg', 25000, 10, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `PassWord` varchar(32) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`UserID`, `GroupID`, `FullName`, `UserName`, `PassWord`, `Email`) VALUES
(1, 1, 'admin', 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'ynhup1999@gmail.com'),
(23, 3, 'Như', 'Như', 'c4ca4238a0b923820dcc509a6f75849b', 'meocon@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`GroupID`);

--
-- Chỉ mục cho bảng `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`ManufacturerID`);

--
-- Chỉ mục cho bảng `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`OrderID`,`ProductID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `UserID` (`UserID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `ManufacturerID` (`ManufacturerID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `GroupID` (`GroupID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `GroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `ManufacturerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`ManufacturerID`) REFERENCES `manufacturers` (`ManufacturerID`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`GroupID`) REFERENCES `groups` (`GroupID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
