-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 15, 2016 at 07:07 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `test`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `students`
-- 

CREATE TABLE `students` (
  `name` varchar(100) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `class` double NOT NULL

) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `students`
-- 

INSERT INTO `students` VALUES ('Nandini', '12as', 8);