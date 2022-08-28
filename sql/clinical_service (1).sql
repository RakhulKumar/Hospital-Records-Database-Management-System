-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 01:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinical_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `blog_image` text NOT NULL,
  `description` text NOT NULL,
  `posted_by` varchar(50) NOT NULL,
  `status` enum('enable','disable') NOT NULL DEFAULT 'disable',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `blog_image`, `description`, `posted_by`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Litora sem fugiat interdumfsd1', 'blog-image-3.jpg', 'Sequi ea ipsam praesentium risus eu? Fugiat netus. Irure felis voluptates! Minus, cras volutpat voluptate lorem. Possimus duis, suscipit, habitasse arcu, inventore mattis quos, suscipit sollicitudin lacus, iure animi hic nascetur facilisis lacinia cum viv', 'admin', 'disable', '2016-11-08 13:29:06', '2016-11-08 07:59:06'),
(3, 'Litora sem fugiat interdum', 'blog-image-2.jpg', 'Accumsan exercitationem sollicitudin! Quis mattis dolorum cumque sapien nemo. Nihil esse pellentesque pulvinar aut suspendisse montes. Eros sapien! Do, habitasse turpis laborum proident. Porttitor? Bibendum tenetur vel saepe dignissim quam a elit! Alias ea asperiores? Elementum! Aliqua quidem mattis euismod, facere inceptos, exercitationem bibendum nunc, porro pretium recusandae magni harum earum magna, odio velit! Urna sollicitudin architecto voluptatum! Quisque cillum, inceptos tempus sodales? Adipiscing, occaecati aute, et corrupti quaerat egestas occaecat ab? Labore viverra pariatur.Sequi ea ipsam praesentium risus eu? Fugiat netus. Irure felis The Neuroscience Department at Sagar Hospitals provides expert care to neurological, neurosurgical, and psychiatric patients both in adult and pediatric neurology.  The neuro team comprising sAccumsan exercitationem sollicitudin! Quis mattis dolorum cumque sapien nemo. Nihil esse pellentesque pulvinar aut suspendisse montes. Eros sapien! Do, habitasse turpis laborum proident. Porttitor? Bibendum tenetur vel saepe dignissim quam a elit! Alias ea asperiores? Elementum! Aliqua quidem mattis euismod, facere inceptos, exercitationem bibendum nunc, porro pretium recusandae magni harum earum magna, odio velit! Urna sollicitudin architecto voluptatum! Quisque cillum, inceptos tempus sodales? Adipiscing, occaecati aute, et corrupti quaerat egestas occaecat ab? Labore viverra pariatur.', 'admin', 'enable', '2016-11-08 13:30:25', '2016-11-08 08:00:25');

-- --------------------------------------------------------

--
-- Table structure for table `blog_details`
--

CREATE TABLE `blog_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `status` enum('Approved','Not Approved') NOT NULL DEFAULT 'Approved',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_details`
--

