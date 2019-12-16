--New version
-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2019 lúc 10:59 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `libmanagement`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `bookID` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `bookName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `puslisher` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `categoryID` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `numofpage` int(11) UNSIGNED DEFAULT NULL,
  `maxdate` int(11) UNSIGNED DEFAULT NULL,
  `num` int(11) UNSIGNED DEFAULT NULL,
  `summary` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`bookID`, `bookName`, `puslisher`, `author`, `categoryID`, `numofpage`, `maxdate`, `num`, `summary`, `picture`) VALUES
('a12', 'avafff', 'av', 'av', 'CSD', 45, 125, 55, '65', 'logo.png'),
('a3', 'Tôi thấy hoa vàng trên cỏ', 'Nhà xuất bản trẻ', 'Nguyễn Nhật Ánh', 'VPP', 96, 12, 7, 'Nguyễn Nhật Ánh', 'img11.png'),
('CSD001', 'Cơ sở dữ liệu', 'NXB Giáo dục', 'Ðỗ Trung Tấn', 'CSD', 200, 3, 3, 'Thiết kế CSDL', 'logo1.jpg'),
('CSD002', 'SQL Server 7.0', 'NXB Ðồng Nai', 'Elicom', 'CSD', 200, 3, 2, 'Thiết CSDL và sử dụng SQL Server', ''),
('CSD003', 'Oracle 8i', 'NXB Giáo dục', 'Trần Tiến Dung', 'CSD', 500, 5, 3, 'Từng bước sử dụng Oracle', ''),
('HTT001', 'Windows2000 Professional', 'NXB Giáo dục', 'Anh Thư', 'HTT', 500, 3, 2, 'Sử dụng Windows 2000', ''),
('HTT002', 'Windows 2000 Advance Serv', 'NXB Giáo dục', 'Anh Thư', 'HTT', 500, 5, 2, 'Sử dụng Windows 2000 Server', ''),
('LTT001', 'Lập trình visual Basic 6', 'NXB Giáo dục', 'Nguyễn Tiến', 'LTT', 600, 3, 3, 'Kỹ thuật lập trình Víual Basic', ''),
('LTT002', 'Ngôn ngữ lập trình c++', 'NXB Thống kê', 'Tăng Ðình Quí', 'LTT', 500, 5, 3, 'Hướng dẫn lập trình hướng đối tượng và C++', ''),
('LTT003', 'Lập trình Windows bằng Vi', 'NXB Giáo dục', 'Ðặng Văn Ðức', 'LTT', 300, 4, 3, 'Hướng dẫn từng bước lập trình trên Windows', ''),
('VPP001', 'Excel Toàn tập', 'NXB Trẻ', 'Ðoàn Công Hùng', 'VPP', 1000, 5, 4, 'Trình bày mọi vấn đề về Excel', ''),
('VPP002', 'Word 2000 Toàn tập', 'NXB Trẻ', 'Ðoàn Công Hùng', 'VPP', 1000, 4, 3, 'Trình bày mọi vấn đề về Word', ''),
('VPP003', 'Làm kế toán bằng Excel', 'NXB Thống kê', 'Vu Duy Sanh', 'VPP', 200, 5, 2, 'Trình bày phuong pháp làm kế toán', ''),
('WEB001', 'Javascript', 'NXB Trẻ', 'Lê Minh Trí', 'WEB', 200, 5, 2, 'Từng bước thiết kế Web động', ''),
('WEB002', 'HTML', 'NXB Giáo Dục', 'Nguyễn Thị Minh Khoa', 'WEB', 100, 3, 2, 'Từng bước làm quen với WEB', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `borrow`
--

CREATE TABLE `borrow` (
  `cardID` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `bookID` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `dateBorrow` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `borrow`
--

INSERT INTO `borrow` (`cardID`, `bookID`, `dateBorrow`) VALUES
('STIT0001', 'CSD001', '2014-07-30'),
('STIT0001', 'LTT001', '2014-06-30'),
('STIT0002', 'CSD002', '2014-08-15'),
('STIT0002', 'LTT003', '2014-08-10'),
('STIT0003', 'WEB001', '2014-07-10'),
('STIT0004', 'HTT001', '2014-08-10'),
('STIT0004', 'HTT002', '2014-08-20'),
('STIT0006', 'WEB001', '2014-08-30'),
('STIT0006', 'CSD002', '2014-08-10'),
('STIT0006', 'WEB002', '2014-07-15'),
('STIT0007', 'VPP001', '2014-08-30'),
('STIT0007', 'VPP003', '2014-08-20'),
('STIT0008', 'VPP001', '2014-08-30'),
('STIT0009', 'CSD001', '2014-08-20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `categoryID` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `categoryName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `moreinfo` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`, `moreinfo`) VALUES
('CSD', 'Cơ sở dữ liệu', 'Access, Oracle'),
('ECO', 'Ecommerce', 'Sách về thương mại điện t'),
('GTT', 'Giải thuật', 'Các bài toán mẫu, các giả'),
('HTT', 'Hệ thống', 'Windows, Linux, Unix'),
('LTT', 'Ngôn ngữ lập trình', 'Visual Basic, C, C++, Jav'),
('PTK', 'Phân tích và thiết kế', 'Phân tích và thiết kế giả'),
('VPP', 'Văn phòng', 'Word, Excel'),
('WEB', 'Web', 'Javascript, Vbscript,HTML');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `receipts`
--

CREATE TABLE `receipts` (
  `cardID` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `bookID` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `dateBorrow` date DEFAULT NULL,
  `datereturn` date DEFAULT NULL,
  `returnOK` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `receipts`
--

INSERT INTO `receipts` (`cardID`, `bookID`, `dateBorrow`, `datereturn`, `returnOK`) VALUES
('STIT0001', 'CSD001', '2014-07-30', '2019-12-05', 1),
('STIT0001', 'CSD001', '2014-07-30', '2019-12-05', 1),
('STIT0003', 'WEB001', '2014-07-10', '2019-12-05', 1),
('STIT0004', 'HTT001', '2014-08-10', '2019-12-05', 1),
('STIT0004', 'HTT002', '2014-08-20', '2019-12-05', 1),
('STIT0006', 'WEB001', '2014-08-30', '2019-12-05', 0),
('STIT0006', 'WEB001', '2014-08-30', '2019-12-05', 0),
('STIT0006', 'WEB001', '2014-08-30', '2019-12-05', 0),
('STIT0007', 'VPP001', '2014-08-30', '2019-12-05', 1),
('STIT0007', 'VPP003', '2014-08-20', '2019-12-05', 1),
('STIT0008', 'VPP001', '2014-08-30', '0000-00-00', 0),
('STIT0009', 'CSD001', '2014-08-20', '0000-00-00', 0),
('STIT0001', 'a12', '2019-12-05', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `returns`
--

CREATE TABLE `returns` (
  `cardID` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `bookID` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `datereturn` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `returns`
--

INSERT INTO `returns` (`cardID`, `bookID`, `datereturn`) VALUES
('STIT0001', 'CSD001', '0000-00-00'),
('STIT0001', 'LTT001', '2014-07-25'),
('STIT0002', 'CSD002', '0000-00-00'),
('STIT0002', 'LTT003', '2014-08-30'),
('STIT0003', 'WEB001', '2014-07-20'),
('STIT0004', 'HTT001', '0000-00-00'),
('STIT0004', 'HTT002', '2014-08-25'),
('STIT0006', 'WEB001', '0000-00-00'),
('STIT0006', 'CSD002', '2014-08-15'),
('STIT0006', 'WEB002', '2014-07-30'),
('STIT0007', 'VPP001', '0000-00-00'),
('STIT0007', 'VPP003', '2014-08-25'),
('STIT0008', 'VPP001', '0000-00-00'),
('STIT0009', 'CSD001', '2014-08-23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `cardID` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `nameStudent` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel` char(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`cardID`, `nameStudent`, `address`, `tel`) VALUES
('STIT0001', 'Vy Văn Việt', '92-Quang Trung- Đà Nãng', '0511810583'),
('STIT0002', 'Nguyễn Khánh', '92-Quang Trung- Đà Nãng', '0511810583'),
('STIT0003', 'Nguyễn Minh Quốc', '92-Quang Trung- Đà Nãng', '0511810583'),
('STIT0004', 'Hồ Phước Thoi', '92-Quang Trung- Đà Nãng', '0511810583'),
('STIT0005', 'Nguyễn Văn Định', '92-Quang Trung- Đà Nãng', '0511810583'),
('STIT0006', 'Nguyễn Văn Hải', '92-Quang Trung- Đà Nãng', '0511810583'),
('STIT0007', 'Nguyễn Thị Thuý Hà', '92-Quang Trung- Đà Nãng', '0511810583'),
('STIT0008', 'Đỗ Thị Thiên Ngân', '92-Quang Trung- Đà Nãng', '0511810583'),
('STIT0009', 'Nguyễn Văn A', '30- Phan Chu Trinh- Đà Nẵng', '0913576890'),
('STIT0012', 'Vy Văn Vi', '92-Quang Trung- Đà Nãng', '0975552483');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookID`),
  ADD KEY `booksFkcategories` (`categoryID`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Chỉ mục cho bảng `receipts`
--
ALTER TABLE `receipts`
  ADD KEY `receiptsFkstudents` (`cardID`),
  ADD KEY `receiptsFkbooks` (`bookID`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`cardID`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `booksFkcategories` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`);

--
-- Các ràng buộc cho bảng `receipts`
--
ALTER TABLE `receipts`
  ADD CONSTRAINT `receiptsFkbooks` FOREIGN KEY (`bookID`) REFERENCES `books` (`bookID`),
  ADD CONSTRAINT `receiptsFkstudents` FOREIGN KEY (`cardID`) REFERENCES `students` (`cardID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
