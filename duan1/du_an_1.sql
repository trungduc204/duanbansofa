-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2024 at 08:46 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_an_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bai_viet`
--

CREATE TABLE `bai_viet` (
  `id_bai_viet` int NOT NULL,
  `ten_bai_viet` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `noi_dung` varchar(2000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ngay_dang` date DEFAULT NULL,
  `anh1` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `anh2` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `trang_thai` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bai_viet`
--

INSERT INTO `bai_viet` (`id_bai_viet`, `ten_bai_viet`, `noi_dung`, `ngay_dang`, `anh1`, `anh2`, `trang_thai`) VALUES
(1, 'Ghế Sofa - Nét Đẹp và Tiện Ích Cho Ngôi Nhà Của Bạn', 'Ghế sofa không chỉ là nơi ngồi mà còn là trung tâm của không gian sống hiện đại. Bài viết này sẽ hướng dẫn bạn cách chọn ghế sofa phù hợp với phong cách nội thất và đem lại sự thoải mái tối đa cho gia đình của bạn.', '2007-12-23', 'azzurro7-750x434.jpg', NULL, NULL),
(2, 'Khám Phá Sự Đa Dạng trong Thế Giới của Ghế Sofa', 'Sự đa dạng của ghế sofa không ngừng khiến chúng trở thành điểm nhấn trong thiết kế nội thất. Bài viết này sẽ giới thiệu với bạn những xu hướng mới nhất và những mẫu ghế sofa độc đáo để nâng cao phong cách sống trong ngôi nhà của bạn.', '2007-12-23', 'canto1-750x434.jpg', NULL, NULL),
(3, 'Sự Quyến Rũ của Ghế Sofa Da - Nâng Tầm Phong Cách Nội Thất', 'Ghế sofa da luôn là biểu tượng của sự sang trọng và quyến rũ trong không gian sống. Bài viết này sẽ khám phá về vẻ đẹp và tính thực tế của ghế sofa da, từ chất liệu đến cách bảo quản và chăm sóc. ', '2007-12-23', 'mr-btm-42-750x434.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner_anh`
--

