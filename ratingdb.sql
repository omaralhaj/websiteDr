-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 12:46 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ratingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `ID` int(11) NOT NULL,
  `Name` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ArabicName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Logo` varchar(100) NOT NULL,
  `NoOfRatings` int(11) NOT NULL,
  `EducationLeve` double NOT NULL,
  `Counseling` double NOT NULL,
  `Food` double NOT NULL,
  `TeachersLevel` double NOT NULL,
  `Clubs` double NOT NULL,
  `Library` double NOT NULL,
  `Rooms` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`ID`, `Name`, `ArabicName`, `Description`, `Logo`, `NoOfRatings`, `EducationLeve`, `Counseling`, `Food`, `TeachersLevel`, `Clubs`, `Library`, `Rooms`) VALUES
(1, 'nursing', 'كلية التمريض', '.\nفي عام 1396هـ، بدء قسم التمريض كأحد الأقسام في كلية العلوم الطبية التطبيقية\n.\n وفي عام 1407/1408 تم استحداث برنامج الماجستير في علوم التمريض\n\n<br>\n.\nتم تحويل قسم التمريض إلى كلية مستقلة في 8/1/1425هـ\n\n<br>\n.\nتسعى كلية التمريض لتحقيق مركزًا متميزًا ورائدًا في تعليم التمريض والأبحاث العلمية وخدمة المجتمع محليًا وإقليميًا وعالميًا\n<br>\n<br>\n\n<b>أقسام الكلية:</b>\nقسم التمريض الباطني الجراحي، قسم تمريض صحة الأمومة و الطفولة، قسم تمريض صحة المجتمع و الصحة النفسية و العقلية، وقسم إدارة وتعليم التمريض', 'logo\\nursingLogo.jpg', 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'pharmacy', 'كلية الصيدلة', '.\nتم إنشاء كلية الصيدلة عام 1397هـ (1959م) بعد إنشاء جامعة الملك سعود بعامين\n<br><br>\n\n.\n<b>أقسام الكلية:</b>\nالصيدلة الإكلينية، الكمياء الصيدلية، علم الأدوية والسموم، قسم الصيدلانيات وقسم العقاقير', 'logo\\pharmacyLogo.jpg', 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'cams', 'كلية العلوم الطبية والتطبيقية', '."\n<b>رؤية الكلية:</b> \n"ريادة إقليمية وسمعة عالمية في مجالات العلوم التطبيقية\n<br><br>\n\n<b>أقسام الكلية:</b>\n قسم العلوم الإشعاعية، قسم البصريات وعلوم الرؤية، قسم التأهيل الصحي، قسم التكنولوجيا الطبية الحيوية، قسم صحة الأسنان، قسم علوم المجتمع، وقسم علوم المختبرات الإكلينيكية\n', 'logo\\camsLogo.jpg', 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'medicine', 'كلية الطب', '<b>أقسام الكلية:</b>\nقسم الأشعة، قسم الأنف والحنجرة، قسم الباطنة، قسم التخدير، قسم التشريح، قسم التعليم الطبي، قسم الجراحة، قسم الطب النفسي، قسم العناية المركزة، قسم جراحة العظام، قسم طب الأسرة والمجتمع، قسم طب الأطفال، قسم طب الأمراض الجلدية، قسم طب الطوارئ، قسم طب النساء والولادة، قسم طب وجراحة العيون، قسم علم الأمراض، قسم علم وظائف الأعضاء، وقسم علوم القلب', 'logo\\ksuLogo.png', 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'dent', 'كلية طب الأسنان', '."\r\n<b>رؤية الكلية:</b>\r\n "أن نكون كلية قائدة إقليمياً ومميزة عالمياً في إنتاج معرفة طب الأسنان واستخدامه\r\n<br><br>\r\n\r\n<b>أقسام الكلية:</b>\r\nقسم جراحة الوجه والفكين، قسم طب الفم وعلوم التشخيص، قسم طب أسنان الأطفال وتقويم الأسنان، قسم الأنسجة المحيطة بالأسنان وصحة أسنان المجتمع، قسم علوم الإستعاضة السينية، وقسم علوم إصالح الأسنان', 'logo\\ksuLogo.png', 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'pscems', 'كلية الأمير سلطان للخدمات الطبية الطارئة', '.\nتعد من أول الكليات التي تم إنشاؤها في مجال الخدمات الطبية الطارئة في المملكة\n.\nتم إنشاءها عام 1429هـ\n<br>\n."\n<b>رؤية الكلية:</b>\n "ريادة إقليمية وتميز عالمي في إعداد مخرجات منافسة ومبدعة في تخصصات العلوم الطبية الطارئة\n<br><br>\n\n<b>أقسام الكلية:</b>\n قسم الخدمات الإسعافية، قسم العلوم الأساسية، قسم الإصابات والحوادث، وقسم الإسعاف الجوي والبحري', 'logo\\pscemsLogo.png', 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'arts', 'كلية الآداب', '.\nتعد كلية الآداب أول كلية أنشئت في جامعة الملك سعود\n<br><br>\n\n<b>أقسام الكلية:</b>\nقسم اللغة العربية و آدابها، قسم اللغة الانجليزية وآدابها، قسم التاريخ، قسم الجغرافيا، قسم الإعلام، قسم الدراسات الاجتماعية، وقسم علوم المكتبات والمعلومات', 'logo\\artsLogo.jpg', 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'csspa', 'كلية علوم الرياضة والنشاط البدني', '<b>أٌقسام الكلية:</b>\n قسم الإداراة الرياضية والترويحية، قسم التربية البدنية، قسم الميكانيكا الحيوية والسلوك الحركي، وقسم فسيولوجيا الجهد البدني', 'logo\\ksuLogo.png', 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'cta', 'كلية السياحة والآثار', '."\n<b>رؤية الكلية:</b> \n"التميز في التعليم السياحي والآثاري والبحث العلمي وخدمة المجتمع\n<br><br>\n\n<b>أقسام الكلية:</b>\n قسم الآثار، قسم إدارة موارد التراث والإرشاد السياحي، وقسم الإدارة السياحية والفندقية', 'logo\\ksuLogo.png', 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'clps', 'كلية الحقوق والعلوم السياسية', '."\n<b>رؤية الكلية:</b>\n "الريادة والتميز في مجال الحقوق والعلوم السياسية إقليميًا وعالميًا في التعليم والبحث العلمي وخدمة المجتمع\n<br><br>\n\n.\n<b>أقسام الكلية:</b>\nقسم القانون الخاص، قسم القانون العام، وقسم العلوم السياسية', 'logo\\clpsLogo.jpeg', 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'education', 'كلية التربية', '<b>أٌقسام الكلية:</b>\nقسم  السياسات التربوية، قسم  علم النفس، قسم  الثقافة الإسلامية، قسم المناهج وطرق التدريس، قسم التربية الفنية، قسم تقنيات التعليم، قسم التربية الخاصة، قسم الادارة التربوية، وقسم الدارسات القرآنية', 'logo\\ksuLogo.png', 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'ali', 'معهد اللغويات العربية', '."\n<b>رؤية الكلية:</b>\n "الريادة العالمية والمرجعية العلمية في برامج اللغة العربية لغير الناطقين بها\n<br><br>\n\n<b>أقسام الكلية:</b>\nقسم اللغة والثقافة، قسم اللغويات التطبيقية، قسم تدريب المعلمين وقسم الطالبات', 'logo\\ksuLogo.png', 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'colt', 'كلية اللغات والترجمة', '."\n<b>رؤية الكلية:</b> \n"ريادة عالمية في مجالي اللغات والترجمة، ونافذة للتواصل مع ثقافات الشعوب وحضاراتها، للإسهام في بناء مجتمع المعرفة\n<br><br>\n\n<b>أقسام الكلية:</b>\nقسم اللغة الأنجليزية والترجمة، قسم اللغة الفرنسية والترجمة، قسم اللغات الحديثة والترجمة، وقسم اللسانيات ودراسات الترجمة', 'logo\\ksuLogo.png', 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'sciences', 'كلية العلوم', '.(\nتعد كلية العلوم ثاني كلية تم إنشاءها في جامعة الملك سعود في عام 1378هـ (1958م\n<br>\n."\n<b>رؤية الكلية:</b>\n " الريادة في العلوم الأساسية وتطبيقاتها وثقافتها للمساهمة في بناء مجتمع المعرفة\n<br><br>\n\n<b>أقسام الكلية:</b>\n قسم الاحصاء والبحوث العلمية، قسم الجيولوجيا، قسم الرياضيات، قسم علم الحيوان، قسم الفيزياء والفلك، قسم الكيمياء، قسم الكيمياء الحيوية، وقسم النبات والأحياء الدقيقة', 'logo\\ksuLogo.png', 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'ccis', 'كلية علوم الحاسب والمعلومات', '."\n<b>رؤية الكلية:</b>\n " الريادة في التعليم والبحث العلمي في مجالات الحوسبة وتقنية المعرفة\n<br><br>\n\n\n<b>أٌقسام الكلية:</b>\n قسم علوم الحاسب، قسم هندسة الحاسب، قسم نظم المعلومات، قسم هندسة البرمجيات، وقسم تقنية المعلومات ومساراته: مسار الشبكات والأمن، مسار إدارة البيانات، ومسار تقنية الويب والوسائط المتعددة', 'logo\\ccisLogo.png', 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'engineering', 'كلية الهندسة', '.\nأُنشئت كلية الهندسة عام 1382 للهجرة الموافق لعام 1962 للميلاد كمشروع مشترك بين حكومة المملكة العربية السعودية ومنظمة التربية والثقافة والعلوم الدولية اليونسكو\n<br>\n.\n انضمت الكلية إلى جامعة الملك سعود عام 1388 للهجرة الموافق لعام 1968 للميلاد\n<br>\n<br>\n<b>أقسام الكلية:</b>\n قسم الهندسة المدنية، قسم الهندسة الكهربائية، قسم الهندسة الكيميائية، قسم الهندسة الميكانيكي ، قسم الهندسة الصناعية، وقسم هندسة البترول والغاز الطبيعي', 'logo\\ksuLogo.png', 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'cba', 'كلية إدارة الأعمال', '."<b>رؤية الكلية:</b>\r\n" الريادة في التعليم والبحث في إدارة الأعمال للمساهمة في بناء اقتصاد المعرفة\r\n<br>\r\n<br>\r\n<b>أقسام الكلية:</b>\r\nقسم الإدارة، قسم الإدارة الصحية، قسم الإدارة العامة، قسم الإقتصاد، قسم التسويق، قسم المالية، قسم المحاسبة، قسم نظم المعلومات الإدارية، وقسم التحليل الكمي', 'logo\\cbaLogo.png', 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'cfas', 'كلية علوم الأغذية والزراعة', '."\r\n<b>رؤية الكلية:</b>\r\n " التميز في التعليم والتعلم والبحث العلمي وخدمة المجتمع في مجالات الأمن المائي والغذائي والتنمية الزراعية المستدامة\r\n<br>\r\n<br>\r\n<b>أقسام الكلية:</b>\r\nقسم الإنتاج النباتي، قسم الهندسة الزراعية، قسم الإنتاج الحيواني، قسم علوم التربة، قسم الاقتصاد الزراعي، قسم علوم الأغذية والتغذية، قسم الإرشاد الزراعي والمجتمع الريفي، وقسم وقاية النبات', 'logo\\cafsLogo.png', 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'cap', 'كلية العمارة والتخطيط', '\r\n."\r\n<b>رؤية الكلية:</b>\r\n " التميز عالمياً في بناء المعرفة في علوم البيئة المبنية\r\n<br>\r\n<br>\r\n.\r\n<b>أٌقسام الكلية:</b>\r\nقسم العمارة وعلوم البناء وقسم التخطيط العمراني', 'logo\\ksuLogo.png', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `collegesphotos`
--

CREATE TABLE `collegesphotos` (
  `college_id` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `PhotoPath` varchar(100) NOT NULL,
  `PhotoAlt` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegesphotos`
