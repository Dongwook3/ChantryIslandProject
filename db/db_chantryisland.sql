-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 17-03-04 00:20
-- 서버 버전: 5.7.11
-- PHP 버전: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `db_chantryisland`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gallery_id` smallint(10) UNSIGNED NOT NULL,
  `gallery_thumb` varchar(50) NOT NULL DEFAULT 'TH_def.jpg',
  `gallery_img` varchar(50) NOT NULL DEFAULT 'def.jpg',
  `gallery_title` varchar(100) NOT NULL,
  `gallery_desc` text NOT NULL,
  `gallery_photographer` varchar(50) NOT NULL,
  `gallery_date` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_id`, `gallery_thumb`, `gallery_img`, `gallery_title`, `gallery_desc`, `gallery_photographer`, `gallery_date`) VALUES
(1, 'TH_001.jpg', '001.jpg', 'Bird', 'Bird of Chantry Island', 'Nancy Calder', ''),
(2, 'TH_eggs.jpg', 'eggs.jpg', 'Eggs', 'Chantry Island bird eggs', 'Nancy Calder', ''),
(3, 'TH_003.jpg', '003.jpg', 'Birds', 'Birds of Chantry Island', 'Nancy Calder', ''),
(4, 'TH_004.jpg', '004.jpg', 'Lighthouse', 'Chantry Island Lighthouse', 'Vicki Tomori', ''),
(5, 'TH_005.jpg', '005.jpg', 'Lighthouse', 'Chantry Island Lighthouse', 'Donna Savoy', ''),
(6, 'TH_006.jpg', '006.jpg', 'Lighthouse', 'Chantry Island Lighthouse', 'Donna Savoy', ''),
(7, 'TH_007.jpg', '007.jpg', 'Aerial View', 'Aerial view of Chantry Island and the Saugeen River mouth in Southhampton, Ontario.', 'Karen Smith', ''),
(8, 'TH_008.jpg', '008.jpg', 'Aerial View', 'Aerial view of Chantry Island and the Saugeen River mouth in Southhampton, Ontario.', 'Karen Smith', ''),
(9, 'TH_009.jpg', '009.jpg', 'Aerial View', 'Aerial view of Chantry Island and the Saugeen River mouth in Southhampton, Ontario.', 'Karen Smith', ''),
(10, 'TH_010.jpg', '010.jpg', 'Flower', 'Chantry Island Gardens', 'Donna Savoy', ''),
(11, 'TH_011.jpg', '011.jpg', 'Room', 'Inside Light Keeper\'s Cottage.', 'George Plant', ''),
(12, 'TH_012.jpg', '012.jpg', 'Room', 'Inside Light Keeper\'s Cottage.', 'George Plant', ''),
(13, 'TH_013.jpg', '013.jpg', 'Island', 'Bird\'s eye view of the Chantry Island.', 'James Swartz', ''),
(14, 'TH_014.jpg', '014.jpg', 'Lighthouse', 'Evening shot of the Chantry Island Lighthouse.', 'Carol Walberg', ''),
(15, 'TH_015.jpg', '015.jpg', 'Peerless II', 'Chantry Island tour boat.', 'Gale Douglass', ''),
(16, 'TH_016.jpg', '016.jpg', 'Peerless II', 'The new Chantry Island tour boat: Peerless II.', 'Wayne MacDonald', ''),
(17, 'TH_017.jpg', '017.jpg', 'Peerless II', 'Shot of the Peerless II tour boat.', 'George Plant', ''),
(18, 'TH_018.jpg', '018.jpg', 'Saugeen River', 'Southampton Ontario, mouth of the Saugeen River.', 'Karen Smith', ''),
(19, 'TH_019.jpg', '019.jpg', 'Sunset', 'Sunset behind the Chantry Island Lighthouse.', 'Terry Thomas', ''),
(20, 'TH_020.jpg', '020.jpg', 'Room', 'Inside Light Keeper\'s Cottage.', 'Terry Thomas', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` smallint(4) UNSIGNED NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `use_email` varchar(50) NOT NULL,
  `user_level` varchar(100) NOT NULL,
  `user_ip` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- 테이블의 인덱스 `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gallery_id` smallint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- 테이블의 AUTO_INCREMENT `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
