-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2019 at 05:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tools`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `about` varchar(2000) NOT NULL,
  `id` int(11) NOT NULL,
  `rank` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`name`, `position`, `about`, `id`, `rank`) VALUES
('Emran Jawarneh', 'Documentation', 'Studies at al-huson university', 1, 'student'),
('Malek Abu Murad', 'Documentation', 'Studies at al-huson university', 2, 'student'),
('Ahmad Ababneh', 'Documentation', 'Studies at al-huson university', 3, 'student'),
('Mohammad alawneh', 'Coding + Design', 'Studies at al-huson university', 4, 'student'),
('Talha ALshafeai', 'Coding + Design', 'Studies at al-huson university', 5, 'student'),
('Hasan Oqool', 'Coding + Design', 'Studies at al-huson university', 6, 'student'),
('Dr-Hasan Muaidi', 'Supervisor', 'Supervisor', 7, 'supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'hasan2');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`firstname`, `lastname`, `email`, `date`) VALUES
('ascas', 'acsas', 'asca', '2019-08-08 14:35:17'),
('fsafd', 'asf', 'diaamohammad15@gmail.com', '2019-07-28 17:50:31'),
('diaa', 'mohammad', 'diaamohammed15@gmail.com', '2019-07-28 17:50:31'),
('reg', 'er', 'hasanoqool98@gmail.com', '2019-07-28 17:50:31'),
('hasan', 'oqool', 'hasanoqoolmunchen@gmail.com', '2019-07-28 17:50:31'),
('asd', 'f', 'kajofostog@gmail.com', '2019-07-28 18:16:19'),
('ddghbd', 'dfhdfh', 'muaidi1964@gmail.com', '2019-07-28 17:50:31'),
('wef', 'wef', 'talha.alshafeai@yahoo.com', '2019-07-28 17:50:31'),
('jh', 'r', 'y@wef', '2019-07-28 17:50:31'),
('aiushd', 'sef', 'yasom7md11@gmail.com', '2019-07-28 17:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `email`, `message`, `subject`, `status`) VALUES
(1, 'kajofostog@gmail.com', 'qwd', 'asd', 'read'),
(2, 'talha.alshafeai@yahoo.com', 'saddssddas', 'asd', 'read'),
(3, 'kajofostog@gmail.com', 'qwdwqdwqqwddwqdwqqdw', 'qwdqwdqwdqdwdqwqdwqdw', 'read'),
(4, 'kajofostog@gmail.com', 'ddddddddddddddd', 'wqd', 'read'),
(5, 'kajofostog@gmail.com', 'dddddwwwwwwwwwwwwwwwwwwwddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'wqd', 'read'),
(6, 'kajofostog@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'd', 'read'),
(7, 'kajofostog@gmail.com', 'dqwdqw', 'qdw', 'read'),
(8, 'kajofostog@gmail.com', 'dwqqdw', 'qwddwq', 'read'),
(9, 'hasanoqool98@gmail.com', 'irbid', 'wrgwrgwegweg', 'read'),
(10, 'hasanoqool98@gmail.com', 'irbid45ygt3', '', 'read'),
(12, 'hasanoqool98@gmail.com', 'wef', 'wef', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `tool`
--

CREATE TABLE `tool` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(100) NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `category` varchar(100) NOT NULL,
  `video` varchar(200) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tool`
--

