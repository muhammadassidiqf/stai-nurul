-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for stai-nurul
CREATE DATABASE IF NOT EXISTS `stai-nurul` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `stai-nurul`;

-- Dumping structure for table stai-nurul.berita
CREATE TABLE IF NOT EXISTS `berita` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `berita_user_id_foreign` (`user_id`),
  CONSTRAINT `berita_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stai-nurul.berita: ~0 rows (approximately)
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` (`id`, `user_id`, `judul`, `slug`, `isi`, `gambar`, `kategori`, `count`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Kunjungi Pesantren Nurul Iman Bandung  Dubes Rusia  Islam Mulai Bangkit di Rusia', 'kunjungi-pesantren-nurul-iman-bandung-dubes-rusia-islam-mulai-bangkit-di-rusia', '<p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(20, 20, 43);font-family:Poppins, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:17px 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Duta besar (Dubes) <a style="box-sizing:border-box;color:rgb(230, 29, 37);outline:0px;position:relative;text-decoration:none !important;transition:all 0.2s ease 0s;vertical-align:top;" href="https://www.dobrak.co/tag/rusia">Rusia</a> tengah menjadi trending topik di media sosial Twitter pada hari ini, Rabu, 25 Januari 2023. Viralnya Dubes <a style="box-sizing:border-box;color:rgb(230, 29, 37);outline:0px;position:relative;text-decoration:none !important;transition:all 0.2s ease 0s;vertical-align:top;" href="https://www.dobrak.co/tag/rusia">Rusia</a> berkaitan dengan kunjungannya ke salah satu Pesantren di Kita <a style="box-sizing:border-box;color:rgb(230, 29, 37);outline:0px;position:relative;text-decoration:none !important;transition:all 0.2s ease 0s;vertical-align:top;" href="https://www.dobrak.co/tag/bandung">Bandung</a>.</p><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(20, 20, 43);font-family:Poppins, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:17px 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Netizen tengah ramai membicarakan kunjungan Dubes <a style="box-sizing:border-box;color:rgb(230, 29, 37);outline:0px;position:relative;text-decoration:none !important;transition:all 0.2s ease 0s;vertical-align:top;" href="https://www.dobrak.co/tag/rusia">Rusia</a>, Lyudmila G Vorobieva yang berkunjung ke <a style="box-sizing:border-box;color:rgb(230, 29, 37);outline:0px;position:relative;text-decoration:none !important;transition:all 0.2s ease 0s;vertical-align:top;" href="https://www.dobrak.co/tag/pesantren-nurul-iman">Pesantren Nurul Iman</a> pada Selasa, 24 Januari 2023.</p><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(20, 20, 43);font-family:Poppins, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:17px 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Dari cuitan netizen diketahui bahwa Dubes <a style="box-sizing:border-box;color:rgb(230, 29, 37);outline:0px;position:relative;text-decoration:none !important;transition:all 0.2s ease 0s;vertical-align:top;" href="https://www.dobrak.co/tag/rusia">Rusia</a> menyebut bahwa saat ini <a style="box-sizing:border-box;color:rgb(230, 29, 37);outline:0px;position:relative;text-decoration:none !important;transition:all 0.2s ease 0s;vertical-align:top;" href="https://www.dobrak.co/tag/islam">Islam</a>.mulai <a style="box-sizing:border-box;color:rgb(230, 29, 37);outline:0px;position:relative;text-decoration:none !important;transition:all 0.2s ease 0s;vertical-align:top;" href="https://www.dobrak.co/tag/bangkit">bangkit</a> di <a style="box-sizing:border-box;color:rgb(230, 29, 37);outline:0px;position:relative;text-decoration:none !important;transition:all 0.2s ease 0s;vertical-align:top;" href="https://www.dobrak.co/tag/rusia">Rusia</a>.</p><p style="-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(20, 20, 43);font-family:Poppins, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:17px 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Dikabarkan, Ia berkunjung bersama Ketua Umum PKB DR.H.Muhaimin Iskandar, dalam rangka kegiatan Dialog Kehidupan <a style="box-sizing:border-box;color:rgb(230, 29, 37);outline:0px;position:relative;text-decoration:none !important;transition:all 0.2s ease 0s;vertical-align:top;" href="https://www.dobrak.co/tag/islam">Islam</a> di Indonesia dan <a style="box-sizing:border-box;color:rgb(230, 29, 37);outline:0px;position:relative;text-decoration:none !important;transition:all 0.2s ease 0s;vertical-align:top;" href="https://www.dobrak.co/tag/islam">Islam</a> di <a style="box-sizing:border-box;color:rgb(230, 29, 37);outline:0px;position:relative;text-decoration:none !important;transition:all 0.2s ease 0s;vertical-align:top;" href="https://www.dobrak.co/tag/rusia">Rusia</a>.</p>', '1533628616-1688261842.webp', 'Pesantren', 0, '2023-07-02 08:37:22', '2023-07-02 08:37:22'),
	(2, 2, 'Terdampak Proyek Kereta Cepat Jakarta-Bandung, Pesantren Nurul Iman Tempati Lahan Baru | NU Online', 'terdampak-proyek-kereta-cepat-jakarta-bandung-pesantren-nurul-iman-tempati-lahan-baru-nu-online', '<p><span style="background-color:rgb(250,250,250);color:rgb(33,33,33);font-family:Amiri, &quot;Open Sans&quot;, serif;font-size:16px;"><span style="-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Pada tahun pada tahun 2020, karena lokasi pesantren berada di samping Tol Cipularang, tepatnya dekat pintu keluar tol Moh Toha,&nbsp;pesantren dan lembaga-lembaga formal yang berada di bawah naungan yayasan pesantren (RA, MI, MTS, MA) harus merelokasi bangunan ke lokasi baru. Di jalur tersebut, berdasarkan rencana pembangunan yang dicanangkan Pemerintah, juga akan dibangun lintasan rel Kereta Cepat Jakarta-Bandung. &nbsp; Pimpinan Pesantren KH Khoiruddin Aly&nbsp;mengatakan setelah proses ganti rugi dan relokasi lahan dan bangunan selesai, kini pesantren telah membangun kembali gedung pesantren di lahan yang baru yang letaknya tidak jauh dari lokasi lama. &nbsp; "Alhamdulillah walaupun pembangunan pesantren belum sepenuhnya selesai di lahan dan gedung yang baru para santri dan siswa sudah mulai kembali beraktivitas belajar dan mengaji dengan tetap menerapkan protokol kesehatan," ungkap KH&nbsp;Khoiruddin Aly, Jumat (20/8/2021). &nbsp; Menurutnya, dalam kondisi pandemi saat ini para siswa dan santri&nbsp;yang berjumlah sekitar 2000 siswa dari RA hingga Madrasah Aliyah telah memulai kembali kegiatan pembelajaran dengan sistem daring dan luring.</span></span><br><br><span style="background-color:rgb(250,250,250);color:rgb(33,33,33);font-family:Amiri, &quot;Open Sans&quot;, serif;font-size:16px;"><span style="-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">Sumber: </span></span><a style="-webkit-text-stroke-width:0px;background-color:rgb(250, 250, 250);box-sizing:border-box;color:rgb(0, 152, 208);font-family:Amiri, &quot;Open Sans&quot;, serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-decoration:none;text-indent:0px;text-transform:none;touch-action:manipulation;white-space:normal;widows:2;word-spacing:0px;" href="https://www.nu.or.id/daerah/terdampak-proyek-kereta-cepat-jakarta-bandung-pesantren-nurul-iman-tempati-lahan-baru-0uUSf">https://www.nu.or.id/daerah/terdampak-proyek-kereta-cepat-jakarta-bandung-pesantren-nurul-iman-tempati-lahan-baru-0uUSf</a></p>', '1629512527-1688261928.jpg', 'Pesantren', 0, '2023-07-02 08:38:48', '2023-07-02 08:38:48');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;

-- Dumping structure for table stai-nurul.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stai-nurul.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table stai-nurul.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stai-nurul.migrations: ~9 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_05_28_225842_create_berita_table', 1),
	(6, '2023_05_28_233803_create_visi_misi_table', 1),
	(7, '2023_06_04_184619_create_sejarah_table', 1),
	(8, '2023_06_06_231752_create_tentang_table', 1),
	(9, '2023_07_01_221915_create_prodi_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table stai-nurul.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stai-nurul.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table stai-nurul.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stai-nurul.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table stai-nurul.prodi
CREATE TABLE IF NOT EXISTS `prodi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `prodi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `prodi_user_id_foreign` (`user_id`),
  CONSTRAINT `prodi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stai-nurul.prodi: ~0 rows (approximately)
/*!40000 ALTER TABLE `prodi` DISABLE KEYS */;
INSERT INTO `prodi` (`id`, `user_id`, `prodi`, `slug`, `isi`, `gambar`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Program Studi Bahasa Arab', 'program-studi-bahasa-arab', '<p>Program Studi Bahasa Arab pada STAI Nurul Iman Bandung merupakan program akademik yang didedikasikan untuk mempelajari bahasa Arab secara menyeluruh. Program ini bertujuan untuk mengembangkan kemampuan berbahasa Arab, pemahaman terhadap sastra Arab, serta pemahaman terhadap budaya dan sejarah Arab.</p><p>Dalam program studi ini, mahasiswa akan mempelajari keterampilan bahasa Arab mulai dari tingkat dasar hingga tingkat lanjutan. Mereka akan mempelajari tata bahasa Arab, kosa kata, serta prinsip-prinsip komunikasi dalam bahasa Arab. Selain itu, mahasiswa juga akan diajarkan untuk membaca, menulis, dan berbicara dalam bahasa Arab dengan baik dan benar.</p><p>Selain aspek bahasa, program studi ini juga memberikan penekanan pada pemahaman terhadap sastra Arab. Mahasiswa akan mempelajari karya sastra Arab klasik dan kontemporer, termasuk puisi, prosa, dan drama. Mereka akan memahami nilai-nilai budaya dan estetika yang terkandung dalam karya sastra tersebut.</p><p>Program Studi Bahasa Arab juga menawarkan pemahaman yang lebih mendalam tentang budaya Arab dan sejarahnya. Mahasiswa akan mempelajari aspek-aspek budaya Arab, seperti adat istiadat, tradisi, seni, musik, dan arsitektur. Mereka juga akan mempelajari perkembangan sejarah Arab dan peran pentingnya dalam peradaban dunia.</p><p>Dengan mempelajari Bahasa Arab, mahasiswa diharapkan mampu menjadi penerjemah, dosen, peneliti, diplomat, atau berkarier dalam berbagai bidang yang memerlukan pemahaman mendalam terhadap bahasa dan budaya Arab. Program Studi Bahasa Arab di STAI Nurul Iman Bandung menyediakan pendidikan yang komprehensif dan berkualitas dalam mempelajari bahasa dan budaya Arab, sehingga lulusannya siap menghadapi tantangan di dunia global yang semakin terhubung.</p>', 'Program_Studi-1688262836.png', '2023-07-02 08:49:51', '2023-07-02 08:53:56'),
	(2, 2, 'Program Studi Ekonomi Islam', 'program-studi-ekonomi-islam', '<p style="text-align:justify;">Program Studi Ekonomi Islam di STAI Nurul Iman Bandung merupakan program akademik yang bertujuan untuk menggabungkan prinsip-prinsip ekonomi dengan nilai-nilai dan prinsip-prinsip Islam. Program ini membekali mahasiswa dengan pemahaman mendalam tentang ekonomi dalam perspektif Islam serta mengajarkan penerapan konsep-konsep ekonomi yang sesuai dengan syariah.</p><p style="text-align:justify;">Dalam program studi ini, mahasiswa akan mempelajari teori ekonomi konvensional, namun dengan pendekatan yang berlandaskan pada prinsip-prinsip Islam. Mereka akan memahami prinsip-prinsip dasar ekonomi seperti produksi, distribusi, dan konsumsi dalam konteks keuangan Islam. Mahasiswa juga akan mempelajari instrumen-instrumen keuangan yang sesuai dengan prinsip syariah, seperti akad-akad perbankan Islam, asuransi syariah, dan investasi berbasis syariah.</p><p style="text-align:justify;">Selain itu, mahasiswa akan mempelajari etika dan tanggung jawab sosial dalam konteks ekonomi Islam. Mereka akan memahami pentingnya keadilan, keberlanjutan, dan pembagian yang adil dalam sistem ekonomi Islam. Selain itu, mahasiswa juga akan mempelajari konsep zakat, sedekah, dan wakaf sebagai instrumen sosial ekonomi dalam Islam.</p><p style="text-align:justify;">Program Studi Ekonomi Islam juga memberikan penekanan pada kewirausahaan dalam perspektif Islam. Mahasiswa akan diajarkan tentang konsep-konsep bisnis yang beretika dan berkelanjutan serta bagaimana menerapkannya dalam konteks ekonomi Islam. Mereka juga akan mempelajari manajemen keuangan syariah dan pengelolaan keuangan yang berlandaskan pada prinsip-prinsip Islam.</p><p style="text-align:justify;">Lulusan Program Studi Ekonomi Islam di STAI Nurul Iman Bandung diharapkan mampu menghadapi tantangan di dunia bisnis dan keuangan dengan memadukan prinsip-prinsip ekonomi dan prinsip-prinsip Islam. Mereka dapat berkarier sebagai ekonom Islam, konsultan keuangan syariah, analis pasar modal syariah, pengelola keuangan, atau mendirikan usaha yang berlandaskan pada prinsip-prinsip Islam. Program ini memberikan pemahaman yang komprehensif tentang ekonomi Islam, sehingga lulusannya siap berkontribusi dalam membangun masyarakat yang berdaya dan berkelanjutan dalam kerangka ekonomi Islam.</p>', 'Program_Studi-1688262928.png', '2023-07-02 08:55:28', '2023-07-02 08:55:28'),
	(3, 2, 'Program Studi Pendidikan Agama Islam', 'program-studi-pendidikan-agama-islam', '<p style="text-align:justify;">Program Studi Pendidikan Agama Islam di STAI Nurul Iman Bandung merupakan program akademik yang bertujuan untuk mempersiapkan calon pendidik yang kompeten dalam mengajar dan mendidik dalam bidang pendidikan agama Islam. Program ini dirancang untuk memperkuat pemahaman dan penerapan nilai-nilai Islam dalam konteks pendidikan.</p><p style="text-align:justify;">Dalam program studi ini, mahasiswa akan mempelajari berbagai aspek pendidikan agama Islam, termasuk pemahaman terhadap ajaran dan prinsip-prinsip agama Islam, metodologi pengajaran agama Islam, serta pengembangan kurikulum pendidikan agama Islam. Mereka juga akan mendapatkan pemahaman mendalam tentang sejarah perkembangan pendidikan agama Islam, teori dan praktik pengajaran, serta evaluasi dalam konteks pendidikan agama.</p><p style="text-align:justify;">Program Studi Pendidikan Agama Islam juga memberikan penekanan pada pengembangan kepribadian dan karakter peserta didik dalam pendidikan agama. Mahasiswa akan belajar bagaimana mengintegrasikan nilai-nilai Islam dalam pengembangan sikap, moral, etika, dan spiritualitas siswa. Mereka akan mempelajari metode dan strategi pengajaran yang efektif untuk mencapai tujuan pendidikan agama Islam yang holistik.</p><p style="text-align:justify;">Selain itu, program studi ini juga mengajarkan mahasiswa untuk mampu mengelola kelas yang inklusif dan memahami keberagaman budaya dan sosial dalam konteks pendidikan agama Islam. Mahasiswa akan diajarkan bagaimana membangun hubungan yang baik dengan siswa, orang tua, dan masyarakat dalam mendukung proses pembelajaran dan pengembangan karakter.</p><p style="text-align:justify;">Lulusan Program Studi Pendidikan Agama Islam di STAI Nurul Iman Bandung diharapkan menjadi pendidik yang profesional, berkompeten, dan berintegritas tinggi dalam mendidik generasi muda dalam nilai-nilai agama Islam. Mereka dapat berkarier sebagai guru agama Islam di sekolah-sekolah, dosen pendidikan agama Islam di perguruan tinggi, pengembang kurikulum agama Islam, atau melakukan penelitian dan kajian dalam bidang pendidikan agama Islam. Program ini memberikan pemahaman yang komprehensif tentang pendidikan agama Islam, sehingga lulusannya siap berkontribusi dalam memajukan pendidikan agama di masyarakat.</p>', 'Program_Studi-1688262988.png', '2023-07-02 08:56:28', '2023-07-02 08:56:28');
/*!40000 ALTER TABLE `prodi` ENABLE KEYS */;

-- Dumping structure for table stai-nurul.sejarah
CREATE TABLE IF NOT EXISTS `sejarah` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sejarah_user_id_foreign` (`user_id`),
  CONSTRAINT `sejarah_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stai-nurul.sejarah: ~0 rows (approximately)
/*!40000 ALTER TABLE `sejarah` DISABLE KEYS */;
INSERT INTO `sejarah` (`id`, `user_id`, `isi`, `status`, `created_at`, `updated_at`) VALUES
	(1, 2, '<p style="text-align:justify;">STAI Nurul Iman didirikan pada tahun 1998 di Bandung, Indonesia. Pembentukan institusi ini didorong oleh kebutuhan akan pendidikan tinggi Islam yang berkualitas untuk memenuhi tuntutan zaman dan memperkuat pemahaman keagamaan di kalangan masyarakat.</p><p style="text-align:justify;">Awalnya, STAI Nurul Iman dimulai sebagai sebuah program Diploma Tiga (D3) dengan fokus pada bidang pendidikan Islam. Pada saat itu, institusi ini berkomitmen untuk memberikan pendidikan yang bermutu dengan menggabungkan nilai-nilai Islam dengan kurikulum yang relevan dan aplikatif.</p><p style="text-align:justify;">Seiring berjalannya waktu, STAI Nurul Iman terus berkembang dan memperluas program-program akademiknya. Pada tahun 2003, institusi ini mendapatkan izin untuk menyelenggarakan program Sarjana (S1) dalam bidang pendidikan Islam. Dengan peningkatan tersebut, STAI Nurul Iman semakin dikenal sebagai pusat pendidikan tinggi Islam yang terpercaya dan berkualitas di kawasan Bandung.</p><p style="text-align:justify;">Sejak berdirinya, STAI Nurul Iman telah menghasilkan lulusan yang berkompeten dan berintegritas tinggi di berbagai bidang keilmuan Islam. Institusi ini terus berupaya memperkuat kurikulum, meningkatkan kualitas pengajaran, serta mengembangkan fasilitas dan sarana pendukung yang modern.</p><p style="text-align:justify;">Sejalan dengan misi dan visi pendidikannya, STAI Nurul Iman juga aktif dalam kegiatan riset dan pengabdian kepada masyarakat. Kolaborasi dengan lembaga-lembaga Islam lainnya serta partisipasi dalam seminar, konferensi, dan kegiatan sosial turut memperkuat peran institusi dalam memajukan pendidikan Islam di Indonesia.</p><p style="text-align:justify;">Dengan dedikasi dan komitmen yang kuat, STAI Nurul Iman terus berupaya menjadi lembaga pendidikan yang berdaya saing, menghasilkan lulusan yang berkualitas, serta berkontribusi positif dalam pembangunan masyarakat dan umat Islam.</p>', 1, '2023-07-02 08:43:36', '2023-07-02 08:43:36');
/*!40000 ALTER TABLE `sejarah` ENABLE KEYS */;

-- Dumping structure for table stai-nurul.tentang
CREATE TABLE IF NOT EXISTS `tentang` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tentang_user_id_foreign` (`user_id`),
  CONSTRAINT `tentang_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stai-nurul.tentang: ~0 rows (approximately)
/*!40000 ALTER TABLE `tentang` DISABLE KEYS */;
INSERT INTO `tentang` (`id`, `user_id`, `isi`, `status`, `created_at`, `updated_at`) VALUES
	(1, 2, '<p style="text-align:justify;">STAI Nurul Iman Bandung adalah sebuah institusi pendidikan tinggi Islam yang terletak di Bandung, Indonesia. Dengan komitmen yang kuat dalam mempromosikan nilai-nilai, pengetahuan, dan pendidikan Islam, STAI Nurul Iman Bandung menawarkan berbagai program akademik di bidang studi Islam.</p><p style="text-align:justify;">Institusi ini berdedikasi untuk menyediakan pendidikan berkualitas dan memperkuat pemahaman yang komprehensif tentang Islam bagi para mahasiswanya. STAI Nurul Iman Bandung menawarkan program sarjana dan pascasarjana, termasuk gelar Sarjana dan Magister dalam berbagai disiplin ilmu yang terkait dengan studi Islam.</p><p style="text-align:justify;">STAI Nurul Iman Bandung bangga dengan fakultas yang berkualitas, yang merupakan pakar di bidangnya masing-masing. Para fakultas ini berkomitmen untuk membimbing pertumbuhan intelektual mahasiswa, kemampuan berpikir kritis, dan memperdalam pemahaman mereka tentang prinsip-prinsip dan ajaran Islam.</p><p style="text-align:justify;">Kolese ini juga memberikan penekanan yang kuat pada pengembangan karakter, mendorong mahasiswa untuk mewujudkan nilai-nilai dan etika Islam dalam kehidupan pribadi dan profesional mereka. STAI Nurul Iman Bandung menciptakan lingkungan belajar yang mendukung dan inklusif, yang mempromosikan pertumbuhan holistik dan mempersiapkan mahasiswa untuk menjadi pemimpin masa depan dalam komunitas mereka.</p><p style="text-align:justify;">STAI Nurul Iman Bandung dikenal karena keterlibatannya yang aktif dalam pelayanan dan keterlibatan masyarakat. Kolese ini mengorganisir berbagai program dan kegiatan yang berkontribusi pada kemajuan masyarakat, termasuk seminar agama, inisiatif sosial, dan program keterlibatan.</p><p style="text-align:justify;">Secara keseluruhan, STAI Nurul Iman Bandung berfungsi sebagai institusi yang didedikasikan untuk pendidikan Islam, menciptakan lingkungan yang mendukung bagi mahasiswa untuk memperoleh pengetahuan, mengembangkan karakter mereka, dan memberikan kontribusi positif bagi masyarakat berdasarkan ajaran Islam.</p>', 1, '2023-07-02 08:41:22', '2023-07-02 08:41:46');
/*!40000 ALTER TABLE `tentang` ENABLE KEYS */;

-- Dumping structure for table stai-nurul.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stai-nurul.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'massidiqfattah', 'MUHAMMAD ASSIDIQ FATTAH', NULL, NULL, '$2y$10$N2ggJG1VFIdOV3uHoXX0S.hvBTveR.FoEHSOen4.t3Rd.BW61IQWu', NULL, '2023-03-28 03:57:00', '2023-03-28 03:57:00'),
	(2, 'anisaps', 'ANISA PUTRI SETYANINGRUM', NULL, NULL, '$2y$10$WRsVZQb38LnCalEfm/ewZ.RKARxsQnKE82p1XKrDTT9R6FVAmDkiy', NULL, '2023-03-28 03:58:33', '2023-03-28 03:58:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table stai-nurul.visi_misi
CREATE TABLE IF NOT EXISTS `visi_misi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `visi_misi_user_id_foreign` (`user_id`),
  CONSTRAINT `visi_misi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table stai-nurul.visi_misi: ~0 rows (approximately)
/*!40000 ALTER TABLE `visi_misi` DISABLE KEYS */;
INSERT INTO `visi_misi` (`id`, `user_id`, `isi`, `status`, `created_at`, `updated_at`) VALUES
	(1, 2, '<p><strong>Visi :</strong><br>Visi Sekolah Tinggi Agama Islam Nurul Iman Bandung “Menjadi Sekolah Tinggi Agama Islam Yang Unggul, Mandiri dan Berdikari Dengan Landasan Ajaran Islam Ahlussunah Wal Jama’ah”</p><p><strong>Misi :</strong><br>Misi Sekolah Tinggi Agama Islam Nurul Iman Bandung adalah:<br>&nbsp;</p><ol><li>Menyelenggarakan pendidikan, penelitian, pengembangan, dan pengabdian masyarakat dalam bidang Pendidikan Agama Islam, Pendidikan Bahasa Arab dan Ekonomi Syari’ah,</li><li>Menyelenggarakan pendidikan tinggi dalam bidang Pendidikan Agama Islam, Pendidikan Bahasa Arab dan Ekonomi Syari’ah, yang didukung oleh program pembinaan pesantren mahasiswa (ma\'had al-jami\'ah);</li><li>Membangun kerjasama dengan lembaga-lembaga yang bergerak di bidang Pendidikan Agama Islam, Pendidikan Bahasa Arab dan Ekonomi Syari’ah, dalam skala nasional dan internasional;</li><li>Menjadi lembaga pusat penelitian ilmiah dalam bidang Pendidikan Agama Islam, Pendidikan Bahasa Arab dan Ekonomi&nbsp;Syari’ah,</li></ol>', 1, '2023-07-02 08:34:01', '2023-07-02 08:34:01');
/*!40000 ALTER TABLE `visi_misi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