--

INSERT INTO `collegesphotos` (`college_id`, `ID`, `PhotoPath`, `PhotoAlt`) VALUES
(1, 1, 'photo\\nursingPhoto1.jpg', 'كلية التمريض طلاب'),
(1, 2, 'photo\\nursingPhoto2.png', 'كلية التمريض طالبات');

-- --------------------------------------------------------

--
-- Table structure for table `collegesrating`
--

CREATE TABLE `collegesrating` (
  `RatingID` int(11) NOT NULL,
  `CollegeID` int(11) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `NoOfRating` int(11) NOT NULL,
  `EducationLevel` double NOT NULL,
  `Counseling` double NOT NULL,
  `Food` double NOT NULL,
  `TeachersLevel` double NOT NULL,
  `Clubs` double NOT NULL,
  `Library` double NOT NULL,
  `Rooms` double NOT NULL,
  `Services` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegesrating`
--

INSERT INTO `collegesrating` (`RatingID`, `CollegeID`, `Gender`, `NoOfRating`, `EducationLevel`, `Counseling`, `Food`, `TeachersLevel`, `Clubs`, `Library`, `Rooms`, `Services`) VALUES
(1, 1, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 1, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 2, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 2, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 3, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 3, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 4, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 4, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 5, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 5, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 6, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 6, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 7, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 7, 'Female', 2, 6, 6, 6, 6, 6, 6, 6, 6),
(15, 8, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 8, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 9, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 9, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 10, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 10, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 11, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 11, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 12, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 12, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 13, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 13, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 14, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 14, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 15, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 15, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 16, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 16, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 17, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 17, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 18, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 18, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 19, 'Male', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 19, 'Female', 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactusmessages`
--

CREATE TABLE `contactusmessages` (
  `Message_ID` int(11) NOT NULL,
  `MessageType` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MessageBody` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactusmessages`
--

INSERT INTO `contactusmessages` (`Message_ID`, `MessageType`, `MessageBody`) VALUES
(1, 'خطأ في البيانات', 'تجربة');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `collegesphotos`
--
ALTER TABLE `collegesphotos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `collegesrating`
--
ALTER TABLE `collegesrating`
  ADD PRIMARY KEY (`RatingID`);

--
-- Indexes for table `contactusmessages`
--
ALTER TABLE `contactusmessages`
  ADD PRIMARY KEY (`Message_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `collegesphotos`
--
ALTER TABLE `collegesphotos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `collegesrating`
--
ALTER TABLE `collegesrating`
  MODIFY `RatingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `contactusmessages`
--
ALTER TABLE `contactusmessages`
  MODIFY `Message_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
