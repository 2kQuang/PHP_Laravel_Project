-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 11, 2021 lúc 04:32 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `database_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diadiem`
--

CREATE TABLE `diadiem` (
  `id_diadiem` int(10) NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vung` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lienhe` varchar(10) NOT NULL,
  `open` time NOT NULL,
  `close` time NOT NULL,
  `avt_diadiem` varchar(100) NOT NULL,
  `bando` text NOT NULL,
  `danhgia` float NOT NULL,
  `id_theloai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `diadiem`
--

INSERT INTO `diadiem` (`id_diadiem`, `ten`, `diachi`, `vung`, `lienhe`, `open`, `close`, `avt_diadiem`, `bando`, `danhgia`, `id_theloai`) VALUES
(1, 'Nướng Đà Thành', 'Địa chỉ : 105 – 106 Nguyễn Văn Linh, Đà Nẵng', 'Hòa Quý', '0977837145', '12:00:00', '17:00:00', '1.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.1091242332727!2d108.21162845782519!3d16.059826102246657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b5efce7fb9%3A0x61d8e783f0d33b8c!2zMTA1IE5ndXnhu4VuIFbEg24gTGluaCwgVsSpbmggVHJ1bmcsIFRoYW5oIEtow6osIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1593072131265!5m2!1svi!2s\" width=\"330\" height=\"310\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 4, 1),
(2, 'Bún thịt nướng Bà Trai', '194 Đống Đa, Hải Châu, Đà Nẵng.', 'Hải Châu', '0923541232', '12:00:00', '17:00:00', '2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7667.486006684401!2d108.21725077301635!3d16.07882059143811!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb8f68fb96c255946!2zQsO6biB0aOG7i3Qgbsaw4bubbmcgQsOgIFRyYWk!5e0!3m2!1svi!2s!4v1610117667058!5m2!1svi!2s\" width=\"330\" height=\"310\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 4, 1),
(3, 'Cơm gà Ngọc Diệp', ' 56 Hải Phòng, Thanh Khê, Đà Nẵng.', 'Thanh Khê', '0942434175', '07:00:00', '14:00:00', '3.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.862469519433!2d108.21665161416995!3d16.072625043617773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421836df349f21%3A0x5499870f2067d335!2zUXXDoW4gxINuIE5n4buNYyBEaeG7h3A!5e0!3m2!1svi!2s!4v1593072932100!5m2!1svi!2s\" width=\"330\" height=\"310\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 3.3, 1),
(4, 'Quán chè Liên ', '175 Hải Phòng, Thanh Khê, Đà Nẵng.', 'Thanh Khê', '0835112444', '10:00:00', '23:00:00', '4.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8840978572234!2d108.21041451416988!3d16.071503143647494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421849eac51b25%3A0x2664c2573bd8d5c6!2zQ2jDqCBMacOqbg!5e0!3m2!1svi!2s!4v1593073043369!5m2!1svi!2s\" width=\"310\" height=\"330\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 5, 3),
(5, 'Trà sữa Money', '17 Nguyễn Du, Thạch Thang, Hải Châu, Đà Nẵng ', 'Da Nang', '8493531241', '14:00:00', '23:00:00', '5.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.7445394456313!2d108.22034641417002!3d16.07874094345544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142183ba66df46b%3A0xdffaed1d8b374e00!2zVHLDoCBz4buvYSBNb25leQ!5e0!3m2!1svi!2s!4v1593073237952!5m2!1svi!2s\" width=\"330\" height=\"310\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 4.5, 2),
(6, 'Ốc Ngon Đà Nẵng', '137 Nguyễn Đức Trung, Hòa Khê, Thanh Khê, Đà Nẵng 550000', 'Hải Châu', ' 090 551 1', '15:00:00', '21:00:00', '6.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.984208324584!2d108.1864624141698!3d16.066309243785238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219003c5310a3%3A0x9d3d2bf38db8204e!2z4buQYyBOZ29uIMSQw6AgTuG6tW5n!5e0!3m2!1svi!2s!4v1593073832109!5m2!1svi!2s\" width=\"330\" height=\"310\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 3, 3),
(7, 'Bánh tráng cuốn thịt heo', '12 Lê Hồng Phong, Phước Ninh, Hải Châu, Đà Nẵng', 'Hải Châu', ' 090 515 6', '11:00:00', '23:00:00', '7.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.028404646009!2d108.2207897141698!3d16.064015743846138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219cb3bb29bfb%3A0x53754b77dfd04574!2zxJDhurdjIHPhuqNuIEhvw6BuZyBUw61uIC0gQsOhbmggdHLDoW5nIGN14buRbiB0aOG7i3QgaGVv!5e0!3m2!1svi!2s!4v1593073956256!5m2!1svi!2s\" width=\"330\" height=\"310\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 5, 1),
(8, 'Ăn vặt cô Liên', '12 Hải Phòng, Thạch Thang, Hải Châu, Đà Nẵng', 'Hải Châu', '0933434342', '15:00:00', '22:00:00', '8.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8618390965976!2d108.21752711416991!3d16.07265774361687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142195a2133f56f%3A0xc902ada55d9bba99!2zxIJuIHbhurd0IGPDtCBMacOqbg!5e0!3m2!1svi!2s!4v1593074067278!5m2!1svi!2s\" width=\"330\" height=\"310\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 4.2, 3),
(9, 'Cơm niêu Nhà Đỏ', '176 Nguyễn Tri Phương, Thạc Gián, Thanh Khê, Đà Nẵng', 'Thanh Khê', '8490527682', '11:00:00', '20:00:00', '9.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.0889899657805!2d108.20254476416977!3d16.06087124392951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b122847b3f%3A0x17896ca8c13d76bc!2zQ8ahbSBOacOqdSBOaMOgIMSQ4buP!5e0!3m2!1svi!2s!4v1593074252399!5m2!1svi!2s\" width=\"330\" height=\"310\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 3, 1),
(10, 'Mười Rau Quán', '12 Phạm Ngọc Thạch, Thuận Phước, Hải Châu', 'Da Nang', '842367109', '16:00:00', '22:00:00', '10.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.5582062307644!2d108.21498231417016!3d16.088399643198915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219743955c5a1%3A0xc918ee2753aefe28!2zTcaw4budaSBSYXUgUXXDoW4!5e0!3m2!1svi!2s!4v1593074497338!5m2!1svi!2s\" width=\"330\" height=\"310\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 4.5, 1),
(11, 'Ăn Đêm Đà Nẵng', '11 Ông Ích Khiêm, Thanh Bình, Hải Châu, Đà Nẵng', 'Hải Châu', '847080691', '23:00:00', '10:00:00', '11.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.7459820433282!2d108.20944431416996!3d16.07866614345737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421847a8d4d1d1%3A0x4af43b6403e9ed3a!2zxIJuIMSQw6ptIMSQw6AgTuG6tW5n!5e0!3m2!1svi!2s!4v1593074656508!5m2!1svi!2s\" width=\"330\" height=\"310\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 5, 3),
(12, 'Yes! Sushi', '103 Hoàng Diệu, Phước Ninh, Hải Châu, Đà Nẵng ', 'Hòa Hải', '0988323442', '00:00:00', '00:00:00', '12.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15336.52403513801!2d108.21225951722805!3d16.05869003066545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219cb3972fdd5%3A0x681a5d53c26839c7!2sYes*21%20Sushi!5e0!3m2!1svi!2s!4v1593075145151!5m2!1svi!2s\" width=\"330\" height=\"310\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 4.3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlydon`
--

CREATE TABLE `quanlydon` (
  `id_diadiem` int(50) NOT NULL,
  `id_taikhoan` int(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(10) NOT NULL,
  `name_sanpham` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_theloai` int(10) NOT NULL,
  `id_diadiem` int(10) NOT NULL,
  `gia` int(10) NOT NULL,
  `avt_sanpham` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `name_sanpham`, `id_theloai`, `id_diadiem`, `gia`, `avt_sanpham`) VALUES
(1, 'Bò nướng khoai tây', 1, 1, 70000, '1.jpg'),
(2, 'Gà nướng', 1, 1, 200000, '2.jpg'),
(3, 'Gà Chỉ', 1, 1, 86000, '3.jpg'),
(4, 'Gỏi cơm dừa heo quay', 1, 1, 300000, '4.jpg'),
(5, 'Bún thịt nướng', 1, 2, 70000, '5.jpg'),
(6, 'bún thịt nướng', 1, 2, 300000, '6.jpg'),
(7, 'Cơm gà Ngọc Diệp', 1, 3, 86000, '7.jpg'),
(8, 'Cơm gà Ngọc Diệp', 1, 3, 300000, '8.jpg'),
(9, 'Cơm gà Ngọc Diệp', 1, 3, 100000, '9.jpg'),
(10, 'Chè thái', 3, 4, 300000, '10.jpg'),
(11, 'Sữa chua trái cây', 3, 4, 17000, '11.jpg'),
(12, 'chè trái cây', 3, 4, 30000, '12.jpg'),
(13, 'Chè long nhãn', 3, 4, 20000, '13.jpg'),
(14, 'Trà sữa socola', 2, 5, 22000, '14.jpg'),
(15, 'Trà sữa truyền thống', 2, 5, 30000, '15.jpg'),
(16, 'Trà sữa khoai môn', 2, 5, 22022, '16.jpg'),
(17, 'Ốc hương', 3, 6, 20000, '17.jpg'),
(18, 'Ốc bưu', 3, 6, 30000, '18.jpg'),
(19, 'Ốc hút', 3, 6, 20002, '19.jpg'),
(20, 'Bún ốc', 3, 6, 30000, '20.jpg'),
(21, 'Bánh tráng cuốn', 1, 7, 40000, '21.jpg'),
(22, 'Bánh cuốn thịt', 1, 7, 30000, '22.jpg'),
(23, 'Ăn vặt cô liên', 3, 8, 50000, '23.jpg'),
(24, 'Ăn vặt cô Liên', 3, 8, 30000, '24.jpg'),
(25, 'Ăn vặt cô Liên', 3, 8, 70000, '25.jpg'),
(26, 'Ăn vặt cô Liên', 3, 8, 30000, '26.jpg'),
(27, 'Cơm niêu Nhà Đỏ', 1, 9, 70000, '27.jpg'),
(28, 'Cơm niêu Nhà Đỏ', 1, 9, 30000, '28.jpg'),
(29, 'Cơm niêu Nhà Đỏ', 1, 9, 70000, '29.jpg'),
(30, 'Cơm niêu Nhà Đỏ', 1, 9, 30000, '30.jpg'),
(31, 'Cá nục giấy bạc', 1, 10, 70000, '33.jpg'),
(32, 'Sường que', 1, 10, 30000, '32.jpg'),
(33, 'Lẩu cá', 1, 10, 70000, '31.jpg'),
(36, 'Ăn Đêm Đà Nẵng', 3, 11, 70000, '34.jpg'),
(37, 'Ăn Đêm Đà Nẵng', 3, 11, 30000, '35.jpg'),
(38, 'Ăn Đêm Đà Nẵng', 3, 11, 15000, '36.jpg'),
(39, 'Ăn Đêm Đà Nẵng', 3, 11, 30000, '37.jpg'),
(40, 'Yes! Sushi', 1, 12, 70000, '38.jpg'),
(41, 'Yes! Sushi', 1, 12, 30000, '39.jpg'),
(42, 'Yes! Sushi', 1, 12, 70000, '40.jpg'),
(44, 'chich cca', 1, 1, 23323, '7.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_taikhoan` int(10) NOT NULL,
  `taikhoan` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` int(10) DEFAULT NULL,
  `diachi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `vung` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `avt` varchar(50) DEFAULT NULL,
  `quyen` varchar(50) DEFAULT NULL,
  `trangthai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_taikhoan`, `taikhoan`, `matkhau`, `ten`, `sdt`, `diachi`, `vung`, `avt`, `quyen`, `trangthai`) VALUES
(1, 'nguoithuong', '1', 'tung ', 98546652, '', 'mieenf trumg', '', '1', '1'),
(2, 'admin', '1', 'admin', 94599255, '', 'dsgdgs', '', '0', '1'),
(12, 'nhahang', '1', 'diadiem', 945337907, NULL, NULL, NULL, '2', '1'),
(13, 'nguyen', '1', 'Tài', 954232344, NULL, NULL, NULL, '1', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id_theloai` int(10) NOT NULL,
  `theloai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id_theloai`, `theloai`, `thumbnail`) VALUES
(1, ' Món ăn', 'food.png'),
(2, ' Nước uống', 'drink.png'),
(3, 'Ăn Vặt', 'fastfood.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diadiem`
--
ALTER TABLE `diadiem`
  ADD PRIMARY KEY (`id_diadiem`),
  ADD KEY `id_theloai` (`id_theloai`);

--
-- Chỉ mục cho bảng `quanlydon`
--
ALTER TABLE `quanlydon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_diadiem` (`id_diadiem`),
  ADD KEY `id_taikhoan` (`id_taikhoan`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_place` (`id_diadiem`),
  ADD KEY `id_category` (`id_theloai`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_taikhoan`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id_theloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `diadiem`
--
ALTER TABLE `diadiem`
  MODIFY `id_diadiem` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `quanlydon`
--
ALTER TABLE `quanlydon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_taikhoan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id_theloai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diadiem`
--
ALTER TABLE `diadiem`
  ADD CONSTRAINT `diadiem_ibfk_1` FOREIGN KEY (`id_theloai`) REFERENCES `theloai` (`id_theloai`);

--
-- Các ràng buộc cho bảng `quanlydon`
--
ALTER TABLE `quanlydon`
  ADD CONSTRAINT `quanlydon_ibfk_1` FOREIGN KEY (`id_diadiem`) REFERENCES `diadiem` (`id_diadiem`),
  ADD CONSTRAINT `quanlydon_ibfk_2` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id_taikhoan`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_diadiem`) REFERENCES `diadiem` (`id_diadiem`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`id_theloai`) REFERENCES `theloai` (`id_theloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
