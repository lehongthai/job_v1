-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2016 at 02:22 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tin_timviec`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int(11) NOT NULL,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_thumb` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `meta_key`, `meta_desc`, `image`, `image_thumb`, `title`) VALUES
(1, '1', '1', 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/images/g1.jpg', 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/_thumbs/Images/g1.jpg', 'hdfg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_post_jobs`
--

CREATE TABLE IF NOT EXISTS `admin_post_jobs` (
  `id` int(11) NOT NULL,
  `employer_id` int(11) DEFAULT NULL,
  `type_job` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `quanlity` varchar(200) DEFAULT NULL,
  `sex` varchar(200) DEFAULT NULL,
  `description` text,
  `require` text,
  `attribute` varchar(200) DEFAULT NULL,
  `level` varchar(200) DEFAULT NULL,
  `empirical` varchar(200) DEFAULT NULL,
  `wage` varchar(100) DEFAULT NULL,
  `min_kickback` varchar(200) DEFAULT NULL,
  `max_kickback` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `probation_time` varchar(200) DEFAULT NULL,
  `benefit` text,
  `fields` varchar(200) DEFAULT NULL,
  `provin` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `expired_at` varchar(200) DEFAULT NULL,
  `create_date` varchar(200) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_post_jobs`
--

INSERT INTO `admin_post_jobs` (`id`, `employer_id`, `type_job`, `title`, `quanlity`, `sex`, `description`, `require`, `attribute`, `level`, `empirical`, `wage`, `min_kickback`, `max_kickback`, `type`, `probation_time`, `benefit`, `fields`, `provin`, `status`, `expired_at`, `create_date`) VALUES
(1, 2, 2, 'Lập Trình Web', '3', '1', 'Chơi không làm :v', 'Chơi không làm :v', '17', '1', '4', '14', '10', '20', '3', '12', 'Chơi không làm :v', '9,14', '1,11,19', '1', '2016-12-15', '2016-12-13 17:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `aq`
--

CREATE TABLE IF NOT EXISTS `aq` (
  `id` int(11) NOT NULL,
  `answer` varchar(200) DEFAULT NULL,
  `question` text,
  `keywords` varchar(150) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `orders` varchar(10) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aq`
--

INSERT INTO `aq` (`id`, `answer`, `question`, `keywords`, `description`, `orders`) VALUES
(1, 'Tại sao phải tạo hồ sơ trực tuyến', '<p>Khi c&oacute; hồ sơ trực tuyến tr&ecirc;n timviecnhanh.com bạn c&oacute; thể t&igrave;m việc nhanh hơn do: - Hồ sơ trực tuyến gi&uacute;p bạn ứng tuyển ngay được tất cả c&aacute;c việc l&agrave;m tr&ecirc;n website Timviecnhanh.com. - Hồ sơ trực tuyến được hiển thị tr&ecirc;n web v&agrave; Nh&agrave; tuyển dụng c&oacute; thể t&igrave;m thấy th&ocirc;ng tin của bạn để mời bạn tham dự phỏng vấn ngay cả khi bạn chưa ứng tuyển cho vị tr&iacute; c&ocirc;ng việc đ&oacute;.</p>\r\n', '', '', '3'),
(2, 'Sau khi hồ sơ được kích hoạt, tôi có thể chỉnh sửa thông tin theo ý mình không?', '<p>Sau khi hồ sơ được k&iacute;ch hoạt, bạn vẫn c&oacute; thể chỉnh sửa c&aacute;c nội dung. Tuy nhi&ecirc;n, sau khi chỉnh sửa nội dung sẽ được BQT website Timviecnhanh.com kiểm duyệt lại v&agrave; cho hiển thị trong v&ograve;ng 24h.</p>\r\n\r\n<p>Để chỉnh sửa nội dung hồ sơ của m&igrave;nh bạn c&oacute; thể v&agrave;o mục &ldquo;Tủ hồ sơ&rdquo; v&agrave; tiến h&agrave;nh chỉnh sửa&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt="" src="http://cdn.timviecnhanh.com/asset/home/img/seeker/14700335251.png" style="background:0px 0px; border:0px; float:left; height:312px; margin:0px; max-width:none; outline:0px; padding:0px; vertical-align:baseline; width:655px" /></p>\r\n', '', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE IF NOT EXISTS `category_post` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `alias` varchar(100) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `meta_key` varchar(200) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`id`, `name`, `alias`, `order`, `meta_desc`, `meta_key`, `url`) VALUES
(1, 'LIÊN HỆ', 'lien-he', 3, NULL, NULL, 'contact'),
(2, 'DỰ ÁN', 'du-an', 2, NULL, NULL, 'project'),
(7, 'GIỚI THIỆU', 'gioi-thieu', 1, NULL, NULL, 'about');

-- --------------------------------------------------------

--
-- Table structure for table `cv_user`
--

CREATE TABLE IF NOT EXISTS `cv_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `empirical` varchar(20) DEFAULT NULL,
  `diploma` varchar(20) DEFAULT NULL,
  `diploma_wish` varchar(20) DEFAULT NULL,
  `jobs_wish` varchar(20) DEFAULT NULL,
  `wage` varchar(100) DEFAULT NULL,
  `provin_wish` varchar(20) DEFAULT NULL,
  `exigency` varchar(20) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `description` text,
  `create_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `detail_cv`
--

CREATE TABLE IF NOT EXISTS `detail_cv` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) DEFAULT NULL,
  `intro` varchar(250) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `position` varchar(200) DEFAULT NULL,
  `start_time` varchar(25) DEFAULT NULL,
  `end_time` varchar(25) DEFAULT NULL,
  `wage` varchar(10) DEFAULT NULL,
  `description_job` varchar(250) DEFAULT NULL,
  `achieve` varchar(250) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `school_name` varchar(100) DEFAULT NULL,
  `start_time_school` varchar(5) DEFAULT NULL,
  `end_time_school` varchar(5) DEFAULT NULL,
  `description_diploma` varchar(200) DEFAULT NULL,
  `loai_tn` varchar(4) DEFAULT NULL,
  `image_tn` varchar(150) DEFAULT NULL,
  `create_date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_cv`
--

INSERT INTO `detail_cv` (`id`, `candidate_id`, `intro`, `company`, `position`, `start_time`, `end_time`, `wage`, `description_job`, `achieve`, `level`, `school_name`, `start_time_school`, `end_time_school`, `description_diploma`, `loai_tn`, `image_tn`, `create_date`) VALUES
(1, 2, 'Giá trị phải là numeric và phải chính xác độ dài là value.', 'Công ty Autovis', 'Quản lý', '10/2013', '11/2015', '10000000', 'Giá trị phải là numeric và phải chính xác độ dài là value.', 'Giá trị phải là numeric và phải chính xác độ dài là value.', '1', 'Trường Công Nghệ Thông Tin', '2012', '2015', 'Mạng Máy Tính', '20', '', '2016-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `detail_cv_diploma`
--

CREATE TABLE IF NOT EXISTS `detail_cv_diploma` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `language_level` varchar(10) DEFAULT NULL,
  `listen` varchar(2) DEFAULT NULL,
  `speak` varchar(2) DEFAULT NULL,
  `read` varchar(2) DEFAULT NULL,
  `write` varchar(2) DEFAULT NULL,
  `ms_word` varchar(2) DEFAULT NULL,
  `ms_excel` varchar(2) DEFAULT NULL,
  `ms_power_point` varchar(2) DEFAULT NULL,
  `ms_outlook` varchar(2) DEFAULT NULL,
  `others` varchar(250) DEFAULT NULL,
  `create_date` date DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_cv_diploma`
--

INSERT INTO `detail_cv_diploma` (`id`, `candidate_id`, `language`, `language_level`, `listen`, `speak`, `read`, `write`, `ms_word`, `ms_excel`, `ms_power_point`, `ms_outlook`, `others`, `create_date`) VALUES
(1, 2, '21', '32', '2', '3', '4', '3', '2', '3', '3', '4', 'Chẳng có chi ^^', '2016-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `image_thumb` varchar(255) NOT NULL,
  `content` text,
  `alt` varchar(200) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `size` varchar(20) NOT NULL,
  `link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_link`, `image_thumb`, `content`, `alt`, `name`, `size`, `link`) VALUES
(10, 'http://localhost:8080/LeThai/Laravel/ninemobi/public/upload/files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/ninemobi/public/upload/_thumbs/Files/banner.jpg', 'Slider 1', NULL, 'Slider 1', '', 'link fv'),
(11, 'http://localhost:8080/LeThai/Laravel/ninemobi/public/upload/files/bn193.jpg', 'http://localhost:8080/LeThai/Laravel/ninemobi/public/upload/_thumbs/Files/bn193.jpg', 'Slider 2', NULL, 'Slider 2', '', 'link fv');

-- --------------------------------------------------------

--
-- Table structure for table `infocv_user`
--

CREATE TABLE IF NOT EXISTS `infocv_user` (
  `id` int(11) NOT NULL,
  `orders` varchar(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `alias` varchar(100) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infocv_user`
--

INSERT INTO `infocv_user` (`id`, `orders`, `name`, `alias`) VALUES
(1, '9', 'Bằng Cấp 1', 'level'),
(2, '8', 'Bằng Cấp 2', 'level'),
(3, '8', 'Chưa có kinh nghiệm', 'empirical'),
(4, '7', '1 năm kinh nghiệm', 'empirical'),
(5, '8', 'Nhân Vien', 'diploma'),
(6, '9', 'Cộng tác viên', 'diploma'),
(7, '8', 'Trưởng phòng', 'diploma_wish'),
(8, '8', 'Chuyên gia', 'diploma_wish'),
(9, '8', 'Đang có việc làm', 'exigency'),
(10, '8', 'Muốn tìm việc mới', 'exigency'),
(12, '1', 'Nhận việc ngay', 'probation_time'),
(13, '2', 'Thử 1 tháng', 'probation_time'),
(14, '2', '3-5 Triệu ', 'wage'),
(15, '2', '5-7 Triệu ', 'wage'),
(16, '2', 'Giờ hành chính', 'attribute'),
(17, '2', 'Việc làm online', 'attribute'),
(18, '2', 'Giỏi', 'loai_tn'),
(19, '2', 'Khá', 'loai_tn'),
(20, '2', 'Trung Bình', 'loai_tn'),
(21, '2', 'Tiếng Anh', 'language'),
(22, '2', 'Tiếng Pháp', 'language'),
(23, '2', 'Tiếng Trung', 'language'),
(24, '2', 'Tiếng Nhật', 'language'),
(25, '2', 'Tiếng Hàn', 'language'),
(26, '2', 'Tiếng Nga', 'language'),
(27, '2', 'Tiếng Đức', 'language'),
(28, '2', 'Tiếng Ý', 'language'),
(29, '2', 'Tiếng Ả-Rập', 'language'),
(30, '2', 'Ngôn ngữ khác', 'language'),
(31, '2', 'Sơ Cấp', 'language_level'),
(32, '2', 'Trung Cấp', 'language_level'),
(33, '2', 'Cao Cấp', 'language_level');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `alias` varchar(150) DEFAULT NULL,
  `orders` varchar(10) DEFAULT NULL,
  `keywords` varchar(150) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image_thumb` varchar(150) DEFAULT NULL,
  `image_link` varchar(150) DEFAULT NULL,
  `alt` varchar(150) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `alias`, `orders`, `keywords`, `description`, `image_thumb`, `image_link`, `alt`) VALUES
(2, 'Tư vấn bảo hiểm', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(3, 'Bán hàng', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(4, 'Báo chí/Biên tập viên', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(5, 'Bất động sản', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(6, 'Biên dịch/Phiên dịch', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(7, 'Bưu chính viễn thông', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(8, 'Cơ khí/Kĩ thuật ứng dụng', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(9, 'Công nghệ thông tin', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(10, 'Dầu khí/Địa chất', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(11, 'Dệt may', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(12, 'Bảo vệ/Vệ sĩ/An ninh', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(13, 'Chăm sóc khách hàng', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(14, 'Điện/Điện tử/Điện lạnh', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(15, 'Du lịch/Nhà hàng/Khách sạn', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(16, 'Dược/Hóa chất/Sinh hóa', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(17, 'Giải trí/Vui chơi', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(18, 'Giáo dục/Đào tạo/Thư viện', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(19, 'Giao thông/Vận tải/Thủy lợi/Cầu đường', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(20, 'Giày da/Thuộc da', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(21, 'Hành chính/Thư ký/Trợ lý', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(22, 'Kho vận/Vật tư/Thu mua', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(23, 'Luật/Pháp lý', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(24, 'Lao động phổ thông', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(25, 'Kinh doanh', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(26, 'Kiến trúc/Nội thất', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(27, 'Sinh viên/Mới tốt nghiệp/Thực tập', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(28, 'Môi trường/Xử lý chất thải', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(29, 'Mỹ phẩm', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(30, 'Ngân hàng/Chứng khoán/Đầu tư', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(31, 'Nghệ thuật/Điện ảnh', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(32, 'Nhân sự', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(33, 'Nông/Lâm/Ngư nghiệp', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(34, 'Quan hệ đối ngoại', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(35, 'Thẩm định/Giám định/Quản lý chất lượng', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(36, 'Quản lý điều hành', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(37, 'Quảng cáo/Marketing/PR', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(38, 'Sản xuất/Vận hành sản xuất', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(39, 'Tài chính/Kế toán/Kiểm toán', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(40, 'Thể dục/Thể thao', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(41, 'Thời vụ/Bán thời gian', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(42, 'Thực phẩm/DV ăn uống', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(43, 'Thiết kế/Mỹ thuật', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(44, 'Xây dựng', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(45, 'Xuất-Nhập khẩu/Ngoại thương', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(46, 'Y tế', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(47, 'Khác', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(48, 'Ngoại ngữ', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(49, 'Khu chế xuất/Khu công nghiệp', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(50, 'Làm đẹp/Thể lực/Spa', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(51, 'Tài xế/Lái xe/Giao nhận', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(52, 'Trang thiết bị công nghiệp', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(53, 'Trang thiết bị gia dụng', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(54, 'Trang thiết bị văn phòng', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(55, 'PG/PB/Lễ tân', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(56, 'Phát triển thị trường', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', ''),
(57, 'Phục vụ/Tạp vụ/Giúp việc', 'tu-van-bao-hiem', '10', 'Tư vấn bảo hiểm', 'Tư vấn bảo hiểm', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/_thumbs/Files/banner.jpg', 'http://localhost:8080/LeThai/Laravel/timviec/public/upload/files/banner.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_08_13_063345_create_products_table', 2),
(4, '2016_08_13_064404_create_product_images_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `intro` text COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_thumbnail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `views` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `cate_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `alias`, `intro`, `content`, `keywords`, `description`, `tags`, `image_link`, `alt`, `image_thumbnail`, `views`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 'Bài 1', 'bai-1', 'Anh có cập nhật danh sách đóng tiền tại form này, mọi người vào xem anh có thiếu ai không nha', '<p>B&agrave;i 1</p>\r\n', 'Bài 1', 'Bài 1', NULL, 'http://localhost:8080/LeThai/Laravel/ninemobi/public/upload/files/135993_435.jpg', '', 'http://localhost:8080/LeThai/Laravel/ninemobi/public/upload/_thumbs/Files/135993_435.jpg', '1', 2, 1, '2016-11-29 05:42:39', '2016-11-29 21:06:50'),
(2, 'bài 2', 'bai-2', 'bài 2', '<p>b&agrave;i 2</p>\r\n', 'bài 2', 'bài 2', NULL, 'http://localhost:8080/LeThai/Laravel/ninemobi/public/upload/files/fcb-fc-barcelona-logo-simple-minimal-hd-wallpaper-vvallpapernet.jpg', '', 'http://localhost:8080/LeThai/Laravel/ninemobi/public/upload/_thumbs/Files/fcb-fc-barcelona-logo-simple-minimal-hd-wallpaper-vvallpapernet.jpg', '1', 2, 1, '2016-11-29 09:17:49', '2016-11-29 21:06:58'),
(3, 'bài 3', 'bai-3', 'bài 2', '<p>b&agrave;i 2</p>\r\n', '', 'bài 2', NULL, 'http://localhost:8080/LeThai/Laravel/ninemobi/public/upload/files/mes-que-un-club.jpg', '', 'http://localhost:8080/LeThai/Laravel/ninemobi/public/upload/_thumbs/Files/mes-que-un-club.jpg', '1', 2, 1, '2016-11-29 09:23:10', '2016-11-29 21:07:05'),
(4, 'Giới Thiệu', 'gioi-thieu', '[NextGen - Vòng 3] Tập 1 - Series hoạt động Nhà chung của Top 18 Chính thức bắt đầu cuộc sống tại Nhà Chung Điều bất ngờ nào đang chờ đợi Top ', '<p><span style="color:rgb(29, 33, 41); font-family:helvetica,arial,sans-serif; font-size:14px">[NextGen - V&ograve;ng 3] Tập 1 - Series hoạt động Nh&agrave; chung của Top 18 Ch&iacute;nh thức bắt đầu cuộc sống tại Nh&agrave; Chung Điều bất ngờ n&agrave;o đang chờ đợi Top&nbsp;</span></p>\r\n', 'sfsf', '[NextGen - Vòng 3] Tập 1 - Series hoạt động Nhà chung của Top 18 Chính thức bắt đầu cuộc sống tại Nhà Chung Điều bất ngờ nào đang chờ đợi Top ', NULL, 'http://localhost:8080/LeThai/Laravel/ninemobi/public/upload/files/ulMjMF4.jpg', '', 'http://localhost:8080/LeThai/Laravel/ninemobi/public/upload/_thumbs/Files/ulMjMF4.jpg', NULL, 2, 7, '2016-11-29 09:46:11', '2016-11-29 21:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `provins`
--

CREATE TABLE IF NOT EXISTS `provins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `compass` tinyint(2) DEFAULT NULL,
  `keywords` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `search` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provins`
--

INSERT INTO `provins` (`id`, `name`, `compass`, `keywords`, `description`, `search`) VALUES
(1, 'Hồ Chí Minh', 2, 'tp ho chi minh', 'tp ho chi minh', 2),
(2, 'An Giang', 2, 'tp da nang', 'tp da nang', 2),
(4, 'Bà Rịa - Vũng Tàu', 2, 'tp da nang', 'tp da nang', 2),
(5, 'Bắc Giang', 2, 'tp da nang', 'tp da nang', 2),
(6, 'Bắc Kạn', 2, 'tp da nang', 'tp da nang', 2),
(7, 'Bạc Liêu', 2, 'tp da nang', 'tp da nang', 2),
(8, 'Bắc Ninh', 2, 'tp da nang', 'tp da nang', 2),
(9, 'Bến Tre', 2, 'tp da nang', 'tp da nang', 2),
(10, 'Bình Định', 2, 'tp da nang', 'tp da nang', 2),
(11, 'Bình Dương', 2, 'tp da nang', 'tp da nang', 2),
(12, 'Bình Phước', 2, 'tp da nang', 'tp da nang', 2),
(13, 'Bình Thuận', 2, 'tp da nang', 'tp da nang', 2),
(14, 'Cà Mau', 2, 'tp da nang', 'tp da nang', 2),
(15, 'Cao Bằng', 2, 'tp da nang', 'tp da nang', 2),
(16, 'Đắk Lắk', 2, 'tp da nang', 'tp da nang', 2),
(17, 'Đắk Nông', 2, 'tp da nang', 'tp da nang', 2),
(18, 'Điện Biên', 2, 'tp da nang', 'tp da nang', 2),
(19, 'Đồng Nai', 2, 'tp da nang', 'tp da nang', 2),
(20, 'Đồng Tháp', 2, 'tp da nang', 'tp da nang', 2),
(21, 'Gia Lai', 2, 'tp da nang', 'tp da nang', 2),
(22, 'Hà Giang', 2, 'tp da nang', 'tp da nang', 2),
(23, 'Hà Nam', 2, 'tp da nang', 'tp da nang', 2),
(24, 'Hà Tĩnh', 2, 'tp da nang', 'tp da nang', 2),
(25, 'Hải Dương', 2, 'tp da nang', 'tp da nang', 2),
(26, 'Hậu Giang', 2, 'tp da nang', 'tp da nang', 2),
(27, 'Hòa Bình', 2, 'tp da nang', 'tp da nang', 2),
(28, 'Hưng Yên', 2, 'tp da nang', 'tp da nang', 2),
(29, 'Khánh Hòa', 2, 'tp da nang', 'tp da nang', 2),
(30, 'Kiên Giang', 2, 'tp da nang', 'tp da nang', 2),
(31, 'Kon Tum', 2, 'tp da nang', 'tp da nang', 2),
(32, 'Lai Châu', 2, 'tp da nang', 'tp da nang', 2),
(33, 'Lâm Đồng', 2, 'tp da nang', 'tp da nang', 2),
(34, 'Lạng Sơn', 2, 'tp da nang', 'tp da nang', 2),
(35, 'Lào Cai', 2, 'tp da nang', 'tp da nang', 2),
(36, 'Long An', 2, 'tp da nang', 'tp da nang', 2),
(37, 'Nam Định', 2, 'tp da nang', 'tp da nang', 2),
(38, 'Nghệ An', 2, 'tp da nang', 'tp da nang', 2),
(39, 'Ninh Bình', 2, 'tp da nang', 'tp da nang', 2),
(40, 'Ninh Thuận', 2, 'tp da nang', 'tp da nang', 2),
(41, 'Phú Thọ', 2, 'tp da nang', 'tp da nang', 2),
(42, 'Đà Nẵng', 2, 'tp da nang', 'tp da nang', 2),
(43, 'Quảng Bình', 2, 'tp da nang', 'tp da nang', 2),
(44, 'Quảng Nam', 2, 'tp da nang', 'tp da nang', 2),
(45, 'Quảng Ngãi', 2, 'tp da nang', 'tp da nang', 2),
(46, 'Quảng Ninh', 2, 'tp da nang', 'tp da nang', 2),
(47, 'Quảng Trị', 2, 'tp da nang', 'tp da nang', 2),
(48, 'Sóc Trăng', 2, 'tp da nang', 'tp da nang', 2),
(49, 'Sơn La', 2, 'tp da nang', 'tp da nang', 2),
(50, 'Tây Ninh', 2, 'tp da nang', 'tp da nang', 2),
(51, 'Thái Bình', 2, 'tp da nang', 'tp da nang', 2),
(52, 'Thái Nguyên', 2, 'tp da nang', 'tp da nang', 2),
(53, 'Thanh Hóa', 2, 'tp da nang', 'tp da nang', 2),
(54, 'Thừa Thiên Huế', 2, 'tp da nang', 'tp da nang', 2),
(55, 'Tiền Giang', 2, 'tp da nang', 'tp da nang', 2),
(56, 'Trà Vinh', 2, 'tp da nang', 'tp da nang', 2),
(57, 'Tuyên Quang', 2, 'tp da nang', 'tp da nang', 2),
(58, 'Vĩnh Long', 2, 'tp da nang', 'tp da nang', 2),
(59, 'Vĩnh Phúc', 2, 'tp da nang', 'tp da nang', 2),
(60, 'Yên Bái', 2, 'tp da nang', 'tp da nang', 2),
(61, 'Phú Yên', 2, 'tp da nang', 'tp da nang', 2),
(62, 'Cần Thơ', 2, 'tp da nang', 'tp da nang', 2),
(63, 'Hải Phòng', 2, 'tp da nang', 'tp da nang', 2),
(64, 'Hà Nội', 2, 'tp da nang', 'tp da nang', 2),
(65, 'Đà Nẵng', 2, 'tp da nang', 'tp da nang', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `tel` varchar(13) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `facebook` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `location`, `phone`, `tel`, `email`, `facebook`) VALUES
(1, 'Ngõ 110 Trần Duy Hưng  Quận Cầu Giấy, TP. Hà Nội', '0123456789', '0123456789', 'admin@gmail.com', 'https://www.facebook.com/shopthethaoPhuMy/');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE IF NOT EXISTS `socials` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `social_id` varchar(100) DEFAULT NULL,
  `provider` varchar(100) DEFAULT NULL,
  `_token` varchar(100) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'Toàn Thời Gian'),
(2, 'Bán Thời Gian'),
(3, 'Làm Tự Do');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(2) DEFAULT NULL,
  `active` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sex` tinyint(2) DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provin` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `level`, `active`, `remember_token`, `created_at`, `birthday`, `sex`, `phone`, `address`, `provin`, `avatar`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', '$2y$10$EGTUR2L6k2EniJtRe0gX7O.TammNE2yxzIEEQXiGONqmoY/gu7Qmm', 2, '1', '9BhzJQNDc9n4mGmVjmGN2qJWb3gJoRgM3fJLsnINvCflDhnzM0FowuoEqOH2', '2016-11-11 07:12:01', NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-29 20:48:18'),
