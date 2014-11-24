-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 23, 2014 at 06:45 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `aviation`
--

-- --------------------------------------------------------

--
-- Table structure for table `flashcard`
--

CREATE TABLE `flashcard` (
`id` int(11) NOT NULL,
  `definition` varchar(255) NOT NULL,
  `img_file` varchar(255) NOT NULL,
  `img_alt` varchar(255) NOT NULL,
  `audio_file` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flashcard`
--

INSERT INTO `flashcard` (`id`, `definition`, `img_file`, `img_alt`, `audio_file`) VALUES
(1, 'Federal Aviation Administration (FAA)', 'img01.jpg', 'Federal Aviation Administration (FAA)', 'federal_aviation_administration.mp3'),
(2, 'Federal Aviation Regulation (FAR)', 'img02.jpg', 'Federal Aviation Regulation (FAR)', 'federal_aviation_regulation.mp3'),
(3, 'Fixed Base Operator (FBO)', 'img03.jpg', 'Fixed Base Operator (FBO)', 'fixed_base_operator.mp3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flashcard`
--
ALTER TABLE `flashcard`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flashcard`
--
ALTER TABLE `flashcard`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;