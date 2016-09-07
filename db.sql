/*
SQLyog Professional v10.42 
MySQL - 5.6.17 : Database - belajarinteraktif
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`belajarinteraktif` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `belajarinteraktif`;

/*Table structure for table `bahan_ajar` */

DROP TABLE IF EXISTS `bahan_ajar`;

CREATE TABLE `bahan_ajar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_hal_subtema` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `link_media` text,
  `link_file` text,
  `keterangan` text,
  `id_jenjang` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bahan_ajar` */

/*Table structure for table `ebuku` */

DROP TABLE IF EXISTS `ebuku`;

CREATE TABLE `ebuku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` enum('guru','siswa') DEFAULT NULL,
  `id_jenjang` int(11) DEFAULT NULL,
  `nama_buku` varchar(100) DEFAULT NULL,
  `cover_buku` text,
  `link_buku` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ebuku` */

insert  into `ebuku`(`id`,`kategori`,`id_jenjang`,`nama_buku`,`cover_buku`,`link_buku`) values (1,'siswa',1,'Buku Kelas 6 SD','jual_raspberry_PI_3_model_B.jpg','17_Untapped_Checklist_Backlinko.pdf');

/*Table structure for table `hal_subtema` */

DROP TABLE IF EXISTS `hal_subtema`;

CREATE TABLE `hal_subtema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tema` int(11) DEFAULT NULL,
  `id_subtema` int(11) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `kbm` text,
  `kompetensi` text,
  `id_jenjang` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `hal_subtema` */

insert  into `hal_subtema`(`id`,`id_tema`,`id_subtema`,`nama`,`kbm`,`kompetensi`,`id_jenjang`) values (1,1,1,'Pelajaran 1','<p><strong>Membaca dan menemukan informasi.</strong></p>\r\n<p><strong>Menulis laporan berdasarkan hasil observasi, wawancara, dan studi pustaka.</strong></p>\r\n<p><strong>Mengamati perkembangbiakan tumbuhan.</strong></p>\r\n<p><strong>Mengerjakan soal cerita hitung campur pecahan</strong></p>','<p><strong>Sikap b</strong><strong>ertangung jawab, juur, dan teliti.</strong></p>\r\n<p><strong>Pengetahuan t</strong><strong>eks laporan investigasi, perkembangbiakan tumbuhan, operasi hitung pecahan biasa, campuran, dan desimal.</strong></p>\r\n<p><strong>Keterampilan m</strong><strong>engumpulkan dan mengolah data, mengamati dan mengklasifikasi, serta menanam dan menghitung.</strong></p>',1),(2,1,1,'Pelajaran 2','<p><strong>Membaca dan menemukan nformasi.</strong></p>\r\n<p><strong>Merancang dan menyajikan makanan atau minuman dari bahan dasar umbi.</strong></p>\r\n<p><strong>Menuliskan laporan berdasarkan hasil percobaan praktik memasak.</strong></p>\r\n<p><strong>Mengidentifikasi perilaku yang mencerminkan nilai-nilai Pancasila.</strong></p>\r\n<p><strong>Menceritakan dan menuliskan rencana dalam menyikapi nilai-nilai Pancasila di kehidupan sehari-hari.</strong></p>','<p><strong>Sikap b</strong><strong>ertanggung jawab dan percaya diri.</strong></p>\r\n<p><strong>Pengetahuan t</strong><strong>eksi laporan investigasi, teknik memasak (memotong, mengupas, memarut, menggoreng, merebus, membentuk), nlai-nilai Pancasila dan contoh perilaku dalam kehidupan sehari-hari.</strong></p>\r\n<p><strong>Keterampilan m</strong><strong>engamati, mencipta, mengidentifikasi, menganalisis, dan mengasosiasi.</strong></p>',1),(3,1,1,'Pelajaran 3','<p><strong>Menuliskan informasi berdasarkan hasil investigasi tentang kondisi geografis dan lingkungan masyarakat tempat tinggal.</strong></p>\r\n<p><strong>Menuliskan teks laporan investigasi tentang hubungan keterikatan manusia dengan lingkungannya.</strong></p>\r\n<p><strong>Menceritakan infrmasi berdasarkan hasil investigasi.</strong></p>\r\n<p><strong>Mempraktikkan permainan rounders.</strong></p>','<p><strong>Sikap b</strong><strong>ertanggung jawab, percaya diri, jujr, dan sportif.</strong></p>\r\n<p><strong>Pengetahuan t</strong><strong>eks laporan investigasi, kondisi geografis dan lingkungan masyarakatnya, permainan rounders: teknik memukul, melempar, dan menangkap bola.</strong></p>\r\n<p><strong>Keterampilan m</strong><strong>enanya, mengumpulkan, dan mengulah informasi, mengomunikasikan, memukul, melempar, dan menangkap bola.</strong></p>',1),(4,1,1,'Pelajaran 4','<p><strong>Mencari dan mengolah informasi tentang kondisi lingkungan masyarakat sekitar.</strong></p>\r\n<p><strong>Menganalisis hubungan perubahan lingkungan dan perilaku manusia dalam bentuk peta pikiran.</strong></p>\r\n<p><strong>Mengerjakan soal cerita hitung campur pecahan.</strong></p>\r\n<p><strong>Membuat dan mengampanyekan poster</strong></p>','<p><strong>Sikap p</strong><strong>eduli, teliti, dan percaya diri.</strong></p>\r\n<p><strong>Pengetahuan o</strong><strong>perasi hitung campur pecahan, manusia dan kondisi geografis (lingkungan dan masyarakatnya).</strong></p>\r\n<p><strong>Keterampilan m</strong><strong>engumpulkan dan menglah data, menanya, menghitung, mencipta, dan mengomunikasikan.</strong></p>',1),(5,1,1,'Pelajaran 5','<p><strong>Menemukan dan menjelaskan hubungan berdasarkan percobaan dan pengamatan.</strong></p>\r\n<p><strong>Mengidentifikasi dan menemukan hubungan perilaku dalam kehidupan sehari-hari dengan nilai-nilai Pancasila.</strong></p>\r\n<p><strong>Mengerjakan soal cerita hitung campur pecahan.</strong></p>','<p><strong>Sikap p</strong><strong>eduli, teliti, dan bertanggung jawab.</strong></p>\r\n<p><strong>Pengetahuan n</strong><strong>ilai-nilai Pancasila dam kehidupan sehari-hari, operasi hitung bentuk (pecahann biasa, decimal, dan persen).</strong></p>\r\n<p><strong>Keterampilan m</strong><strong>engumpulkan dan mengolah data, melakukan percobaan, mengasosiasi, menghitung, mencipta, serta mengomunikasikan.</strong></p>',1),(6,1,1,'Pelajaran 6','<p><strong>Membaca dan menemukan informasi.</strong></p>\r\n<p><strong>Mengerjakan soal cerita hitung bentuk pecahan.</strong></p>\r\n<p><strong>Mempraktikkan permainan rounders.</strong></p>\r\n<p><strong>Evaluasi.</strong></p>','<p><strong>Sikap t</strong><strong>ekun, teliti, jujur, disiplin, dan sportif</strong></p>\r\n<p><strong>Pengetahuan m</strong><strong>anfaat tumbuhan, operasi hitung campur (Pecahan, decimal, persen), memukul, melempar, dan menangkap bola.</strong></p>\r\n<p><strong>Keterampilan m</strong><strong>enganalisis, menghitung, memukul, melempar, dan menangkap bola.</strong></p>',1);