(7, '123@gmail.com', '123@gmail.com', '$2y$10$X.fiRaJPt7hmwSlDTqVLCuqLH42Z91r7pfvkc8Oo6ht/XdpW8mOxC', 1, NULL, 'OcGULQuLrYsnCfo03sWojtw0HlySmkVf2ovcSPgISLJUeYuVawK67iJRoK3q', '2016-11-17 02:31:12', NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-17 02:33:05'),
(33, 'Lê Hồng Thái', 'teamchich24@gmail.com', '$2y$10$WeIOKRIAR0apV2C/wKeR/upJc1wjGReEQDmGJGz0HyF2UU9.b.gBu', 1, '1', 'QbOqBGAFoK8TuSPh7EIfqD0lDh6rVLwT5606LOeV', '2016-12-09 19:41:02', NULL, NULL, NULL, NULL, NULL, NULL, '2016-12-09 19:42:37'),
(34, 'Lê Hồng Thái', 'teamchich23@gmail.com', '$2y$10$mdjCAlnwKz2FHxtnAK9KiO7hKrAiZY1U0WGTGIKt.rVF2bCw3H3x.', 1, '1', 'u2yIKuoBIPdrEYvxCgCspU3xG3QcrHk1UYrzXg3c', '2016-12-11 10:18:47', '1994-01-01', 1, NULL, 'Kí túc xá khu b', '1', NULL, '2016-12-11 10:35:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_post_jobs`
--
ALTER TABLE `admin_post_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aq`
--
ALTER TABLE `aq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv_user`
--
ALTER TABLE `cv_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_cv`
--
ALTER TABLE `detail_cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_cv_diploma`
--
ALTER TABLE `detail_cv_diploma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infocv_user`
--
ALTER TABLE `infocv_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `provins`
--
ALTER TABLE `provins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin_post_jobs`
--
ALTER TABLE `admin_post_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `aq`
--
ALTER TABLE `aq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cv_user`
--
ALTER TABLE `cv_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_cv`
--
ALTER TABLE `detail_cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `detail_cv_diploma`
--
ALTER TABLE `detail_cv_diploma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `infocv_user`
--
ALTER TABLE `infocv_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `provins`
--
ALTER TABLE `provins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
