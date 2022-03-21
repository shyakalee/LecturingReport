-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: lecturing_report
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (7,'asd','asd','jajajaden01@gmail.com','2342','2342',0),(8,'jksdfhdj','hjkhvfdg','jajajaden01@gmail.com','4564','4564',0),(11,'up','date','update@gmail.com','12345','12345',0),(17,'shyaka','leonce','shyakalee@gmail.com','123','123',1),(18,'Administrator','Lanez','admin@admin.com','123','admin',1);
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announce`
--

LOCK TABLES `announce` WRITE;
/*!40000 ALTER TABLE `announce` DISABLE KEYS */;
INSERT INTO `announce` VALUES (1,1,1,5,'Remedial News','General interview guide approach: Intended to ensure that the same general areas of information are collected from each interviewee; this provides more focus than the conversational approach, but still allows a degree of freedom and adaptability in getting the information from the interviewe.','04-08-2018 11:24 AM',1),(2,1,1,1,'Registration','Informal, Conversational interview: No predetermined questions are asked, in order to remain as open and adaptable as possible to the interviewee’s nature and priorities; during the interview the interviewer “goes with the flow”.','05-08-2018 10:58 AM',1);
/*!40000 ALTER TABLE `announce` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendance` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reg_number` varchar(100) NOT NULL,
  `lecture_id` varchar(100) NOT NULL,
  `depart` varchar(100) NOT NULL,
  `in_time` varchar(100) NOT NULL,
  `status` tinyint(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance`
--

LOCK TABLES `attendance` WRITE;
/*!40000 ALTER TABLE `attendance` DISABLE KEYS */;
INSERT INTO `attendance` VALUES (1,'IPRC/229211','1','1','2022-03-17',0),(2,'IPRC/224E65','1','1','2022-03-17',0),(3,'IPRC/2256BA','1','1','2022-03-17',2),(4,'IPRC/22434F','1','1','2022-03-17',2),(5,'IPRC/22C893','4','4','2022-03-17',0),(6,'IPRC/228B6B','4','4','2022-03-17',1),(7,'IPRC/229211','2','1','2022-03-17',0),(8,'IPRC/224E65','2','1','2022-03-17',1),(9,'IPRC/2256BA','2','1','2022-03-17',2),(10,'IPRC/22434F','2','1','2022-03-17',1),(11,'IPRC/2256BA','1','1','2022-03-17',1),(12,'IPRC/229211','1','1','2022-03-17',0),(13,'IPRC/224E65','1','1','2022-03-17',2),(14,'IPRC/22434F','1','1','2022-03-16',1);
/*!40000 ALTER TABLE `attendance` ENABLE KEYS */;
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
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,'C++',10,1,1,2,1,NULL,NULL),(2,'Computer Graphic',10,4,4,4,1,'2022-03-21','2022-04-29'),(3,'GIS info',10,1,1,1,1,NULL,NULL),(4,'Web Design',10,1,1,1,1,NULL,NULL),(5,'Local Financial',10,1,3,2,1,NULL,NULL),(6,'Digital circuit',10,1,4,1,1,NULL,NULL),(7,'Database Management System',10,1,1,2,1,NULL,NULL),(8,'Test Git Course',15,2,3,3,1,'2022-03-21','2022-07-29'),(9,'Introduction to Computer',25,4,4,2,1,NULL,NULL),(10,'Statistics',25,1,1,1,1,'2022-03-18','2022-03-28');
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
INSERT INTO `depart` VALUES (1,'Computer Science',4,1),(2,'Information Technology',4,1),(3,'Information Management System',3,1),(4,'Computer Engineering',1,1),(5,'Test Departm',1,1);
/*!40000 ALTER TABLE `depart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leader`
--

DROP TABLE IF EXISTS `leader`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leader` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 NOT NULL,
  `depart` bigint(10) NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leader`
--

LOCK TABLES `leader` WRITE;
/*!40000 ALTER TABLE `leader` DISABLE KEYS */;
INSERT INTO `leader` VALUES (1,'GAHAMANYI','Joseph','joseph@gmail.com','0782234567',1,'777',1),(2,'roro','rere','roro@gmail.com','078888877',4,'078888877',1);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lecture`
--

LOCK TABLES `lecture` WRITE;
/*!40000 ALTER TABLE `lecture` DISABLE KEYS */;
INSERT INTO `lecture` VALUES (1,'Mr','GAHAMANYI','Joseph','joseph@gmail.com','1234','1234','M',1,1),(2,'Mr','Ntaganda','Jean Marie','ntaganda@gmail.com','123','123','M',3,1),(3,'Mrs','koko','keke','koko@gmail.com','0788668','0788668','F',4,1),(4,'Mr','shyaka','leonce','shyakalee@gmail.com','0788704082','0788704082','M',4,1),(5,'Mr','test','test','kalisa@gmail.com','0788704082','0788704082','F',1,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lecturing`
--