CREATE TABLE `banner_anh` (
  `id` int NOT NULL,
  `ten_banner` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `anh` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `trang_thai` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner_anh`
--

INSERT INTO `banner_anh` (`id`, `ten_banner`, `anh`, `link`, `trang_thai`) VALUES
(6, 'Khám phá ngay ', 'ban4.png', 'sofashop.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_binh_luan` int NOT NULL,
  `ma_khach_hang` int DEFAULT NULL,
  `ma_san_pham` int DEFAULT NULL,
  `noi_dung` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `anhbl` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ngay_binh_luan` date DEFAULT NULL,
  `vote` double DEFAULT NULL,
  `trang_thai` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`ma_binh_luan`, `ma_khach_hang`, `ma_san_pham`, `noi_dung`, `anhbl`, `ngay_binh_luan`, `vote`, `trang_thai`) VALUES
(118, 32, 13, 'Sản phẩm êm', 'gg.jpg', '2023-12-11', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `ma_chi_tiet_don_hang` int NOT NULL,
  `ma_don_hang` int NOT NULL,
  `ma_san_pham` int DEFAULT NULL,
  `id_km` int DEFAULT NULL,
  `so_luong` int DEFAULT NULL,
  `don_gia` double DEFAULT NULL,
  `thanh_tien` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`ma_chi_tiet_don_hang`, `ma_don_hang`, `ma_san_pham`, `id_km`, `so_luong`, `don_gia`, `thanh_tien`) VALUES
(1, 35, 20, NULL, 1, 1980000, 1980000),
(2, 35, 16, NULL, 1, 1999999, 1999999),
(3, 36, 12, NULL, 2, 1999999, 3999998),
(4, 36, 18, NULL, 1, 1999999, 1999999),
(5, 36, 11, NULL, 1, 2345432, 2345432),
(6, 37, 20, NULL, 1, 1980000, 1980000),
(7, 38, 15, NULL, 1, 2977900, 2977900),
(8, 39, 11, NULL, 1, 2000000, 2000000),
(9, 39, 13, NULL, 1, 2999999, 2999999);

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `ma_don_hang` int NOT NULL,
  `ngay_dat_hang` date DEFAULT NULL,
  `ma_khach_hang` int DEFAULT NULL,
  `trang_thai_don` tinyint DEFAULT '0',
  `thanh_tien` double DEFAULT NULL,
  `ho_ten` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`ma_don_hang`, `ngay_dat_hang`, `ma_khach_hang`, `trang_thai_don`, `thanh_tien`, `ho_ten`, `sdt`, `email`, `dia_chi`) VALUES
(39, '2023-12-11', 32, 0, 4999999, 'Phạm Trung Đức newww', '0373965579', 'phamtrungducceo@gmail.com', 'Phú Thọ');

-- --------------------------------------------------------

--
-- Table structure for table `he_thong`
--

CREATE TABLE `he_thong` (
  `id_ht` int NOT NULL,
  `ten_cua_hang` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sdt` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dia_chi` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `logo` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `he_thong`
--

INSERT INTO `he_thong` (`id_ht`, `ten_cua_hang`, `sdt`, `email`, `dia_chi`, `logo`) VALUES
(5, 'Sofa Shop', '0373965579', 'sofashop@fpt.edu.vn', 'Hateco Apollo Xuân Phương', 'logog.png');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_khach_hang` int NOT NULL,
  `ten_khach_hang` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dia_chi` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mat_khau` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `avt` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `trang_thai` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_khach_hang`, `ten_khach_hang`, `dia_chi`, `sdt`, `ngay_sinh`, `email`, `mat_khau`, `avt`, `trang_thai`) VALUES
(32, 'Phạm Trung Đứcc', 'Phú Thọ', '0373965579', '2023-11-01', 'phamtrungducceo@gmail.com', '5555', '71463d390f5bcb67e42e4f181ec1e52c.jpg', 1),
(33, 'Phạm Trung Đức', 'Hải Dương', '0373965579', '2023-11-22', 'phamtrungducceo@gmail.com', '1234', '2023-05-26.png', 0),
(34, 'Phạm Trung Đức', 'Phương Canh, Nam Từ Liêm, Hà Nội', '0373965579', NULL, 'emgalam9999@gmail.com', '123', '2023-05-26.png', 0),
(35, 'Test', 'Phú Thọ', '0344422224', '2004-08-31', 'test@gmail.com', '123', '357775808_246594554795196_32044626921524017_n.jpg', 0),
(36, 'Phạm Trung Duc', 'Phu Tho', '0373965579', NULL, 'adminn@gmail.com', '111', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `id_km` int NOT NULL,
  `ma_km` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `noi_dung` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ngay_tao` date DEFAULT NULL,
  `ngay_het_han` date DEFAULT NULL,
  `trang_thai` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`id_km`, `ma_km`, `noi_dung`, `ngay_tao`, `ngay_het_han`, `trang_thai`) VALUES
