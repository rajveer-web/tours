-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2015 at 06:53 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cu1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'rajveer', 'raju'),
(2, 'pawan', 'pawan'),
(3, 'navjot', 'navu');

-- --------------------------------------------------------

--
-- Table structure for table `bb`
--

CREATE TABLE IF NOT EXISTS `bb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `desp` varchar(1000) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `pack` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `bb`
--

INSERT INTO `bb` (`id`, `name`, `desp`, `photo`, `pack`) VALUES
(1, 'Solang Valley', 'Solang Nala (Valley) drives its name from combination of words Solang (Nearby village) and Nullah (water stream). It is a side valley at the top of the Kullu Valley in Himachal Pradesh, India 14 km northwest of the resort town Manali on the way to Rohtang Pass, and is known for its summer and winter sport conditions. The sports most commonly offered are parachuting, paragliding, skating and zorbing.Giant slopes of lawn comprise Solang Valley and provide its reputation as a popular ski resort. A few ski agencies offering courses and equipment reside here and operate only during winters.Snow melts during the summer months starting May and skiing is then replaced by zorbing (a giant ball with room for 2 people which is rolled down a 200 metre hill), paragliding, parachuting and horse riding.Location:Manali, IndiaFloor elevation:2,560 m (8,400 feet)', 'Solang-Valley.jpg', 'RS.7500'),
(2, 'The Ridge, Shimla', 'The Ridge road is a large open space, located in the heart of Shimla, the capital city of Himachal Pradesh, India. The Ridge is the hub of all cultural activities of Shimla. It is situated along the Mall Road, which is the famous shopping center of Shimla. Most major places of Shimla like Snowdon, Mall, Jakhoo hill, etc. are connected through the Ridge.\r\n\r\nIt runs east to west alongside the Mall Road, and joins it at the Scandal Point on the west side. On the east side, The Ridge road leads to Lakkar Bazaar, a wooden crafts market. It''s the major landmark and the most easily recognized face of the hill station. When winter sets in and when the country had its first major snowfall of the year, most news papers printed photos of the ridge submerged in clumps of fresh snow.\r\nThe Ridge, Shimla covered in snow as seen from ''Scandal Point''.\r\nElevation:2,205 m (7,234 ft)', 'The-Ridge-Shimla.JPG', 'RS.8500'),
(3, 'Kangra Valley', 'Kangra Valley is situated in Himachal Pradesh, India. It is a popular tourist destination, with the peak season around March and April. Dharamshala, the headquarters of Kangra district, lies on the southern spur of Dhauladhar in the valley. It is home of Masroor Rock Cut Temple, also known as Himalayan Pyramids and wonder of the world for being likely contender for the UNESCO World Heritage Site.The valley is filled with numerous perennial streams, which irrigate the valley. The valley has an average elevation of 2000 ft. Kangra Valley is a strike valley and extends from the foot of the Dhaola Dhar Range to the south of river Beas. The highest peak on the Dhauladhar range (White Mountain) which marks the boundary between the valley and Chamba, reaches 15,956 ft. The peaks of the range are approximately 13,000 ft above the valley floor, rising sharply from its base with no low hills in between.Covers a distance of 164 km (101.9 mi) from Pathankot.Kangra is a hilly region in Himachal Pra', '6917556193_e334a53c8a_b.JPG', 'RS.5600'),
(4, 'Kasauli', 'Kasauli is a small cantonment town in Solan district in the Indian state of Himachal Pradesh. The cantonment was established in 1842 by the British colonial rulers as a hill station. Located 77 km from Shimla, 65 km from Chandigarh and 50 km from Panchkula, it still retains an old world charm.The Kasauli distillery and brewery were set up in the late 1820s at Kasauli (before the town was established nearby) by Edward Dyer. He brought with him, brewing and distilling equipment from England and Scotland. This equipment came by sailing ship as far up the Ganges river as possible, before being loaded onto ox drawn carts and taken up to the Himalayas via the route to Shimla. Some of the original equipment including the copper pot stills are still in use today.', 'kasauli.jpg', 'RS.9500'),
(5, 'Hidimba Devi Temple', 'Hidimbi Devi Temple, also known variously as the Hadimba Temple, is located in ManÄli, a hill station in the State of HimÄchal Pradesh in north India.It is an ancient cave temple dedicated to Hidimbi Devi, sister of Hidimba, a figure in the Indian epic MahÄbhÄrata. The temple is surrounded by a cedar forest at the foot of the HimÄlayas. The sanctuary is built over a huge rock jutting out of the ground which was worshipped as an image of the deity. The structure was built in 1553.The temple base is made out of whitewashed, mud-covered stonework. An enormous rock occupies the inside of the temple, only a 7.5 cm (3 inch) tall brass image representing goddess Hidimbi Devi.Address: Old Manali, Manali, Himachal Pradesh 175131', 'Hadimba-Devi-Temple-Manali.jpg', 'RS.7500'),
(6, 'Dharamsala', 'Dharamshala (also Dharamsala)   or  is a city and a municipal council in Kangra district in the Indian state of Himachal Pradesh. It is the district headquarters. It was formerly known as Bhagsu. The Dalai Lama''s residence in McLeodGanj and the headquarters of Central Tibetan Administration (the Tibetan government in exile) are in Dharamshala. Dharamshala is 18 kilometres from Kangra.Dharamshala is a city in the upper reaches of the Kangra Valley and is surrounded by dense coniferous forest consisting mainly of stately Deodar cedar trees. The suburbs include McLeodGanj, Bhagsunath, Dharamkot, Naddi, ForsythGanj, Kotwali Bazaar (the main market), Kaccheri Adda.\r\nArea:Total 29.51 km2 (11.39 sq mi)\r\nElevation:1,457 m (4,780 ft)\r\n', 'Dharamshala-Pranav-Bhasin-19-174-dharamshala-938-410.jpg', 'RS.9500');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `car` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  FULLTEXT KEY `mobile` (`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`name`, `email`, `address`, `source`, `destination`, `car`, `mobile`, `date`, `time`) VALUES
('raj', 'r@gmail.com', 'samrala', 'samrala', 'delhi', 'sfari', '9876750003', '2015-02-28', '11:10:00'),
('pardeep', 'p@gmail.com', 'himachal', 'una', 'agra', 'SCORPIO', '9878650001', '2015-03-03', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `carpic`
--

CREATE TABLE IF NOT EXISTS `carpic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `carpic`
--

INSERT INTO `carpic` (`id`, `photo`) VALUES
(1, '2_201211251650491f26w.jpg'),
(2, '524.jpg'),
(3, '20140924050145_scorp2.jpg'),
(4, 'banner-6.jpg'),
(5, 'bus_tours.jpg'),
(6, 'caravan-tour-bus.jpg'),
(7, 'Ford-Endeavour-All-Terrain-Edition.jpg'),
(8, 'IMAG0210.jpg'),
(9, 'MahindraScorpio_Cropped.jpg'),
(10, 'tourist%20bus-1.jpg'),
(11, 'Mercedes-Benz.jpg'),
(12, 'Toyota-Innova-2013.jpg'),
(13, 'coach-tour-bus-fall-foliage-1024x768.jpg'),
(14, 'peru_tourist_van.jpg'),
(15, 'mahindra-scorpio-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `con`
--

CREATE TABLE IF NOT EXISTS `con` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `delhi`
--

CREATE TABLE IF NOT EXISTS `delhi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `desp` varchar(1500) NOT NULL,
  `pack` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `delhi`
--

INSERT INTO `delhi` (`id`, `name`, `photo`, `desp`, `pack`) VALUES
(1, 'Lotus Temple', '214_Para_Lotus-Temple1.jpg', 'The Lotus Temple,located in New Delhi, India, is a Bahi House of Worship completed in 1986. Notable for its flowerlike shape, it serves as the Mother Temple of the Indian subcontinent and has become a prominent attraction in the city.Address: Lotus Temple Rd, Shambhu Dayal Bagh, Bahapur, New Delhi, Delhi 110019Opened: November 13, 1986Architectural style: Expressionist architectureHours: Open today: 9:30 am , 5:30 pmHeight: 34 mPhone: 011 2338 9326Function: Place of worshipOwner: National Spiritual AssemblyArchitect: Fariborz Sahba', 'RS.9500'),
(2, 'India Gate', 'indg2.gif', 'The India Gate, originally called the All India War Memorial, is a war memorial located astride the Rajpath, on the eastern edge of the ceremonial axis of New Delhi, formerly called Kingsway. India gate is a memorial to 82,000 soldiers of the undivided British Indian Army who died in the period 1914-21 in the First World War, in France, Flanders, Mesopotamia, Persia, East Africa, Gallipoli and elsewhere in the Near and the Far East, and the Third Anglo-Afghan War. 13,300 servicemen''s names, including some soldiers and officers from the United Kingdom, are inscribed on the gate.The India Gate, even though a war memorial, evokes the architectural style of the triumphal arch like the Arch of Constantine, outside the Colosseum in Rome, and is often compared to the Arc de Triomphe in Paris, and the Gateway of India in Bombay.\r\nAddress: Rajpath, India Gate, New Delhi, Delhi 110001\r\nOpened: February 10, 1921\r\nHeight: 42 m\r\nPhone: 011 2464 7005\r\nArchitect: Edwin Lutyens', 'RS.8500'),
(3, 'The Red Fort', 'RF44.jpg', 'The Red Fort was the residence of the Mughal emperor of India for nearly 200 years, until 1857. It is located in the centre of Delhi and houses a number of museums. In addition to accommodating the emperors and their households, it was the ceremonial and political centre of Mughal government and the setting for events critically impacting the region.The Red Fortâ€™s innovative architectural style, including its garden design, influenced later buildings and gardens in Delhi, Rajasthan, Punjab, Kashmir, Braj, Rohilkhand and elsewhere.The Red Fort is an iconic symbol of India. On the Independence Day of India (15 August), the Prime Minister of India hoists the national flag at the main gate of the fort and delivers a nationally-broadcast speech from its ramparts.Address: Netaji Subhash Marg, Chandni Chowk, New Delhi, Delhi 110006 Phone: 011 2327 7705', 'RS.6500'),
(4, 'Jantar Mantar, New Delhi', 'jantra4.jpg', 'The Jantar Mantar is located in the modern city of New Delhi. It consists of 13 architectural astronomy instruments. The site is one of five built by Maharaja Jai Singh II of Jaipur, from 1724 onwards, as he was given by Mughal emperor Muhammad Shah the task of revising the calendar and astronomical tables. There is a plaque fixed on one of the structures in the Jantar Mantar observatory in New Delhi that was placed there in 1910 mistakenly dating the construction of the complex to the year 1710. Later research, though, suggests 1724 as the actual year of construction.Address: Sansad Marg, Connaught Place, New Delhi, Delhi 110001 Opened: 1724 Phone: 011 2336 5358', 'RS.7500'),
(5, 'Fatehpuri Masjid', '12302009071711.jpg', 'Fatehpuri Masjid is a 17th-century mosque located at the western end of the oldest street of Delhi, Chandni Chowk. It is opposite the Red Fort on the opposite end of Chandni Chowk.The mosque is built using red sandstone and has a fluted dome with mahapadma and kalash on the top. Flanked by minarets, the mosque has a traditional design with the prayer hall having seven-arched openings. The mosque has single and double-storeyed apartments on the sides.Address: Shop No.6500, Chandini Chowk Main Gate, Fatehpuri Chowk, Room # 39, Shahi Imam Masjid Fatehpuri, Katra Bariyan, Khari Baoli, Fatehpuri, Chandni Chowk, New Delhi, Delhi 110006 Hours: Open today Â· 5:00 am â€“ 9:30 pm Phone: 011 2391 8322', 'RS.6500'),
(6, 'Garden of Five Senses', 'timthumb.png', 'The Garden of Five Senses is a park spread over 20 acres, in Saidul Ajaib village, opposite Saket, near the Mehrauli heritage area in Delhi, India. Designed by Delhi architect, Pradeep Sachdeva, the park was developed by Delhi Tourism and Transportation Development Corporation (DTDC), Government of Delhi at a cost of Rs 10.5 crore (150,000,000 rupees), over a period of three years and opened in February 2003. Partly built over a rocky terrain, the garden has various theme areas, including a section on the lines of Mughal Gardens, plus pools of water lilies, bamboo courts, herb gardens and solar energy park.Address: Near Saket Metro Station, Mehrauli Badarpur Road, Said-ul-Ajaib, New Delhi, Delhi 110030 Hours: Closing soon:9:00 am â€“ 6:00 pm Phone: 011 2953 6401', 'RS.9500');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `htype` varchar(50) NOT NULL,
  `room` int(10) NOT NULL,
  `date` date NOT NULL,
  `mobile` int(12) NOT NULL,
  `special` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `email`, `hname`, `htype`, `room`, `date`, `mobile`, `special`) VALUES
