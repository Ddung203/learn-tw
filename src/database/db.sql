-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 29, 2023 lúc 05:31 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_nhom_14`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booktype`
--

CREATE TABLE `booktype` (
  `BookTypeID` int(11) NOT NULL,
  `BookTypeName` varchar(255) NOT NULL COMMENT 'Tên loại sách'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `booktype`
--

INSERT INTO `booktype` (`BookTypeID`, `BookTypeName`) VALUES
(1, 'Sách Văn học');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `CartID` int(11) NOT NULL,
  `ProductID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `issuingcompany`
--

CREATE TABLE `issuingcompany` (
  `IssuingCompanyID` int(11) NOT NULL,
  `IssuingCompanyName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `issuingcompany`
--

INSERT INTO `issuingcompany` (`IssuingCompanyID`, `IssuingCompanyName`) VALUES
(1, 'Cong ty phat hanh 1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productimg`
--

CREATE TABLE `productimg` (
  `ProductImgUrlID` int(11) NOT NULL,
  `Url` varchar(1000) NOT NULL,
  `ProductID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `ProductID` int(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Price` double NOT NULL,
  `Description` varchar(255) NOT NULL,
  `PublishingCompany` varchar(255) NOT NULL COMMENT 'Nhà xuất bản',
  `IssuingCompanyID` int(11) NOT NULL COMMENT 'Công ty phát hành ID dùng dể liên kết với bản Công ty phát hành',
  `PageCounts` double NOT NULL,
  `CoverType` varchar(255) NOT NULL,
  `OldPrice` int(11) NOT NULL COMMENT 'Giá gốc',
  `BookTypeID` int(11) NOT NULL,
  `ShopID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `Price`, `Description`, `PublishingCompany`, `IssuingCompanyID`, `PageCounts`, `CoverType`, `OldPrice`, `BookTypeID`, `ShopID`) VALUES
(1, 'san pham 1', 1000, 'Mo ta san pham 1', 'Nha phat hanh 1', 1, 100, 'Bia mem', 1100, 1, 1),
(4, 'san pham 12', 2000, 'Mo ta san pham 12', 'Nha phat hanh 12', 1, 100, 'Bia cung', 1100, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop`
--

CREATE TABLE `shop` (
  `FollowCount` double NOT NULL,
  `ShopID` int(11) NOT NULL,
  `NameShop` varchar(255) NOT NULL,
  `Rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `shop`
--

INSERT INTO `shop` (`FollowCount`, `ShopID`, `NameShop`, `Rating`) VALUES
(89, 1, 'Nha sach 1', 5),
(89, 2, 'Nha sach 1', 4.5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `CartID` int(11) NOT NULL,
  `role` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `phone`, `address`, `email`, `password`, `CartID`, `role`) VALUES
(1, 'admin', '', '', 'admin@admin.com', 'admin', 0, b'1'),
(24, 'Duong Dung', '', '', 'ddung203.contact@gmail.com', '123', 0, b'0'),
(25, 'dung', '', '', 'duongvandung2k3@gmail.com', '123', 0, b'0'),
(26, 'test', '', '', 'duong2k3@gmail.com', '123', 0, b'0'),
(27, 'duongvdung', '', '', 'cuoicuoi1000@gmail.com', '123', 0, b'0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booktype`
--
ALTER TABLE `booktype`
  ADD PRIMARY KEY (`BookTypeID`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`),
  ADD KEY `fk_cart_product` (`ProductID`);

--
-- Chỉ mục cho bảng `issuingcompany`
--
ALTER TABLE `issuingcompany`
  ADD PRIMARY KEY (`IssuingCompanyID`);

--
-- Chỉ mục cho bảng `productimg`
--
ALTER TABLE `productimg`
  ADD PRIMARY KEY (`ProductImgUrlID`),
  ADD KEY `fk_product_productimg` (`ProductID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `fk_product_issuing` (`IssuingCompanyID`),
  ADD KEY `fk_products_shop` (`ShopID`),
  ADD KEY `fk_booktype_products` (`BookTypeID`);

--
-- Chỉ mục cho bảng `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`ShopID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `idx_user_cart` (`CartID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booktype`
--
ALTER TABLE `booktype`
  MODIFY `BookTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `CartID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `issuingcompany`
--
ALTER TABLE `issuingcompany`
  MODIFY `IssuingCompanyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `productimg`
--
ALTER TABLE `productimg`
  MODIFY `ProductImgUrlID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `shop`
--
ALTER TABLE `shop`
  MODIFY `ShopID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_product` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`),
  ADD CONSTRAINT `fk_user_cart` FOREIGN KEY (`CartID`) REFERENCES `users` (`CartID`);

--
-- Các ràng buộc cho bảng `productimg`
--
ALTER TABLE `productimg`
  ADD CONSTRAINT `fk_product_productimg` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_booktype_products` FOREIGN KEY (`BookTypeID`) REFERENCES `booktype` (`BookTypeID`),
  ADD CONSTRAINT `fk_product_issuing` FOREIGN KEY (`IssuingCompanyID`) REFERENCES `issuingcompany` (`IssuingCompanyID`),
  ADD CONSTRAINT `fk_products_shop` FOREIGN KEY (`ShopID`) REFERENCES `shop` (`ShopID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