INSERT INTO `tool` (`id`, `name_ar`, `name_en`, `description`, `category`, `video`, `Date`) VALUES
(1, 'مرآة الأسنان', 'Mouth mirror', 'Dental mirrors are used by the dentist or dental auxiliary to view a mirror image of the teeth in locations of the mouth where visibility is difficult or impossible. They also are used for reflecting light onto desired surfaces, indirect vision, and with retraction of soft tissues to improve access or vision.\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	', 'Lab', '', '2019-07-28 19:16:09'),
(2, 'مسبار الأسنان', 'dental explorer', 'A dental explorer or sickle probe is an instrument in dentistry commonly used in the dental armamentarium. A sharp point at the end of the explorer is used to enhance tactile sensation.', 'Stainless steel', '', '2019-07-28 19:17:28'),
(3, 'ملقط', 'Tweezers', 'Tweezers are dental instruments used to place small objects in the mouth and retrieve small objects from the mouth.', 'Forceps', '', '2019-07-28 19:18:40'),
(4, 'جهاز الأسنان', 'Dental engine', 'A dental engine is a large chair-side appliance for use in a dentist\'s office. At minimum, a dental engine serves as a source of mechanical or pneumatic power for one or more handpieces.', 'Lab', '', '2019-07-28 19:19:29'),
(5, 'معقمة', 'Sterilizer', 'Sterilization refers to any process that eliminates, removes, kills, or deactivates all forms of life and other biological agents (such as fungi, bacteria, viruses, spore forms, prions, unicellular eukaryotic organisms such as Plasmodium, etc.', 'Lab', '', '2019-07-28 19:22:37'),
(6, 'جهاز الحشوة الضوئية', 'Light cure machine', 'A dental curing light is a piece of dental equipment that is used for polymerization of light cure resin based composites.[1] It can be used on several different dental materials that are curable by light', 'Lab', '', '2019-07-28 19:27:00'),
(7, 'جهاز خلط الحشوات', 'Amalgumator', 'An amalgamator is a mechanical apparatus designed to triturate balanced proportions of liquid mercury and metal alloy to produce silver amalgam restorative material.', 'Lab', '', '2019-07-28 19:27:41'),
(8, 'مقلحة', 'Scaler', 'Periodontal scalers are dental instruments used in the prophylactic and periodontal care of teeth, including scaling and root planing', 'Sharpened', '', '2019-07-28 19:28:13'),
(9, 'تورباين', 'Turbine', 'One of the most important pieces of equipment in the dental office is a dental highspeed handpiece. Speed and torque are kings where dental handpieces are concerned, and competition is fierce between manufacturers. ... Dental turbine, the heart of a handpiece, is the fastest spinning turbine in the world.', 'Stainless steel', '', '2019-07-28 19:28:49'),
(10, 'القبضة اليدوية', 'Handpiece', 'A dental drill or handpiece is a hand-held, mechanical instrument used to perform a variety of common dental procedures, including removing decay, polishing fillings, and altering prostheses', 'Stainless steel', '', '2019-07-28 19:29:29'),
(11, 'ماصة اللعاب', 'Saliva pumper', 'Saliva ejector system used in a dental practice (Brussels). This system is integrated on the dental unit.', 'Sharpened', '', '2019-07-28 20:35:55'),
(12, 'المحقنة الثلاثية', 'Triple syringe', 'A syringe is a simple reciprocating pump consisting of a plunger that fits tightly within a cylindrical tube called a barre.', 'Forceps', '', '2019-07-28 20:36:31'),
(13, 'مشرط', 'scalpel', 'The scalpel is an instrument used in dental surgery to cut tissue and make incisions . It consists of a handle and a blade that is changeable and of a single use.', 'Stainless steel', '', '2019-07-28 20:36:59'),
(14, 'إزميل', 'Chisel', 'Chisels are dental instruments used to remove, contour and smooth areas of the bone or enamel during surgical procedures. Chisels with a beveled cutting blade on one side of the edge are used for removing bone.', 'Sharpened', '', '2019-07-28 20:37:30'),
(15, 'مقص خيوط الجراحة', 'Scissors', 'Scissors are used for trimming the margins of 3M ESPE pre-formed crowns. ... SD foil scissors A are delicately made of a high-quality auto-clavable stainless steel alloy. For better handling, scissors are laterally curved.', 'Forceps', '', '2019-07-28 20:38:16'),
(16, 'المكحت', 'Curette', 'a surgical instrument used to remove material by a scraping action, especially from the uterus.', 'Sharpened', '', '2019-07-28 20:39:03'),
(17, 'ملقط ثنائي', 'Forceps', 'Forceps are a handheld, hinged instrument used for grasping and holding objects. Forceps are used when fingers are too large to grasp small objects or when many objects need to be held at one time while the hands are used to perform a task.', 'Forceps', '', '2019-07-28 20:39:42'),
(18, 'ضام الخد', 'Cheek retractor', 'The Adult Plastic Retractors are used to hold mucoperiosteal flaps, cheeks, lips and tongue away from the surgical area.', 'Stainless steel', '', '2019-07-28 20:40:23'),
(19, 'حافظ اللسان', 'Tongue Depressors', 'an instrument, typically a small flat piece of wood, used by health practitioners to press down the tongue in order to allow inspection of the mouth or throat.', 'Lab', '', '2019-07-28 20:41:10'),
(20, 'مصقلة', 'Flat plastic', 'Double ended with flat, blunt blades. A flat plastic is used to shape and removed excess filling material from a tooth.', 'Sharpened', '', '2019-07-28 20:41:43'),
(21, 'ملاعق لخلط الأسنان الجص', 'Spatulas for mixing Dental plaster', 'Dental 11R, Total Length is 8 inch, Working end Length is 3.8 inch: This line of spatulas was designed by dental engineers for better manipulation of aligate and plaster. Heavy blade spatula are the most advanced technical design. They help to mix and scoop which is a great help in picking up additional material. Mixing impression material (Alginate), stone and for many more purpose in the Dental lab.\r\n	', 'Lab', '', '2019-07-28 20:42:50'),
(22, 'علبة الفولاذ المقاوم للصدأ', 'Stainless Steel Tray', 'Perfect for professional surgical, veterinary and dentistry use \r\nMade from quality stainless steel with a fantastic polished finish.', 'Stainless steel', '', '2019-07-28 20:44:00'),
(23, 'أداة الكنتوري المركبة', 'Composite Contouring Instrument', 'Used when working near or at interproximal areas. Straight end compacts composite material, while sharp knife edge cuts composite to avoid bonding to adjacent tooth.', 'Sharpened', '', '2019-07-28 20:45:21'),
(24, 'موقد اللحام', 'Blow torch', 'This invention relates to improvements in dental blow torches. The primary object of the invention is the provision of a dental blow torch, which is simple, inexpensive, and which may be held in working position and manipulated with one hand so that the other is free for use.', 'Lab', '', '2019-07-28 20:46:08'),
(25, 'سكين الشمع', 'Wax knife', 'These spatulas are specifically designed for mixing and modeling dental waxes. They are formed by two ends , one with the spatula and the other with a teaspoon to liquefy and add wax.', 'Sharpened', '', '2019-07-28 20:47:32'),
(26, 'كارفر الشمع', 'Wax carver', 'A dental hand instrument, available in a wide variety of end shapes, used for forming and contouring wax, filling materials.', 'Sharpened', '', '2019-07-28 20:48:18'),
(27, 'قرون ', 'Cow horns forceps', 'cow horn  is used to extract 1st, 2nd and 3rd (if accessible) lower molars with divergent roots.', 'Forceps', '', '2019-07-28 20:50:10'),
(28, 'وجه القوس', 'Face bow', 'A face-bow is a dental instrument used in the field of prosthodontics. Its purpose is to transfer functional and aesthetic components from patient\'s mouth to the dental articulator.', 'Lab', '', '2019-07-28 20:50:55'),
(29, 'ملقط الحربة', 'Bayonet forceps', 'a two-bladed instrument with a handle, used for compressing or grasping tissues in surgical operations, handling sterile dressings, and other purposes. ... bayonet forceps a forceps whose blades are offset from the axis of the handle.', 'Forceps', '', '2019-07-28 20:51:26'),
(30, 'محدد الرأس', 'apex locator', 'An electronic apex locator is an electronic device used in endodontics determine the position of the apical constriction and thus determine the length of the root canal space.', 'Lab', '', '2019-07-28 20:52:05'),
(31, 'ثق', 'sdg', 'sffv', 'sdgf', '', '2019-08-12 18:08:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `tool`
--
ALTER TABLE `tool`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tool`
--
ALTER TABLE `tool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`email`) REFERENCES `contact` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
