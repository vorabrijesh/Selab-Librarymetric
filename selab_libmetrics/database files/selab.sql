-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2020 at 10:11 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selab`
--

-- --------------------------------------------------------

--
-- Table structure for table `countstars`
--

CREATE TABLE `countstars` (
  `repo` varchar(100) NOT NULL,
  `stars` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countstars`
--

INSERT INTO `countstars` (`repo`, `stars`) VALUES
('marko-js/marko', '9418'),
('MithrilJS/mithril.js', '12060'),
('angular/angular', '58645'),
('emberjs/ember.js', '21410'),
('knockout/knockout', '9715'),
('tastejs/todomvc', '26373'),
('spine/spine', '3550'),
('vuejs/vue', '158827'),
('Polymer/polymer', '21378'),
('facebook/react', '144885'),
('finom/seemple', '791'),
('aurelia/framework', '11279'),
('optimizely/nuclear-js', '2126'),
('jashkenas/backbone', '27621'),
('dojo/dojo', '1377'),
('jorgebucaran/hyperapp', '17228'),
('riot/riot', '14126'),
('Daemonite/material', '3027'),
('Polymer/lit-element', '3176'),
('aurelia/aurelia', '669'),
('sveltejs/svelte', '31196'),
('neomjs/neo', '324');

-- --------------------------------------------------------

--
-- Table structure for table `forks`
--

