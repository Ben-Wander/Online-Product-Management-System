-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-10-20 14:01:32
-- 服务器版本： 10.4.21-MariaDB
-- PHP 版本： 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `dogeshopping`
--

-- --------------------------------------------------------

--
-- 表的结构 `managerlogin`
--

CREATE TABLE `managerlogin` (
  `Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `managerlogin`
--

INSERT INTO `managerlogin` (`Name`, `Password`) VALUES
('Ben', '123456789');

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `ProductID` varchar(20) NOT NULL,
  `Name` char(100) NOT NULL,
  `Price` int(20) NOT NULL,
  `Picture` varchar(300) NOT NULL,
  `Introduction` text NOT NULL,
  `Type` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`ProductID`, `Name`, `Price`, `Picture`, `Introduction`, `Type`) VALUES
('20211020120614653783', 'A Shadow in the Ember', 32, 'upfiles/20211020120614653783.jpg', '#1 New York Times bestselling author Jennifer L. Armentrout returns with book one of the all-new, compelling Flesh and Fire series—set in the beloved Blood and Ash world.\r\n', 'book'),
('20211020120910407849', 'All-new Echo Show 8 (2nd Gen, 2021 release) | HD smart display with Alexa and 13 MP camera | Charcoa', 199, 'upfiles/20211020120910407849.jpg', 'Get everyone in the frame easily when catching up on a video call using a new 13 MP camera that automatically pans, zooms, and frames. Connect quickly by asking Alexa to call family and friends who have the Alexa app, or a compatible Alexa-enabled device.', 'computer'),
('20211020121136226869', 'Dell P2419HC', 382, 'upfiles/20211020121136226869.jpg', 'Dell P2419HC 24\" Full HD Ultra Thin Bezel IPS LED Monitor (16:9 Ratio, USB-C, Response Time 5m/s) - Black', 'computer'),
('20211020121538173760', 'Harry Potter and the Philosopher\'s Stone, Book 1', 23, 'upfiles/20211020121538173760.jpg', 'Harry Potter has never even heard of Hogwarts when the letters start dropping on the doormat at number four, Privet Drive. Addressed in green ink on yellowish parchment with a purple seal, they are swiftly confiscated by his grisly aunt and uncle. Then, on Harry\'s eleventh birthday, a great beetle-eyed giant of a man called Rubeus Hagrid bursts in with some astonishing news: Harry Potter is a wizard, and he has a place at Hogwarts School of Witchcraft and Wizardry. An incredible adventure is about to begin! ', 'book'),
('20211020121940474782', 'Bluebird', 42, 'upfiles/20211020121940474782.jpg', 'Author of Reese\'s Book Club YA Pick The Light in Hidden Places, Sharon Cameron, delivers an emotionally gripping and utterly immersive thriller, perfect for fans of Ruta Sepetys\'s Salt to the Sea.', 'book'),
('20211020122113702971', 'The Downstairs Girl', 19, 'upfiles/20211020122113702971.jpg', 'A New York Times bestselling novel, The Downstairs Girl is a compelling and poignant story following seventeen-year-old Jo Kuan, a Chinese American girl living in segregated 1890s Atlanta.', 'book'),
('20211020122252672148', 'Love & War: The Alex & Eliza Trilogy: 2', 20, 'upfiles/20211020122252672148.jpg', 'Now in paperback, the thrilling romance of young Alexander Hamilton and Eliza Schuyler continues in the sizzling sequel to the New York Timesbestselling Alex & Eliza- A Love Story.', 'book'),
('20211020123242636037', 'Bundaberg Diet Ginger Beer, 12 x 375 ml', 20, 'upfiles/20211020123242636037.jpg', 'Offers the same great taste with fewer calories. Real Aussie Ginger. Brewed over 3 days. Australian family-owned. Best enjoyed cold.', 'alcohol'),
('20211020123430520640', 'Cascade Ginger Beer Multipack Mini Cans 24 x 200mL', 30, 'upfiles/20211020123430520640.jpg', 'Refreshingly Bubbly. Real Ginger Bite. Enjoy Straight or as a Mixer.24 x 200mL Multipack Mini Cans Soft Drink. Great for Entertaining.', 'alcohol'),
('20211020123609965074', '19 Crimes Red Blend Wine 750ml (Case of 6)', 17, 'upfiles/20211020123609965074.jpg', '19 Crimes Red Blend bares the same traits as those banished to Australia. Defiant by nature, bold in character. Always uncompromising. It\'s a taste you\'ll never forget. 19 Crimes Red Blend\'s palate is as marvellous as its story, making it a perfect drink for great conversations', 'alcohol'),
('20211020125105234912', 'Penfolds Bin 389 Cabernet Shiraz Premium Wine 2018, 750 ml', 100, 'upfiles/20211020125105234912.jpg', 'Lifted, fragrant. Aficionados may quickly identify and proclaim 389. Layers of custard and port-wine dark jelly with flaked coconut and juniper. Cake: old-fashioned hummingbird cake and nutty flavours.Balance of the sweet (cabernet) and savoury (shiraz)', 'alcohol'),
('20211020125503768897', 'iPhone 13 Pro', 1699, 'upfiles/20211020125503768897.png', 'Get A$130 - A$1,120 off when you trade in an iPhone 8 or newer', 'mobilephone'),
('20211020125525943783', 'iPhone 13 Pro Max', 1849, 'upfiles/20211020125525943783.png', 'Get A$130 - A$1,120 off when you trade in an iPhone 8 or newer*', 'mobilephone'),
('20211020125758241844', 'HUAWEI P30 Pro', 1200, 'upfiles/20211020125758241844.jpg', 'Zoom in to explore the mystery of the celestial at night, watch an eagle hovering over trees or examine the delicate details of crystal. Capture the best things happening now and create your vision for the future. The HUAWEI P30 Pro is accentuating a new peak of smartphone photography.', 'mobilephone'),
('20211020130049347557', 'Galaxy Z Fold3 5G', 2499, 'upfiles/20211020130049347557.jpg', 'Get a bonus $700 extra off trade-in27 plus 50% off Samsung Care+ ', 'mobilephone'),
('20211020130610618366', 'Alpiner X Alive Smart Watch', 1695, 'upfiles/20211020130610618366.png', 'The Alpiner X Alive Smart watch combines great value and functionality. It features a stainless steel case with a diameter of 45 mm and a height of 14 mm. The blue dial is decorated with luminous hands, heart beat seconds, date indicator and 12 hour indexes. An elegant blue case with a blue dial and a red rubber strap ensures this fine timepiece is as striking as it is practical and comfortable to wear.', 'watch'),
('20211020130656674205', 'Series 3 Black Midnight Garden Smart Watch', 99, 'upfiles/20211020130656674205.jpg', 'Series 03 showcases the prettiest of dials, with delicately detailed designs beautifully finished with a sprinkling of stones. This elegant Reflex Active Smart watch with its sparkly crystal dial and nude strap not all looks great it also includes all the must have features to help you track your fitness with our free, easy to download app. Key features include crown navigation, activity goals, step counter, remote camera, sleep tracking, calories, weather, find my phone, alarm, call alert, message alert and display.', 'watch'),
('20211020130824963257', 'Interactive Blue Smart Watch for Kids TK1084BLU', 100, 'upfiles/20211020130824963257.jpg', 'Tikkers Interactive watches for kids are jam-packed with cool features, including a talking time teacher, selfie camera, video recorder and step counter. Other features include an alarm, calendar, stop watch, calculator, voice recorder, countdown timer and a choice of 20 amazing displays! There is also a selection of exciting games to keep kids entertained, but our parental controls mean you can stay in charge. Our specially designed time teaching function will help your child master the art of telling time using a traditional analogue clock face whilst still having all the tech features that they will love!', 'watch'),
('20211020131918721311', 'Kids Pedal Go Kart Car Ride On Racing Bike in Red', 194, 'upfiles/20211020131918721311.jpg', 'Get your kids out for some outdoor activities instead of staying home with iPad or video games! Featuring a stable driving frame and controllable steering wheel, you can let them pedal around with peace of mind. Plus, they can control the speed by themselves so it\'s even safer to play with. Made with your children\'s safety in mind, this Go Cart is equipped with shock absorption tyres and highly reactive braking system.  ', 'toy'),
('20211020132031882929', 'John Deere Animal Sounds Hayride', 35, 'upfiles/20211020132031882929.jpg', 'John Deere toys are made to the highest quality standards and are finished to look just like a real John Deere piece of farm equipment for realist play. Looking for a play set packed with farming fun for your little farmer? This John Deere Animal Sounds Hayride comes with a push-along tractor with friendly farm animals that make realistic sounds. Your child will certainly enjoy playing with this neighing horse, oinking pig, bleating sheep, mooing cow and the farmer who sings as he drives along.', 'toy'),
('20211020132109190300', 'Rusco Racing 1:12 2.4GHZ Remote Control UTE King Climber in Blue', 80, 'upfiles/20211020132109190300.jpg', 'The Rusco Racing 1:12 2.4GHZ Remote Control UTE King Climber in Blue is ready and all equipped to take you to the ultimate rock crawling experience! Prepare to be amazed as this UTE shows off its remarkable suspension as it drives up, down and across obstacles while providing you with exciting details like a full metal body that any rock crawler or rock crawling fan would be proud to own.', 'toy'),
('20211020132509732919', 'MacBook Pro 13″ model', 1899, 'upfiles/20211020132509732919.jpg', 'Apple M1 Chip with 8‑Core CPU and 8‑Core GPU, 256GB SSD Storage', 'computer'),
('20211020132634437928', 'MacBook Air', 1499, 'upfiles/20211020132634437928.jpg', 'Our thinnest, lightest notebook, completely transformed by the Apple M1 chip. CPU speeds up to 3.5× faster. GPU speeds up to 5× faster. Our most advanced Neural Engine for up to 9× faster machine learning. The longest battery life ever in a MacBook Air. And a silent, fanless design. This much power has never been this ready to go.', 'computer'),
('20211020132944954168', 'Mac Pro', 10000, 'upfiles/20211020132944954168.jpg', '3.5GHz 8‑core Intel Xeon W processor with Turbo Boost up to 4.0GHz, 32GB (4 × 8GB) of DDR4, ECC memory, Radeon Pro 580X with 8GB of GDDR5 memory, 256GB of SSD storage, Stainless steel frame with feet, Magic Mouse, Magic Keyboard with Numeric Keypad — US English,', 'computer');

--
-- 转储表的索引
--

--
-- 表的索引 `managerlogin`
--
ALTER TABLE `managerlogin`
  ADD PRIMARY KEY (`Name`);

--
-- 表的索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
