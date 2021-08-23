-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 23, 2021 lúc 08:15 AM
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
  `lv` int(11) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fullname`, `lv`, `gender`, `date`) VALUES
(1, 'admin', 'admin', 'Duy Thành', 1, 1, '2002-08-20'),
(2, 'demo', 'demo', 'Nguyễn Thị B', 2, 2, '2002-02-15'),
(3, 'nguyenvana', 'nguyenvana', 'Nguyễn Văn A', 2, 1, '2000-08-07'),
(4, 'nguyenthid', 'nguyenthid', 'Nguyễn Thị D', 2, 2, '1999-09-22'),
(5, 'nvminh123', 'nvminh', 'Nguyễn Văn Minh', 2, 2, '2001-07-16');

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
  `content` varchar(5000) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `content`, `status`) VALUES
(8, 'Nguyễn Hữu Duy Thành', 'thanhnguyen15022008@gmail.com', 'Chúng tôi muốn quảng cáo sản phẩm trên website của shop', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gender`
--

INSERT INTO `gender` (`id`, `name`) VALUES
(1, 'Nam'),
(2, 'Nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `money` float NOT NULL COMMENT 'số tiền thanh toán',
  `note` varchar(255) DEFAULT NULL COMMENT 'ghi chú thanh toán',
  `vnp_response_code` varchar(255) NOT NULL COMMENT 'mã phản hồi',
  `code_vnpay` varchar(255) NOT NULL COMMENT 'mã giao dịch vnpay',
  `code_bank` varchar(255) NOT NULL COMMENT 'mã ngân hàng',
  `time` datetime NOT NULL COMMENT 'thời gian chuyển khoản'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `money`, `note`, `vnp_response_code`, `code_vnpay`, `code_bank`, `time`) VALUES