(2, 'PH378811', '200000', '2030-11-23', '2030-11-23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

CREATE TABLE `lien_he` (
  `id` int NOT NULL,
  `ma_khach_hang` int DEFAULT NULL,
  `noi_dung` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `trang_thai` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lien_he`
--

INSERT INTO `lien_he` (`id`, `ma_khach_hang`, `noi_dung`, `trang_thai`) VALUES
(1, 2, 'vbsj', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loai_hang`
--

CREATE TABLE `loai_hang` (
  `ma_loai_hang` int NOT NULL,
  `ten_loai_hang` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mo_ta` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `anh` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `trang_thai` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai_hang`
--

INSERT INTO `loai_hang` (`ma_loai_hang`, `ten_loai_hang`, `mo_ta`, `anh`, `trang_thai`) VALUES
(47, 'SOFA phòng khách', 'Mang đến sự êm ái cho gia đình ', 'bo-sofa-da-goc-chu-l-sfdk110.jpg', 0),
(49, 'SOFA góc chữ L', 'Lắp đặt gọn gàng cho căn phòng của bạn', 'sofa nỉ.jpg', 0),
(50, 'Sofa đệm', 'Mang đến trải nghiệm tốt cho người dùng', 'sf l.jpg', 0),
(52, 'SOFA nỉ', 'Mang đến sự êm ái và thoải mái, rất thích hợp cho việc thư giãn', 'sofa góc phòng.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `ma_nhan_vien` int NOT NULL,
  `ten_nhan_vien` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mat_khau` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `avt` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `quyen` tinyint DEFAULT NULL,
  `trang_thai` tinyint DEFAULT '0',
  `sdt` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dia_chi` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`ma_nhan_vien`, `ten_nhan_vien`, `email`, `mat_khau`, `avt`, `quyen`, `trang_thai`, `sdt`, `dia_chi`, `ngay_sinh`) VALUES
(4, 'Phạm Trung Đức', 'phamtrungducceo@gmail.com', '123', 'a517f06db17694d36c0261db7bff4ecb.jpg', 1, 1, '234567', 'Hải Dương', '2023-11-26'),
(10, 'Admin', 'admin@gmail.com', '123', 'vang-do-300x300.jpg', 1, 0, '0336781221', 'Hải Dương', '2023-10-06'),
(11, 'Phạm Trung Đức', 'admin1@gmail.com', '123', '2023-05-26.png', 2, 0, '0723898343', 'Phú Thọ', '2023-11-22'),
(12, 'adminn', 'adminn@gmail.com', '111', '6070919f9c9f0f145f29187dc4863e83.jpg', 2, 0, '0336781221', 'Hải Dương', '2023-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `id_quyen` int NOT NULL,
  `quyen` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`id_quyen`, `quyen`) VALUES
(1, 'admin'),
(2, 'Nhân viên');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_san_pham` int NOT NULL,
  `ten_san_pham` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ma_loai_hang` int DEFAULT NULL,
  `mo_ta` varchar(2000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ngay_them` date DEFAULT NULL,
  `don_gia` double DEFAULT NULL,
  `giam_gia` double DEFAULT NULL,
  `so_luong` int DEFAULT NULL,
  `luot_xem` int DEFAULT NULL,
  `anh` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `anh1` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `anh2` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `anh3` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `anh4` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `anh5` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `trang_thai` tinyint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ten_san_pham`, `ma_loai_hang`, `mo_ta`, `ngay_them`, `don_gia`, `giam_gia`, `so_luong`, `luot_xem`, `anh`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`, `trang_thai`) VALUES
(11, 'SOFA DA MALAYSIA: SOFA GÓC KH176', 50, 'Sofa da KH176 là kiểu dáng sofa hiện đại, thiết kế kiểu cách nhưng tinh tế. Mặt ngồi sofa thiết kế mềm tạo cảm giác êm ái cho người sử dụng. Phù hợp với phòng khách theo phong cách hiện đại, tối giản.  Nguồn gốc : Nhập khẩu nguyên chiếc từ Malaysia Nhà sản xuất: Omega Chất liệu khung:   gỗ dầu Malaysia, gỗ ép Chất liệu vỏ bọc: 100% da bò thật (0.9mm -1.1mm) Bảo hành: khung sườn sofa trọn đời, 18 tháng da sofa', '2023-11-24', 2000000, NULL, 11, 23, '4.jpg', '22.jpg', '44.jpg', '3.jpg', NULL, NULL, 0),
(12, 'SOFA DA MALAYSIA: BỘ RỜI KH244', 47, 'Đây là kiểu dáng mới nhưng tạo được hiệu ứng tích cực trên thị trường. Phần tựa và phần ghế ngồi của sofa thiết kế mềm mại tạo cảm giác thư giãn cho khách hàng sử dụng.Thiết kế đơn giản nhưng cực kỳ tinh tế tạo cảm giác sang trọng, hiện đại và trẻ trung Nguồn gốc : Nhập khẩu nguyên chiếc từ Malaysia Nhà sản xuất: Omega Chất liệu khung:   gỗ dầu Malaysia, gỗ ép Chất liệu vỏ bọc: 100% da bò thật (0.9mm -1.1mm) Bảo hành: khung sườn sofa trọn đời, 18 tháng da sofa', '2023-11-18', 1999999, NULL, 23, 78, '11.jpg', '296370631_1114482822755137_6511765847947354756_n.jpg', 'azzurro7-750x434.jpg', 'canto1-750x434.jpg', NULL, NULL, 0),
(13, 'SOFA DA MALAYSIA: BỘ RỜI KH245', 47, 'Đây là kiểu dáng mới nhưng tạo được hiệu ứng tích cực trên thị trường. Phần tựa và phần ghế ngồi của sofa thiết kế mềm mại tạo cảm giác thư giãn cho khách hàng sử dụng.Thiết kế đơn giản nhưng cực kỳ tinh tế tạo cảm giác sang trọng, hiện đại và trẻ trung Nguồn gốc : Nhập khẩu nguyên chiếc từ Malaysia Nhà sản xuất: Omega Chất liệu khung:   gỗ dầu Malaysia, gỗ ép Chất liệu vỏ bọc: 100% da bò thật (0.9mm -1.1mm) Bảo hành: khung sườn sofa trọn đời, 18 tháng da sofa ', '2023-11-08', 2999999, NULL, 29, 87, '33.jpg', '44.jpg', '11.jpg', '3.jpg', NULL, NULL, 0),
(14, 'Sofa Chaise Lounge', 52, 'Sofa da 9038 được thiết kế theo phong cách truyền thống của sofa Ý. Các chi tiết của sofa như tay vịn, họa tiết vv… được trang trí nhẹ nhàng, tiện lợi theo đúng với tiêu chí đẹp mắt và tiện dụng. Đây là mẫu sofa bán chạy nhất trên thị trường Việt Nam hiện nay. Sofa bộ 9038 được nhập khẩu trực tiếp từ Malaysia, nhà sản xuất Hugo Sofa. Chất liệu 100% da thật và khung sườn được làm từ gỗ dầu Malaysia. Bên cạnh lợi thế về mẫu mã đẹp, tiện dụng và thư giãn tuyệt đối khi ngồi, sofa bộ 9038 còn là mẫu sofa có giá cả cạnh tranh nhất. Khách hàng hoàn toàn có thể hài lòng, tin tưởng khi chọn mua mẫu sofa này Khách hàng có thể lựa chọn ghép bộ linh hoạt như chọn bộ 1+1+3; 2+3+đôn… hoặc có thể chọn mua ghế lẻ tùy ý Nhà sản xuất: HUGO Nguốn gốc nhập khẩu: Nhập trực tiếp từ Malaysia Chất liệu khung: Gỗ dầu Malaysia Chất liệu vỏ bọc: 100% da bò thật ( 0.9mm – 1.1mm)Chế độ bảo hành: khung sườn sofa trọn đời, 18 tháng da sofa ', '2023-11-09', 1980000, NULL, 59, 36, 'canto-6-750x434.jpg', '244-4-720x434.jpg', 'gg.jpg', '226.jpg', NULL, NULL, 0),
(18, 'SOFA DA MALAYSIA: BỘ RỜI KH246', 47, 'Sofa da 9038 được thiết kế theo phong cách truyền thống của sofa Ý. Các chi tiết của sofa như tay vịn, họa tiết vv… được trang trí nhẹ nhàng, tiện lợi theo đúng với tiêu chí đẹp mắt và tiện dụng. Đây là mẫu sofa bán chạy nhất trên thị trường Việt Nam hiện nay. Sofa bộ 9038 được nhập khẩu trực tiếp từ Malaysia, nhà sản xuất Hugo Sofa. Chất liệu 100% da thật và khung sườn được làm từ gỗ dầu Malaysia. Bên cạnh lợi thế về mẫu mã đẹp, tiện dụng và thư giãn tuyệt đối khi ngồi, sofa bộ 9038 còn là mẫu sofa có giá cả cạnh tranh nhất. Khách hàng hoàn toàn có thể hài lòng, tin tưởng khi chọn mua mẫu sofa này Khách hàng có thể lựa chọn ghép bộ linh hoạt như chọn bộ 1+1+3; 2+3+đôn… hoặc có thể chọn mua ghế lẻ tùy ý Nhà sản xuất: HUGO Nguốn gốc nhập khẩu: Nhập trực tiếp từ Malaysia Chất liệu khung: Gỗ dầu Malaysia Chất liệu vỏ bọc: 100% da bò thật ( 0.9mm – 1.1mm) Chế độ bảo hành: khung sườn sofa trọn đời, 18 tháng da sofa', '2023-11-15', 1999999, NULL, 34, 85, '3.jpg', '1.jpg', '6.jpg', '4.jpg', NULL, NULL, 0),
(19, 'SOFA DA MALAYSIA 9039', 49, 'Sofa có thể chuyển đổi thành giường, cung cấp lựa chọn thêm cho việc ngủ qua đêm.', '2023-11-18', 2000009, NULL, 57, 169, '9038-24-750x434.jpg', '6.jpg', '33.jpg', '44.jpg', NULL, NULL, 0),
(20, 'SOFA DA MALAYSIA 9038', 49, 'Loại sofa này có một phần dài hơn một bên, tạo ra không gian thoải mái cho việc nghỉ ngơi hoặc đọc sách.', '2023-11-09', 1980000, NULL, 57, 259, '9038-16-750x434.jpg', '1.jpg', '3.jpg', '5.jpg', NULL, NULL, 0),
(21, 'SOFA DA MALAYSIA', 50, 'Sofa da KH176 là kiểu dáng sofa hiện đại, thiết kế kiểu cách nhưng tinh tế. Mặt ngồi sofa thiết kế mềm tạo cảm giác êm ái cho người sử dụng. Phù hợp với phòng khách theo phong cách hiện đại, tối giản.', '2023-12-06', 2000000, NULL, 45, NULL, '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', 0),
(22, 'SOFA DA GÓC MALAYSIA', 48, 'Sofa da 1029 mang thiết kế hiện đại , thanh lịch và thoải mái với phàn lưng được làm như một chiếc gối cho bạn cảm giác thoải mái khi ngồi,  Mẫu sofa góc này đã va đang được rất nhiều khách hàng ưu ái lựa chọn cho phòng khách gia đình mình Nhà sản xuất: Lanouva Nguốc gốc nhập khẩu: Nhập trực tiếp từ Malaysia Chất liệu khung: Gỗ dầu Malaysia, gỗ ván ép, gỗ dán Chất liệu vỏ bọc: 100% da thật ( da bò), độ dày: 1,0 -1,2 mm Chế độ bảo hành: khung sườn sofa trọn đời, 18 tháng da sofa ', '2023-12-02', 2500000, NULL, 12, NULL, '11.jpg', '33.jpg', '44.jpg', '22.jpg', NULL, NULL, 0),
(23, 'SOFA DA MALAYSIA: BỘ RỜI KH555', 52, 'Đây là kiểu dáng mới nhưng tạo được hiệu ứng tích cực trên thị trường. Phần tựa và phần ghế ngồi của sofa thiết kế mềm mại tạo cảm giác thư giãn cho khách hàng sử dụng.Thiết kế đơn giản nhưng cực kỳ tinh tế tạo cảm giác sang trọng, hiện đại và trẻ trung Nguồn gốc : Nhập khẩu nguyên chiếc từ Malaysia Nhà sản xuất: Omega Chất liệu khung:   gỗ dầu Malaysia, gỗ ép Chất liệu vỏ bọc: 100% da bò thật (0.9mm -1.1mm) Bảo hành: khung sườn sofa trọn đời, 18 tháng da sofa ', '2023-12-16', 39999999, NULL, 5, NULL, '1.jpg', '44.jpg', '5.jpg', '9038-16-750x434.jpg', NULL, NULL, 0),
(24, 'SOFA NỈ GÓC MALAYSIA KH 244', 52, 'Đây là kiểu dáng mới nhưng tạo được hiệu ứng tích cực trên thị trường. Phần tựa và phần ghế ngồi của sofa thiết kế mềm mại tạo cảm giác thư giãn cho khách hàng sử dụng.Thiết kế đơn giản nhưng cực kỳ tinh tế tạo cảm giác sang trọng, hiện đại và trẻ trung Nguồn gốc : Nhập khẩu nguyên chiếc từ Malaysia Nhà sản xuất: Omega Malaysia Chất liệu khung:   gỗ dầu Malaysia, gỗ ép Chất liệu vỏ bọc: 100% da bò thật (0.9mm -1.1mm) Bảo hành: khung sườn sofa trọn đời, 18 tháng da sofa', '2023-12-07', 3900000, NULL, 13, NULL, 'new.jpg', 'tt.jpg', '22.jpg', '2.jpg', NULL, NULL, 0),
(25, 'SOFA NỈ GÓC MALAYSIA KH 245', 52, 'Đây là kiểu dáng mới nhưng tạo được hiệu ứng tích cực trên thị trường. Phần tựa và phần ghế ngồi của sofa thiết kế mềm mại tạo cảm giác thư giãn cho khách hàng sử dụng.Thiết kế đơn giản nhưng cực kỳ tinh tế tạo cảm giác sang trọng, hiện đại và trẻ trung Nguồn gốc : Nhập khẩu nguyên chiếc từ Malaysia Nhà sản xuất: Omega Malaysia Chất liệu khung:   gỗ dầu Malaysia, gỗ ép Chất liệu vỏ bọc: 100% da bò thật (0.9mm -1.1mm) Bảo hành: khung sườn sofa trọn đời, 18 tháng da sofa', '2023-12-07', 29000000, NULL, 4, NULL, 'nỉ.jpg', '6.jpg', '11.jpg', '33.jpg', NULL, NULL, 0),
(26, 'SOFA NỈ GÓC MALAYSIA KH 246', 47, 'Đây là kiểu dáng mới nhưng tạo được hiệu ứng tích cực trên thị trường. Phần tựa và phần ghế ngồi của sofa thiết kế mềm mại tạo cảm giác thư giãn cho khách hàng sử dụng.Thiết kế đơn giản nhưng cực kỳ tinh tế tạo cảm giác sang trọng, hiện đại và trẻ trung Nguồn gốc : Nhập khẩu nguyên chiếc từ Malaysia Nhà sản xuất: Omega Malaysia Chất liệu khung:   gỗ dầu Malaysia, gỗ ép Chất liệu vỏ bọc: 100% da bò thật (0.9mm -1.1mm) Bảo hành: khung sườn sofa trọn đời, 18 tháng da sofa', '2023-12-16', 29999999, NULL, 7, NULL, '244-1-720x434.jpg', '22.jpg', '44.jpg', '3.jpg', NULL, NULL, 0),
(27, 'SOFA ĐỆM GÓC MALAYSIA KH01', 50, 'Sự lựa chọn thông minh cho phòng khách hiện đại, với thiết kế phần ngồi rộng, chi iết gối tựa lưng tuyệt đối thoải mái, tựa tay thấp cho cảm giác tổng thể bộ sofa trường và thanh thoát Nhà sản xuất: ZOLANO Nguốc gốc nhập khẩu: Nhập trực tiếp từ Malaysia Chất liệu khung: Gỗ dầu Malaysia, gỗ ván ép, gỗ dán Chất liệu vỏ bọc: 100% da thật ( da bò), độ dày: 1,0 -1,2 mm Chế độ bảo hành: khung sườn sofa trọn đời, 18 tháng da sofa ', '2023-12-06', 39999999, NULL, 5, NULL, '244-4-720x434.jpg', '9038-24-750x434.jpg', '226.jpg', '6.jpg', NULL, NULL, 0),
(28, 'SOFA THƯ GIÃN ĐIỆN CANTO', 49, 'Sự lựa chọn thông minh cho phòng khách hiện đại, với thiết kế phần ngồi rộng, chi iết gối tựa lưng tuyệt đối thoải mái, tựa tay thấp cho cảm giác tổng thể bộ sofa trường và thanh thoát Nhà sản xuất: ZOLANO Nguốc gốc nhập khẩu: Nhập trực tiếp từ Malaysia Chất liệu khung: Gỗ dầu Malaysia, gỗ ván ép, gỗ dán Chất liệu vỏ bọc: 100% da thật ( da bò), độ dày: 1,0 -1,2 mm Chế độ bảo hành: khung sườn sofa trọn đời, 18 tháng da sofa ', '2023-12-23', 1999999, NULL, 7, NULL, 'canto-6-750x434.jpg', '244-1-720x434.jpg', '226.jpg', 'tt.jpg', NULL, NULL, 0),
(29, 'SOFA THƯ GIÃN ĐIỆN CANTO 02', 49, 'Sự lựa chọn thông minh cho phòng khách hiện đại, với thiết kế phần ngồi rộng, chi iết gối tựa lưng tuyệt đối thoải mái, tựa tay thấp cho cảm giác tổng thể bộ sofa trường và thanh thoát Nhà sản xuất: ZOLANO Nguốc gốc nhập khẩu: Nhập trực tiếp từ Malaysia Chất liệu khung: Gỗ dầu Malaysia, gỗ ván ép, gỗ dán Chất liệu vỏ bọc: 100% da thật ( da bò), độ dày: 1,0 -1,2 mm Chế độ bảo hành: khung sườn sofa trọn đời, 18 tháng da sofa ', '2023-12-23', 2000000, NULL, 6, NULL, 'nn.jpg', '6.jpg', '44.jpg', '3.jpg', NULL, NULL, 0),
(30, 'SOFA DA GÓC MALAYSIA MAXX 1029', 50, 'Sofa da 1029 mang thiết kế hiện đại , thanh lịch và thoải mái với phàn lưng được làm như một chiếc gối cho bạn cảm giác thoải mái khi ngồi,  Mẫu sofa góc này đã va đang được rất nhiều khách hàng ưu ái lựa chọn cho phòng khách gia đình mình Nhà sản xuất: Lanouva Nguốc gốc nhập khẩu: Nhập trực tiếp từ Malaysia Chất liệu khung: Gỗ dầu Malaysia, gỗ ván ép, gỗ dán Chất liệu vỏ bọc: 100% da thật ( da bò), độ dày: 1,0 -1,2 mm Chế độ bảo hành: khung sườn sofa trọn đời, 18 tháng da sofa', '2023-12-06', 2000000, NULL, 15, NULL, 'gg.jpg', 'canto-6-750x434.jpg', '244-1-720x434.jpg', 'nn.jpg', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id_bai_viet`);

--
-- Indexes for table `banner_anh`
--
ALTER TABLE `banner_anh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_binh_luan`);

--
-- Indexes for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`ma_chi_tiet_don_hang`,`ma_don_hang`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`ma_don_hang`);

--
-- Indexes for table `he_thong`
--
ALTER TABLE `he_thong`
  ADD PRIMARY KEY (`id_ht`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_khach_hang`);

--
-- Indexes for table `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`id_km`);

--
-- Indexes for table `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`ma_loai_hang`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`ma_nhan_vien`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`id_quyen`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_san_pham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id_bai_viet` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner_anh`
--
ALTER TABLE `banner_anh`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_binh_luan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `ma_chi_tiet_don_hang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `ma_don_hang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `he_thong`
--
ALTER TABLE `he_thong`
  MODIFY `id_ht` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_khach_hang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `id_km` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `ma_loai_hang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `ma_nhan_vien` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `quyen`
--
ALTER TABLE `quyen`
  MODIFY `id_quyen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma_san_pham` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
