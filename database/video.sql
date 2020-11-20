-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 06:28 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video_search`
--

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(50) NOT NULL,
  `video_name` varchar(200) NOT NULL,
  `rel` varchar(400) NOT NULL,
  `director` varchar(2000) NOT NULL,
  `movie_length` varchar(500) NOT NULL,
  `cast` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `catch` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `subtitle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `video_name`, `rel`, `director`, `movie_length`, `cast`, `category`, `catch`, `image`, `subtitle`) VALUES
(1, 'The Angry birds Movie ', '2016 ', 'Clay Kaytis, Fergal Reilly ', '1h 37m ', 'Jason Sudeikis, Josh Gad', 'Action | Adventure', 'videos/Angry Birds Movie 2016.mp4', 'movie images/Angry bird.jpg', 'subtitles/the angry birds movie 2016.vtt'),
(2, 'How  To Train Your Dragon', '2010', 'Dean DeBlois, Chris Sanders', '1h 38m', 'Jay Baruchel, America Ferrera', 'Fantasy | Drama', 'videos/how to train your dragon.mp4', 'movie images/how to train your dragon.jpg', 'subtitles/how to train your dragon.vtt'),
(3, 'Monsters University', '2013', 'Dan Scanlon ', '1h 50m', 'Billy Crystal, John Goodman', 'Fantasy | Adventure ', 'videos/Monsters University.mp4', 'movie images/monster_university.jpg', 'subtitles/Monsters University.vtt'),
(4, 'The Croods', '2013', 'Chris Sanders, Kirk DeMicco', '1h 38m', 'Emma Stone, Nicolas Cage', 'Fantasy | Adventure', 'videos/The Croods.mp4', 'movie images/the croods.jpg', 'subtitles/The croods.vtt'),
(5, 'Hotel Transylvania', '2012', 'Genndy Tartakovsky', '1h 32m', 'Adam Sandler, Andy Samberg', 'Fantasy | Comedy', 'videos/Hotel Transylvania.mp4', 'movie images/hotel transylvania.jpg', 'subtitles/Hotel Transylvania.vtt'),
(6, 'The Song of Rain', '2017', 'Liang ', '9m 20s', 'Liang, Lutao Hua', 'Romance', 'videos/The Song Of Rain.mp4', 'movie images/the song of rain.png', 'subtitles/nosubtitle.vtt'),
(7, 'Zootopia', '2016', 'Byron Howard, Rich Moore', '1h 50m', 'Ginnifer Goodwin, Jason Bateman', 'Mystery | Crime film ', 'videos/Zootopia.mp4', 'movie images/zootopia.jpg', 'subtitles/Zootopia.vtt'),
(8, 'Sintel', '2010', 'Colin Levy', '14min 48s', 'Halina Reijn, Thom Hoffman', 'Fantasy | Short Film', 'videos/Sintel.mp4', 'movie images/sintel.jpg', 'subtitles/Sintel.vtt'),
(9, 'Kung Fu Panda', '2008', 'Mark Osborne, John Stevenson', '1h 32min', 'Jack Black, Dustin Hoffman', 'Action | Adventure', 'videos/Kung Fu  Panda.mp4', 'movie images/Kung Fu Panda.jpg', 'subtitles/Kung Fu Panda.vtt'),
(10, 'Up', '2009', 'Pete Docter, Bob Peterson', '1h 36min', 'Edward Asner, Christopher ', 'Drama | Fantasy', 'videos/Up.mp4', 'movie images/up.jpg', 'subtitles/Up.vtt'),
(11, 'Moana', '2016', 'Ron Clements, John Musker', '1h 47m', 'Auli\'i Cravalho, Dwayne Johnson', 'Fantasy | Adventure', 'videos/moana.mp4', 'movie images/moana.jpg', 'subtitles/moana.vtt'),
(12, 'Big Hero 6', '2014', 'Don Hall, Chris Williams', '1h 41m 52s', 'Scott Adsit, Ryan Potter', 'Science fiction |  Action ', 'videos/Big Hero 6.mp4', 'movie images/big hero 6.jpg', 'subtitles/Big Hero 6.vtt'),
(13, 'Tarzan', '2013', 'Reinhard Klooss', '1h 34m 11s', 'Kellan Lutz, Spencer Locke', 'Drama | Action', 'videos/Tarzan.mp4', 'movie images/tarzan.jpg', 'subtitles/Tarzan.vtt'),
(14, 'Inside Out', '2015', 'Pete Docter, Ronnie del Carmen\r\n', '1h 34m 37s', 'Amy Poehler, Mindy Kaling', 'Fantasy | Comedy |  Drama', 'videos/Inside Out.mp4', 'movie images/inside out.jpg', 'subtitles/inside-out.vtt'),
(15, 'How To Train your dragon  \r\n : The Hidden World', '2019', 'Dean DeBlois', '1h 45m', 'Jay Baruchel,America Ferrera', 'Animation | Family', 'videos/how to train your dragon 3.mp4', 'movie images/how to train your dragon 3.jpg', 'subtitles/how to train your dragon 3.vtt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