(2, '134248', 200000, 'Noi dung thanh toan', '00', '13570791', 'NCB', '2021-08-21 11:00:00'),
(3, '296745', 445000, 'Thanh toan hoa don', '00', '13570799', 'NCB', '2021-08-21 11:00:00'),
(4, '678460', 1004000, 'Noi dung thanh toan', '00', '13570804', 'NCB', '2021-08-21 12:00:00'),
(5, '116238', 463000, 'Noi dung thanh toan', '00', '13571137', 'NCB', '2021-08-21 22:00:00'),
(6, '193224', 245000, 'Noi dung thanh toan', '00', '13571140', 'NCB', '2021-08-21 22:00:00'),
(7, '187176', 310000, 'Noi dung thanh toan', '00', '13571148', 'NCB', '2021-08-21 22:00:00'),
(8, '473618', 460000, 'Thanh toan hoa don thoi trang', '00', '13571154', 'NCB', '2021-08-21 23:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `position`
--

INSERT INTO `position` (`id`, `name`) VALUES
(1, 'Quản lý'),
(2, 'Nhân viên');

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
(13, 'Áo phông nam APHTK264', 245000, './Assets/Img/APHTK264-1.jpg', '- Chất lượng sản phẩm tốt. <br>\r\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\r\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\r\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\r\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\r\nCAM KẾT:<br>\r\n- Sản phẩm chính hãng 100%.<br>\r\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\r\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\r\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 87, 2, 11.4, 3, './Assets/Img/APHTK264-2.jpg', './Assets/Img/APHTK264-3.jpg', './Assets/Img/APHTK264-4.jpg'),
(14, 'Áo phông nam APHTK260', 200000, './Assets/Img/APHTK260-1.jpg', '- Chất lượng sản phẩm tốt. <br>\r\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\r\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\r\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\r\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\r\nCAM KẾT:<br>\r\n- Sản phẩm chính hãng 100%.<br>\r\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\r\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\r\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 96, 2, 7.4, 2, './Assets/Img/APHTK260-2.jpg', './Assets/Img/APHTK260-3.jpg', './Assets/Img/APHTK260-4.jpg'),
(15, 'Áo phông nam APHTK258', 200000, './Assets/Img/APHTK258-1.jpg', '- Chất lượng sản phẩm tốt. <br>\r\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\r\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\r\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\r\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\r\nCAM KẾT:<br>\r\n- Sản phẩm chính hãng 100%.<br>\r\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\r\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\r\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 94, 2, 5, 1, './Assets/Img/APHTK258-2.jpg', './Assets/Img/APHTK258-3.jpg', './Assets/Img/APHTK258-4.jpg'),
(16, 'Áo phông nam APTTK284', 250000, './Assets/Img/APTTK284-QSKTK202-1.jpg', '- Chất lượng sản phẩm tốt. <br>\r\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\r\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\r\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\r\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\r\nCAM KẾT:<br>\r\n- Sản phẩm chính hãng 100%.<br>\r\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\r\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\r\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 0, 2, 4.2, 1, './Assets/Img/APTTK284-QSKTK202-2.jpg', './Assets/Img/APTTK284-QSKTK202-3.jpg', './Assets/Img/APTTK284-QSKTK202-4.jpg'),
(17, 'Áo phông nam APTTK241', 200000, './Assets/Img/APTTK241-QJDTK216-1.jpg', '- Chất lượng sản phẩm tốt. <br>\r\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\r\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\r\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\r\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\r\nCAM KẾT:<br>\r\n- Sản phẩm chính hãng 100%.<br>\r\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\r\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\r\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 1, 2, NULL, NULL, './Assets/Img/APTTK241-QJDTK216-2.jpg', './Assets/Img/APTTK241-QJDTK216-3.jpg', './Assets/Img/APTTK241-QJDTK216-4.jpg'),
(18, 'Áo phông nam APMTK243', 180000, './Assets/Img/APMTK243-1.jpg', '- Chất lượng sản phẩm tốt. <br>\r\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\r\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\r\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\r\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\r\nCAM KẾT:<br>\r\n- Sản phẩm chính hãng 100%.<br>\r\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\r\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\r\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 100, 2, NULL, NULL, './Assets/Img/APMTK243-2.jpg', './Assets/Img/APMTK243-3.jpg', './Assets/Img/APMTK243-4.jpg'),
(19, 'Áo khoác nam KNMTK102', 400000, './Assets/Img/KNMTK102-1.jpg', '- Chất lượng sản phẩm tốt. <br>\r\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\r\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\r\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\r\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\r\nCAM KẾT:<br>\r\n- Sản phẩm chính hãng 100%.<br>\r\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\r\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\r\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 98, 1, NULL, NULL, './Assets/Img/KNMTK102-2.jpg', './Assets/Img/KNMTK102-3.jpg', './Assets/Img/KNMTK102-4.jpg'),
(20, 'ÁO KHOÁC NAM AKITK101', 520000, './Assets/Img/AKITK101-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 97, 1, NULL, NULL, './Assets/Img/AKITK101-2.jpg', './Assets/Img/AKITK101-3.jpg', './Assets/Img/AKITK101-4.jpg'),
(21, 'Áo khoác nam AKBCN106', 380000, './Assets/Img/AKBCN106-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 100, 1, NULL, NULL, './Assets/Img/AKBCN106-2.jpg', './Assets/Img/AKBCN106-3.jpg', './Assets/Img/AKBCN106-4.jpg'),
(22, 'Áo khoác nam AKBCN103', 580000, './Assets/Img/AKBCN103-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 100, 1, NULL, NULL, './Assets/Img/AKBCN103-2.jpg', './Assets/Img/AKBCN103-3.jpg', './Assets/Img/AKBCN103-4.jpg'),
(24, 'Quần âu nam QACTK203', 310000, './Assets/Img/QACTK203-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 97, 3, NULL, NULL, './Assets/Img/QACTK203-2.jpg', './Assets/Img/QACTK203-3.jpg', './Assets/Img/QACTK203-4.jpg'),
(25, 'Quần âu nam QAUTK010', 425000, './Assets/Img/QAUTK010-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 98, 3, 5, 1, './Assets/Img/QAUTK010-2.jpg', './Assets/Img/QAUTK010-3.jpg', './Assets/Img/QAUTK010-4.jpg'),
(26, 'Quần jeans nam QJDTK216', 370000, './Assets/Img/QJDTK216-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 96, 3, 4.3, 1, './Assets/Img/QJDTK216-2.jpg', './Assets/Img/QJDTK216-3.jpg', './Assets/Img/QJDTK216-4.jpg'),
(27, 'Quần jeans nam QJDTK208', 315000, './Assets/Img/QJDTK208-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 99, 3, NULL, NULL, './Assets/Img/QJDTK208-2.jpg', './Assets/Img/QJDTK208-3.jpg', './Assets/Img/QJDTK208-4.jpg'),
(28, 'Quần short nam QSKTK208', 240000, './Assets/Img/QSKTK208-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 99, 4, NULL, NULL, './Assets/Img/QSKTK208-2.jpg', './Assets/Img/QSKTK208-3.jpg', './Assets/Img/QSKTK208-4.jpg'),
(29, 'Quần short nam QSKTK202', 260000, './Assets/Img/QSKTK202-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 96, 4, NULL, NULL, './Assets/Img/QSKTK202-2.jpg', './Assets/Img/QSKTK202-3.jpg', './Assets/Img/QSKTK202-4.jpg'),
(30, 'Quần short nam QSVTK209', 179000, './Assets/Img/QSVTK209-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 99, 4, NULL, NULL, './Assets/Img/QSVTK209-2.jpg', './Assets/Img/QSVTK209-3.jpg', './Assets/Img/QSVTK209-4.jpg'),
(31, 'Quần short nam QSJCN209', 230000, './Assets/Img/QSJCN209-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 98, 4, NULL, NULL, './Assets/Img/QSJCN209-2.jpg', './Assets/Img/QSJCN209-3.jpg', './Assets/Img/QSJCN209-4.jpg'),
(32, 'Quần short nam QSJCN202', 230000, './Assets/Img/QSJCN202-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 100, 4, NULL, NULL, './Assets/Img/QSJCN202-2.jpg', './Assets/Img/QSJCN202-3.jpg', './Assets/Img/QSJCN202-4.jpg'),
(33, 'Quần kaki nam QKBTK202', 700000, './Assets/Img/QKBTK202-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 99, 3, NULL, NULL, './Assets/Img/QKBTK202-2.jpg', './Assets/Img/QKBTK202-3.jpg', './Assets/Img/QKBTK202-4.jpg'),
(34, 'Giày nam GIACN226', 750000, './Assets/Img/GIACN226-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 99, 5, NULL, NULL, './Assets/Img/GIACN226-2.jpg', './Assets/Img/GIACN226-3.jpg', './Assets/Img/GIACN226-4.jpg'),
(35, 'Giày nam GIACN225', 950000, './Assets/Img/GIACN225-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 97, 5, NULL, NULL, './Assets/Img/GIACN225-2.jpg', './Assets/Img/GIACN225-3.jpg', './Assets/Img/GIACN225-4.jpg'),
(36, 'Giày nam GIACN224', 820000, './Assets/Img/GIACN224-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 99, 5, NULL, NULL, './Assets/Img/GIACN224-2.jpg', './Assets/Img/GIACN224-3.jpg', './Assets/Img/GIACN224-4.jpg'),
(37, 'Giày nam GIACN223', 690000, './Assets/Img/GIACN223-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 100, 5, NULL, NULL, './Assets/Img/GIACN223-2.jpg', './Assets/Img/GIACN223-3.jpg', './Assets/Img/GIACN223-4.jpg'),
(38, 'Giày nam GIACN222', 750000, './Assets/Img/GIACN222-1.jpg', '- Chất lượng sản phẩm tốt. <br>\n- Chất vải thoáng mát, phù hợp với mọi loại thời tiết. <br>\n- Nắm bắt được nhu cầu của giới trẻ đặc biệt là học sinh, sinh viên, chúng tôi đem đến cho các bạn những sản phẩm đẹp, lại còn phù hợp với túi tiền của hầu hết mọi người.<br>\n- Có đầy đủ tất cả các size từ 36 đến 43 tha hồ cho các ban lựa chọn.<br>\n- Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.<br><br>\nCAM KẾT:<br>\n- Sản phẩm chính hãng 100%.<br>\n- Hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí.<br>\n- Khách luôn được xem hàng rồi mới thanh toán.<br>\n- Nếu lỗi do nhà sản xuất shop sẽ được hoàn tiền 100%.<br>', 100, 5, NULL, NULL, './Assets/Img/GIACN222-2.jpg', './Assets/Img/GIACN222-3.jpg', './Assets/Img/GIACN222-4.jpg'),
(39, 'Quần kaki nam QKLTK203', 266000, './Assets/Img/QLKTK203-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 3, NULL, NULL, './Assets/Img/QLKTK203-2.jpg', './Assets/Img/QLKTK203-3.jpg', './Assets/Img/QLKTK203-4.jpg'),
(40, 'Áo phông nam APHTK239', 189000, './Assets/Img/APHTK239-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 2, NULL, NULL, './Assets/Img/APHTK239-2.jpg', './Assets/Img/APHTK239-3.jpg', './Assets/Img/APHTK239-4.jpg'),
(41, 'Quần jeans nam JSTTK108', 187000, './Assets/Img/JSTTK108-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí <br>\r\n+ Hướng dẫn sử dụng: <br>\r\n– Giặt ở nhiệt độ bình thường, với đồ có màu tương tự <br>\r\n– Không được dùng hóa chất tẩy <br>\r\n– Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường', 100, 3, NULL, NULL, './Assets/Img/JSTTK108-2.jpg', './Assets/Img/JSTTK108-3.jpg', './Assets/Img/JSTTK108-1.jpg'),
(42, 'Quần short nam QSKTK204', 179000, './Assets/Img/QSKTK204-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 4, NULL, NULL, './Assets/Img/QSKTK204-2.jpg', './Assets/Img/QSKTK204-3.jpg', './Assets/Img/QSKTK204-4.jpg'),
(43, 'Giày nam GIACN212', 720000, './Assets/Img/GIACN212-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 5, NULL, NULL, './Assets/Img/GIACN212-2.jpg', './Assets/Img/GIACN212-3.jpg', './Assets/Img/GIACN212-4.jpg'),
(44, 'Giày nam GIACN218', 550000, './Assets/Img/GIACN218-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 5, NULL, NULL, './Assets/Img/GIACN218-2.jpg', './Assets/Img/GIACN218-3.jpg', './Assets/Img/GIACN218-1.jpg'),
(45, 'Áo phông nam APHTK251', 145000, './Assets/Img/APHTK251-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 2, NULL, NULL, './Assets/Img/APHTK251-2.jpg', './Assets/Img/APHTK251-3.jpg', './Assets/Img/APHTK251-4.jpg'),
(46, 'Áo phông nam APHTK261', 222000, './Assets/Img/APHTK261-QSJCN202-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 2, NULL, NULL, './Assets/Img/APHTK261-QSJCN202-2.jpg', './Assets/Img/APHTK261-QSJCN202-3.jpg', './Assets/Img/APHTK261-QSJCN202-4.jpg'),
(47, 'Áo phông nam APHTK230', 135000, './Assets/Img/APHTK230-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 2, NULL, NULL, './Assets/Img/APHTK230-2.jpg', './Assets/Img/APHTK230-3.jpg', './Assets/Img/APHTK230-4.jpg'),
(48, 'Quần jogger kaki nam QGGTK104', 263000, './Assets/Img/QGGTK104-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 98, 3, NULL, NULL, './Assets/Img/QGGTK104-2.jpg', './Assets/Img/QGGTK104-3.jpg', './Assets/Img/QGGTK104-1.jpg'),
(49, 'Áo phông nam APHTK221', 122000, './Assets/Img/APHTK221-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 2, NULL, NULL, './Assets/Img/APHTK221-2.jpg', './Assets/Img/APHTK221-3.jpg', './Assets/Img/APHTK221-4.jpg'),
(50, 'Áo khoác nam AKBCN102', 390000, './Assets/Img/AKBCN102-1.jpg', '– Chất liệu: 100% COTTON <br>\r\n– Đặc tính: <br>\r\n– Phom: Oversized <br>\r\n– Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống <br>\r\n– Shop cam kết hàng đẹp như ảnh, nếu không giống như ảnh, quý khách có thể đổi trả hàng miễn phí', 100, 1, NULL, NULL, './Assets/Img/AKBCN102-2.jpg', './Assets/Img/AKBCN102-3.jpg', './Assets/Img/AKBCN102-4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profit`
--

CREATE TABLE `profit` (
  `id` int(11) NOT NULL,
  `month` int(11) DEFAULT NULL,
  `profit` int(11) DEFAULT NULL,
  `all_order` int(11) DEFAULT NULL,
  `sold_product` int(11) DEFAULT NULL,
  `order_not_confirm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `profit`
--

INSERT INTO `profit` (`id`, `month`, `profit`, `all_order`, `sold_product`, `order_not_confirm`) VALUES
(13, 1, 22380000, 30, 61, 0),
(14, 2, 25720000, 35, 67, 0),
(15, 3, 15350000, 21, 33, 0),
(16, 4, 18190000, 27, 51, 0),
(17, 5, 29610000, 47, 87, 0),
(18, 6, 21920000, 32, 45, 0),
(19, 7, 19980000, 35, 42, 0),
(20, 8, 20290000, 31, 61, 4);

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

--
-- Đang đổ dữ liệu cho bảng `rating`
--

INSERT INTO `rating` (`id`, `product_id`, `rate`, `fullname`, `email`, `content`, `time_rate`, `user_id`, `status`) VALUES
(18, 13, 5, 'Nguyễn Hữu Duy Thành', 'thanhnguyen15022008@gmail.com', 'Sản phẩm tốt, giá cả hợp lý', '2021-08-07 17:42:36', 1, 1),
(20, 14, 4, 'Nguyễn Văn A', 'thanhnguyen15022008@gmail.com', 'Sản phẩm tạm ổn, chất vải không mát lắm', '2021-08-07 17:55:22', 1, 1),
(21, 13, 2.5, 'Nguyễn Văn A', 'nguyenvana@outlook.com', 'Sản phẩm tệ, chất vải nóng, mặc rất khó chịu', '2021-08-07 18:24:26', 8, 1),
(22, 26, 4.3, 'Nguyễn Văn C', 'thanhnguyen15022008@gmail.com', 'Demo rating', '2021-08-07 22:24:29', 8, 1),
(23, 14, 3.4, 'Nguyễn Văn C', 'thanhnguyen15022008@gmail.com', 'Demo rating', '2021-08-07 22:24:57', 8, 1),
(24, 13, 3.9, 'NGUYEN HUU DUY THANH', 'thanhnguyen15022008@gmail.com', 'Sản phẩm ổn, giá chấp nhận được', '2021-08-08 10:53:17', 1, 1),
(25, 15, 5, 'Nguyễn Hữu A', 'thanhnguyen15022008@gmail.com', 'Sản phẩm đẹp, giá cả hợp lý', '2021-08-08 11:30:54', 9, 1),
(26, 16, 4.2, 'Duy Thành', 'duythanh2008@outlook.com', 'Sản phẩm tốt, rất chất lượng, nhưng vận chuyển hơi lâu', '2021-08-08 17:26:01', 10, 1),
(27, 25, 5, 'NGUYEN HUU DUY THANH', 'thanhnguyen15022008@gmail.com', 'Sản phẩm tốt, giá hợp lí', '2021-08-09 14:22:29', 1, 1);

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
(1, 'duythanh2008', '15022002', 'NGUYEN HUU DUY THANH', 'thanhnguyen15022008@gmail.com', '0334758508', 'Nhân Chính, Thanh Xuân, Hà Nội', 752313),
(8, 'nguyenvana', '20082002', 'Nguyễn Văn C', 'nguyenvana@outlook.com', '0987654321', 'Sầm Sơn', 684602),
(9, 'demosanpham', 'demosanpham', 'Nguyễn Hữu A', 'thanhnguyen@gmail.com', '0987654321', 'Nhân Chính, Thanh Xuân, Hà Nội', 891691),
(10, 'duythanh', '20082002', 'Duy Thành', 'duythanh2008@outlook.com', '0987654321', 'Sầm Sơn, Thanh Hóa', NULL),
(12, 'demo123', 'demo123', 'demo123', 'demo123@gmail.com', '0983712332', NULL, NULL);

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
  `time_delivered` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `payment_method` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user_order`
--

INSERT INTO `user_order` (`id`, `fullname`, `address`, `email`, `phone`, `amount`, `status`, `time_order`, `time_delivered`, `user_id`, `payment_method`) VALUES
(116238, 'NGUYEN HUU DUY THANH', 'Nhân Chính, Thanh Xuân, Hà Nội', 'thanhnguyen15022008@gmail.com', '0334758508', 463000, 1, '2021-08-21 22:42:41', '2021-08-21 23:03:57', 1, 1),
(134248, 'NGUYEN HUU DUY THANH', 'Nhân Chính, Thanh Xuân, Hà Nội', 'thanhnguyen15022008@gmail.com', '0334758508', 200000, 1, '2021-08-21 11:45:41', '2021-08-21 11:54:19', 1, 1),
(161169, 'NGUYEN HUU DUY THANH', 'Nhân Chính, Thanh Xuân, Hà Nội', 'thanhnguyen15022008@gmail.com', '0334758508', 310000, 1, '2021-08-20 23:17:05', '2021-08-20 23:24:13', 1, 0),
(171136, 'Nguyễn Văn A', 'Thanh Xuân, Hà Nội', 'nguyenvana@outlook.com', '0987654321', 250000, 1, '2021-08-07 18:24:42', '2021-08-07 21:32:25', 8, 0),
(184595, 'Duy Thành', 'Sầm Sơn, Thanh Hóa', 'duythanh2008@outlook.com', '0987654321', 500000, 1, '2021-08-08 17:25:07', '2021-08-08 17:27:13', 10, 0),
(187176, 'NGUYEN HUU DUY THANH', 'Nhân Chính, Thanh Xuân, Hà Nội', 'thanhnguyen15022008@gmail.com', '0334758508', 310000, 0, '2021-08-21 22:52:56', NULL, 1, 1),
(193224, 'NGUYEN HUU DUY THANH', 'Nhân Chính, Thanh Xuân, Hà Nội', 'thanhnguyen15022008@gmail.com', '0334758508', 245000, 1, '2021-08-21 22:46:05', '2021-08-21 23:04:03', 1, 1),
(227934, 'Nguyễn Văn B', 'Sầm Sơn', 'thanhnguyen15022008@gmail.com', '0987654321', 1803000, 1, '2021-08-07 21:41:28', '2021-08-07 21:46:32', 8, 0),
(228035, 'NGUYEN HUU DUY THANH', 'Nhân Chính, Thanh Xuân, Hà Nội', 'thanhnguyen15022008@gmail.com', '0334758508', 400000, 1, '2021-08-12 15:06:25', '2021-08-13 23:14:05', 1, 0),
(288640, 'Nguyễn Hữu A', 'Nhân Chính, Thanh Xuân, Hà Nội', 'thanhnguyen15022008@gmail.com', '0987654321', 1310000, 1, '2021-08-08 11:30:13', '2021-08-08 11:32:58', 9, 0),
(296745, 'NGUYEN HUU DUY THANH', 'Nhân Chính, Thanh Xuân, Hà Nội', 'thanhnguyen15022008@gmail.com', '0334758508', 445000, 1, '2021-08-21 11:51:27', '2021-08-21 11:54:26', 1, 1),
(409637, 'NGUYEN HUU DUY THANH', 'Nhân Chính, Thanh Xuân, Hà Nội', 'thanhnguyen15022008@gmail.com', '0334758508', 1260000, 1, '2021-08-12 14:21:46', '2021-08-12 14:22:16', 1, 0),
(416984, 'Nguyễn Hữu Duy Thành', 'Thanh Hóa', 'thanhnguyen15022008@gmail.com', '0334758508', 740000, 1, '2021-08-08 10:29:46', '2021-08-08 11:08:53', 1, 0),
(473618, 'NGUYEN HUU DUY THANH', 'Nhân Chính, Thanh Xuân, Hà Nội', 'thanhnguyen15022008@gmail.com', '0334758508', 460000, 0, '2021-08-21 23:02:01', NULL, 1, 1),
(543385, 'NGUYEN HUU DUY THANH', 'Nhân Chính, Thanh Xuân, Hà Nội', 'thanhnguyen15022008@gmail.com', '0334758508', 760000, 1, '2021-08-08 10:52:13', '2021-08-08 10:55:31', 1, 0),
(552905, 'Nguyễn Hữu Duy Thành', 'Thanh Hóa', 'thanhnguyen15022008@gmail.com', '0334758508', 200000, 1, '2021-08-07 23:30:21', '2021-08-08 10:23:45', 1, 0),
(581745, 'Admin', 'Sầm Sơn, Thanh Hóa', 'duythanh20082002@outlook.com', '0123456789', 250000, 1, '2021-08-08 11:14:40', '2021-08-08 11:14:53', 6, 0),
(635018, 'Nguyễn Hữu Duy Thành', 'Thanh Hóa', 'thanhnguyen15022008@gmail.com', '0334758508', 950000, 1, '2021-08-07 22:14:06', '2021-08-08 10:28:19', 1, 0),
(657875, 'NGUYEN HUU DUY THANH', 'Nhân Chính, Thanh Xuân, Hà Nội', 'thanhnguyen15022008@gmail.com', '0334758508', 400000, 1, '2021-08-12 15:08:56', '2021-08-12 15:09:26', 1, 0),
(674615, 'Nguyễn Hữu Duy Thành', 'Thanh Hóa', 'thanhnguyen15022008@gmail.com', '0334758508', 250000, 1, '2021-08-06 11:56:35', '2021-08-07 21:47:02', 1, 0),
(678460, 'NGUYEN HUU DUY THANH', 'Nhân Chính, Thanh Xuân, Hà Nội', 'thanhnguyen15022008@gmail.com', '0334758508', 1004000, 1, '2021-08-21 12:07:22', '2021-08-21 12:16:49', 1, 1),
(691245, 'NGUYEN HUU DUY THANH', 'Nhân Chính, Thanh Xuân, Hà Nội', 'thanhnguyen15022008@gmail.com', '0334758508', 1540000, 1, '2021-08-09 14:18:11', '2021-08-09 14:23:08', 1, 0),
(716042, 'Nguyễn Văn C', 'Sầm Sơn', 'thanhnguyen15022008@gmail.com', '0987654321', 370000, 1, '2021-08-07 21:52:56', '2021-08-08 10:27:59', 8, 0),
(813620, 'NGUYEN HUU DUY THANH', 'Nhân Chính, Thanh Xuân, Hà Nội', 'thanhnguyen15022008@gmail.com', '0334758508', 692000, 0, '2021-08-21 23:01:30', NULL, 1, 0),
(822833, 'Nguyễn Văn C', 'Sầm Sơn', 'thanhnguyen15022008@gmail.com', '0987654321', 1060000, 1, '2021-08-07 21:49:30', '2021-08-07 22:08:28', 8, 0),
(859879, 'Nguyễn Hữu Duy Thành', 'Thanh Hóa', 'thanhnguyen15022008@gmail.com', '0334758508', 3670000, 1, '2021-08-06 11:51:05', '2021-08-07 21:38:14', 1, 0),
(879139, 'Nguyễn Hữu Duy Thành', 'Thanh Hóa', 'thanhnguyen15022008@gmail.com', '0334758508', 700000, 1, '2021-08-07 22:11:29', '2021-08-07 22:12:16', 1, 0),
(912256, 'Nguyễn Văn C', 'Sầm Sơn', 'thanhnguyen15022008@gmail.com', '0987654321', 510000, 1, '2021-08-07 21:50:57', '2021-08-07 22:09:38', 8, 0),
(942761, 'Nguyễn Hữu Duy Thành', 'Thanh Hóa', 'thanhnguyen15022008@gmail.com', '0334758508', 250000, 1, '2021-08-06 11:55:57', '2021-08-07 21:31:33', 1, 0),
(984768, 'Nguyễn Hữu Duy Thành', 'Thanh Hóa', 'thanhnguyen15022008@gmail.com', '0334758508', 2950000, 0, '2021-08-07 23:27:59', NULL, 1, 0),
(996041, 'NGUYEN HUU DUY THANH', 'Nhân Chính, Thanh Xuân, Hà Nội', 'thanhnguyen15022008@gmail.com', '0334758508', 450000, 1, '2021-08-12 14:20:41', '2021-08-12 14:21:13', 1, 0);

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
(5, 674615, 13, 1, 250000, 250000, '36'),
(6, 171136, 13, 1, 250000, 250000, '36'),
(7, 227934, 36, 1, 820000, 820000, '36'),
(8, 227934, 20, 1, 520000, 520000, '36'),
(9, 227934, 48, 1, 263000, 263000, '36'),
(10, 227934, 14, 1, 200000, 200000, '36'),
(11, 822833, 29, 1, 260000, 260000, '36'),
(12, 822833, 19, 2, 400000, 800000, '38'),
(13, 912256, 29, 1, 260000, 260000, '36'),
(14, 912256, 16, 1, 250000, 250000, '36'),
(15, 716042, 26, 1, 370000, 370000, '36'),
(16, 879139, 28, 1, 240000, 240000, '36'),
(17, 879139, 31, 2, 230000, 460000, '36'),
(18, 635018, 13, 1, 250000, 250000, '36'),
(19, 635018, 33, 1, 700000, 700000, '36'),
(20, 984768, 14, 1, 200000, 200000, '36'),
(21, 984768, 16, 11, 250000, 2750000, '36'),
(22, 552905, 15, 1, 200000, 200000, '36'),
(23, 416984, 25, 1, 425000, 425000, '36'),
(24, 416984, 27, 1, 315000, 315000, '36'),
(25, 543385, 13, 2, 250000, 500000, '39'),
(26, 543385, 29, 1, 260000, 260000, '38'),
(27, 581745, 13, 1, 250000, 250000, '36'),
(28, 288640, 15, 1, 200000, 200000, '36'),
(29, 288640, 26, 3, 370000, 1110000, '39'),
(30, 184595, 16, 2, 250000, 500000, '43'),
(31, 691245, 13, 2, 250000, 500000, '39'),
(32, 691245, 20, 2, 520000, 1040000, '40'),
(33, 996041, 13, 1, 250000, 250000, '36'),
(34, 996041, 15, 1, 200000, 200000, '36'),
(35, 409637, 29, 1, 260000, 260000, '36'),
(36, 409637, 16, 1, 250000, 250000, '36'),
(37, 409637, 34, 1, 750000, 750000, '36'),
(38, 228035, 17, 2, 200000, 400000, '36'),
(39, 657875, 17, 2, 200000, 400000, '36'),
(41, 161169, 24, 1, 310000, 310000, '36'),
(80, 134248, 15, 1, 200000, 200000, '36'),
(81, 296745, 15, 1, 200000, 200000, '36'),
(82, 296745, 13, 1, 245000, 245000, '36'),
(83, 678460, 25, 1, 425000, 425000, '36'),
(84, 678460, 30, 1, 179000, 179000, '36'),
(85, 678460, 14, 2, 200000, 400000, '38'),
(86, 116238, 14, 1, 200000, 200000, '36'),
(87, 116238, 48, 1, 263000, 263000, '36'),
(88, 193224, 13, 1, 245000, 245000, '36'),
(89, 187176, 24, 1, 310000, 310000, '36'),
(90, 813620, 24, 1, 310000, 310000, '36'),
(91, 813620, 29, 1, 260000, 260000, '36'),
(92, 813620, 49, 1, 122000, 122000, '36'),
(93, 473618, 45, 1, 145000, 145000, '36'),
(94, 473618, 27, 1, 315000, 315000, '36');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lv` (`lv`),
  ADD KEY `gender` (`gender`);

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
-- Chỉ mục cho bảng `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catalog` (`catalog`);

--
-- Chỉ mục cho bảng `profit`
--
ALTER TABLE `profit`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `fk_user_id` (`user_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT cho bảng `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `profit`
--
ALTER TABLE `profit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `user_order_detail`
--
ALTER TABLE `user_order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`lv`) REFERENCES `position` (`id`),
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`gender`) REFERENCES `gender` (`id`);

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