CREATE TABLE `forks` (
  `repo` varchar(100) NOT NULL,
  `num_forks` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forks`
--

INSERT INTO `forks` (`repo`, `num_forks`) VALUES
('marko-js/marko', '582'),
('MithrilJS/mithril.js', '899'),
('angular/angular', '16077'),
('emberjs/ember.js', '4207'),
('knockout/knockout', '1554'),
('tastejs/todomvc', '13735'),
('spine/spine', '449'),
('vuejs/vue', '23951'),
('Polymer/polymer', '2022'),
('facebook/react', '27889'),
('finom/seemple', '83'),
('aurelia/framework', '672'),
('optimizely/nuclear-js', '155'),
('jashkenas/backbone', '5677'),
('dojo/dojo', '528'),
('jorgebucaran/hyperapp', '780'),
('riot/riot', '1027'),
('Daemonite/material', '737'),
('Polymer/lit-element', '257'),
('aurelia/aurelia', '48'),
('sveltejs/svelte', '1420'),
('neomjs/neo', '23');

-- --------------------------------------------------------

--
-- Table structure for table `javascriptgit`
--

CREATE TABLE `javascriptgit` (
  `repo` varchar(100) NOT NULL,
  `stars` varchar(50) DEFAULT NULL,
  `watch` varchar(50) DEFAULT NULL,
  `issues` varchar(50) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `licence` varchar(1000) DEFAULT NULL,
  `num_releases` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `javascriptgit`
--

INSERT INTO `javascriptgit` (`repo`, `stars`, `watch`, `issues`, `description`, `licence`, `num_releases`) VALUES
('marko-js/marko', '9429', '9429', '111', 'A declarative, HTML-based language that makes building web apps fun', 'MIT License', NULL),
('MithrilJS/mithril.js', '12058', '12058', '154', 'A JavaScript Framework for Building Brilliant Applications', 'MIT License', NULL),
('angular/angular', '58770', '58770', '3400', 'One framework. Mobile & desktop.', 'MIT License', NULL),
('emberjs/ember.js', '21413', '21413', '345', 'Ember.js - A JavaScript framework for creating ambitious web applications', 'MIT License', NULL),
('knockout/knockout', '9719', '9719', '364', 'Knockout makes it easier to create rich, responsive UIs with JavaScript', 'Other', NULL),
('tastejs/todomvc', '26381', '26381', '164', 'Helping you select an MV* framework - Todo apps for React.js, Ember.js, Angular, and many more', 'Other', NULL),
('spine/spine', '3551', '3551', '35', 'Lightweight MVC library for building JavaScript applications', 'MIT License', NULL),
('vuejs/vue', '159098', '159098', '461', '\\U0001f596 Vue.js is a progressive, incrementally-adoptable JavaScript framework for building UI on the web.', 'MIT License', NULL),
('Polymer/polymer', '21381', '21381', '281', 'Our original Web Component library.', 'Other', NULL),
('facebook/react', '145131', '145131', '555', 'A declarative, efficient, and flexible JavaScript library for building user interfaces.', 'MIT License', NULL),
('finom/seemple', '791', '791', '0', 'Seemple.js framework', 'MIT License', NULL),
('aurelia/framework', '11286', '11286', '63', 'The Aurelia 1 framework entry point, bringing together all the required sub-modules of Aurelia.', 'MIT License', NULL),
('optimizely/nuclear-js', '2126', '2126', '27', 'Reactive Flux built with ImmutableJS data structures. Framework agnostic.', 'MIT License', NULL),
('jashkenas/backbone', '27624', '27624', '92', 'Give your JS App some Backbone with Models, Views, Collections, and Events', 'MIT License', NULL),
('dojo/dojo', '1378', '1378', '21', 'Dojo 1 - the Dojo 1 toolkit core library.', 'Other', NULL),
('jorgebucaran/hyperapp', '17232', '17232', '22', 'The tiny framework for building web interfaces.', 'MIT License', NULL),
('riot/riot', '14127', '14127', '3', 'Simple and elegant component-based UI library', 'Other', NULL),
('Daemonite/material', '3029', '3029', '33', 'Material Design for Bootstrap 4', 'MIT License', NULL),
('Polymer/lit-element', '3189', '3189', '97', 'A simple base class for creating fast, lightweight web components', 'BSD 3-Clause \"New\" or \"Revised\" License', NULL),
('aurelia/aurelia', '668', '668', '102', 'Aurelia 2, a standards-based, front-end framework designed for high-performing, ambitious applications.', 'MIT License', NULL),
('sveltejs/svelte', '31409', '31409', '473', 'Cybernetically enhanced web apps', 'MIT License', NULL),
('neomjs/neo', '342', '342', '64', 'The webworkers driven UI framework (Beta version)', 'MIT License', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ldso`
--

CREATE TABLE `ldso` (
  `repo` varchar(100) NOT NULL,
  `creation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ldso`
--

INSERT INTO `ldso` (`repo`, `creation_date`) VALUES
('marko-js/marko', '2019-11-09'),
('MithrilJS/mithril.js', '2020-03-10'),
('angular/angular', '2020-03-11'),
('emberjs/ember.js', '2020-03-11'),
('knockout/knockout', '2020-03-11'),
('tastejs/todomvc', '2018-12-22'),
('spine/spine', '2019-09-17'),
('vuejs/vue', '2020-03-11'),
('Polymer/polymer', '2020-02-27'),
('facebook/react', '2020-03-11'),
('finom/seemple', NULL),
('aurelia/framework', '2020-03-09'),
('optimizely/nuclear-js', NULL),
('jashkenas/backbone', '2020-03-09'),
('dojo/dojo', '2020-03-06'),
('jorgebucaran/hyperapp', '2020-03-08'),
('riot/riot', '2019-01-06'),
('Daemonite/material', '2020-03-11'),
('Polymer/lit-element', '2020-03-10'),
('aurelia/aurelia', '2020-03-09'),
('sveltejs/svelte', '2020-03-11'),
('neomjs/neo', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lmd`
--

CREATE TABLE `lmd` (
  `repo` varchar(100) NOT NULL,
  `mod_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lmd`
--

INSERT INTO `lmd` (`repo`, `mod_date`) VALUES
('marko-js/marko', '2020-03-10 00:24:55'),
('MithrilJS/mithril.js', '2020-03-05 03:37:35'),
('angular/angular', '2020-03-09 20:51:21'),
('emberjs/ember.js', '2020-03-09 18:24:58'),
('knockout/knockout', '2019-09-30 07:12:21'),
('tastejs/todomvc', '2020-02-03 11:32:51'),
('spine/spine', '2017-10-09 17:47:54'),
('vuejs/vue', '2020-03-09 15:13:03'),
('Polymer/polymer', '2020-01-22 02:05:30'),
('facebook/react', '2020-03-07 19:23:30'),
('finom/seemple', '2020-01-28 16:03:47'),
('aurelia/framework', '2020-02-28 04:28:16'),
('optimizely/nuclear-js', '2018-09-20 23:34:06'),
('jashkenas/backbone', '2019-12-13 19:41:21'),
('dojo/dojo', '2020-02-12 15:02:50'),
('jorgebucaran/hyperapp', '2020-03-09 13:34:26'),
('riot/riot', '2020-03-08 20:41:38'),
('Daemonite/material', '2020-01-10 00:56:21'),
('Polymer/lit-element', '2020-03-07 20:09:27'),
('aurelia/aurelia', '2020-02-08 21:22:08'),
('sveltejs/svelte', '2020-03-10 02:22:39'),
('neomjs/neo', '2020-03-09 12:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `projGithub`
--

CREATE TABLE `projGithub` (
  `repo` varchar(1000) DEFAULT NULL,
  `num_proj` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projGithub`
--

INSERT INTO `projGithub` (`repo`, `num_proj`) VALUES
('marko-js/marko', '10097'),
('MithrilJS/mithril.js', '339'),
('angular/angular', '614497'),
('emberjs/ember.js', '5625'),
('knockout/knockout', '6159'),
('tastejs/todomvc', '5465'),
('spine/spine', '2031'),
('vuejs/vue', '366614'),
('Polymer/polymer', '16481'),
('facebook/react', '1237054'),
('finom/seemple', '12'),
('aurelia/framework', '410525'),
('optimizely/nuclear-js', '37'),
('jashkenas/backbone', '24404'),
('dojo/dojo', '23795'),
('jorgebucaran/hyperapp', '841'),
('riot/riot', '5140'),
('Daemonite/material', '128329'),
('Polymer/lit-element', '811'),
('aurelia/aurelia', '4378'),
('sveltejs/svelte', '5975'),
('neomjs/neo', '29038');

-- --------------------------------------------------------

--
-- Table structure for table `relfreq`
--

CREATE TABLE `relfreq` (
  `repo` varchar(500) DEFAULT NULL,
  `releasefreq` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relfreq`
--

INSERT INTO `relfreq` (`repo`, `releasefreq`) VALUES
('marko-js/marko ', ' 3.75'),
('MithrilJS/mithril.js ', ' 28.09'),
('angular/angular ', ' 4.55'),
('emberjs/ember.js ', ' 7.58'),
('knockout/knockout ', ' 79.30'),
('tastejs/todomvc ', ' 178.48'),
('spine/spine ', ' 69.66'),
('vuejs/vue ', ' 8.86'),
('Polymer/polymer ', ' 15.10'),
('facebook/react ', ' 19.67'),
('finom/seemple ', ' 17.02'),
('aurelia/framework ', ' 16.67'),
('optimizely/nuclear-js ', ' 36.38'),
('jashkenas/backbone ', ' 101.70'),
('dojo/dojo ', ' 19.39'),
('jorgebucaran/hyperapp ', ' 9.39'),
('riot/riot ', ' 10.91'),
('Daemonite/material ', ' 86.99'),
('Polymer/lit-element ', ' 20.04'),
('aurelia/aurelia ', ' 113.56'),
('sveltejs/svelte ', ' 3.94'),
('neomjs/neo ', ' 4.18');

-- --------------------------------------------------------

--
-- Table structure for table `soques`
--

CREATE TABLE `soques` (
  `repo` varchar(100) NOT NULL,
  `num_ques` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soques`
--

INSERT INTO `soques` (`repo`, `num_ques`) VALUES
('marko-js/marko', '57\r'),
('MithrilJS/mithril.js', '226\r'),
('angular/angular', '205,960\r'),
('emberjs/ember.js', '23,403\r'),
('knockout/knockout', '20,097\r'),
('tastejs/todomvc', '46\r'),
('spine/spine', '34\r'),
('vuejs/vue', '51,505\r'),
('Polymer/polymer', '8,220\r'),
('facebook/react', '194,443\r'),
('finom/seemple', 'None'),
('aurelia/framework', '10,745\r'),
('optimizely/nuclear-js', 'None'),
('jashkenas/backbone', '20,648\r'),
('dojo/dojo', '9,253\r'),
('jorgebucaran/hyperapp', '15\r'),
('riot/riot', '63\r'),
('Daemonite/material', '555\r'),
('Polymer/lit-element', '317\r'),
('aurelia/aurelia', '3,269\r'),
('sveltejs/svelte', '615\r'),
('neomjs/neo', 'None');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