INSERT INTO `blog_details` (`id`, `blog_id`, `email`, `name`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'akhil@gmail.com', 'akhil', 'Nunc maiores proident sodales amet alias. Similique mattis, odit platea veniam libero excepteur fringilla adipisicing id, varius voluptatibus, repudiandae omnis montes tristique, officia magnam sunt? Sapien magni suscipit rhoncus impedit, dignissim dolor ', 'Approved', '2016-11-08 12:33:57', '2016-11-08 07:03:57'),
(2, 2, 'pandimunees@gmail.com', 'pandi', 'Ipsum officiis suspendisse hic soluta sint saepe esse, purus conubia, sociosqu, dolore! Veniam curabitur, sodales natus! Officiis velit itaque quasi, veniam sollicitudin exercitation vel. Natoque doloremque at turpis, sagittis velit, justo dictumst dictum', 'Approved', '2016-11-08 16:09:53', '2016-11-08 10:39:53'),
(3, 2, 'reshma@gmail.com', 'Reshma', 'Ipsum officiis suspendisse hic soluta sint saepe esse, purus conubia, sociosqu, dolore! Veniam curabitur, sodales natus! Officiis velit itaque quasi, veniam sollicitudin exercitation vel. Natoque doloremque at turpis, sagittis velit, justo dictumst dictum', 'Approved', '2016-11-08 16:10:30', '2016-11-08 10:40:30'),
(5, 2, 'vaigaran@gmail.com', 'vaigaran', 'Quis litora explicabo impedit adipisicing totam, architecto. Dictumst earum, ridiculus, enim rhoncus, donec! Sapiente! Hac magnis, aliquip morbi nostrum cumque, amet? Beatae, dapibus gravida, dicta habitasse, taciti non quisquam a, molestias provident dig', 'Approved', '2016-11-08 17:05:09', '2016-11-08 11:35:09'),
(6, 2, 'vaigaran@gmail.com', 'vaigaran', 'Quis litora explicabo impedit adipisicing totam, architecto. Dictumst earum, ridiculus, enim rhoncus, donec! Sapiente! Hac magnis, aliquip morbi nostrum cumque, amet? Beatae, dapibus gravida, dicta habitasse, taciti non quisquam a, molestias provident dig', 'Approved', '2016-11-08 17:08:31', '2016-11-08 11:38:31'),
(7, 2, 'vasanthy@gmail.com', 'vasanthi', 'Ultricies facilis, sociis nunc, facilisis sed dicta optio bibendum proin, ipsum blanditiis? Ipsa inventore, mauris dicta laoreet voluptate, nonummy! Officia deserunt auctor adipiscing iure? Blanditiis, senectus feugiat culpa? Eleifend leo. Sociis auctor. ', 'Approved', '2016-11-08 17:13:57', '2016-11-08 11:43:57'),
(8, 2, 'priyabe0102@gmail.com', 'priya', 'Incididunt culpa lectus, unde auctor? Quisque laboris dui, occaecati aptent scelerisque cupiditate, ratione illum anim debitis repellat class, deleniti condimentum tristique, quam! Congue mollit, repellendus dicta varius sociis, itaque magna consectetur a', 'Approved', '2016-11-09 15:45:04', '2016-11-09 10:15:04'),
(9, 3, 'vaigaran@gmail.com', 'vaigaran', 'I have seen a case for my friend’s daughter(unhealthy by born) admitted there for pneumonia put to ventilator saying her condition as serious and Doctor said will wait for 3 days to see any improvement and after 4rth suggested another 4 more days for vent', 'Approved', '2016-11-09 15:45:23', '2016-11-09 10:15:23'),
(10, 3, 'akhil@gmail.com', 'akhil', 'his hospital is meant for wealthy people and not for poor. This hospital is crowded like a hell. Before you visit this hospital, just donate all your money to this hospital, otherwise, they know how to get it from you. People who is producing counterfeit ', 'Approved', '2016-11-10 17:52:06', '2016-11-10 12:22:06'),
(11, 3, 'guru@gmail.com', 'guru', 'his hospital is meant for wealthy people and not for poor. This hospital is crowded like a hell. Before you visit this hospital, just donate all your money to this hospital, otherwise, they know how to get it from you. People who is producing counterfeit money can only afford this hospital. Lab charges are atrocious. People who have kidney discease, dont waste your time with this hospital. There is no medicine to cure kidney failure as per Dr S Rajagopalan Seshadri in Apollo. But he will still call you for regular consultation to make money. Kidney failure patients can survive without dialysis by trying sidha, yunani. If there is a urgency, Apollo wont give you appointment. You have to wait until their calender is free. Blood suckers.', 'Approved', '2016-11-10 17:53:22', '2016-11-10 12:23:22'),
(12, 3, 'priya@gmail.com', 'priya', 'lkhkdvksuj oiyuhos oifyuosodi oasifguo a uoiodsfoi Pellentesque iaculis excepturi modi mus cursus pulvinar diam wisi ipsam tempus, adipiscing, voluptate ipsa, reprehenderit modi et, harum, duis quidem fugiat ac, posuere quae? Justo occaecat torquent. Et aptent congue.', 'Approved', '2016-11-16 12:58:26', '2016-11-16 07:28:26'),
(13, 3, 'rahulm031097@gmail.com', 'rahul', 'sdffxfx', 'Approved', '2022-05-15 20:17:42', '2022-05-15 14:47:42'),
(14, 3, 'rahulm031097@gmail.com', 'rahul', 'hfhffffffffffffff', 'Approved', '2022-05-15 20:18:47', '2022-05-15 14:48:47'),
(15, 3, 'rahulm031097@gmail.com', 'rahul', 'qqqqqqqq', 'Approved', '2022-05-15 20:19:30', '2022-05-15 14:49:30'),
(16, 3, 'rahulm031097@gmail.com', 'rahul', 'aa', 'Approved', '2022-05-15 20:20:41', '2022-05-15 14:50:41'),
(17, 3, 'rahulm031097@gmail.com', 'rahul', 'haiiii', 'Approved', '2022-06-26 16:12:28', '2022-06-26 10:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `doct_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `username`, `email`, `message`, `doct_id`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, 'rahul', 'rahulm031097@gmail.com', 'asaas', ''),
(4, 'rahul', 'rahulm031097@gmail.com', 'hi doctor', 'arun@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `doctor_image` text NOT NULL,
  `education` varchar(255) NOT NULL,
  `experience` int(11) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `working_days` varchar(20) NOT NULL,
  `status` enum('Available','Not Available') NOT NULL DEFAULT 'Not Available',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `department_name`, `doctor_name`, `description`, `doctor_image`, `education`, `experience`, `profession`, `address`, `mobile`, `email`, `password`, `skype`, `working_days`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Neurology', 'Dr. V. Arun Agastyas', 'Voluptates Maiores, Consectetur Modi Porro Aenean Optio Bibendum. Neque Odit, Consequatur Facilisis Dui Consequuntur Doloremque Mi Exercitation Vero, Molestias Quaerat Porttitor Modi. Reiciendis Ipsa Debitis Porttitor Dis Fusce Voluptatum Rem Doloremque S', 'fgfgsf.jpg', 'Jkhfk', 3, 'Dsfs', 'Sdf', 9877768874, 'arun@gmail.com', 'arun', 'sdffsdfsf@mkkf.jnk', 'Sdfs', 'Available', '2016-11-07 16:51:23', '2016-11-07 11:21:23'),
(12, 'Neurologist', 'Dr.Brandon Fowler', 'Voluptates maiores, consectetur modi porro aenean optio bibendum. Neque odit, consequatur facilisis dui consequuntur doloremque mi exercitation vero, molestias quaerat porttitor modi. Reiciendis ipsa debitis porttitor dis fusce voluptatum rem doloremque s', 'brandon.jpg', 'Medical Orientation Program, St. Louis University (St. Louis, Missouri 1996)', 18, 'School of Medicine and Graduate School of Biomedical Sciences University', 'BMA House, Tavistock Square, London WC1H 9JR', 9789400467, 'brandon@gmail.com', 'brandon', 'lorie@gmail.com', 'monday - friday', 'Available', '2016-11-07 18:00:01', '2016-11-07 12:30:01'),
(13, 'scan', 'rahul', 'scan center', 'image5.PNG', 'higher', 5, 'scan', 'chennai', 8870148773, 'scan@gmail.com', '123', 'scan@gmail.com', '5', 'Available', '2022-05-26 12:23:36', '2022-05-26 06:53:36'),
(14, 'lab', 'raja', 'Lab center', 'image3.PNG', 'higher', 5, 'lab', 'chennai', 8870148773, 'lab@gmail.com', '123', 'lab@gmail.com', '5', 'Available', '2022-05-26 13:46:35', '2022-05-26 08:16:35'),
(15, 'nuero', 'rahul', 'scan centerss', 'Capture.PNG', 'higher', 1, 'labs', '2/238 puthukudiyiruppu', 8870148773, 'rahulm@gmail.com', '123', 'rahulm@gmail.com', '5', 'Available', '2022-05-26 19:29:52', '2022-05-26 13:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `gender`, `password`, `city`, `mobile`, `role`, `created_at`) VALUES
(1, '', 'admin@clinicalservice.in', '', 'root', '', '', 'admin', '2016-11-14 11:09:45'),
(4, '', 'brandon@gmail.com', '', ' brandon', '', '', 'doctor', '2016-11-14 11:11:49'),
(5, '', 'timothy@gmail.com', '', 'timothy', '', '', 'doctor', '2016-11-14 11:12:36'),
(6, '', 'arun@gmail.com', '', 'arun', '', '', 'doctor', '2016-11-14 11:13:17'),
(66, '', 'scan@gmail.com', '', '123', '', '', 'scan', '2016-12-26 05:00:12'),
(67, '', 'lab@gmail.com', '', '123', '', '', 'lab', '2016-12-26 05:03:22'),
(133, 'Rahul', 'rahulm031097@gmail.com', 'Male', '123', 'chennai', '9944281622', 'user', '2022-06-26 10:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `patient_appointments`
--

CREATE TABLE `patient_appointments` (
  `id` int(100) NOT NULL,
  `doctor_id` varchar(100) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `appointment_date` varchar(100) NOT NULL,
  `appointment_time` varchar(100) NOT NULL,
  `appointment_for` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `Services` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_appointments`
--

INSERT INTO `patient_appointments` (`id`, `doctor_id`, `patient_name`, `email`, `mobile`, `address`, `appointment_date`, `appointment_time`, `appointment_for`, `message`, `Services`, `status`, `type`, `dob`, `age`) VALUES
(26, '9', 'Rahul', 'rahulm031097@gmail.com', '9944281622', 'chennai', '2022-06-28', '3.00', 'cold', 'hello', 'services', 'enable', 'clinic', '2022-06-09', '21');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `id` int(10) UNSIGNED NOT NULL,
  `pharmacy_name` varchar(255) NOT NULL,
  `pharmacy_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`id`, `pharmacy_name`, `pharmacy_email`) VALUES
(1, 'MEYS Medicals', 'meysmedicals@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `pharmacy_id` int(10) UNSIGNED NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `prescription_for` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `prescription` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `time_to_take` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `patient_id`, `doctor_id`, `pharmacy_id`, `patient_name`, `mobile`, `address`, `prescription_for`, `age`, `date`, `time`, `prescription`, `quantity`, `time_to_take`, `created_at`) VALUES
(88, 26, 9, 1, 'Rahul', 9944281622, 'chennai', 'cold', 21, '2022-06-28', '03:00:00', 'dolo', 1, 'night', '2022-06-26 15:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `email`, `gender`, `password`, `city`, `role`) VALUES
(1, 'Rahul', 'rahulm031097@gmail.com', 'Male', '123', 'chennai', 'user'),
(2, 'rahulm031097', 'rahulm031097@gmail.com', 'Male', '123', 'chennai', 'user'),
(3, 'Rahulraja', 'rahulraja@gmail.com', 'Male', '123', 'chennai', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `service_image` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `description`, `service_image`, `created_at`, `updated_at`) VALUES
(50, 'Lab Test Department.', 'Aliquip optio tempor lectus, veniam similique doloremque aliquet luctus facilis, voluptates quidem quo eius justo! Proident nostrud, pede, asperiores, quasi maiores perspiciatis, rhoncus posuere? Possimus non? Praesent turpis placeat ipsam distinctio prae', 'kljlkdsj.jpg', '2016-11-08 18:46:17', '2016-11-08 13:16:17'),
(56, 'Cardiology Department.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elitAccumsan exercitationem sollicitudin! Quis mattis dolorum cumque sapien nemo. Nihil esse pellentesque pulvinar aut suspendisse montes. Eros sapien! Do, habitasse turpis laborum proident. Porttitor? Bibendum tenetur vel saepe dignissim quam a elit! Alias ea asperiores? Elementum! Aliqua quidem mattis euismod, facere inceptos, exercitationem bibendum nunc, porro pretium recusandae magni harum earum magna, odio velit! Urna sollicitudin architecto voluptatum! Quisque cillum, inceptos tempus sodales? Adipiscing, occaecati aute, et corrupti quaerat egestas occaecat ab? Labore viverra pariatur.Leo veritatis. Quo unde? Repellat posuere, class, commodo, praesentium, amet per ultrices aliquet, fames accusantium lacinia facilisi rhoncus aute nonummy doloremque, maiores optio quos. Sed volupta', 'service1.jpg', '2016-11-09 11:23:35', '2016-11-09 05:53:35'),
(57, 'Neurology Department.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. RepudiandAccumsan exercitationem sollicitudin! Quis mattis dolorum cumque sapien nemo. Nihil esse pellentesque pulvinar aut suspendisse montes. Eros sapien! Do, habitasse turpis laborum proident. Porttitor? Bibendum tenetur vel saepe dignissim quam a elit! Alias ea asperiores? Elementum! Aliqua quidem mattis euismod, facere inceptos, exercitationem bibendum nunc, porro pretium recusandae magni harum earum magna, odio velit! Urna sollicitudin architecto voluptatum! Quisque cillum, inceptos tempus sodales? Adipiscing, occaecati aute, et corrupti quaerat egestas occaecat ab? Labore viverra pariatur.ae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit Lorem ipsum dolor sit amet, consectetur adipi', 'service3.jpg', '2016-11-10 16:18:25', '2016-11-10 10:48:25'),
(58, 'Dental Department', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. RAccumsan exercitationem sollicitudin! Quis mattis dolorum cumque sapien nemo. Nihil esse pellentesque pulvinar aut suspendisse montes. Eros sapien! Do, habitasse turpis laborum proident. Porttitor? Bibendum tenetur vel saepe dignissim quam a elit! Alias ea asperiores? Elementum! Aliqua quidem mattis euismod, facere inceptos, exercitationem bibendum nunc, porro pretium recusandae magni harum earum magna, odio velit! Urna sollicitudin architecto voluptatum! Quisque cillum, inceptos tempus sodales? Adipiscing, occaecati aute, et corrupti quaerat egestas occaecat ab? Labore viverra pariatur.epudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odLorem ipsum dolor sit amet, consectetur adipisic', 'service4.jpg', '2016-11-10 16:19:29', '2016-11-10 10:49:29'),
(59, 'Orthopedic Department.', 'Mauris vivamus quisquam fugit sem nullam purus anim aliAccumsan exercitationem sollicitudin! Quis mattis dolorum cumque sapien nemo. Nihil esse pellentesque pulvinar aut suspendisse montes. Eros sapien! Do, habitasse turpis laborum proident. Porttitor? Bibendum tenetur vel saepe dignissim quam a elit! Alias ea asperiores? Elementum! Aliqua quidem mattis euismod, facere inceptos, exercitationem bibendum nunc, porro pretium recusandae magni harum earum magna, odio velit! Urna sollicitudin architecto voluptatum! Quisque cillum, inceptos tempus sodales? Adipiscing, occaecati aute, et corrupti quaerat egestas occaecat ab? Labore viverra pariatur.quet eiusmod fuga? Eum? Nam ultrices. Hendrerit! Molestias, commodi ea litora rem, interdum. Duis laboris facere potenti dignissimos rerum, sapien risus autem euismod integer? Tortor, iusto mollitia d', 'service5.jpg', '2016-11-10 16:20:17', '2016-11-10 10:50:17'),
(60, 'Emergency Department.', 'Quibusdam! Urna ridiculus! Morbi ligula sagittis,Accumsan exAccumsan exercitationem sollicitudin! Quis mattis dolorum cumque sapien nemo. Nihil esse pellentesque pulvinar aut suspendisse montes. Eros sapien! Do, habitasse turpis laborum proident. Porttitor? Bibendum tenetur vel saepe dignissim quam a elit! Alias ea asperiores? Elementum! Aliqua quidem mattis euismod, facere inceptos, exercitationem bibendum nunc, porro pretium recusandae magni harum earum magna, odio velit! Urna sollicitudin architecto voluptatum! Quisque cillum, inceptos tempus sodales? Adipiscing, occaecati aute, et corrupti quaerat egestas occaecat ab? Labore viverra pariatur.ercitationem sollicitudin! Quis mattis dolorum cumque sapien nemo. Nihil esse pellentesque pulvinar aut suspendisse montes. Eros sapien! Do, habitasse turpis laborum proident. Porttitor? Bibendum tenetur vel saepe dignissim quam a elit! Alias ea asperiores? Elementum! Aliqua quidem mattis euismod, facere inceptos, exercitationem bibendum nunc, porro pretium recusandae magni harum earum magna, odio velit! Urna sollicitudin architecto voluptatum! Quisque cillum, inceptos tempus sodales? Adipiscing, occaecati aute, et corrupti quaerat egestas occaecat ab? Labore viverra pariatur. velit? Tempore cupidatat ac, tempora adipiscing necessitatibus, reiciendis incididunt felis. Quo temporibus repudiandae ridiculus? Pharetra imperdiet diamlorem ducimus? Nisi aspernatur tempore egestas labo', 'service6.jpg', '2016-11-10 16:21:03', '2016-11-10 10:51:03'),
(61, 'Operation Theater Service', 'Malesuada eu unde sem semper ea earum at consequuntur ea quis nullam elementum possimus voluptas rem culpa minim, aliquet nostrum, optio? Dolor etiam aenean luctus! Voluptatibus ratione natus molestias lacinia? Praesent velit dolore? Assumenda placeat orc', 'service7.jpg', '2016-11-10 16:21:56', '2016-11-10 10:51:56'),
(62, 'Pharmacy Support', 'Suscipit voluptatem primis, suspendisse incidunt, nunc at, nulAccumsan exercitationem sollicitudin! Quis mattis dolorum cumque sapien nemo. Nihil esse pellentesque pulvinar aut suspendisse montes. Eros sapien! Do, habitasse turpis laborum proident. Porttitor? Bibendum tenetur vel saepe dignissim quam a elit! Alias ea asperiores? Elementum! Aliqua quidem mattis euismod, facere inceptos, exercitationem bibendum nunc, porro pretium recusandae magni harum earum magna, odio velit! Urna sollicitudin architecto voluptatum! Quisque cillum, inceptos tempus sodales? Adipiscing, occaecati aute, et corrupti quaerat egestas occaecat ab? Labore viverra pariatur.lam. Vulputate alias doloribus quae? Officiis, numquam cras montes, curabitur? Nibh voluptate mauris, omnis class! Eaque nostrud fugiat cras, possimus. Proin adipisicing erat fringilla libero p', 'service8.jpg', '2016-11-10 16:22:53', '2016-11-10 10:52:53'),
(63, 'Outdoor Checkup', 'The Neuroscience Department at Sagar Hospitals Accumsan exercitationem sollicitudin! Quis mattis dolorum cumque sapien nemo. Nihil esse pellentesque pulvinar aut suspendisse montes. Eros sapien! Do, habitasse turpis laborum proident. Porttitor? Bibendum tenetur vel saepe dignissim quam a elit! Alias ea asperiores? Elementum! Aliqua quidem mattis euismod, facere inceptos, exercitationem bibendum nunc, porro pretium recusandae magni harum earum magna, odio velit! Urna sollicitudin architecto voluptatum! Quisque cillum, inceptos tempus sodales? Adipiscing, occaecati aute, et corrupti quaerat egestas occaecat ab? Labore viverra pariatur.provides expert care to neurological, neurosurgical, and psychiatric patients both in adult and pediatric neurology.  The neuro team comprising some of the best neurosurgeons and neurologists works to compreh', 'service9.jpg', '2016-11-10 16:23:47', '2016-11-10 10:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(300) DEFAULT NULL,
  `working_time` text NOT NULL,
  `status` enum('Available','Not Available','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `doctor_id`, `doctor_name`, `working_time`, `status`) VALUES
(67, 9, 'Dr. V. Arun Agastyas', '10.00-10.30', 'Not Available'),
(68, 9, 'Dr. V. Arun Agastyas', '10.30-11.00', 'Not Available'),
(69, 9, 'Dr. V. Arun Agastyas', '11.00-11.30', 'Not Available'),
(70, 9, 'Dr. V. Arun Agastyas', '11.30-12.00', 'Not Available'),
(71, 9, 'Dr. V. Arun Agastyas', '12.00-12.30', 'Not Available'),
(72, 10, 'Dr.Timothy Newman', '12.00-01.00', 'Not Available'),
(73, 10, 'Dr.Timothy Newman', '01.00-01.30', 'Available'),
(74, 10, 'Dr.Timothy Newman', '01.30-02.00', 'Available'),
(75, 10, 'Dr.Timothy Newman', '02.00-02.30', 'Available'),
(76, 10, 'Dr.Timothy Newman', '02.30-03.00', 'Available'),
(77, 12, 'Dr.Brandon Fowler', '10.00-10.30', 'Not Available'),
(78, 12, 'Dr.Brandon Fowler', '10.30-11.00', 'Not Available'),
(79, 12, 'Dr.Brandon Fowler', '11.00-11.30', 'Not Available'),
(80, 12, 'Dr.Brandon Fowler', '11.30-12.00', 'Not Available'),
(81, 12, 'Dr.Brandon Fowler', '12.00-12.30', 'Not Available'),
(82, 9, 'Dr. V. Arun Agastyas', '1.00', 'Not Available'),
(83, 9, 'Dr. V. Arun Agastyas', '2.00', 'Not Available'),
(84, 9, 'Dr. V. Arun Agastyas', '4.00', 'Available'),
(85, 9, 'Dr. V. Arun Agastyas', '6.00', 'Not Available'),
(86, 9, 'Dr. V. Arun Agastyas', '7.00', 'Available'),
(87, 9, 'Dr. V. Arun Agastyas', '1.00', 'Available'),
(88, 9, 'Dr. V. Arun Agastyas', '2.00', 'Available'),
(89, 9, 'Dr. V. Arun Agastyas', '4.00', 'Available'),
(90, 9, 'Dr. V. Arun Agastyas', '6.00', 'Available'),
(91, 9, 'Dr. V. Arun Agastyas', '7.00', 'Available'),
(92, 13, 'rahul', '1.00', 'Available'),
(93, 13, 'rahul', '2.00', 'Available'),
(94, 13, 'rahul', '4.00', 'Available'),
(95, 13, 'rahul', '6.00', 'Available'),
(96, 13, 'rahul', '7.00', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `patient_appointments`
--
ALTER TABLE `patient_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pharmacy_email` (`pharmacy_email`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patient_name` (`patient_name`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_details`
--
ALTER TABLE `blog_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `patient_appointments`
--
ALTER TABLE `patient_appointments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
