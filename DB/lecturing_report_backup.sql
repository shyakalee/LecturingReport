-- MySQL dump 10.16  Distrib 10.1.28-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: lecturing_report
-- ------------------------------------------------------
-- Server version	10.1.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(13) CHARACTER SET utf8 NOT NULL,
  `password` varchar(15) CHARACTER SET utf8 NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'MUGISHA test','Gaspaly','gaspal@gmail.com','123','123',1),(2,'','','','','',0),(3,'','','','','',0),(4,'','','','','',0),(5,'last','me','gaspal@gmail.com','123456','123456',0),(6,'last one','me one','gaspal@gmail.com','1234567890','1234567890',0),(7,'asd','asd','jajajaden01@gmail.com','2342','2342',0),(8,'jksdfhdj','hjkhvfdg','jajajaden01@gmail.com','4564','4564',0),(9,'User 2','test','user@gmail.com','1234567890','123',1),(10,'dfg','sdf','jajajaden01@gmail.com','3445676543222','34456765432222',0),(11,'up','date','update@gmail.com','12345','12345',0),(12,'kaka','brazil','kaka@gmail.com','0788234566','0788234566',0),(13,'me','test','kaka@gmail.com','3453453','123',1),(14,'ja','jasweb','jajajaden01@gmail.com','12333453','12333453',0),(15,'TUMUKUNDE','Dinah','dinah@gmail.com','0781271638','admin',1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announce`
--

DROP TABLE IF EXISTS `announce`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announce` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `leader_id` bigint(10) NOT NULL,
  `depart_id` bigint(10) NOT NULL,
  `level` int(1) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `content` varchar(500) CHARACTER SET utf8 NOT NULL,
  `date_time` varchar(30) CHARACTER SET utf8 NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announce`
--

LOCK TABLES `announce` WRITE;
/*!40000 ALTER TABLE `announce` DISABLE KEYS */;
INSERT INTO `announce` VALUES (1,1,1,5,'Remedial News','General interview guide approach: Intended to ensure that the same general areas of information are collected from each interviewee; this provides more focus than the conversational approach, but still allows a degree of freedom and adaptability in getting the information from the interviewe.','04-08-2018 11:24 AM',1),(2,1,1,1,'Registration','Informal, Conversational interview: No predetermined questions are asked, in order to remain as open and adaptable as possible to the interviewee’s nature and priorities; during the interview the interviewer “goes with the flow”.','05-08-2018 10:58 AM',1),(3,2,3,3,'Test Amouncement testing','Test Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement testingTest Amouncement tes','21-02-2022 02:05 PM',1);
/*!40000 ALTER TABLE `announce` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `credit` int(11) NOT NULL,
  `lecture` bigint(10) NOT NULL,
  `depart` bigint(10) NOT NULL,
  `level` int(1) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,'C++',10,1,1,2,1),(2,'Computer Graphic',10,1,1,2,1),(3,'GIS info',10,1,1,1,1),(4,'Web Design',10,1,1,2,1),(5,'Local Financial',10,1,3,2,1),(6,'Digital circuit',10,1,4,2,1),(7,'Database Management System',10,1,1,2,1),(8,'Articifial Intelligence testing',15,3,4,3,1);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `depart`
--

DROP TABLE IF EXISTS `depart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `depart` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `levels` int(1) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `depart`
--

LOCK TABLES `depart` WRITE;
/*!40000 ALTER TABLE `depart` DISABLE KEYS */;
INSERT INTO `depart` VALUES (1,'Computer Science',4,1),(2,'Information Technology',4,1),(3,'Information Management System',4,1),(4,'Computer Engineering',4,1),(5,'Testing Department',1,1);
/*!40000 ALTER TABLE `depart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leader`
--

DROP TABLE IF EXISTS `leader`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leader` (
  `id` bigint(10) NOT NULL,
  `f_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 NOT NULL,
  `depart` bigint(10) NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leader`
--

LOCK TABLES `leader` WRITE;
/*!40000 ALTER TABLE `leader` DISABLE KEYS */;
/*!40000 ALTER TABLE `leader` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lecture`
--

DROP TABLE IF EXISTS `lecture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lecture` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `degree` varchar(5) CHARACTER SET utf8 NOT NULL,
  `f_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 NOT NULL,
  `depart` bigint(10) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lecture`
--

LOCK TABLES `lecture` WRITE;
/*!40000 ALTER TABLE `lecture` DISABLE KEYS */;
INSERT INTO `lecture` VALUES (1,'Dr','GAHAMANYI','Joseph','joseph@gmail.com','1234','1234','M',1,1),(2,'Prof','Ntaganda','Jean Marie','ntaganda@gmail.com','123','123','M',1,1),(3,'Mr','Leactures','Testing','leacturer@gmail.com','0784547874','leacture','M',2,1);
/*!40000 ALTER TABLE `lecture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lecturing`
--

DROP TABLE IF EXISTS `lecturing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lecturing` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `depart_id` bigint(10) NOT NULL,
  `student_id` bigint(10) NOT NULL,
  `course_id` bigint(10) NOT NULL,
  `date_time` varchar(20) CHARACTER SET utf8 NOT NULL,
  `duration` varchar(10) CHARACTER SET utf8 NOT NULL,
  `content` varchar(500) CHARACTER SET utf8 NOT NULL,
  `comment` varchar(500) CHARACTER SET utf8 NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lecturing`
--

LOCK TABLES `lecturing` WRITE;
/*!40000 ALTER TABLE `lecturing` DISABLE KEYS */;
INSERT INTO `lecturing` VALUES (1,2,2,0,'2022-02-21T15:00','3h','It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability. It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability It\'s our goal to be the first in the market to bring you innovat','',1),(2,2,2,0,'2018-05-20T08:30','3h','It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability. It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability It\'s our goal to be the first in the market to bring you innovat','Not agree !',1),(3,1,1,4,'2018-08-15T08:30','3h','By the observation, the researcher notes by his/her own eyes what is done in reality.   It can bring some modifications on the results got by other techniques. \r\n\r\nCat on /20','No Comment !',4);
/*!40000 ALTER TABLE `lecturing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 NOT NULL,
  `depart` bigint(10) NOT NULL,
  `level` int(1) NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'MUGISHA','Fiston','fiston@gmail.com','123',1,2,'123',1),(2,'Niyibizi','B Testing','niyibizi@gmail.com','0788702451',2,3,'niyibizi',1);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-22  0:35:34