(0, 'pawan', 'p@gmail.com', 'brightland ,shimla', 'Standard', 2, '2015-03-05', 2147483647, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `photo`) VALUES
(1, 'photo (1).jpg'),
(2, 'photo.jpg'),
(3, '1375259051_2.jpg'),
(4, 'AvedaManali_Exterior_View_P.jpg'),
(5, 'photo (3).jpg'),
(6, 'The-Chalets-Naldehra.jpg'),
(7, 'India_Manali_Hotels_9800_02.jpg'),
(8, '01-Hotel-Entrance.jpg'),
(9, 'photo (2).jpg'),
(10, '001.jpg'),
(11, 'photo (9).jpg'),
(12, 'Wildflower_Hall_-_Exterior_S.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `place`) VALUES
(1, 'jammu'),
(2, 'himachal'),
(3, 'delhi'),
(4, 'punjab'),
(5, 'up'),
(6, 'uttarkand');

-- --------------------------------------------------------

--
-- Table structure for table `jammu`
--

CREATE TABLE IF NOT EXISTS `jammu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(500) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pack` varchar(50) NOT NULL,
  `desp` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jammu`
--

INSERT INTO `jammu` (`id`, `photo`, `name`, `pack`, `desp`) VALUES
(1, 'bahu-fort-jammu.jpg', 'Babu Fort', 'RS.7500', 'The Bahu Fort is located in Jammu city in state of Jammu and Kashmir. The fort, originally built by Raja Bahulochan some 3,000 years ago, was refurbished by the Dogra rulers in the 19th century. The fort is a religious place, and within its precincts has a temple dedicated to the Hindu goddess Kali, the presiding deity of Jammu. The temple is known locally as the '),
(2, 'Dal_Lake,_Srinagar,_July_2012.JPG', 'Dal Lake', 'RS.9500', 'Dal Lake is a lake in Srinagar, the summer capital of Jammu and Kashmir. The urban lake, which is the second largest in the state, is integral to tourism and recreation in Kashmir and is named the '),
(3, 'Vaishno_devi.jpg', 'Vaishno Devi', 'RS.8500', 'Vaishno Devi, also known as Mata Rani and Vaishnavi, is a manifestation of the Hindu Mother Goddess or Durga. The words "maa" and "mata" are commonly used in India for "mother", and thus are often used in connection with Vaishno Devi. Vaishno Devi Mandir (Hindi: à¤µà¥ˆà¤·à¥à¤£à¥‹à¤¦à¥‡à¤µà¥€ à¤®à¤¨à¥à¤¦à¤¿à¤°) is a very popular Hindu temple dedicated to the Hindu Goddess, located at the Trikuta Mountains within the Indian state of Jammu and Kashmir. Mata is form of Shakti or Parvati. She is depicted as very beautiful and dressed in red. Her eight arms hold trident, bow, arrow, lotus, mace and sword and a hand in abhaya gesture. She rides on a tiger.Address: Katra, Jammu and Kashmir 182301 Phone: 01991 232 238'),
(4, 'Chashme_Shahi.jpg', 'Chashme Shahi', 'RS.6500', 'Chashme Shahi (translation: the royal spring), also called Chashma Shahi, is one of the Mughal gardens built around a spring by Ali Mardan, a governor of Mughal emperor Shah Jahan, in 1632. The garden is located in the Zabarwan Range, near Rajbhawan (Governor house) overlooking Dal Lake in Srinagar, Kashmir.\r\nThe Chashme Shahi is located within the jurisdiction of Srinagar city, 14 kilometres (9 mi) in the northeast from the Srinagar Airport. It is adjacent to Rajbhawan (Governor house). The garden is connected by the Boulevard Road which passes along the banks of the Dal lake. There are many hotels and restaurants available for boarding and lodging near the garden. The garden remains open for tourists from March to November. The best time to visit the garden is from April to October. The garden is at full bloom during May and June.'),
(5, 'news_27_10_2008_1.jpg', 'Jamia Masjid, Srinagar', 'RS.9000', 'Jamia Masjid is a mosque in Srinagar, Jammu & Kashmir, India. The Jamia Masjid of Srinagar is situated at Nowhatta, in the middle of the old city. An important mosque was built by Sultan Sikandar in 1400 AD.under the order by Mir Mohmmad Hamadani son of Shah hamdan ,shah hamdan already prays namaz in side and stay there Later, the son of Sultan Sikandar, Zain-ul-Abidin got the mosque extended. The attractions of the Jamia Masjid of Srinagar, Kashmir include beautiful Indo-Saracenic architecture, a magnificent courtyard and 370 wooden pillars. The area of Jamia Masjid extends up to an area of 384 feet by 381 feet. This spacious mosque holds a capacity to accommodate more than 33,333 people offering prayer at a time. However, there is a perfectly square garden in the middle and the mosque is surrounded by wide lanes on all the four sides.Address: Srinagar, Jammu and Kashmir 190019'),
(6, 'Ladakh_Monastery.jpg', 'Ladakh', 'RS.8500', 'Ladakh is a region of India in the state of Jammu and Kashmir that currently extends from the Karakoram mountain range in the north to the main Great Himalayas to the south, inhabited by people of Indo-Aryan and Tibetan descent.It is one of the most sparsely populated regions in Jammu and Kashmir and its culture and history are closely related to that of Tibet.Ladakh is the highest plateau of state of Kashmir with much of it being over 3,000 m (9,800 ft). It extends from the Himalayan to the Kunlun Ranges and includes the upper Indus River valley.\r\nArea:• Total	86,904 km2 (33,554 sq mi)');

-- --------------------------------------------------------

--
-- Table structure for table `mem`
--

CREATE TABLE IF NOT EXISTS `mem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` char(1) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mem`
--

INSERT INTO `mem` (`id`, `fname`, `lname`, `email`, `password`, `address`, `gender`, `mobile`) VALUES
(1, 'pardeep', 'singh', 'pb@gmail.com', '234', 'una', 'm', '9867545653'),
(2, 'manpreet', 'arora', 'ma@gmail.com', '567', 'chandigarh', 'f', '8976545661'),
(4, 'navdeep', 'kaur', 'nd@gmail.com', '345', 'samrala', 'f', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `pun`
--

CREATE TABLE IF NOT EXISTS `pun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `desp` varchar(1000) NOT NULL,
  `pack` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pun`
--

INSERT INTO `pun` (`id`, `name`, `photo`, `desp`, `pack`) VALUES
(1, 'Harmandir Sahib', 'th[5].jpg', 'The Harmandir Sahib  also Darbar Sahib   and informally referred to as the ', 'RS.6500'),
(2, 'Zakir Hussain Rose Garden', 'Rose_Garden_Chandigarh_India_(2).jpg', 'Zakir Hussain Rose Garden, is a botanical garden located in Chandigarh, India and spread over 30 acres (120,000 m2) of land,[1] with 50,000 rose-bushes of 1600 different species.[2] Named after India''s former president, Zakir Hussain and created in 1967 under the guidance of Dr M.S. Randhawa, Chandigarh''s first chief commissioner, the garden has the distinction of being Asia''s largest.[2] The garden has not only roses, but also trees of medicinal value. Some of the medicinal plants that can be spotted here are bel, bahera, harar, camphor and yellow gulmohar. The rose plants have been planted in carved-out lawns and flower beds.Apart from serving as a host of other events, the Zakir Rose Garden serves as the venue for hosting an annual rose festival called Festival of Gardens, a major cultural event in Chandigarh during February or March. Address: Phase III B, Sahibzada Ajit Singh Nagar, Punjab\r\nHours: Open 24 hours', 'RS.8500'),
(3, 'Rock Garden of Chandigarh', 'Rock-Garden-665x498.jpg', 'The rock garden or Rock Garden of Chandigarh is a Sculpture garden in Chandigarh,India,also known as Nek Chand''s Rock Garden after its founder Nek Chand,a government official who started the garden secretly in his spare time in 1957.Today it is spread over an area of forty-acres (160,000 m),it is completely built of industrial & home waste and thrown-away items.It is situated near Sukhna Lake.It consists of man-made interlinked waterfalls and many other sculptures that have been made of scrap & other kinds of wastes(bottles, glasses, bangles,tiles,ceramic pots,sinks, electrical waste,etc.)which are placed in walled paths.Chands work was illegal,but he was able to hide it for eighteen years before it was discovered by the authorities in 1975.By this time, it had grown into a 12-acre  complex of interlinked courtyards,each filled with hundreds of pottery-covered concrete sculptures of dancers, musicians,and animals.The garden is most famous for its sculptures made from recycled ceramic', 'RS.8500'),
(4, 'Jallianwala Bagh', '13.JPG', 'Jallianwala Bagh is a public garden in Amritsar in the Punjab state of India, and houses a memorial of national deportance, established in 1651 to commemorate the massacre by British occupying forces of peaceful celebrators including unarmed women and children, on the occasion of the Punjabi New Year on April 13, 1919 in the Jallianwala Bagh Massacre. Colonial British Raj sources identified 379 fatalities and estimated about 1100 wounded.Civil Surgeon Dr. Smith indicated that there were 1,526 casualties.The 6.5-acre (26,000 m2) garden site of the massacre is located in the vicinity of Golden Temple complex, the holiest shrine of Sikhism.Address: Golden Temple Rd, Amritsar, Punjab Hours: Open today Â· 6:30 am â€“ 7:30 pm', 'RS.7500'),
(5, 'Anandpur Sahib and ajuba', '95_big.jpg', 'Anandpur Sahib is a city in Rupnagar district(Ropar)in the state of Punjab, India.Known as"the holy City of Bliss," it is a holy city of the Sikhs and is one of their most important sacred places,closely linked with their religious traditions and history.It is located on the lower spurs of the Himalayas surrounded by picturesque natural scenery,with the river Sutlej forming a shimmering and shiny blue border on the south west barely four miles away.Anandpur Sahib comes to life every year on the occasion of Hola Mohalla.This tradition dates back to the times of the 10th Guru,Guru Gobind Singh.The guru decreed that the occasion of the festival of Holi be the occasion for the display of the martial spirit of his people.Virasat-e-Khalsa is conceived as a repository of the rich heritage of the Khalsa its history and culture of the Punjab so as to inspire visitors with the vision of the Gurus,emphasizing the eternal message of the great gurus for the whole mankind.Local time: Sunday 2:10 pm', 'RS.5500'),
(6, 'ChattBir Zoo', 'chnadigarh_chattbir_zoo.jpg', 'ChattBir Zoo (formally Mahendra Chaudhary Zoological Park), is a zoological park located near Zirakpur, India that houses hundreds of different mammals, birds and reptiles. One of the major attractions of Chatbir Zoo near Chandigarh is the lion safari. The work on zoo had started long back in the seventies and today it has been developed as a full-fledged zoological park. The Royal Bengal tiger is the pride of Chattbir zoo. Visitors are taken on the adventurous trips to the Asiatic Lion reserves, where animals roam about freely. You can also find distinctive species of birds. The zoo is open every day except Mondays.  Location: 17 kilometres (11 mi) from Chandigarh on the Chandigarh-Zirakpur-Patiala Road  Highlights: Lion safari', 'RS.7500');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `email`, `comment`) VALUES
(1, 'rajveer', 'raj@gmail.com', 'service is good'),
(2, 'rajveer', 'r@gmail.com', 'service is good'),
(3, 'navu', 'n@gmail.com', 'best way to travel'),
(4, 'navu', 'n@gmail.com', 'best way to travel'),
(5, 'pawan', 'p@gmail.com', 'gghgftfvhgyhfgtgjjhhfg'),
(6, 'pardeep', 'pe@gmail.com', 'gfgssgtsryjkhvbgfytu'),
(7, 'harinder', 'hr@gmail.com', 'gud way to travel'),
(8, 'navdeep', 'nb@gmail.com', 'good services and gud way to travel'),
(9, 'Aman', 'am@gmail.com ', 'nice'),
(10, 'Aman', 'am@gmail.com ', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `ukand`
--

CREATE TABLE IF NOT EXISTS `ukand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `desp` varchar(1500) NOT NULL,
  `pack` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ukand`
--

INSERT INTO `ukand` (`id`, `name`, `photo`, `desp`, `pack`) VALUES
(1, 'Valley of Flowers National Park', 'Valley_of_flowers_uttaranchal_full_view.JPG', 'Valley of Flowers National Park is an Indian national park, located in West Himalaya, in the state of Uttarakhand and is known for its meadows of endemic alpine flowers and the variety of flora.The park stretches over an expanse of 87.50 kmÂ² and it is about 8 km long and 2 km wide. Both parks are encompassed in the Nanda Devi Biosphere Reserve (223,674 ha) which is further surrounded by a buffer zone (5,148.57 kmÂ²).\r\nAddress: Uttarakhand 246443\r\nFounded: 1931\r\nHours:Closed now.Hours\r\nPhone: 01389 222 179', 'RS.9500'),
(2, 'Rajaji National Park', '1.jpg', 'Rajaji National Park is an Indian national park & Proposed Tiger Reserve that encompasses the Shivaliks, near the foothills of the Himalayas. It is spread over 820 kmÂ²., and three districts of Uttarakhand: Haridwar, Dehradun and Pauri Garhwal.Which function as a buffer zone, will also be included in the Tiger Project, augmented area to 1150 sq.km.Address: 5/1, Ansari Road, Mohand Range, Dehradun, Uttarakhand 247662 Phone: 0135 262 1669 Hours: Closed now Â· Hours', 'RS.9000'),
(3, 'Nainital Lake', '11-9-full-view-of-Naini-lake.jpg', 'Nainital Lake, a natural freshwater body, situated amidst the township of Nainital in Uttarakhand State of India, tectonic in origin, is kidney shaped or crescent shaped and has an outfall at the southeastern end.Nainital Lake, in the Nainital district called the Lake District of India, is one of the four Lakes of Kumaon hills; the other three lakes are the Sattal Lake, the Bhimtal Lake and the Naukuchiyatal Lake.Surface elevation: 1,938 m Area: 49 ha Length: 1.432 km Width: 42 m Cities: Nainital', 'RS.8500'),
(4, 'Chandi Devi Temple, Haridwar', 'Chandi_Devi_Temple.jpg', 'Chandi Devi Temple, Haridwar is a Hindu temple dedicated to Goddess Chandi Devi in the holy city of Haridwar in the Uttarakhand state of India.The temple is situated atop the Neel Parvat on the Eastern summit of the Sivalik Hills, the southernmost mountain chain of the Himalayas. Chandi Devi Temple was built in 1929 by Suchat Singh in his reign as the King of Kashmir. However, the main murti of Chandi Devi at the temple is said to have been installed in the 8th century by Adi Shankaracharya, one of the greatest priests of Hindu religion.Address: Pathari Forest Range, Uttarakhand 249408', 'RS.7500'),
(5, 'Kempty Falls', 'mussoorie-christ-church.jpg', 'The scenic Kempty Falls are situated on the hilly tracks of Uttarakhand, India, 15 km from Mussoorie on the Chakrata Road. This place is located nearly 1364 meters above sea level, at 78Â°-02â€™East longitude and 30Â° -29â€™North latitude.The Kempty Falls, surrounded by high mountain ranges at an altitude of 4500 feet, are a good place for a picnic or for spending a couple of hours listening to the music of water in the midst of the surrounding greenery. A stream of water running throughout the year starting from the southwest of village Banglow ki kandi moves northwest and falls from 4,500 ft. Splitting into five other cascades, the water falls a further 40 ft giving the appearance of water leaping on the rocks below. At Kempty, the water almost appears as if the streams are doing a somersault before they hit the bottom. Yamuna is not far from the Kempty when one travels past it some 12 km downhill on crossing the Aglar River.', 'RS.9500'),
(6, 'Sattal', '812.jpg', 'Sattal or Sat Tal is an interconnected group of seven freshwater lakes situated in the Lower Himalayan Range near Bhimtal, a town of the Nainital district in Uttarakhand, India.During the British Raj, the area had a tea plantation, one of four in the Kumaon area at that time.  The lakes sit at an altitude of 1370 metres below lush orchards in the Mehragaon valley.  Set amongst dense forests of oak and pine trees, Sattal is one of the few unspoiled and unpolluted freshwater biomes in India. These lakes are a paradise for migratory birds.Surface elevation: 1,370 m Area: 4 ha Length: 3 km Width: 200 m Outflow location: Gaula River Cities: Nainital, Bhimtal, Bhowali', 'RS.8500');

-- --------------------------------------------------------

--
-- Table structure for table `up`
--

CREATE TABLE IF NOT EXISTS `up` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `desp` varchar(1500) NOT NULL,
  `pack` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `up`
--

INSERT INTO `up` (`id`, `name`, `photo`, `desp`, `pack`) VALUES
(1, 'Taj Mahal', '6.jpg', 'The Taj Mahal is a white marble mausoleum located in Agra, Uttar Pradesh, India. Commissioned in 1632 by the Mughal emperor Shah Jahan to house the tomb of his third wife, Mumtaz Mahal, the Taj Mahal stands on the southern bank of the Yamuna River.  Address: Agra, Uttar Pradesh 282001 Opened: 1648 Height: 73 m Architectural style: Mughal architecture Phone: 0562 222 6431 Architects: Ustad Ahmad Lahouri, Ustad Isa Burials: Mumtaz Mahal, Shah Jahan, P. N. Oak, Gauharara Begum, more Function: Monument, Mausoleum', 'RS.9500'),
(2, 'Agra Fort', 'Uttar-Pradesh-Agra-Agra-Fort-Jahangiri-mahal-Apr-2004-00.JPG', 'Agra Fort is a UNESCO World Heritage site located in Agra, Uttar Pradesh, India. It is about 2.5 km northwest of its more famous sister monument, the Taj Mahal. The fort can be more accurately described as a walled city. Address: Rakabganj, Agra, Uttar Pradesh 282003 Phone: 0562 296 0457 Function: Monument Architectural styles: Architecture of India, Islamic architecture', 'RS.8000'),
(3, 'Ganges', 'liveindia-ganga037.jpg', 'The Ganges, also Ganga, is a trans-boundary river of Asia which flows through India and Bangladesh. The 2,525 km river rises in the western Himalayas in the Indian state of Uttarakhand, and flows south and east through the Gangetic Plain of North India into Bangladesh, where it empties into the Bay of Bengal. It is the third largest river by discharge.Length: 2,525 km Discharge: 12,020 mÂ³/s Mouth: Bay of Bengal Sources: Nanda Kot, Kedarnath, Nanda Devi, Trisul, Satopanth Glacier, Gangotri Glacier, Kamet Cities: Varanasi, Haridwar, Allahabad, Kolkata, Kanpur, Patna, Ghazipur Bridges: Mahatma Gandhi Setu, Munger Ganga Bridge', 'RS.6500'),
(4, 'Jama Masjid, Agra', 'Jama_Masjid_in_Agra.jpg', 'Jama Masjid in Agra is opposite the Agra fort and overlooking the Agra Fort Railway Station. The Jama Masjid is also popularly known as the Jami Masjid or "Friday Mosque". It is one of the larger mosques in India.Jama Masjid of Agra has Imam of Ahle Sunnat Wala Jamaat or Barelwi. Jami Masjid Mosque is a very simple mosque of red sandstone with little white marble decoration and blue colour paint wall and ceilings. Itâ€™s a huge mosque in the center of Agra surrounded by a great bazaar. Address: Jama Masjid Road, Kinari Bazar, Hing ki Mandi, Mantola, Agra, Uttar Pradesh 282003 Hours: Open today: 4:00 am â€“ 10:00 pm', 'RS.7500'),
(5, 'Manikarnika Ghat', 'Manikarnika_Cremation_Ghat,_Varanasi.JPG', 'Manikarnika Ghat is one of the ghats in Varansi and is most known for being a place of Hindu cremation.It is one of the oldest ghats in Varanasi. It is revered in Hindu religion. When Mata Sati (Aadi shakti mata) sacrificed her life & set her body ablaze after Raja Daksh Prajapati (one of the sons of Lord Brahma) tried to humiliate Lord shiva in a Yagya practiced by Daksh. Lord Shiva took her burning body to Himalay. While going to Himalaya Mata Sati''s parts of body started falling on earth. Lord Shiva established Shakti Peeth wherever Sati''s body had fallen. At Manikarnika ghat, Mata Sati''s Ear''s ornament had fallen.Address: Near Jalasen Ghat, Ghasi Tola, Varanasi, Uttar Pradesh 221001\r\nHours: Open today:Open 24 hours', 'RS.6500'),
(6, 'Allahabad Fort', '11.jpg', 'Allahabad Fort at Allahabad, Uttar Pradesh, India was built by Akbar in 1583. The fort stands on the banks of the Yamuna near its confluence with the river Ganges.Allahabad Fort is the location of the much revered Akshayavat or "immortal tree". Legends say that if anyone jumps from this centuries-old banyan tree, he will attain immortality. Civilians are not allowed to see this tree. It is near the southern wall and is one among many trees that can be seen from outside the southern wall of the fort.  In the fort one railway track comes from the Allahabad railway station.Address: Allahabad fort, Allahabad, Uttar Pradesh 211005', 'RS.9500');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