LOCK TABLES `lecturing` WRITE;
/*!40000 ALTER TABLE `lecturing` DISABLE KEYS */;
INSERT INTO `lecturing` VALUES (1,1,1,1,'2018-04-10T07:0','3h','It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability. It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability It\'s our goal to be the first in the market to bring you innovat','',1),(2,1,1,7,'2018-05-20T08:30','3h','It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability. It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability It\'s our goal to be the first in the market to bring you innovative products at competitive prices without compromising strength and reliability It\'s our goal to be the first in the market to bring you innovat','gghh',2),(3,1,1,4,'2018-08-15T08:30','3h','By the observation, the researcher notes by his/her own eyes what is done in reality.   It can bring some modifications on the results got by other techniques. \r\n\r\nCat on /20','No Comment !',4),(4,1,1,4,'2022-02-15T09:00','5','test lecturing from student','asante',4),(5,1,2,7,'2022-03-16T13:45','3','Yigishije fresh kbsa, No porobleme','That\'s great',4),(6,1,1,4,'2022-03-17T14:58','3','Web design yawe ni bon kbsa,\r\nWe appreciate all rwosee..\r\n','',1),(7,1,1,3,'2022-03-18T04:00','3','Testing Posting here description','',1),(8,4,5,9,'2022-03-22T15:24','2.5','This is for sleon lectures approval','',1);
/*!40000 ALTER TABLE `lecturing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `lecture_id` int(10) DEFAULT NULL,
  `course_id` int(10) DEFAULT NULL,
  `level_id` int(10) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `depart_id` int(10) DEFAULT NULL,
  `schedule` date DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES (1,4,9,2,'cat',4,'2022-03-23','Click on the product category below, then select the specific product you are interested in from the options shown. From there you will see our available courses organized by Fundamentals, Professiona'),(2,2,8,3,'exam',3,'2022-03-24','When faculty senior Anastasia Steele steps set for her sick roommate to interview business man Christian Grey for their own campus paper, little does she realize. Christian, as amazing as he is rich a'),(3,1,3,1,'cat',1,'2022-03-31','TOP STORIES FOR SHYAKA\n\nQuora\n \nIf I get pregnant in Canada under a student visa, does that allow me to stay permanently?\nGerry U • Answered December 18\n\nHaving a child in Canada while here on '),(4,1,10,1,'exam',1,'2022-03-30','Interested in learning more about the value of the #Mojaloop Training Program and the new courses that are available? Join us on March 31, @ 9:00 AM ET, for a Webinar to hear from our leading course c');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `reg_number` varchar(100) NOT NULL,
  `f_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 NOT NULL,
  `depart` bigint(10) NOT NULL,
  `level` int(1) NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'IPRC/229211','Kalisa','amani','kalisa@gmail.com','0789455412',1,1,'kalisa',1),(2,'IPRC/224E65','gashema','Hervin','hervin@gmail.com','07887045684',1,1,'07887045684',1),(3,'IPRC/22C893','James','Hilaire','james@gmail.com','0788469029',4,1,'james',1),(4,'IPRC/22D97A','Ruhumuriza','Janine','janine@gmail.com','0788956464',3,3,'0788956464',1),(5,'IPRC/22C3A8','ishimwe','alice','alice@gmail.com','0788845065',4,2,'0788845065',1),(6,'IPRC/22D1F3','Gatabazi','Lionel','lionel@gmail.com','07845454564',4,1,'07845454564',1);
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

-- Dump completed on 2022-03-21 16:34:21