/*Table structure for table `jenjang` */

DROP TABLE IF EXISTS `jenjang`;

CREATE TABLE `jenjang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenjang` varchar(100) DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `foto` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jenjang` */

insert  into `jenjang`(`id`,`jenjang`,`keterangan`,`foto`) values (1,'Kelas 6 SD Semester 1','Materi dan Praktek','win32_disk_imager.png');

/*Table structure for table `materi` */

DROP TABLE IF EXISTS `materi`;

CREATE TABLE `materi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_subtema` int(11) DEFAULT NULL,
  `id_hal_subtema` int(11) DEFAULT NULL,
  `materi` varchar(100) DEFAULT NULL,
  `link_file` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `materi` */

insert  into `materi`(`id`,`id_subtema`,`id_hal_subtema`,`materi`,`link_file`) values (1,1,1,'Materi 1','2__beygelzimer15.pdf'),(2,1,1,'Materi 2','1117-3037-1-PB.pdf');

/*Table structure for table `subtema` */

DROP TABLE IF EXISTS `subtema`;

CREATE TABLE `subtema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tema` int(11) DEFAULT NULL,
  `subtema` varchar(100) DEFAULT NULL,
  `id_jenjang` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `subtema` */

insert  into `subtema`(`id`,`id_tema`,`subtema`,`id_jenjang`) values (1,1,'Sub Tema 1',1),(2,1,'Sub Tema 2',1);

/*Table structure for table `tema` */

DROP TABLE IF EXISTS `tema`;

CREATE TABLE `tema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tema` varchar(100) DEFAULT NULL,
  `id_jenjang` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tema` */

insert  into `tema`(`id`,`tema`,`id_jenjang`) values (1,'Selamatkan Makhluk Hidup',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
