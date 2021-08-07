-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 06, 2021 lúc 07:29 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fashiongenz`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `lv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fullname`, `lv`) VALUES
(1, 'admin', 'admin', 'Duy Thành', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`) VALUES
(1, 'Áo khoác'),
(2, 'Áo phông'),
(3, 'Quần dài'),
(4, 'Quần short'),
(5, 'Giày, dép');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `content` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `content`) VALUES
(8, 'Nguyễn Hữu Duy Thành', 'thanhnguyen15022008@gmail.com', 'Chúng tôi muốn quảng cáo sản phẩm trên website của shop');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `catalog` int(11) DEFAULT NULL,
  `total_rate` float DEFAULT NULL,
  `rate_times` int(11) DEFAULT NULL,
  `image2` varchar(200) DEFAULT NULL,
  `image3` varchar(200) DEFAULT NULL,
  `image4` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `description`, `qty`, `catalog`, `total_rate`, `rate_times`, `image2`, `image3`, `image4`) VALUES
(13, 'Áo phông nam APHTK264', 250000, './Assets/Img/APHTK264-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 2, NULL, NULL, './Assets/Img/APHTK264-2.jpg', './Assets/Img/APHTK264-3.jpg', './Assets/Img/APHTK264-4.jpg'),
(14, 'Áo phông nam APHTK260', 200000, './Assets/Img/APHTK260-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 2, NULL, NULL, './Assets/Img/APHTK260-2.jpg', './Assets/Img/APHTK260-3.jpg', './Assets/Img/APHTK260-4.jpg'),
(15, 'Áo phông nam APHTK258', 200000, './Assets/Img/APHTK258-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 2, NULL, NULL, './Assets/Img/APHTK258-2.jpg', './Assets/Img/APHTK258-3.jpg', './Assets/Img/APHTK258-4.jpg'),
(16, 'Áo phông nam APTTK284', 250000, './Assets/Img/APTTK284-QSKTK202-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 2, NULL, NULL, './Assets/Img/APTTK284-QSKTK202-2.jpg', './Assets/Img/APTTK284-QSKTK202-3.jpg', './Assets/Img/APTTK284-QSKTK202-4.jpg'),
(17, 'Áo phông nam APTTK241', 200000, './Assets/Img/APTTK241-QJDTK216-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 2, NULL, NULL, './Assets/Img/APTTK241-QJDTK216-2.jpg', './Assets/Img/APTTK241-QJDTK216-3.jpg', './Assets/Img/APTTK241-QJDTK216-4.jpg'),
(18, 'Áo phông nam APMTK243', 180000, './Assets/Img/APMTK243-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 2, NULL, NULL, './Assets/Img/APMTK243-2.jpg', './Assets/Img/APMTK243-3.jpg', './Assets/Img/APMTK243-4.jpg'),
(19, 'Áo khoác nam KNMTK102', 400000, './Assets/Img/KNMTK102-1.jpg', '– Chất liệu: 100% COTTON <br>\n– Đặc tính: <br>\n– Phom: Oversized <br>\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 1, NULL, NULL, './Assets/Img/KNMTK102-2.jpg', './Assets/Img/KNMTK102-3.jpg', './Assets/Img/KNMTK102-4.jpg'),
(20, 'ÁO KHOÁC NAM AKITK101', 520000, './Assets/Img/AKITK101-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 1, NULL, NULL, './Assets/Img/AKITK101-2.jpg', './Assets/Img/AKITK101-3.jpg', './Assets/Img/AKITK101-4.jpg'),
(21, 'Áo khoác nam AKBCN106', 380000, './Assets/Img/AKBCN106-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 1, NULL, NULL, './Assets/Img/AKBCN106-2.jpg', './Assets/Img/AKBCN106-3.jpg', './Assets/Img/AKBCN106-4.jpg'),
(22, 'Áo khoác nam AKBCN103', 580000, './Assets/Img/AKBCN103-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 1, NULL, NULL, './Assets/Img/AKBCN103-2.jpg', './Assets/Img/AKBCN103-3.jpg', './Assets/Img/AKBCN103-4.jpg'),
(23, 'Áo khoác nam AKBCN102', 390000, './Assets/Img/AKBCN102-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 1, NULL, NULL, './Assets/Img/AKBCN102-2.jpg', './Assets/Img/AKBCN102-3.jpg', './Assets/Img/AKBCN102-4.jpg'),
(24, 'Quần âu nam QACTK203', 310000, './Assets/Img/QACTK203-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 3, NULL, NULL, './Assets/Img/QACTK203-2.jpg', './Assets/Img/QACTK203-3.jpg', './Assets/Img/QACTK203-4.jpg'),
(25, 'Quần âu nam QAUTK010', 425000, './Assets/Img/QAUTK010-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 3, NULL, NULL, './Assets/Img/QAUTK010-2.jpg', './Assets/Img/QAUTK010-3.jpg', './Assets/Img/QAUTK010-4.jpg'),
(26, 'Quần jeans nam QJDTK216', 370000, './Assets/Img/QJDTK216-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 3, NULL, NULL, './Assets/Img/QJDTK216-2.jpg', './Assets/Img/QJDTK216-3.jpg', './Assets/Img/QJDTK216-4.jpg'),
(27, 'Quần jeans nam QJDTK208', 315000, './Assets/Img/QJDTK208-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 3, NULL, NULL, './Assets/Img/QJDTK208-2.jpg', './Assets/Img/QJDTK208-3.jpg', './Assets/Img/QJDTK208-4.jpg'),
(28, 'Quần short nam QSKTK208', 240000, './Assets/Img/QSKTK208-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 4, NULL, NULL, './Assets/Img/QSKTK208-2.jpg', './Assets/Img/QSKTK208-3.jpg', './Assets/Img/QSKTK208-4.jpg'),
(29, 'Quần short nam QSKTK202', 260000, './Assets/Img/QSKTK202-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 4, NULL, NULL, './Assets/Img/QSKTK202-2.jpg', './Assets/Img/QSKTK202-3.jpg', './Assets/Img/QSKTK202-4.jpg'),
(30, 'Quần short nam QSVTK209', 179000, './Assets/Img/QSVTK209-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 4, NULL, NULL, './Assets/Img/QSVTK209-2.jpg', './Assets/Img/QSVTK209-3.jpg', './Assets/Img/QSVTK209-4.jpg'),
(31, 'Quần short nam QSJCN209', 230000, './Assets/Img/QSJCN209-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 4, NULL, NULL, './Assets/Img/QSJCN209-2.jpg', './Assets/Img/QSJCN209-3.jpg', './Assets/Img/QSJCN209-4.jpg'),
(32, 'Quần short nam QSJCN202', 230000, './Assets/Img/QSJCN202-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 4, NULL, NULL, './Assets/Img/QSJCN202-2.jpg', './Assets/Img/QSJCN202-3.jpg', './Assets/Img/QSJCN202-4.jpg'),
(33, 'Quần kaki nam QKBTK202', 700000, './Assets/Img/QKBTK202-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 3, NULL, NULL, './Assets/Img/QKBTK202-2.jpg', './Assets/Img/QKBTK202-3.jpg', './Assets/Img/QKBTK202-4.jpg'),
(34, 'Giày nam GIACN226', 750000, './Assets/Img/GIACN226-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 5, NULL, NULL, './Assets/Img/GIACN226-2.jpg', './Assets/Img/GIACN226-3.jpg', './Assets/Img/GIACN226-4.jpg'),
(35, 'Giày nam GIACN225', 950000, './Assets/Img/GIACN225-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 5, NULL, NULL, './Assets/Img/GIACN225-2.jpg', './Assets/Img/GIACN225-3.jpg', './Assets/Img/GIACN225-4.jpg'),
(36, 'Giày nam GIACN224', 820000, './Assets/Img/GIACN224-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 5, NULL, NULL, './Assets/Img/GIACN224-2.jpg', './Assets/Img/GIACN224-3.jpg', './Assets/Img/GIACN224-4.jpg'),
(37, 'Giày nam GIACN223', 690000, './Assets/Img/GIACN223-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 5, NULL, NULL, './Assets/Img/GIACN223-2.jpg', './Assets/Img/GIACN223-3.jpg', './Assets/Img/GIACN223-4.jpg'),
(38, 'Giày nam GIACN222', 750000, './Assets/Img/GIACN222-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 5, NULL, NULL, './Assets/Img/GIACN222-2.jpg', './Assets/Img/GIACN222-3.jpg', './Assets/Img/GIACN222-4.jpg'),
(39, 'Quần kaki nam QKLTK203', 266000, './Assets/Img/QLKTK203-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 3, NULL, NULL, './Assets/Img/QLKTK203-2.jpg', './Assets/Img/QLKTK203-3.jpg', './Assets/Img/QLKTK203-4.jpg'),
(40, 'Áo phông nam APHTK239', 189000, './Assets/Img/APHTK239-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 2, NULL, NULL, './Assets/Img/APHTK239-2.jpg', './Assets/Img/APHTK239-3.jpg', './Assets/Img/APHTK239-4.jpg'),
(41, 'Quần jeans nam JSTTK108', 187000, './Assets/Img/JSTTK108-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí <br>\r\n+ Hướng dẫn sử dụng: <br>\r\n– Giặt ở nhiệt độ bình thường, với đồ có màu tương tự <br>\r\n– Không được dùng hóa chất tẩy <br>\r\n– Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường', 100, 3, NULL, NULL, './Assets/Img/JSTTK108-2.jpg', './Assets/Img/JSTTK108-3.jpg', './Assets/Img/JSTTK108-1.jpg'),
(42, 'Quần short nam QSKTK204', 179000, './Assets/Img/QSKTK204-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 4, NULL, NULL, './Assets/Img/QSKTK204-2.jpg', './Assets/Img/QSKTK204-3.jpg', './Assets/Img/QSKTK204-4.jpg'),
(43, 'Giày nam GIACN212', 720000, './Assets/Img/GIACN212-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 5, NULL, NULL, './Assets/Img/GIACN212-2.jpg', './Assets/Img/GIACN212-3.jpg', './Assets/Img/GIACN212-4.jpg'),
(44, 'Giày nam GIACN218', 550000, './Assets/Img/GIACN218-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 5, NULL, NULL, './Assets/Img/GIACN218-2.jpg', './Assets/Img/GIACN218-3.jpg', './Assets/Img/GIACN218-1.jpg'),
(45, 'Áo phông nam APHTK251', 145000, './Assets/Img/APHTK251-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 2, NULL, NULL, './Assets/Img/APHTK251-2.jpg', './Assets/Img/APHTK251-3.jpg', './Assets/Img/APHTK251-4.jpg'),
(46, 'Áo phông nam APHTK261', 222000, './Assets/Img/APHTK261-QSJCN202-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 2, NULL, NULL, './Assets/Img/APHTK261-QSJCN202-2.jpg', './Assets/Img/APHTK261-QSJCN202-3.jpg', './Assets/Img/APHTK261-QSJCN202-4.jpg'),
(47, 'Áo phông nam APHTK230', 135000, './Assets/Img/APHTK230-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 2, NULL, NULL, './Assets/Img/APHTK230-2.jpg', './Assets/Img/APHTK230-3.jpg', './Assets/Img/APHTK230-4.jpg'),
(48, 'Quần jogger kaki nam QGGTK104', 263000, './Assets/Img/QGGTK104-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 3, NULL, NULL, './Assets/Img/QGGTK104-2.jpg', './Assets/Img/QGGTK104-3.jpg', './Assets/Img/QGGTK104-1.jpg'),
(49, 'Áo phông nam APHTK221', 122000, './Assets/Img/APHTK221-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 2, NULL, NULL, './Assets/Img/APHTK221-2.jpg', './Assets/Img/APHTK221-3.jpg', './Assets/Img/APHTK221-4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `rate` float DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `time_rate` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider_and_banner`
--

CREATE TABLE `slider_and_banner` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `password`, `fullname`, `email`, `phone`, `address`, `code`) VALUES
(1, 'duythanh2008', 'Chicho1502', 'Nguyễn Hữu Duy Thành', 'thanhnguyen15022008@gmail.com', '0334758508', 'Thanh Hóa', 380452),
(6, 'dtnc1112', 'Chicho1502', NULL, 'duythanh20082002@outlook.com', '0333229817', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_order`
--

CREATE TABLE `user_order` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `time_order` datetime DEFAULT NULL,
  `time_delivered` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user_order`
--

INSERT INTO `user_order` (`id`, `fullname`, `address`, `email`, `phone`, `amount`, `status`, `time_order`, `time_delivered`) VALUES
(674615, 'Nguyễn Hữu Duy Thành', 'Thanh Hóa', 'thanhnguyen15022008@gmail.com', '0334758508', 250000, 0, '2021-08-06 11:56:35', NULL),
(859879, 'Nguyễn Hữu Duy Thành', 'Thanh Hóa', 'thanhnguyen15022008@gmail.com', '0334758508', 3670000, 0, '2021-08-06 11:51:05', NULL),
(942761, 'Nguyễn Hữu Duy Thành', 'Thanh Hóa', 'thanhnguyen15022008@gmail.com', '0334758508', 250000, 0, '2021-08-06 11:55:57', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_order_detail`
--

CREATE TABLE `user_order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user_order_detail`
--

INSERT INTO `user_order_detail` (`id`, `order_id`, `product_id`, `qty`, `price`, `amount`, `size`) VALUES
(1, 859879, 15, 1, 200000, 200000, '36'),
(2, 859879, 24, 2, 310000, 620000, '36'),
(3, 859879, 35, 3, 950000, 2850000, '36'),
(4, 942761, 16, 1, 250000, 250000, '36'),
(5, 674615, 13, 1, 250000, 250000, '36');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catalog` (`catalog`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Chỉ mục cho bảng `slider_and_banner`
--
ALTER TABLE `slider_and_banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_order_detail`
--
ALTER TABLE `user_order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `slider_and_banner`
--
ALTER TABLE `slider_and_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user_order_detail`
--
ALTER TABLE `user_order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`catalog`) REFERENCES `catalog` (`id`);

--
-- Các ràng buộc cho bảng `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`),
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `user_order_detail`
--
ALTER TABLE `user_order_detail`
  ADD CONSTRAINT `user_order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `user_order` (`id`),
  ADD CONSTRAINT `user_order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
