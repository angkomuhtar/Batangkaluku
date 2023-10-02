-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2022 at 09:31 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batangkaluku`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_time` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `user_create` int(10) UNSIGNED DEFAULT NULL,
  `user_update` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `image`, `title`, `description`, `content`, `title_en`, `description_en`, `content_en`, `type`, `source`, `creator`, `published_time`, `is_active`, `user_create`, `user_update`, `created_at`, `updated_at`, `attachment`) VALUES
(7, 'artikel/article_20211031195241.jpg', 'Di Hari Kesaktian Pancasila, Mentan SYL : Kita Jaga Tradisi Pertanian', 'Menteri Pertanian, Syahrul Yasin Limpo (SYL) menekankan bahwa besarnya tanggung jawab institusi yang dipimpinnya dalam memenuhi kebutuhan pangan rakyat Indonesia harus  dijalankan berlandaskan nilai Pancasila.\r\n“Negara kita adalah negara terbesar keempat di dunia. Ada 273 juta jiwa yang harus kita urus dan itu tidak gampang sehingga harus dilaksanakan dengan penuh tanggung jawab, “ ujar Mentan SYL saat memimpin prosesi upacara peringatan Hari Kesaktian Pancasila di Kementerian Pertanian yang dilaksanakan dengan daring dan luring, Jum’at (1/10).', '<p>Menteri Pertanian, Syahrul Yasin Limpo (SYL) menekankan bahwa besarnya tanggung jawab institusi yang dipimpinnya dalam memenuhi kebutuhan pangan rakyat Indonesia harus &nbsp;dijalankan berlandaskan nilai Pancasila.<br />\n&ldquo;Negara kita adalah negara terbesar keempat di dunia. Ada 273 juta jiwa yang harus kita urus dan itu tidak gampang sehingga harus dilaksanakan dengan penuh tanggung jawab, &ldquo; ujar Mentan SYL saat memimpin prosesi upacara peringatan Hari Kesaktian Pancasila di Kementerian Pertanian yang dilaksanakan dengan daring dan luring, Jum&rsquo;at (1/10).<br />\nMentan Syahrul mengungkapkan bahwa Kementerian Pertanian dalam menjalangkan tugas dan fungsinya terhadap pembangunan pertanian turut andil dalam menjaga nilai Pancasila dan sendi-sendi kehidupan masyarakat. Menurutnya dalam sektor pertanian ada kemanusiaan yang adil dan beradap. &nbsp;&ldquo;Seluruh sila-sila dalam pancasila melekat pada peran-peran pertanian bagi bangsa Indonesia&rdquo;, ujarnya.<br />\nLebih lanjut Mentan menuturkan bahwa pihaknya memiliki tanggung jawab yang besar dalam menjamin tersedianya pangan untuk 273 juta jiwa rakyat Indonesia. &ldquo; Rakyat Indonesia tidak boleh kesulitan dalam memenuhi pangan karena pangan berkaitan erat dengan kesehatan dan ekonomi, &ldquo; jelasnya.<br />\nDi sisi lain, Mentan Syahrul turut mengapresiasi seluruh jajaran dan berbagai pihak yang terlibat dalam keberhasilan sektor pertanian yang telah dicapai dalam beberapa tahun ini terutama pada situasi pandemi. &ldquo;Dalam dua tahun ini kita mengurusnya dengan luar biasa, di tengah pandemi covid 19 dan &nbsp;dinamika sosial ekonomi dunia kita mampu tumbuh positif dan lebih tinggi dari sektor lain&rdquo;, jelas Syahrul.<br />\nPerlu dicatat bahwa sektor pertanian merupakan satu diantara sedikit sektor yang tumbuh positif di tengah pandemi covid-19. Pada tahun 2020, pertumbuhan ekonomi Indonesia mengalami kontraksi sebesar 2,07%, sedangakan sektor pertanian (mencakup pertanian, kehutanan, dan perikanan) justru tumbuh di kisaran 1,75%, ditambah lagi jika dilihat dari subsektor yang khusus terkait pertanian mengalami pertumbuhan yang lebih tinggi di angka 2,11%.&nbsp;<br />\nBahkan di tahun 2021, sektor pertanian masih mencatatkan pertumbuhan di quartal 1 dan quartal 2. Terakhir tercatat di quartal 2 sektor pertanian tumbuh sebesar 12,93% secara q-to-q dan 0,38% secara y-on-y.<br />\nTerakhir, Mentan Syahrul berpesan kepada segenap jajarannya di Kementerian Pertanian untuk terus berpihak dan berorientasi kepada kesejahteraan petani. Kerangka nilai-nilai luhur pancasila yang selama ini telah tertanam pada sektor pertanian agar terus dipertajam.&nbsp;<br />\n&ldquo;Saya harap kita dapat terus berpihak pada rakyat dan meningkatkan kesejahteraan petani . Tidak ada yang mudah namun kalau kita yakin yang kita lakukan atas nama iman dan kebangsaan serta kemaslahatan seluruh rakyat Indonesia maka keutuhan negara dan bangsa akan terwujud &rdquo;, pungkas Syahrul.</p>\n\n<p><a href=\"https://www.kabartujuhsatu.news/2021/10/di-hari-kesaktian-pancasila-mentan-syl.html\">kabartujuhsatu.news</a></p>', NULL, NULL, NULL, 'umum', NULL, 'BBPP Batangkaluku', '2021-10-01 19:49:46', 1, NULL, NULL, '2021-10-31 11:52:41', '2021-10-31 11:52:41', NULL),
(8, 'artikel/article_20211031200314.jpg', 'Capai Tujuan Pertanian Dengan Sumberdaya Manusia Pertanian Yang Handal', 'Program READSI merupakan salah satu Program Badan Penyuluhan dan Pengembangan SDM Pertanian yang mendukung terwujudnya visi pembangunan pertanian yaitu tercapainya kedaulatan pangan dan meningkatkan kesejahteraan petani.', '<p>Program READSI merupakan salah satu Program Badan Penyuluhan dan Pengembangan SDM Pertanian yang mendukung terwujudnya visi pembangunan pertanian yaitu tercapainya kedaulatan pangan dan meningkatkan kesejahteraan petani.<br />\nKepala BPPSDMP, Dedi Nursyamsi dalam arahannya mengatakan Penyuluhan Pertanian dan Fasilitator desa harus mandiri serta modern dalam menjawab tantangan demi mendukung pembangunan pertanian seperti mampu meningkatkan stok pangan bagi seluruh negeri, meningkatkan kesejahteraan petani hingga ekspor.<br />\nPertumbuhan pertanian masih tumbuh 16,4% ini meningkat karena kerja keras para penyuluh dan petani. Dimana tujuan pertanian saat ini yakni mencukupi kebutuhan pangan bagi 273 juta jiwa, meningkatkan kesejahteraan petani, dan ekspor. Ini semua dapat terwujud apabila produktivitas pertanian kita meningkat. Produktivitas, Kualitas dan Kontinuitas tidak kalah penting.<br />\nSumberdaya Manusia Pertanian yang handal dapat mewujudkan itu semua.<br />\nDalam upaya mencapai tujuan pertanian tersebut Balai Besar Pelatihan Pertanian (BBPP) Batangkaluku menyelenggarakan Training of Trainer Literasi Keuangan Angkatan V yang berlangsung dari tanggal 27 September s/d 01 Oktober 2021.<br />\nKegiatan yang dibuka oleh Kepala Balai Besar Pelatihan Pertanian (BBPP) Batangkaluku diharapkan agar peserta yang merupakan penyuluh dan fasilitator desa nantinya dapat melakukan training kepada para petani untuk menerapkan apa yang telah diterima dari fasilitator sudah kompeten utamanya dalam bidang pencatatan usaha dan pengelolaan keuangan.<br />\nPelatihan ini juga sebagai wujud dukungan terhadap pentingnya mencapai tujuan pertanian agar meningkatkan pendapatan di sektor pertanian sehingga taraf hidup juga meningkat secara berkelanjutan.<br />\nSebanyak 35 peserta yang berasal dari Kolaka Utara mengikuti kegiatan pelatihan ini secara offline di BBPP Batangkaluku dengan tetap menaati prosedur Kesehatan yaitu menggunakan masker, menjaga jarak dan rutin mencuci tangan di tempat yang telah di sediakan agar pelatihan ini berjalan lancar dan baik hingga akhir kegiatan</p>\n\n<p><a href=\"https://www.wartatani.co/8741/headline/capai-tujuan-pertanian-dengan-sumberdaya-manusia-pertanian-yang-handal/\">wartatani.co</a></p>', NULL, NULL, NULL, 'pelatihan', NULL, 'BBPP Batangkaluku', '2021-09-28 19:58:47', 1, NULL, NULL, '2021-10-31 12:03:14', '2021-10-31 12:04:10', NULL),
(9, 'artikel/article_20211031200959.jpg', 'Gelar Pelatihan Kewirausahaan Petani Milenial, Kementan Dorong Pertanian Papua Barat Unggul', 'Kementerian Pertanian (Kementan) menggelar pelatihan kewirausahaan untuk petani milenial di Kelurahan Klamalu Distrik Mariat Kabupaten Sorong, Papua Bara, Senin 4 Oktober 2021.Pelatihan tersebut diyakini akan mampu meningkatkan kapasitas produksi komoditas pangan di wilayah paling ujung timur Indonesia.', '<p>Kementerian Pertanian (Kementan) menggelar pelatihan kewirausahaan untuk petani milenial di Kelurahan Klamalu Distrik Mariat Kabupaten Sorong, Papua Bara, Senin 4 Oktober 2021.Pelatihan tersebut diyakini akan mampu meningkatkan kapasitas produksi komoditas pangan di wilayah paling ujung timur Indonesia.<br />\nSebelumnya di hari yang sama, Presiden Joko Widodo saat meyampaikan keterangan pers setelah melakukan tanam jagung bersama Ketua DPR RI, Puan Maharani, Menteri Pertanian Syahrul Yasin Limpo, Gubernur Papua Barat, Dominggus Mandacan, serta Bupati Sorong, Johny Kamuru mengharapkan kepada petani milenial untuk diberikan kepercayaan.<br />\nMenurutnya jika petani milenial diberikan kepercayaan akan mampu menciptakan ketahanan pangan utamanya di Papua Barat.<br />\nMenteri Pertanian Syahrul Yasin Limpo saat menyampaikan arahan sekaligus membuka pelatihan menyampaikan bahwa tanah Papua tidak kalah hebatnya dengan Jawa. Bahkan menurutnya justru lebih bagus. Oleh karena itu, pertanian Papua harus lebih unggul.&nbsp;<br />\n&quot;Tuhan sudah berkahi bumi Papua ini dengan sinar matahari, air ada di mana-mana. Itu modal yang luar biasa. Jadi, produktivitasnya jangan mau kalah. Mulai hari ini Papua Barat harus menjadi pemenang,&quot; kata Mentan.<br />\nMentan berharap pelatihan ini dapat mengoptimalkan sumber daya yang dimiliki, memanfaatkan teknologi mutakhir melalui optimalisasi peran petani dan penyuluh dalam pencapaian program swasembada pangan, baik di tingkat provinsi, kabupaten dan kecamatan.&nbsp;<br />\nMenurut Mentan SYL, keberadaan para petani sangat vital dalam mewujudkan pencapaian ketahanan pangan. Dalam penerapan teknologi pertanian yang direkomendasikan, Mentan SYL berharap melalui pelaksanaan kegiatan pelatihan yang dilaksanakan kali ini dapat mendorong petani milenial menjadi unggul, profesional dan berdaya saing dalam mengembangkan usahanya.<br />\nPetani milenial, ia melanjutkan, dapat melakukan pengembangan usaha melalui akses KUR (Kredit Usaha Rakyat) dari perbankan seperti Bank BRI, Bank BNI, Bank Mandiri dan bank daerah di tingkat provinsi untuk optimalisasi kegiatan agribisnisnya.<br />\n&quot;Saya berharap hasil dari pelatihan ini akan memberikan peningkatan kapasitas bagi petani, khususnya dalam merencanakan kegiatan pertanian, meng-klaster kawasan pertanian dan kelembagaan petani, melakukan enjiniring pertanian dari hulu sampai hilir yang mencakup input permodalan (KUR), budidaya, pascapanen, pengolahan, pengemasan dan pemasaran hasil pertanian yang terstandarisasi, modern dan marketable,&quot; harap dia.&nbsp;<br />\nKepala BPPSDMP Kementan, Dedi Nursyamsi mengatakan petani milenial yang tergabung dalam Duta Petani Andalan/Duta Petani Milenial (DPM/DPA) terus melakukan resonansi di daerahnya, salah satunya seperti yang dilakukan di Sorong.&nbsp;<br />\n&ldquo;DPM dan DPA sudah melakukan berbagai kegiatan di daerah. Kita bergerak di 11 provinsi, masing-masing sudah terdaftar lebih dari 200 orang petani milenial. Bersama dengan itu kita bangun jaringan pertanian nasional dan sudah terdaftar 10.470 petani milenial dalam jaringan itu,&rdquo; katanya.<br />\nDukungan dari pemerintah Pusat maupun Daerah dan semua pihak dalam pemberdayaan petani milenial untuk meningkatkan kapasitas dan produktivitas pertanian menurut Dedi sangat diperlukan. Petani milenial sebagai SDM unggul dengan karakter mampu beradaptasi, responsif, serta kolaboratif, lebih lanjut Dedi menambahkan akan dapat mendorong resonansi penumbuhan petani milenial membangun potensi lokal pertanian.<br />\nTerkait materi pelatihan yang diberikan lebih diarahkan agar DPM dan DPA mampu berwirausaha. Tentunya materi akan disampaikan oleh fasilitator yang kompeten di bidangnya, baik dari Widyaiswara, P4S/Gapoktan berprestasi serta dari pihak perbankan terkait sosialisasi pembiayaan berbasis KUR.<br />\n&quot;Materi diberikan dengan metode &lsquo;blended learning&rsquo; mengenai penumbuhan motivasi peserta pelatihan tentang prospek pengembangan usaha pertanian di masa depan. Selain itu juga memberikan pemahaman kepada peserta tentang bagaimana menjalin kemitraan dan negosiasi yang efektif dengan menerapkan supply chain management, bagaimana menerapkan strategi pemasaran berbasis digitalisasi, serta menerapkan berbagai konsep pembiayaan dan pencatatan usaha yang relevan dengan perkembangan jaman&rdquo;, terang Dedi.<br />\nPelatihan diselenggarakan secara online, juga offline dengan peserta yang hadir berjumlah 30 orang terdiri dari wilayah Sorong, Sorong Selatan, Pegunungan Arfak, Tambrauw, dan Manokwari. Sedangkan peserta lainnya seperti petani milenial, penyuluh dan mahasiswa pertanian mengikuti melalui online/daring.</p>\n\n<p><a href=\"https://www.celebesindo.com/2021/10/gelar-pelatihan-kewirausahaan-petani.html\">celebesindo.com</a></p>', NULL, NULL, NULL, 'umum', NULL, 'BBPP Batangkaluku', '2021-10-04 20:07:40', 1, NULL, NULL, '2021-10-31 12:09:59', '2021-10-31 12:09:59', NULL),
(10, 'artikel/article_20211031201326.jpg', 'Tanam Jagung Di Sorong, Presiden Ajak Petani Milenial Menjadi Motor Penggerak Pertanian', 'Presiden Joko Widodo melakukan tanam jagung bersama petani di Kelurahan Klamasen Distrik Mariat Kabupaten Sorong, Papua Barat, Senin, 4 Oktober 2021. Presiden didampingi Ketua DPR RI, Puan Maharani, Menteri Pertanian Syahrul Yasin Limpo, Gubernur Papua Barat, Dominggus Mandacan, serta Bupati Sorong, Johny Kamuru menanam jagung di lahan seluas 8 hektar.', '<p>Presiden Joko Widodo melakukan tanam jagung bersama petani di Kelurahan Klamasen Distrik Mariat Kabupaten Sorong, Papua Barat, Senin, 4 Oktober 2021. Presiden didampingi Ketua DPR RI, Puan Maharani, Menteri Pertanian Syahrul Yasin Limpo, Gubernur Papua Barat, Dominggus Mandacan, serta Bupati Sorong, Johny Kamuru menanam jagung di lahan seluas 8 hektar.<br />\nPresiden saat menyampaikan keterangan pers-nya di lokasi menyampaikan bahwa Propinsi Papua Barat memiliki potensi besar sebagai daerah produsen utama komoditas pertanian di Indonesia Timur.<br />\nUntuk diketahui, di Papua Barat terdapat 11 ribu hektar lahan jagung, 7 juta hektar untuk tanaman pangan dan hortikultura.<br />\n&quot;Lahan di sini memang cukup luas tapi yang termanfaatkan maksimal hanya 33 persen. Karena itu tadi saya meminta kepada Menteri Pertanian dan Gubernur Papua Barat untuk meningkatkan kapasitas produksi,&quot; kata Presiden.<br />\nPresiden juga meminta merubah sistem tanam<br />\ndari yang satu kali tanam dalam setahun menjadi dua atau tiga kali setahun. Hal ini menurutnya agar kebutuhan pangan bisa disiapkan dari tanah papua sendiri.<br />\n&quot;Saya juga mengajak kepada petani-petani milenial untuk diberikan kesempatan sebagai motor penggerak di sektor pertanian ini,&quot; imbuhnya.<br />\nPresiden meyakini jika petani milenial diberikan kepercayaan akan mampu menciptakan ketahanan pangan utamanya di Papua Barat.&nbsp;<br />\n&quot;Saya tadi juga melihat penggunaan teknologi pertanian, kemudian juga akan dbeirkan akses untuk modal usaha, juga irigasi &nbsp;cacingnya akan diperbaiki oleh Kementerian Pertanian dan juga pelatihan-pelatihan &nbsp;yg berkaitan dengan teknologi Pertanian,&quot; ungkap Presiden<br />\nDengan itu semua Presiden berharap ada peningkatkan produktivitas, utamanya komoditas yang ditanam hari ini yaitu jagung karena memang kebutuhan jagung baik untuk pangan maupun pakan ternak masih membutuhkan tambahan.<br />\nUntuk diketahui, pada tahun 2020 produksi Kabupaten Sorong mencapai 2.690 ton gabah kering giling setara dengan 1.543 ton beras. Sedangkan untuk jagung, di tahun 2020 diperkirakan &nbsp;775 ton.</p>\n\n<p><a href=\"https://www.celebesindo.com/2021/10/tanam-jagung-di-sorong-presiden-ajak.html\">celebesindo.com</a></p>', NULL, NULL, NULL, 'umum', NULL, 'BBPP Batangkaluku', '2021-10-04 20:11:53', 1, NULL, NULL, '2021-10-31 12:13:26', '2021-10-31 12:13:26', NULL),
(11, 'artikel/article_20211031201706.jpg', 'Kementan Gelar Pelatihan Kewirausahaan Petani Millenial di Sorong, Mentan SYL : Pertanian Papua Harus Lebih Unggul', 'Kementerian Pertanian (Kementan) menggelar pelatihan kewirausahaan untuk petani milenial di Kelurahan Klamalu Distrik Mariat Kabupaten Sorong, Papua Bara, Senin 4 Oktober 2021.Pelatihan tersebut diyakini akan mampu meningkatkan kapasitas produksi komoditas pangan di wilayah paling ujung timur Indonesia.', '<p>Kementerian Pertanian (Kementan) menggelar pelatihan kewirausahaan untuk petani milenial di Kelurahan Klamalu Distrik Mariat Kabupaten Sorong, Papua Bara, Senin 4 Oktober 2021.Pelatihan tersebut diyakini akan mampu meningkatkan kapasitas produksi komoditas pangan di wilayah paling ujung timur Indonesia.<br />\nSebelumnya di hari yang sama, Presiden Joko Widodo saat meyampaikan keterangan pers setelah melakukan tanam jagung bersama Ketua DPR RI, Puan Maharani, Menteri Pertanian Syahrul Yasin Limpo, Gubernur Papua Barat, Dominggus Mandacan, serta Bupati Sorong, Johny Kamuru mengharapkan kepada petani milenial untuk diberikan kepercayaan.<br />\nMenurutnya jika petani milenial diberikan kepercayaan akan mampu menciptakan ketahanan pangan utamanya di Papua Barat.<br />\nMenteri Pertanian Syahrul Yasin Limpo saat menyampaikan arahan sekaligus membuka pelatihan menyampaikan bahwa tanah Papua tidak kalah hebatnya dengan Jawa. Bahkan menurutnya justru lebih bagus. Oleh karena itu, pertanian Papua harus lebih unggul.<br />\n&quot;Tuhan sudah berkahi bumi Papua ini dengan sinar matahari, air ada di mana-mana. Itu modal yang luar biasa. Jadi, produktivitasnya jangan mau kalah. Mulai hari ini Papua Barat harus menjadi pemenang,&quot; kata Mentan.<br />\nMentan berharap pelatihan ini dapat mengoptimalkan sumber daya yang dimiliki, memanfaatkan teknologi mutakhir melalui optimalisasi peran petani dan penyuluh dalam pencapaian program swasembada pangan, baik di tingkat provinsi, kabupaten dan kecamatan.<br />\nMenurut Mentan SYL, keberadaan para petani sangat vital dalam mewujudkan pencapaian ketahanan pangan. Dalam penerapan teknologi pertanian yang direkomendasikan, Mentan SYL berharap melalui pelaksanaan kegiatan pelatihan yang dilaksanakan kali ini dapat mendorong petani milenial menjadi unggul, profesional dan berdaya saing dalam mengembangkan usahanya.<br />\nPetani milenial, ia melanjutkan, dapat melakukan pengembangan usaha melalui akses KUR (Kredit Usaha Rakyat) dari perbankan seperti Bank BRI, Bank BNI, Bank Mandiri dan bank daerah di tingkat provinsi untuk optimalisasi kegiatan agribisnisnya.<br />\n&quot;Saya berharap hasil dari pelatihan ini akan memberikan peningkatan kapasitas bagi petani, khususnya dalam merencanakan kegiatan pertanian, meng-klaster kawasan pertanian dan kelembagaan petani, melakukan enjiniring pertanian dari hulu sampai hilir yang mencakup input permodalan (KUR), budidaya, pascapanen, pengolahan, pengemasan dan pemasaran hasil pertanian yang terstandarisasi, modern dan marketable,&quot; harap dia.<br />\nKepala BPPSDMP Kementan, Dedi Nursyamsi mengatakan petani milenial yang tergabung dalam Duta Petani Andalan/Duta Petani Milenial (DPM/DPA) terus melakukan resonansi di daerahnya, salah satunya seperti yang dilakukan di Sorong.<br />\n&ldquo;DPM dan DPA sudah melakukan berbagai kegiatan di daerah. Kita bergerak di 11 provinsi, masing-masing sudah terdaftar lebih dari 200 orang petani milenial. Bersama dengan itu kita bangun jaringan pertanian nasional dan sudah terdaftar 10.470 petani milenial dalam jaringan itu,&rdquo; katanya.<br />\nDukungan dari pemerintah Pusat maupun Daerah dan semua pihak dalam pemberdayaan petani milenial untuk meningkatkan kapasitas dan produktivitas pertanian menurut Dedi sangat diperlukan. Petani milenial sebagai SDM unggul dengan karakter mampu beradaptasi, responsif, serta kolaboratif, lebih lanjut Dedi menambahkan akan dapat mendorong resonansi penumbuhan petani milenial membangun potensi lokal pertanian.<br />\nTerkait materi pelatihan yang diberikan lebih diarahkan agar DPM dan DPA mampu berwirausaha. Tentunya materi akan disampaikan oleh fasilitator yang kompeten di bidangnya, baik dari Widyaiswara, P4S/Gapoktan berprestasi serta dari pihak perbankan terkait sosialisasi pembiayaan berbasis KUR.<br />\n&quot;Materi diberikan dengan metode &lsquo;blended learning&rsquo; mengenai penumbuhan motivasi peserta pelatihan tentang prospek pengembangan usaha pertanian di masa depan. Selain itu juga memberikan pemahaman kepada peserta tentang bagaimana menjalin kemitraan dan negosiasi yang efektif dengan menerapkan supply chain management, bagaimana menerapkan strategi pemasaran berbasis digitalisasi, serta menerapkan berbagai konsep pembiayaan dan pencatatan usaha yang relevan dengan perkembangan jaman&rdquo;, terang Dedi.<br />\nPelatihan diselenggarakan secara online, juga offline dengan peserta yang hadir berjumlah 30 orang terdiri dari wilayah Sorong, Sorong Selatan, Pegunungan Arfak, Tambrauw, dan Manokwari. Sedangkan peserta lainnya seperti petani milenial, penyuluh dan mahasiswa pertanian mengikuti melalui online/daring.</p>\n\n<p><a href=\"http://Kementerian Pertanian (Kementan) menggelar pelatihan kewirausahaan untuk petani milenial di Kelurahan Klamalu Distrik Mariat Kabupaten Sorong, Papua Bara, Senin 4 Oktober 2021.Pelatihan tersebut diyakini akan mampu meningkatkan kapasitas produksi komoditas pangan di wilayah paling ujung timur Indonesia.\">kabartujuhsatu.news</a></p>', NULL, NULL, NULL, 'umum', NULL, 'BBPP Batangkaluku', '2021-10-04 20:15:20', 1, NULL, NULL, '2021-10-31 12:17:06', '2021-10-31 12:17:06', NULL),
(12, 'artikel/article_20211031202011.jpg', 'Presiden Jokowi Tanam Jagung di Sorong Ajak Petani Milenial Jadi Motor Penggerak Pertanian', 'Presiden Joko Widodo melakukan tanam jagung bersama petani di Kelurahan Klamasen Distrik Mariat Kabupaten Sorong, Papua Barat, Senin, 4 Oktober 2021. Presiden didampingi Ketua DPR RI, Puan Maharani, Menteri Pertanian Syahrul Yasin Limpo, Gubernur Papua Barat, Dominggus Mandacan, serta Bupati Sorong, Johny Kamuru menanam jagung di lahan seluas 8 hektar.', '<p>Presiden Joko Widodo melakukan tanam jagung bersama petani di Kelurahan Klamasen Distrik Mariat Kabupaten Sorong, Papua Barat, Senin, 4 Oktober 2021. Presiden didampingi Ketua DPR RI, Puan Maharani, Menteri Pertanian Syahrul Yasin Limpo, Gubernur Papua Barat, Dominggus Mandacan, serta Bupati Sorong, Johny Kamuru menanam jagung di lahan seluas 8 hektar.<br />\r\nPresiden saat menyampaikan keterangan pers-nya di lokasi menyampaikan bahwa Propinsi Papua Barat memiliki potensi besar sebagai daerah produsen utama komoditas pertanian di Indonesia Timur.<br />\r\nUntuk diketahui, di Papua Barat terdapat 11 ribu hektar lahan jagung, 7 juta hektar untuk tanaman pangan dan hortikultura.<br />\r\n&quot;Lahan di sini memang cukup luas tapi yang termanfaatkan maksimal hanya 33 persen. Karena itu tadi saya meminta kepada Menteri Pertanian dan Gubernur Papua Barat untuk meningkatkan kapasitas produksi,&quot; kata Presiden.<br />\r\nPresiden juga meminta merubah sistem tanam<br />\r\ndari yang satu kali tanam dalam setahun menjadi dua atau tiga kali setahun. Hal ini menurutnya agar kebutuhan pangan bisa disiapkan dari tanah papua sendiri.<br />\r\n&quot;Saya juga mengajak kepada petani-petani milenial untuk diberikan kesempatan sebagai motor penggerak di sektor pertanian ini,&quot; imbuhnya.<br />\r\nPresiden meyakini jika petani milenial diberikan kepercayaan akan mampu menciptakan ketahanan pangan utamanya di Papua Barat.<br />\r\n&quot;Saya tadi juga melihat penggunaan teknologi pertanian, kemudian juga akan dbeirkan akses untuk modal usaha, juga irigasi cacingnya akan diperbaiki oleh Kementerian Pertanian dan juga pelatihan-pelatihan yg berkaitan dengan teknologi Pertanian,&quot; ungkap Presiden<br />\r\nDengan itu semua Presiden berharap ada peningkatkan produktivitas, utamanya komoditas yang ditanam hari ini yaitu jagung karena memang kebutuhan jagung baik untuk pangan maupun pakan ternak masih membutuhkan tambahan.<br />\r\nUntuk diketahui, pada tahun 2020 produksi Kabupaten Sorong mencapai 2.690 ton gabah kering giling setara dengan 1.543 ton beras. Sedangkan untuk jagung, di tahun 2020 diperkirakan 775 ton.</p>\r\n\r\n<p><a href=\"https://www.kabartujuhsatu.news/2021/10/presiden-jokowi-tanam-jagung-di-sorong.html\">kabartujuhsatu.news</a></p>', NULL, NULL, NULL, 'umum', NULL, 'BBPP Batangkaluku', '2021-10-04 20:18:58', 1, NULL, NULL, '2021-10-31 12:20:11', '2021-10-31 13:03:23', NULL),
(13, 'artikel/article_20211031202443.jpg', 'Terus Bekali SDM Penyuluh Guna Menggenjot Produksi, Pertahankan Kualitas dan Kontinuitas Produksi', 'BBPP Batangkaluku yang merupakan salah satu UPT Kementerian Pertanian (Kementan) RI melalui Badan Penyuluhan dan Pengembangan Sumberdaya Manusia Pertanian (BPPSDMP) terus berupaya meningkatkan kapasitas SDM Pertanian guna mendukung terwujudnya pertanian yang maju, mandiri, dan modern.', '<p>BBPP Batangkaluku yang merupakan salah satu UPT Kementerian Pertanian (Kementan) RI melalui Badan Penyuluhan dan Pengembangan Sumberdaya Manusia Pertanian (BPPSDMP) terus berupaya meningkatkan kapasitas SDM Pertanian guna mendukung terwujudnya pertanian yang maju, mandiri, dan modern.<br />\nUpaya tersebut tindaklanjuti dengan bekerjasama dengan Dinas Tanaman Pangan, Hortikultura, Peternakan dan Perikanan Kabupaten Boven Digoel Provinsi Papua, Dinas Pertanian dan Ketahanan Pangan Kabupaten Morowali Provinsi Sulawesi Tengah dan Dinas Pertanian Provinsi Maluku menggelar Pelatihan Fungsional Dasar Bagi Penyuluh Pertanian Terampil Angkatan I, di Balai Besar Pelatihan Pertanian (BBPP) Batangkaluku, Kabupaten Gowa, Selasa (19/10/2021).<br />\nPelaskasnaan Pelatihan angkatan I digelar selama 21 hari efektif dari 18 Oktober hingga 08 November 2021 mendatang yang diikuti sebanyak 24 orang peserta.<br />\nKepala BBPP Batangkaluku, Sabir mengatakan Pelaksanaan pelatihan ditujukan untuk meningkatkan kompetensi dan profesionalisme fungsional penyuluh pertanian agar mampu melaksanakan perannya secara optimal dalam bidang pembinaan SDM.<br />\nMenteri Pertanian (Mentan), Syahrul Yasin Limpo (SYL) diberbagai kesempatan, mengatakan, peningkatan kualitas SDM menjadi salah satu fokus Kementerian Pertanian.<br />\n&ldquo;Salah satu fokus kita adalah meningkatkan kualitas SDM. Dengan SDM yang berkualitas tersebut, kita akan meningkatkan pertanian,&rdquo; ujar SYL.<br />\nHal senada dikatakan Kepala Badan Penyuluhan dan Pengembangan SDM Pertanian (BPPSDMP) Kementan, Dedi Nursyamsi. &quot;Keberhasilan peningkatan produktivitas tak lepas dari hasil kinerja dari penyuluh. Penyuluh adalah agen yang diharapkan bisa meningkatkan produktivitas petani&quot; tegasnya.&nbsp;<br />\nMenurut Sabir, Pelatihan fungsional tidak hanya agar bisa menguasai kompetensi teknis pertanian, tapi bekal untuk melaksanakan peran dan fungsi kita sebagai penyuluh pertanian yang akan mengawal setiap program yang ada di wilayah masing-masing, baik itu program kementan maupun daerah.<br />\n&ldquo;Ciri pertanian modern di Era 4.0 pertama penyuluh harus mampu mengantar teknologi kepada petani untuk di aplikasikan di lapangan, yang kedua yakni di dukung oleh kebijakan pemerintah dan ketiga Sumber Daya Manusia Pertanian yang adaptif dan kompeten terhadap kondisi perubahan di lapangan saat ini,&rdquo;katanya.<br />\nPelatihan ini juga bisa menjadi momen untuk saling berinteraksi dengan penyuluh daerah lain untuk mendapatkan pengalaman untuk diterapkan hingga memecahkan masalah sehigga kita mampu mendukung tugas dan fungsi kita sebagai penyuluh pertanian.<br />\nBeliau berharap materi yang diberikan fasilitator betul-betul nantinya bisa mengantarkan penyuluh yang hadir disini untuk melaksanakan tugas dan fungsinya secara baik sehingga mendukung tujuan pembangunan pertanian saat ini.<br />\nMenambahkan Nikolaus Saraun, Kepala Dinas TPHPP Kabupaten Boven Digoel mengatakan dalam peningkatan SDM Penyuluh pertanian tentunya kami sangat mendukung penuh, karena maju mundurnya petani dilapangan kuncinya ada di penyuluh sehingga kami terus berupaya bagaimana selalu meningkatkan SDM Penyuluh pertanian khususnya yang bertugas di Dinas Tanaman Pangan, Hortikultura, Peternakan dan Perikanan Kabupaten Boven Digoel.<br />\n&ldquo;Rencana tahun depan kami akan mengirimkan kembali penyuluh angkatan selanjutnya untuk dilatih di BBPP Batangkaluku.&rdquo;ungkap Kadis.<br />\n&ldquo;Kepada seluruh peserta bahwa setelah mereka &nbsp;mengikuti pelatihan ini, mereka akan pulang, mereka akan adopsi semua yang diberikan oleh narasumber, baik praktek maupun materi yang didapatkan dikelas mereka akan aplikasikan dilapangan sesuai denga tugas dan tanggung jawab meraka masing-masing di beberapa distrik yang ada diwilayahnya. Sebagaimana Kabupaten Boven Digoel memiliki 20 distrik, 112 kampung dan penyuluh harus turun ke masing-masing distrik agar bisa melaksanakan tugas serta menerapkan ilmunya sesuai apa yang mereka peroleh di BBPP Batangkaluku.&rdquo;paparnya.<br />\nMengingat masih masa Pandemi Covid-19, BBPP Batangkaluku tentunya &nbsp;tetap menerapkan Protokol Kesehatan secara ketat kepada seluruh peserta.</p>\n\n<p><a href=\"https://www.kabartujuhsatu.news/2021/10/terus-bekali-sdm-penyuluh-guna.html\">kabartujuhsatu.news</a></p>', NULL, NULL, NULL, 'pelatihan', NULL, 'Al-Aziz/Yuli N', '2021-10-19 20:21:28', 1, NULL, NULL, '2021-10-31 12:24:43', '2021-10-31 12:24:43', NULL),
(14, 'artikel/article_20211031202947.jpg', '3 Provinsi Ikuti Pelatihan Fungsional Dasar Penyuluh Pertanian Terampil Angkatan I di BBPP Batangkaluku', 'Pelaskasnaan Pelatihan angkatan I digelar selama 21 hari efektif dari 18 Oktober hingga 08 November 2021 mendatang yang diikuti sebanyak 24 orang peserta.', '<p>BBPP Batangkaluku yang merupakan salah satu UPT Kementerian Pertanian (Kementan) RI melalui Badan Penyuluhan dan Pengembangan Sumberdaya Manusia Pertanian (BPPSDMP) terus berupaya meningkatkan kapasitas SDM Pertanian guna mendukung terwujudnya pertanian yang maju, mandiri, dan modern.<br />\nUpaya tersebut tindaklanjuti dengan bekerjasama dengan Dinas Tanaman Pangan, Hortikultura, Peternakan dan Perikanan Kabupaten Boven Digoel Provinsi Papua, Dinas Pertanian dan Ketahanan Pangan Kabupaten Morowali Provinsi Sulawesi Tengah dan Dinas Pertanian Provinsi Maluku menggelar Pelatihan Fungsional Dasar Bagi Penyuluh Pertanian Terampil Angkatan I, di Balai Besar Pelatihan Pertanian (BBPP) Batangkaluku, Kabupaten Gowa, Selasa (19/10/2021).<br />\nPelaskasnaan Pelatihan angkatan I digelar selama 21 hari efektif dari 18 Oktober hingga 08 November 2021 mendatang yang diikuti sebanyak 24 orang peserta.<br />\nKepala BBPP Batangkaluku, Sabir mengatakan Pelaksanaan pelatihan ditujukan untuk meningkatkan kompetensi dan profesionalisme fungsional penyuluh pertanian agar mampu melaksanakan perannya secara optimal dalam bidang pembinaan SDM.<br />\nMenteri Pertanian (Mentan), Syahrul Yasin Limpo (SYL) diberbagai kesempatan, mengatakan, peningkatan kualitas SDM menjadi salah satu fokus Kementerian Pertanian.<br />\n&ldquo;Salah satu fokus kita adalah meningkatkan kualitas SDM. Dengan SDM yang berkualitas tersebut, kita akan meningkatkan pertanian,&rdquo; ujar SYL.<br />\nHal senada dikatakan Kepala Badan Penyuluhan dan Pengembangan SDM Pertanian (BPPSDMP) Kementan, Dedi Nursyamsi. &quot;Keberhasilan peningkatan produktivitas tak lepas dari hasil kinerja dari penyuluh. Penyuluh adalah agen yang diharapkan bisa meningkatkan produktivitas petani&quot; tegasnya.<br />\nMenurut Sabir, Pelatihan fungsional tidak hanya agar bisa menguasai kompetensi teknis pertanian, tapi bekal untuk melaksanakan peran dan fungsi kita sebagai penyuluh pertanian yang akan mengawal setiap program yang ada di wilayah masing-masing, baik itu program kementan maupun daerah.<br />\n&ldquo;Ciri pertanian modern di Era 4.0 pertama penyuluh harus mampu mengantar teknologi kepada petani untuk di aplikasikan di lapangan, yang kedua yakni di dukung oleh kebijakan pemerintah dan ketiga Sumber Daya Manusia Pertanian yang adaptif dan kompeten terhadap kondisi perubahan di lapangan saat ini,&rdquo;katanya.<br />\nPelatihan ini juga bisa menjadi momen untuk saling berinteraksi dengan penyuluh daerah lain untuk mendapatkan pengalaman untuk diterapkan hingga memecahkan masalah sehigga kita mampu mendukung tugas dan fungsi kita sebagai penyuluh pertanian.<br />\nBeliau berharap materi yang diberikan fasilitator betul-betul nantinya bisa mengantarkan penyuluh yang hadir disini untuk melaksanakan tugas dan fungsinya secara baik sehingga mendukung tujuan pembangunan pertanian saat ini.<br />\nMenambahkan Nikolaus Saraun, Kepala Dinas TPHPP Kabupaten Boven Digoel mengatakan dalam peningkatan SDM Penyuluh pertanian tentunya kami sangat mendukung penuh, karena maju mundurnya petani dilapangan kuncinya ada di penyuluh sehingga kami terus berupaya bagaimana selalu meningkatkan SDM Penyuluh pertanian khususnya yang bertugas di Dinas Tanaman Pangan, Hortikultura, Peternakan dan Perikanan Kabupaten Boven Digoel.<br />\n&ldquo;Rencana tahun depan kami akan mengirimkan kembali penyuluh angkatan selanjutnya untuk dilatih di BBPP Batangkaluku.&rdquo;ungkap Kadis.<br />\n&ldquo;Kepada seluruh peserta bahwa setelah mereka mengikuti pelatihan ini, mereka akan pulang, mereka akan adopsi semua yang diberikan oleh narasumber, baik praktek maupun materi yang didapatkan dikelas mereka akan aplikasikan dilapangan sesuai denga tugas dan tanggung jawab meraka masing-masing di beberapa distrik yang ada diwilayahnya.<br />\nSebagaimana Kabupaten Boven Digoel memiliki 20 distrik, 112 kampung dan penyuluh harus turun ke masing-masing distrik agar bisa melaksanakan tugas serta menerapkan ilmunya sesuai apa yang mereka peroleh di BBPP Batangkaluku.&rdquo;paparnya.<br />\nMengingat masih masa Pandemi Covid-19, BBPP Batangkaluku tentunya tetap menerapkan Protokol Kesehatan secara ketat kepada seluruh peserta.</p>\n\n<p><a href=\"https://www.kabartujuhsatu.news/2021/10/3-provinsi-ikuti-pelatihan-fungsional.html\">kabartujuhsatu.news</a></p>', NULL, NULL, NULL, 'pelatihan', NULL, 'Al-Aziz/Yuli N', '2021-10-19 20:27:50', 1, NULL, NULL, '2021-10-31 12:29:47', '2021-10-31 12:29:47', NULL),
(15, 'artikel/article_20211031203448.jpg', 'BBPP Batangkaluku Gelar Pelatihan Fungsional Dasar Bagi Penyuluh Pertanian Terampil Angakatan I', 'Kepala BBPP Batangkaluku, Sabir mengatakan Pelaksanaan pelatihan ditujukan untuk meningkatkan kompetensi dan profesionalisme fungsional penyuluh pertanian agar mampu melaksanakan perannya secara optimal dalam bidang pembinaan SDM.', '<p>BBPP Batangkaluku yang merupakan salah satu UPT Kementerian Pertanian (Kementan) RI melalui Badan Penyuluhan dan Pengembangan Sumberdaya Manusia Pertanian (BPPSDMP) terus berupaya meningkatkan kapasitas SDM Pertanian guna mendukung terwujudnya pertanian yang maju, mandiri, dan modern.<br />\nUpaya tersebut tindaklanjuti dengan bekerjasama dengan Dinas Tanaman Pangan, Hortikultura, Peternakan dan Perikanan Kabupaten Boven Digoel Provinsi Papua, Dinas Pertanian dan Ketahanan Pangan Kabupaten Morowali Provinsi Sulawesi Tengah dan Dinas Pertanian Provinsi Maluku menggelar Pelatihan Fungsional Dasar Bagi Penyuluh Pertanian Terampil Angkatan I, di Balai Besar Pelatihan Pertanian (BBPP) Batangkaluku, Kabupaten Gowa, Selasa (19/10/2021).<br />\nPelaskasnaan Pelatihan angkatan I digelar selama 21 hari efektif dari 18 Oktober hingga 08 November 2021 mendatang yang diikuti sebanyak 24 orang peserta.<br />\nKepala BBPP Batangkaluku, Sabir mengatakan Pelaksanaan pelatihan ditujukan untuk meningkatkan kompetensi dan profesionalisme fungsional penyuluh pertanian agar mampu melaksanakan perannya secara optimal dalam bidang pembinaan SDM.<br />\nMenteri Pertanian (Mentan), Syahrul Yasin Limpo (SYL) diberbagai kesempatan, mengatakan, peningkatan kualitas SDM menjadi salah satu fokus Kementerian Pertanian.<br />\n&ldquo;Salah satu fokus kita adalah meningkatkan kualitas SDM. Dengan SDM yang berkualitas tersebut, kita akan meningkatkan pertanian,&rdquo; ujar SYL.<br />\nHal senada dikatakan Kepala Badan Penyuluhan dan Pengembangan SDM Pertanian (BPPSDMP) Kementan, Dedi Nursyamsi. &quot;Keberhasilan peningkatan produktivitas tak lepas dari hasil kinerja dari penyuluh. Penyuluh adalah agen yang diharapkan bisa meningkatkan produktivitas petani&quot; tegasnya.<br />\nMenurut Sabir, Pelatihan fungsional tidak hanya agar bisa menguasai kompetensi teknis pertanian, tapi bekal untuk melaksanakan peran dan fungsi kita sebagai penyuluh pertanian yang akan mengawal setiap program yang ada di wilayah masing-masing, baik itu program kementan maupun daerah.<br />\n&ldquo;Ciri pertanian modern di Era 4.0 pertama penyuluh harus mampu mengantar teknologi kepada petani untuk di aplikasikan di lapangan, yang kedua yakni di dukung oleh kebijakan pemerintah dan ketiga Sumber Daya Manusia Pertanian yang adaptif dan kompeten terhadap kondisi perubahan di lapangan saat ini,&rdquo;katanya.<br />\nPelatihan ini juga bisa menjadi momen untuk saling berinteraksi dengan penyuluh daerah lain untuk mendapatkan pengalaman untuk diterapkan hingga memecahkan masalah sehigga kita mampu mendukung tugas dan fungsi kita sebagai penyuluh pertanian.<br />\nBeliau berharap materi yang diberikan fasilitator betul-betul nantinya bisa mengantarkan penyuluh yang hadir disini untuk melaksanakan tugas dan fungsinya secara baik sehingga mendukung tujuan pembangunan pertanian saat ini.<br />\nMenambahkan Nikolaus Saraun, Kepala Dinas TPHPP Kabupaten Boven Digoel mengatakan dalam peningkatan SDM Penyuluh pertanian tentunya kami sangat mendukung penuh, karena maju mundurnya petani dilapangan kuncinya ada di penyuluh sehingga kami terus berupaya bagaimana selalu meningkatkan SDM Penyuluh pertanian khususnya yang bertugas di Dinas Tanaman Pangan, Hortikultura, Peternakan dan Perikanan Kabupaten Boven Digoel.<br />\n&ldquo;Rencana tahun depan kami akan mengirimkan kembali penyuluh angkatan selanjutnya untuk dilatih di BBPP Batangkaluku.&rdquo;ungkap Kadis.<br />\n&ldquo;Kepada seluruh peserta bahwa setelah mereka mengikuti pelatihan ini, mereka akan pulang, mereka akan adopsi semua yang diberikan oleh narasumber, baik praktek maupun materi yang didapatkan dikelas mereka akan aplikasikan dilapangan sesuai denga tugas dan tanggung jawab meraka masing-masing di beberapa distrik yang ada diwilayahnya.<br />\nSebagaimana Kabupaten Boven Digoel memiliki 20 distrik, 112 kampung dan penyuluh harus turun ke masing-masing distrik agar bisa melaksanakan tugas serta menerapkan ilmunya sesuai apa yang mereka peroleh di BBPP Batangkaluku.&rdquo;paparnya.<br />\nMengingat masih masa Pandemi Covid-19, BBPP Batangkaluku tentunya tetap menerapkan Protokol Kesehatan secara ketat kepada seluruh peserta.</p>\n\n<p><a href=\"https://www.wartatani.co/8931/headline/bbpp-batangkaluku-gelar-pelatihan-fungsional-dasar-bagi-penyuluh-pertanian-terampil-angakatan-i/\">wartatani.co</a></p>', NULL, NULL, NULL, 'pelatihan', NULL, 'Al-Aziz/Yuli N', '2021-10-19 20:33:00', 1, NULL, NULL, '2021-10-31 12:34:48', '2021-10-31 12:34:48', NULL),
(16, 'artikel/article_20211031204127.jpg', '38 Penyuluh Pertanian Dinyatakan Lulus Pelatihan Fungsional Dasar Ahli System Blended Learning', 'Pelatihan ini resmi ditutup oleh Kepala Balai Besar Pelatihan Pertanian Batangkaluku ( Dr. Sabir, S,Pt M, Si) dan peserta pelatihan FUNGSIONAL DASAR BAGI PENYULUH PERTANIAN AHLI SISTEM BLANDED LEARNING.', '<p>PELATIHAN FUNGSIONAL DASAR BAGI PENYULUH PERTANIAN AHLI SISTEM BLANDED LEARNING yang dilaksanakan secara online dan offline resmi ditutup pada hari kamis , 21 Oktober 2021.<br />\nKegiatan pelatihan yang digelar tanggal 27 september sampai dengan 20 Oktober 2021 yang diikuti oleh 38 ( tigapuluh delapan) Penyuluh Pertanian dari Kabupaten Maros, Kabupaten Gowa, Kabupaten Enrekang, Kabupaten Tana Toraja, Kabupaten Toraja Utara dan Kota Makassar Provinsi Sulawesi Selatan.<br />\nPelatihan ini resmi ditutup oleh Kepala Balai Besar Pelatihan Pertanian Batangkaluku ( Dr. Sabir, S,Pt M, Si) dan peserta pelatihan FUNGSIONAL DASAR BAGI PENYULUH PERTANIAN AHLI SISTEM BLANDED LEARNING.<br />\nDalam Arahan sekaligus pembekalannya, Sabir menyampaikan latar belakang pelatihan system blended learning untuk memenuhi kebutuhan sumberdaya manusia , khususnya penyuluh pertanian yang kompetitif memasuki era 4,0 .&nbsp;<br />\nDisisi lain, pelatihan fungsional bagi penyuluh pertanian merupakan landasan bagi penyuluh dalam menjalankan tupoksinya, namun belum semua penyuluh dapat mengikuti pelatihan fungsional khususnya diwilayah kerja BBPP Batangkaluku, yaitu Provinsi Se Sulawesi.&nbsp;<br />\nMetode Blended Learning yang diprakarsai oleh Kepala Balai Besar Pelatihan Pertanian Batangkaluku diharapkan menjadi solusi bagi penyuluh pertanian untuk dapat mengikuti pelatihan fungsional terlebih dimasa pendemi covid 19 saat ini dimana mobilitas masyarakat dibatasi.&nbsp;<br />\nMetode Blended learning menggabungkan kegiatan pembelajaran klasikal yang dilakukan secara daring/ virtual dan Praktek kompetensi secara tatap muka/ offline.<br />\nLanjut Sabir Menjelaskan &nbsp;Dengan adanya pelatihan blended learning &nbsp;ini selain &nbsp;peserta memperoleh pengetahuan &nbsp;tentang penyuluhan , peserta pelatihan juga belajar memanfaatkan teknologi informasi diantaranya pertemuan interaktif dengan zoom cloud meeting, akses materi dan penugasan melalui Learning Management &nbsp;System, mengelola penyimpanan file dan folder dengan memanfaatkan cloud storage dan mengisi daftar hadir yang disebar menggunakan google form.<br />\nDiakhir sambutannya Dr.Sabir memberikan selamat kepada seluruh peserta yang dinyatakan lulus &nbsp;dan berhak mendapatkan sertifikat sebagai syarat untuk menjadi pejabat fungsional penyuluh pertanian .</p>\n\n<p><a href=\"https://www.kabartujuhsatu.news/2021/10/38-penyuluh-pertanian-dinyatakan-lulus.html\">kabartujuhsatu.news</a></p>', NULL, NULL, NULL, 'pelatihan', NULL, 'Erma/Al-Aziz/Yuli N', '2021-10-21 20:39:37', 1, NULL, NULL, '2021-10-31 12:41:27', '2021-10-31 12:41:27', NULL),
(17, 'artikel/article_20211031204602.jpg', 'READSI Terus Meningkatkan SDM Berkualitas Melalui Pelatihan Penyegaran Penyuluh Pertanian', 'Dinas Tanaman Pangan , Hortikultura dan Perkebunan Provinsi Sulawesi Selatan bekerjasama dengan Balai Besar Pelatihan Pertanian Batangkaluku menyelenggarakan pelatihan penyegaran penyuluh pertanian pendamping READSI Rural Empowerment and Agricultural Development Scalling -Up Initatiative ( Teknis Agribisnis Tanaman Padi)', '<p>Dinas Tanaman Pangan , Hortikultura dan Perkebunan Provinsi Sulawesi Selatan bekerjasama dengan Balai Besar Pelatihan Pertanian Batangkaluku menyelenggarakan pelatihan penyegaran penyuluh pertanian pendamping READSI Rural Empowerment and Agricultural Development Scalling -Up Initatiative ( Teknis Agribisnis Tanaman Padi) Angkatan IV, V dan VI, yang dilaksanakan DI Balai Besar Pelatihan Pertanian Batangkaluku tanggal 21- 27 Oktober 2021 yang diikuti oleh 54 penyuluh pendamping di masing-masing di Wilayah READSI yang berasal dari Kabupaten Luwu, Luwu Utara dan Luwu timur.<br />\nKegiatan ini bertujuan untuk meningkatkan kapasitas para penyuluh pertanian dalam mendukung pelaksanaan kegiatan di lokasi Program READSI<br />\nPelatihan ini resmi dibuka oleh Kepala Balai Besar Pelatihan pertanian Batangkaluku ( Dr. Sabir ,S.Pt M.Si) dan turut pula hadir Sekretaris Dinas Pertanian kabupaten Luwu ( drh. Jumardin), Kepala Bidang Penyuluhan Dinas Pertanian Kabupaten Luwu Timur ( Sumariyanto , SP) , Kasubag Tata Usaha UPT Pengembangan Sumber Daya Manusia Pertanian ( Ashari , SP) dan seluruh peserta pelatihan.<br />\nDalam arahannya , Sabir menyampaikan otak petani ada pada penyuluh pertanian, Penyuluh sebagai pengawal dan pendamping petani harus selalu update terhadap ilmu pengetahuan yang terbaru sesuai dengan perkembangan teknologi saat ini.<br />\nPenyuluh pertanian perlu disegarkan kembali karena tugas penyuluh untuk menfasilitasi petani dalam mengidentifikasi komoditas yang akan diprioritaskan, penguatan kelompok tani, pembelajaran bagi petani dan pelaporan, oleh sebab itu untuk menjalakan tugas tersebut , penyuluh harus memiliki kualitas sumber daya yang handal, memiliki kemandirian dalam bekerja, professional berwawasan global.<br />\nLebih lanjut sabir menyampaikan , Untuk menjadi penyuluh yang sukses , penyuluh harus memiliki semangat bekerja, focus, bekerja secara kolaboratif / bekerjsama dan Adaptif terhadap teknologi yang artinya penyuluh pertanian harus mengikuti perkembangan teknologi , yang akan diajarkan kepada pelaku utama, untuk meningkatkan produktivitas yang tentunya akan meningkatkan pendapatan dan kesejahteraan petani.<br />\nCiri Khas Pembangunan pertanian ditandai dengan peningkatan provitas , peningkatan kualitas dan Kontinuitas yang terjamin, karena sejalan dengan tujuan pembangunan pertanian , yaitu menyediakan kebutuhan pangan bagi 273 juta jiwa yang setiap hari mengalami peningkatan , sementara lahan yang tersedia saat ini mengalami pengurangan , oleh karena itu untuk mengsiasati kondisi tersebut, Kita harus memiliki teknologi yang bisa mengdonkrak peningkatan produksi agar lahan yang terbatas dengan pertambahan penduduk yang semakin meningkat bisa terpenuhi pangannya , adanya dukungan dari kebijakan pemerintah untuk meningkatkan provitas , dan membantu petani melakukan usaha taninya , dan tentunya yang paling penting yaitu SDM Pertanian yang handal, memiliki kemandirian dan professional.<br />\nDiakhir Sambutannya , Sabir menegaskan agar kegiatan pelatihan ini berjalan lancar dan materi yang diterima betul &ndash;betul bisa meminimalisasi permasalahan yang dihadapi oleh penyuluh pendamping dilapangan dalam menjalankan program readsi.</p>\n\n<p><a href=\"https://www.wartatani.co/8959/headline/readsi-terus-meningkatkan-sdm-berkualitas-melalui-pelatihan-penyegaran-penyuluh-pertanian/\">wartatani.co</a></p>', NULL, NULL, NULL, 'pelatihan', NULL, 'BBPP Batangkaluku', '2021-10-22 20:42:13', 1, NULL, NULL, '2021-10-31 12:46:02', '2021-10-31 12:46:02', NULL),
(20, 'artikel/article_20211031205216.jpg', 'Menteri Pertanian SYL Harap Camat dan Desa Bangkitkan Kembali Lumbung Pangan', 'Dalam rangka memenuhi kebutuhan pangan bagi 273 juta penduduk Indonesia, meningkatkan kesejahteraan petani, dan meningkatkan ekspor, Kementerian Pertanian (Kementan) melaksanakan berbagai program, pembangunan pertanian hingga tingkat kecamatan.', '<p>Dalam rangka memenuhi kebutuhan pangan bagi 273 juta penduduk Indonesia, meningkatkan kesejahteraan petani, dan meningkatkan ekspor, Kementerian Pertanian (Kementan) melaksanakan berbagai program, pembangunan pertanian hingga tingkat kecamatan.<br />\nSalah satu diantaranya adalah peningkatan kapasitas camat dalam mendukung dan melaksanakan program pembangunan pertanian di tingkat kecamatan melalui pelatihan pertanian.<br />\nBalai Besar Pelatihan Pertanian (BBPP) Batangkaluku sebagai salah satu UPT dari Kementerian pertanian ikut berpartisipasi dalam penyelenggaraan Pelatihan Pertanian Bagi Camat Seluruh Indonesia yang dilaksanakan di beberapa titik, di wilayah Kerja UPT BBPP yaitu Di Provinsi Sulawesi Selatan peserta berasal dari Kabupaten Gowa, Takalar, Maros dan Bone, Soppeng dan Sinjai, Provinsi Sulawesi Utara peserta berasal dari Kota Manado, Kota Bitung, Minahasa, Minahasa Utara , Minahasa Selatan , Minahasa Tenggara dan Tomohon , Provinsi Sulawesi Tenggara peserta berasal dari Kota Kendari, Konawe, Konawe Selatan , Provinsi Sulawesi Tengah berasal dari Kabupaten Sigi, Palu, Donggala, Parigi Moutong, Provinsi Gorontalo peserta berasal dari Kota Gorontalo, Kabupaten Gorontalo, Bone Bolango dan Provinsi Sulawesi Barat peserta berasal dari Kabupaten Polman, Majene, Mamuju , Mamuju Tengah , Mamasa dan Pasangkayu.<br />\nPelatihan dilaksanakan selama 2 hari efektif dimulai tanggal 28 hingga 29 Oktober 2021, yang diikuti oleh kurang lebih 7.230 Camat diseluruh Indonesia baik yang ikut secara offline dan Online.<br />\nPelatihan dibuka secara resmi oleh Menteri Pertanian, Syahrul Yasin Limpo dalam arahannya beliau menyampaikan bahwa kekuatan negeri ini salah satunya terletak di tingkat kecamatan yang mengkoordinasi desa-desa dibawahnya, oleh karena itu Pemerintah yang baik harus dimulai dari Peningkatan Kualitas Camat, pelatihan ini ditujukan untuk meningkatkan pemahaman dan kapasitas camat terhadap pertanian Indonesia, sehingga bisa berperan strategis dalam menyukseskan pembangunan pertanian di Kecamatan secara massif, Kecamatan memiliki peran penting dalam memberi energy dan menyinergikan segala potensi pertanian di desa untuk membangun Lumbung pangan Masyarakat, baik untuk ketersedian pangan dalam negeri maupun komoditas ekspor.<br />\nSyahrul berharap akan terbangun lumbung pangan di tiap kecamatan, Kementerian Pertanian akan menyiapkan anggaran, prasarana, dan sarana produksinya dengan mengoptimalkan kinerja 7230 kecamatan , yang memiliki lumbung pangan seluas 100 hektar Pertanian akan semakin kuat .<br />\nMelalui Pelatihan ini, Kepala Badan PPSDMP Kementan Dedi Nursyamsi menyampaikan bahwa Pembangunan Pertanian ada di sawah, kebun, dan lading yang bearada di tingkat kecamatan.<br />\nKementerian Pertanian membangun program komando strategis di tingkat kecamatan yang disebut kostratani, yang komandani oleh camat.<br />\nUntuk itu selayaknya komandan memahami berbagai gerakan pembangunan pertanian guna mensinergiskan program pertanian di tingkat kecamatan.<br />\nLebih lanjut Dedi Nursyamsi menyampaikan keberhasilan pembangunan nasional dipengaruhi oleh keberhasilan di tingkat kecamatan , oleh karena itu camat sebagai komandan perlu ditingkatkan kapasitas dan kapabilitasnya melalui pelatihan guna mendukung pembangunan pertanian di daerah).</p>\n\n<p><a href=\"https://www.kabartujuhsatu.news/2021/10/menteri-pertanian-syl-harap-bangkitkan.html\">kabartujuhsatu.news</a></p>', NULL, NULL, NULL, 'pelatihan', NULL, 'medsos_bbpp-bk', '2021-10-29 20:49:00', 1, NULL, NULL, '2021-10-31 12:52:16', '2021-10-31 12:52:16', NULL);
INSERT INTO `article` (`id`, `image`, `title`, `description`, `content`, `title_en`, `description_en`, `content_en`, `type`, `source`, `creator`, `published_time`, `is_active`, `user_create`, `user_update`, `created_at`, `updated_at`, `attachment`) VALUES
(21, 'artikel/article_20211031210217.jpg', 'Tingkatkan Kapasitas Camat, BBPP Batangkaluku Gelar Pelatihan Pertanian', 'Kementerian Pertanian membangun program komando strategis di tingkat kecamatan yang disebut kostratani, yang komandani oleh camat.', '<p>Dalam rangka memenuhi kebutuhan pangan bagi 273 juta penduduk Indonesia, meningkatkan kesejahteraan petani, dan meningkatkan ekspor, Kementerian Pertanian (Kementan) melaksanakan berbagai program, pembangunan pertanian hingga tingkat kecamatan.<br />\nSalah satu diantaranya adalah peningkatan kapasitas camat dalam mendukung dan melaksanakan program pembangunan pertanian di tingkat kecamatan melalui pelatihan pertanian.<br />\nBalai Besar Pelatihan Pertanian (BBPP) Batangkaluku sebagai salah satu UPT dari Kementerian pertanian ikut berpartisipasi dalam penyelenggaraan Pelatihan Pertanian Bagi Camat Seluruh Indonesia yang dilaksanakan di beberapa titik, di wilayah Kerja UPT BBPP yaitu Di Provinsi Sulawesi Selatan peserta berasal dari Kabupaten Gowa, Takalar, Maros dan Bone, Soppeng dan Sinjai, Provinsi Sulawesi Utara peserta berasal dari Kota Manado, Kota Bitung, Minahasa, Minahasa Utara , Minahasa Selatan , Minahasa Tenggara dan Tomohon , Provinsi Sulawesi Tenggara peserta berasal dari Kota Kendari, Konawe, Konawe Selatan , Provinsi Sulawesi Tengah berasal dari Kabupaten Sigi, Palu, Donggala, Parigi Moutong, Provinsi Gorontalo peserta berasal dari Kota Gorontalo, Kabupaten Gorontalo, Bone Bolango dan Provinsi Sulawesi Barat peserta berasal dari Kabupaten Polman, Majene, Mamuju , Mamuju Tengah , Mamasa dan Pasangkayu.<br />\nPelatihan dilaksanakan selama 2 hari efektif dimulai tanggal 28 hingga 29 Oktober 2021, yang diikuti oleh kurang lebih 7.230 Camat diseluruh Indonesia baik yang ikut secara offline dan Online.<br />\nPelatihan dibuka secara resmi oleh Menteri Pertanian, Syahrul Yasin Limpo dalam arahannya beliau menyampaikan bahwa kekuatan negeri ini salah satunya terletak di tingkat kecamatan yang mengkoordinasi desa-desa dibawahnya, oleh karena itu Pemerintah yang baik harus dimulai dari Peningkatan Kualitas Camat, pelatihan ini ditujukan untuk meningkatkan pemahaman dan kapasitas camat terhadap pertanian Indonesia, sehingga bisa berperan strategis dalam menyukseskan pembangunan pertanian di Kecamatan secara massif, Kecamatan memiliki peran penting dalam memberi energy dan menyinergikan segala potensi pertanian di desa untuk membangun Lumbung pangan Masyarakat, baik untuk ketersedian pangan dalam negeri maupun komoditas ekspor.<br />\nSyahrul berharap akan terbangun lumbung pangan di tiap kecamatan, Kementerian Pertanian akan menyiapkan anggaran, prasarana, dan sarana produksinya dengan mengoptimalkan kinerja 7230 kecamatan , yang memiliki lumbung pangan seluas 100 hektar Pertanian akan semakin kuat .<br />\nMelalui Pelatihan ini, Kepala Badan PPSDMP Kementan Dedi Nursyamsi menyampaikan bahwa Pembangunan Pertanian ada di sawah, kebun, dan lading yang bearada di tingkat kecamatan.<br />\nKementerian Pertanian membangun program komando strategis di tingkat kecamatan yang disebut kostratani, yang komandani oleh camat.<br />\nUntuk itu selayaknya komandan memahami berbagai gerakan pembangunan pertanian guna mensinergiskan program pertanian di tingkat kecamatan.<br />\nLebih lanjut Dedi Nursyamsi menyampaikan keberhasilan pembangunan nasional dipengaruhi oleh keberhasilan di tingkat kecamatan , oleh karena itu camat sebagai komandan perlu ditingkatkan kapasitas dan kapabilitasnya melalui pelatihan guna mendukung pembangunan pertanian di daerah).</p>\n\n<p><a href=\"https://www.wartatani.co/9089/headline/tingkatkan-kapasitas-camat-bbpp-batangkaluku-gelar-pelatihan-pertanian/\">wartatanin.co</a></p>', NULL, NULL, NULL, 'pelatihan', NULL, 'BBPP Batangkaluku', '2021-10-29 20:59:04', 1, NULL, NULL, '2021-10-31 13:02:17', '2021-10-31 13:02:17', NULL),
(22, 'artikel/article_20211031223455.jpg', 'SEKILAS TENTANG PESTISIDA', 'Pengganggu tanaman adalah setiap faktor yang dapat menimbulkan gangguan.\r\nSedangkan gangguan adalah perubahan pada tanaman yang mengarah pada pengurangan\r\nkuantitas ataupun kualitas hasil tanaman. Akibat dari gangguan adalah kerusakan yakni\r\npengurangan kuantitas maupun kualitas tanaman karena gangguan tersebut. Kerusakan\r\ndapat dinilai dengan uang sehingga disebut kerugian.', '<p>Pengganggu tanaman adalah setiap faktor yang dapat menimbulkan gangguan.<br />\nSedangkan gangguan adalah perubahan pada tanaman yang mengarah pada pengurangan<br />\nkuantitas ataupun kualitas hasil tanaman. Akibat dari gangguan adalah kerusakan yakni<br />\npengurangan kuantitas maupun kualitas tanaman karena gangguan tersebut. Kerusakan<br />\ndapat dinilai dengan uang sehingga disebut kerugian.</p>', NULL, NULL, NULL, 'pertanian', NULL, 'Awaluddin', '2021-02-17 22:32:44', 1, NULL, NULL, '2021-10-31 14:34:55', '2021-10-31 14:34:55', NULL),
(23, 'artikel/article_20211031223624.jpg', 'Penggunaan Pestisida', 'Penggunaan pestisida sedapat mungkin dihindari. Namun demikian, apabila cara\r\npengendalian lain tidak memadai sehingga pestisida terpaksa digunakan, maka penggunaannya\r\nharus secara baik dan benar. Dampak negatif yang mungkin timbul diusahakan sekecil\r\nmungkin, sedangkan manfaatnya diupayakan sebesar mungkin.', '<p>Penggunaan pestisida sedapat mungkin dihindari. Namun demikian, apabila cara<br />\npengendalian lain tidak memadai sehingga pestisida terpaksa digunakan, maka penggunaannya<br />\nharus secara baik dan benar. Dampak negatif yang mungkin timbul diusahakan sekecil<br />\nmungkin, sedangkan manfaatnya diupayakan sebesar mungkin.</p>', NULL, NULL, NULL, 'pertanian', NULL, 'Awaluddin', '2021-02-17 22:35:48', 1, NULL, NULL, '2021-10-31 14:36:24', '2021-10-31 14:36:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `human_resource_id` bigint(20) UNSIGNED NOT NULL,
  `award` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_create` int(10) UNSIGNED DEFAULT NULL,
  `user_update` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_image` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`, `content`, `content_en`, `user_create`, `user_update`, `created_at`, `updated_at`, `is_image`) VALUES
(1, 'maklumat', 'Dengan ini Kami sanggup menyelenggarakan pelayanan sesuai standar yang telah ditetapkan dan apabila tidak menepati janji ini, kami siap menerima sanksi sesuai Peraturan Perundang-Undangan yang berlaku.', '', NULL, NULL, '2021-08-21 08:31:44', '2021-08-21 08:31:44', 0),
(2, 'tentang_kami', '<h3><strong>Profil BBPP Batangkaluku</strong></h3>\n\n<p><strong>Balai</strong> Besar Pelatihan Pertanian (BBPP) Batangkaluku ini merupakan perwujudan kesiapan BBPP Batangkaluku dalam rangka optimalisasi tugas dan fungsi sebagai lembaga pelatihan pertanian. Balai Besar Pelatihan Pertanian (BBPP) Batangkaluku merupakan salah satu UPT Badan Penyuluhan dan Pengembangan Sumberdaya Manusia Pertanian berperan penting dalam meningkatkan kapasitas sumberdaya manusia pertanian melalui pelatihan. Napak tilas perjalanan BBPP yaitu Tahun 1976 bernama &ldquo;Balai Latihan Pegawai Pertanian Batangkaluku&rdquo;, di tahun 2000 menjadi &ldquo;Balai Diklat Pertanian&rdquo;, lalu 2002 diubah menjadi &ldquo;Balai Diklat Mekanisasi Pertanian&rdquo;. Memasuki tahun 2003 menjadi &ldquo;Balai Besar Diklat Mekanisasi Pertanian&rdquo;, dan di tahun 2007 menjadi &ldquo;Balai Besar Pelatihan Pertanian Batangkaluku&rdquo; sampai sekarang.</p>\n\n<p>Tantangan yang dihadapi oleh BBPP Batangkaluku adalah berupaya keras agar dapat mewujudkan VISI, yaitu menjadi lembaga pelatihan terpercaya dan berdaya saing untuk menghasilkan SDM pertanian yang kreatif, inovatif dan profesional. Meretas jalan untuk mewujudkan visi dari sejak kehadiran lembaga pelatihan ini, bukanlah hal yang mudah. Jalan panjang dan berliku telah dilalui, tantangan datang silih berganti termasuk seringnya terjadi perubahan dan penyesuaian organisasi karena tuntutan perkembangan pembangunan pertanian.</p>\n\n<p>Fungsi BBPP Batangkaluku yaitu<br />\n<br />\n1. Penyusunan program, rencana kerja, anggaran dan pelaksanaan kerjasama<br />\n2. Pelaksanaan identifikasi kebutuhan pelatihan<br />\n3. Pelaksanaan penyusunan bahan Standar Kompetensi Kerja (SKK) dibidang pertanian<br />\n4. Pelaksanaan pelatihan fungsional dibidang pertanian bagi aparatur<br />\n5. Pelaksanaan pelatihan teknis dibidang mekanisasi pertanian bagi aparatur dan non aparatur pertanian dalam dan luar negeri<br />\n6. Pelaksanaan pelatihan profesi dibidang mekanisasi pertanian bagi aparatur dan non aparatur<br />\n7. Pelaksanaan uji kompetensi dibidang pertanian<br />\n8. Pelaksanaan penyusunan paket pembelajaran dan media pelatihan fungsional dan teknis dibidang pertanian<br />\n9. Pelaksanaan pengembangan model dan teknik pelatihan fungsional dan teknis dibidang mekanisasi pertanian<br />\n10. Pelaksanaan Pengembangan kelembagaan pelatihan pertanian swadaya<br />\n11. Pelaksanaan pemberian konsultasi dibidang pertanian<br />\n12. Pelaksanaan bimbingan lanjutan pelatihan dibidang pertanian bagi aparatur dan non aparatur<br />\n13. Pelaksanaan pemberian pelayanan penyelenggaraan pelatihan fungsional bagi aparatur, pelatihan teknis dan profesi, pengembangan model dan teknik pelatihan fungsional dan teknis dibidang pertanian bagi aparatur dan non aparatur<br />\n14. Pengelolaan unit inkubator usahatani<br />\n15. Pelaksanaan pemantauan dan evaluasi pelatihan dibidang pertanian<br />\n16. Pelksanaan pengololaan data dan informasi pelatihan serta pelaporan<br />\n17. Pelaksanaan pengelolaan sarana teknis<br />\n18. Pengelolaan urusan kepegawaian, keuangan, rumah tanga, perlengkapan, dan instalasi BBPP Batangkaluku</p>\n\n<hr />\n<p>VISI&nbsp;</p>\n\n<p>&ldquo;Menjadi Lembaga Pelatihan Terpercaya<br />\ndan Berdaya Saing untuk<br />\nMenghasilkan SDM Pertanian<br />\nyang Kreatif, Inovatif dan Profesional&rdquo;</p>\n\n<hr />\n<p>MISI</p>\n\n<p>1. Meningkatkan kualitas program, pemantauan, evaluasi, dan pengendalian diklat pertanian<br />\n2. Mengembangkan jejaring kerjasama, dan sistem informasi diklat pertanian<br />\n3. Meningkatkan kualitas pelayanan pelaksanaan diklat fungsional, teknis, agribisnis, kewirausahaan, dan mekanisasi pertanian<br />\n4. Meningkatkan kualitas pelayanan pelaksanaan diklat profesi danpelaksanaan uji kompetensi bidang pertanian<br />\n5. Mengembangkan model teknik diklat fungsional, teknis, agribisnis, kewirausahaan, dan mekanisasi pertanian<br />\n6. Meningkatkan peran dan fungsi kelembagaan diklat pertanian swadaya sebagai lembaga diklat pertanian di perdesaan<br />\n7. Meningkatkan fungsi Inkubator Agribisnis sebagai media pembelajaran agribisnis<br />\n8. Meningkatkan kualitas pengelolaan sarana teknis, administrasi dan manajemen BBPP</p>\n\n<hr />\n<p>MOTTO</p>\n\n<p>Kerja Keras, Cerdas, Ikhlas dan Berkualitas</p>', '<p>According to ESPN, United are interested in landing Mbappe.</p>\n\n<p>The France international has just a year left on his current Parc des Princes contract and, while the Ligue 1 giants want to keep their talisman, the Red Devils are eyeing a deal nonetheless.</p>\n\n<p>The publication states that United want to sign Mbappe in 2022, rather than now.</p>\n\n<p>But the Red Devils would be wise to jump the gun on this in order to fend off competition from La Liga giants Real Madrid.</p>', NULL, NULL, '2021-08-21 08:31:44', '2021-10-31 14:47:02', 0),
(3, 'struktur_organisasi', '<p><img src=\"http://dev.batangkaluku.local/storage/content/img.png\" /></p>', NULL, NULL, NULL, '2021-08-21 08:31:44', '2021-08-21 10:09:21', 0),
(4, 'favicon.png', '', NULL, NULL, NULL, '2021-08-21 09:55:47', '2021-08-21 09:55:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `user_create` int(10) UNSIGNED DEFAULT NULL,
  `user_update` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`, `department_en`, `order_id`, `is_active`, `user_create`, `user_update`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Balai', 'Balai Head', 1, 1, NULL, NULL, '2021-08-21 10:11:38', '2021-08-21 10:11:38'),
(2, 'Bagian Umum', 'General Affair', 2, 1, NULL, NULL, '2021-10-31 12:01:22', '2021-10-31 12:01:22'),
(3, 'Bidang Program dan Evaluasi', 'Field of Program and Evaluation', 3, 1, NULL, NULL, '2021-10-31 12:03:55', '2021-10-31 12:05:34'),
(4, 'Bidang Penyelenggaraan Pelatihan', 'Field of Implementation of Training', 4, 1, NULL, NULL, '2021-10-31 12:05:12', '2021-10-31 12:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `user_create` int(10) UNSIGNED DEFAULT NULL,
  `user_update` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `title_en`, `type`, `content`, `is_active`, `user_create`, `user_update`, `created_at`, `updated_at`) VALUES
(1, 'Ini Judul Bahasa', 'This Is Lang', 'foto', 'gallery/foto/foto_20210821190256.jpeg', 1, NULL, NULL, '2021-08-21 11:02:56', '2021-08-21 11:02:56'),
(2, 'judul bahasa', 'title lang', 'video', 'gallery/video/video_20210821190651.mp4', 1, NULL, NULL, '2021-08-21 11:06:51', '2021-08-21 11:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `human_resources`
--

CREATE TABLE `human_resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `user_create` int(10) UNSIGNED DEFAULT NULL,
  `user_update` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_edu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'pendidikan terakhir',
  `univ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'universitas/perguruan tinggi',
  `major` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'jurusan',
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'pangkat/golongan',
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'jabatan',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `human_resources`
--

INSERT INTO `human_resources` (`id`, `name`, `nip`, `image`, `department_id`, `position`, `position_en`, `level_id`, `order_id`, `is_active`, `user_create`, `user_update`, `created_at`, `updated_at`, `gender`, `religion`, `last_edu`, `univ`, `major`, `rank`, `department`, `email`) VALUES
(3, 'Dr. SABIR, S.Pt, M.Si', '98999', 'sdm/slider_20211031200954.jpg', 1, 'Kepala Balai BBPP Batangkaluku', 'Head Officer Of BBPP Batangkaluku', 1, 1, 1, NULL, NULL, '2021-10-31 12:09:54', '2021-10-31 12:09:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'ROSDIANA, S.Pi, M.M', '88999', 'sdm/slider_20211031201242.jpg', 2, 'Kepala Bagian Umum', 'Head of General Affair', 1, 1, 1, NULL, NULL, '2021-10-31 12:12:42', '2021-10-31 12:12:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'NENNY SLAVIATY, S.P., M.M.', '88999', 'sdm/slider_20211031201527.jpg', 2, 'Kasubag Kepegawaian dan Rumah Tangga', 'Head of Sub-Division of Personnel and Household', 2, 2, 1, NULL, NULL, '2021-10-31 12:15:27', '2021-10-31 12:15:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'HAERUDDIN, S.E AK., M.Si', '8899', 'sdm/slider_20211031201951.jpg', 2, 'KASUBAG Keuangan', 'Head of Sub-Division Finance', 2, 2, 1, NULL, NULL, '2021-10-31 12:19:51', '2021-10-31 12:19:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_20_055758_create_permission_tables', 1),
(5, '2021_08_20_061024_create_slider_table', 1),
(6, '2021_08_20_061049_create_article_table', 1),
(7, '2021_08_20_061102_create_department_table', 1),
(8, '2021_08_20_061224_create_content_table', 1),
(9, '2021_08_20_061341_create_human_resources_table', 1),
(10, '2021_08_20_061427_create_page_table', 1),
(11, '2021_08_20_061836_create_training_info_table', 1),
(12, '2021_08_20_061941_create_gallery_table', 1),
(13, '2021_08_20_074927_create_page_attachment_table', 1),
(14, '2021_08_20_152643_create_officer_table', 1),
(15, '2021_09_07_160637_create_route_visitor_table', 2),
(16, '2021_11_01_060659_add_url_to_slider_table', 3),
(17, '2021_11_01_061725_add_is_image_to_content_table', 3),
(18, '2021_11_01_063357_create_rating_table', 3),
(19, '2021_11_01_065145_add_attachment_to_training_info_table', 3),
(20, '2021_11_01_074830_add_attachment_to_article_table', 3),
(21, '2021_11_01_075358_add_field_to_human_resources_table', 3),
(22, '2021_11_01_075810_create_award_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'pangkat / golongan',
  `rank_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'pangkat / golongan',
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'jabatan',
  `position_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'jabatan',
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `user_create` int(10) UNSIGNED DEFAULT NULL,
  `user_update` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`id`, `name`, `nip`, `rank`, `rank_en`, `position`, `position_en`, `is_active`, `user_create`, `user_update`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Sabir, S.Pt., M.Si', '-', 'IV.B', 'IV.B', 'Kepala Balai', NULL, 1, NULL, NULL, '2021-08-21 14:54:30', '2021-10-31 15:03:45'),
(2, 'Rosdiana Mahmud, S.Ip., MM', '-', 'IV.A', 'IV.A', 'Kepala Bagian Umum', NULL, 1, NULL, NULL, '2021-10-31 15:05:00', '2021-10-31 15:05:00'),
(3, 'Fitriani, S.Tp., M.Sc', '-', 'IV.A', NULL, 'Koordinator Program dan Evaluasi', NULL, 1, NULL, NULL, '2021-10-31 15:06:15', '2021-10-31 15:06:15'),
(4, 'Andi Amal Hayat Makmur, SP., M.Si', '-', 'III.D', NULL, 'Koordinator Penyelenggaraan Pelatihan', NULL, 1, NULL, NULL, '2021-10-31 15:07:25', '2021-10-31 15:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `user_create` int(10) UNSIGNED DEFAULT NULL,
  `user_update` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `name`, `title`, `title_en`, `content`, `content_en`, `type`, `group`, `order_id`, `user_create`, `user_update`, `created_at`, `updated_at`) VALUES
(1, 'sop_balai', 'SOP Balai', NULL, '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\n	<tbody>\n		<tr>\n			<td>test</td>\n			<td>test</td>\n		</tr>\n		<tr>\n			<td>&nbsp;</td>\n			<td>&nbsp;</td>\n		</tr>\n		<tr>\n			<td>&nbsp;</td>\n			<td>&nbsp;</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>', NULL, 'layanan_dan_informasi', NULL, NULL, NULL, NULL, '2021-08-21 11:44:49', '2021-10-29 02:53:11'),
(2, 'favicon.png', '', NULL, '', NULL, 'layanan_dan_informasi', NULL, NULL, NULL, NULL, '2021-08-21 11:44:55', '2021-08-21 11:44:55'),
(3, 'jaringan_informasi_dan_dokumentasi', 'Jaringan Informasi & Dokumentasi', NULL, '<p><a href=\"http://jdih.pertanian.go.id/\">Jaringan Informasi &amp; Dokumentasi</a></p>', NULL, 'layanan_dan_informasi', NULL, NULL, NULL, NULL, '2021-08-21 11:53:15', '2021-10-31 14:55:22'),
(4, 'surat_keputusan_balai', '', NULL, '', NULL, 'layanan_dan_informasi', NULL, NULL, NULL, NULL, '2021-08-21 11:53:31', '2021-08-21 11:53:31'),
(5, 'info_pelatihan', 'Jadwal Tentatif Pelatihan 2021', '123123', '<p>Jadwal Tentatif Pelatihan Balai Besar Pelatihan Pertanian (BBPP) Batangkaluku Tahun 2021<br />\nSelengkapnya dapat dilihat dibawah :&nbsp;</p>', '<p>123</p>', 'layanan_dan_informasi', NULL, NULL, NULL, NULL, '2021-08-21 11:53:38', '2021-10-31 14:38:53'),
(6, 'pejabat_LHKPN_-_LHKASN', 'DAFTAR LHKP/LHKASN', NULL, '<p>Berikut daftar pegawai wajib LHKPN/LHKASN :</p>\n\n<p><a href=\"http://bbpp-batangkaluku-ppid.pertanian.go.id/doc/70/DAFTAR%20LHKPN%20&amp;%20LHKASN/LHKPN%20WEB.pdf\">Daftar pegawai LHKPN 2020</a></p>\n\n<hr />\n<p>Berikut daftar tanda penerima LHKPN</p>\n\n<p><a href=\"http://bbpp-batangkaluku-ppid.pertanian.go.id/doc/70/DAFTAR%20LHKPN%20&amp;%20LHKASN/Tanda%20Terima%20LHKPN%202020.pdf\">Daftar tanda terima LHKPN 2020</a></p>\n\n<p><a href=\"http://bbpp-batangkaluku-ppid.pertanian.go.id/doc/70/DAFTAR%20LHKPN%20&amp;%20LHKASN/Tanda%20Terima%20LHKASN%202021.pdf\">Daftar tanda terima LHKPN 2021</a></p>', NULL, 'layanan_dan_informasi', NULL, NULL, NULL, NULL, '2021-08-21 11:53:47', '2021-10-31 15:09:46'),
(7, 'rencana_strategis', 'RENCANA STRATEGIS', NULL, '<p>ini merupakan penjabaran dari Rencana strategis Balai Besar Pelatihan Pertanian (BBPP) Batangkaluku tahun 2020 - 2024</p>', NULL, 'layanan_dan_informasi', NULL, NULL, NULL, NULL, '2021-08-21 11:54:04', '2021-10-31 15:11:46'),
(8, 'rencana_kerja_tahunan', 'RENCANA KERJA TAHUNAN', NULL, '<p>Rencana Kinerja Tahunan (RKT) ini merupakan penjabaran dari Rencana strategis Balai Besar Pelatihan Pertanian (BBPP) Batangkaluku. RKT di bertujuan untuk memberikan acuan dan landasan serta arah bagi perencanaan dan pelaksanaan program dan kegiatan pengembangan sumberdaya manusia pertanian pada unit-unit kerja lingkup Balai secara operasional, sehingga secara sistematis akan terwujud keselarasan, keterpaduan dan kesinambungan dalam penjabaran program dan kegiatan pengembangan sumberdaya manusia pertanian melalui pelatihan.&nbsp;</p>\n\n<p>Selengkapnya :&nbsp;</p>', NULL, 'layanan_dan_informasi', NULL, NULL, NULL, NULL, '2021-08-21 11:54:16', '2021-10-31 15:13:51'),
(9, 'lakin_-_lakip', 'LAPORAN KINERJA', NULL, '<p>Laporan Kinerja (LK) atau dulu dikenal dengan Laporan Akuntabilitas Kinerja (LAKIP) sejatinya merupakan dokumen pertanggungjawaban pelaksanaan tugas dan fungsi Balai Besar Pelatihan Pertanian(BBPP) Batangkaluku kurun waktu tahunan kepada pemangku kepentingan.&nbsp;</p>\n\n<p>Laporan Kinerja BBPP Batangkaluku merupakan evaluasi terakhir dari Pelaksanaan Strategis (RENSTRA) BBPP Batangkaluku pada periode yang telah direncanakan sebelumnya, sehingga secara akumulatif capaian kinerja dari skala 4 tahun dan menggambarkan juga capaian kinerja RENSTRA BBPP Batangkaluku yang dimaksud. Dengan kata lain, asumsi-asumsi penyusunan Rencana Strategis. Telah disimpulkan benar atau ada yang kurang tepat. Hasil evaluasi semacam ini sangat berguna untuk merumuskan asumsi-asumsi yang relevan untuk penyusunan perencanaan yang akan datang.&nbsp;</p>\n\n<p>Penyusunan Laporan Kinerja BBPP Batangkaluku telah mengacu pada peraturan Menteri PAN dan Reformasi Birokrasi Nomor 53 Tahun 2014. Dalam peraturan ini penyusunan laporan kinerja tampak lebih sederhana, padat dan komunikatif dibandingkan penyusunan laporan akuntabilitas tahun-tahun sebelumnya. Hal ini nampak dari struktur pelaporan yang secara tepat telah mampu merangkum semua capaian kinerja. Dalam capaian kinerja, penekanannya pada sasaran dan indikator program. Seluruh sasaran dan indikator kegiatan tentu mengarah pada capaian dan sasaran dan indikator program. Manfaat atau benefit tercermin dari rumusan sasaran dan indikator program di setiap level eselon satu. Dalam laporan kinerja ini menggunakan seluruh bahan-bahan yang ada dalam setiap sasaran dan indikator program.&nbsp;</p>\n\n<p>Selengkapnya :</p>', NULL, 'layanan_dan_informasi', NULL, NULL, NULL, NULL, '2021-08-21 11:54:24', '2021-10-31 15:33:12'),
(10, 'IKM', 'SURVEY KEPUASAN MASYARAKAT', NULL, '<p>Indeks Kepuasan Masyarakat (IKM) atau yang sekarang disebut Survei Kepuasan Masyarakat (SKM) adalah data dan informasi tentang tingkat kepuasan masyarakat yang diperoleh dari hasil pengukuran secara kuantitatif dan kualitatif atas pendapat masyarakat dalam memperoleh pelayanan dari aparatur penyelenggara pelayanan publik dengan membandingkan antara harapan dan kebutuhannya.&nbsp;</p>\n\n<p>Pengukuran kepuasan merupakan elemen penting dalam proses evaluasi kinerja dimana tujuan akhir yang hendak dicapai adalah menyediakan pelayanan yang lebih baik, lebih efisien, dan lebih efektif berbasis dari kebutuhan masyarakat. Suatu pelayanan dinilai memuaskan bila pelayanan tersebut dapat memenuhi kebutuhan dan harapan pengguna layanan. Kepuasan masyarakat dapat juga dijadikan acuan bagi berhasil atau tidaknya pelaksanaan program yang dilaksanakan pada suatu lembaga layanan publik.&nbsp;</p>\n\n<p>Pelayanan publik oleh aparatur pemerintah dewasa ini masih banyak dijumpai kelemahan sehingga belum dapat memenuhi kualitas yang diharapkan masyarakat. Hal ini ditandai dengan masih adanya berbagai keluhan masyarakat yang disampaikan melalui media massa, sehingga dapat menimbulkan citra yang kurang baik terhadap aparatur pemerintah. Mengingat fungsi utama pemerintah adalah melayani masyarakat maka pemerintah perlu meningkatkan kualitas pelayanan.</p>\n\n<p>Selengkapnya :</p>', NULL, 'layanan_dan_informasi', NULL, NULL, NULL, NULL, '2021-08-21 11:54:35', '2021-10-31 15:34:25'),
(11, 'keuangan', 'LAPORAN KEUANGAN', NULL, '<p>Berikut laporan keuangan BBPP Batangkaluku</p>', NULL, 'layanan_dan_informasi', NULL, NULL, NULL, NULL, '2021-08-21 11:54:47', '2021-10-31 15:35:51'),
(12, 'sistem_pengendalian_intern', '', NULL, '', NULL, 'satuan_kerja', NULL, NULL, NULL, NULL, '2021-08-21 14:58:45', '2021-08-21 14:58:45'),
(13, 'WBK_dan_WBBM', 'WBK - WBBM', NULL, '<h2>Pembangunan Zona Integritas Menuju Wilayah Bebas dari Korupsi (WBK) dan Wilayah Birokrasi Bersih dan Melayani (WBBM)</h2>\n\n<p>Pembangunan Zona Integritas Menuju Wilayah Bebas dari Korupsi (WBK) dan Wilayah Birokrasi Bersih dan Melayani (WBBM). Pemerintah telah menerbitkan Peraturan Presiden Nomor 81 Tahun 2010 tentang Grand Design Reformasi Birokrasi yang mengatur tentang pelaksanaan program reformasi birokrasi. Peraturan tersebut menargetkan tercapainya tiga sasaran hasil utama yaitu peningkatan kapasitas dan akuntabilitas organisasi, pemerintah yang bersih dan bebas KKN, serta peningkatan pelayanan publik.</p>\n\n<p>Predikat Menuju WBK adalah predikat yang diberikan kepada suatu unit kerja yang memenuhi sebagian besar manajemen perubahan, penataan tatalaksana, penataan sistem manajemen SDM, penguatan pegawasan, dan penguatan akuntabilitas kinerja, sedangkan Predikat Menuju WBBM adalah predikat yang diberikan kepada suatu unit kerja/satuan kerja yang sebelumnya telah mendapat predikat Menuju WBK dan memenuhi sebagian besar manajemen perubahan, penataan tatalaksana, penataan sistem manajemen SDM, penguatan pengawasan, penguatan akuntabilitas kinerja, dan penguatan kualitas layanan publik.&nbsp;</p>\n\n<hr />\n<h2>Unit Pengelola Gratifikasi (UPG)&nbsp;</h2>\n\n<p>Pengendalian gratifikasi merupakan proses integral pada tindakan dan kegiatan yang dilakukan secara terus menerus oleh pimpinan dan seluruh pegawai untuk menciptakan lingkungan organisasi yang bebas dari gratifikasi dalam mewujudkan wilayah bebas dari korupsi (WBK).&nbsp;</p>\n\n<p>Untuk lebih mengoptimalkan pencegahan atau pengelolaan gratifikasi maka dibentuk Sub Unit Pengelola Gratifikasi (Sub UPG) yang merupakan mitra dari manajemen untuk membantu pimpinan dalam ikut mengendalikan dan mencegah terjadinya gratifikasi pada Balai Besar Pelatihan Pertanian Batangkaluku. Sub UPG Balai Besar Pelatihan Pertanian Batangkaluku mempunyai tugas yaitu Melakukan upaya-upaya pencegahan praktik-praktik gratifikasi di lingkungan Unit Kerja Balai Besar Pelatihan Pertanian (BBPP) Batangkaluku.&nbsp;</p>', '<p>Pembangunan Zona Integritas Menuju Wilayah Bebas dari Korupsi (WBK) dan Wilayah Birokrasi Bersih dan Melayani (WBBM). Pemerintah telah menerbitkan Peraturan Presiden Nomor 81 Tahun 2010 tentang Grand Design Reformasi Birokrasi yang mengatur tentang pelaksanaan program reformasi birokrasi. Peraturan tersebut menargetkan tercapainya tiga sasaran hasil utama yaitu peningkatan kapasitas dan akuntabilitas organisasi, pemerintah yang bersih dan bebas KKN, serta peningkatan pelayanan publik.</p>\n\n<p>Predikat Menuju WBK adalah predikat yang diberikan kepada suatu unit kerja yang memenuhi sebagian besar manajemen perubahan, penataan tatalaksana, penataan sistem manajemen SDM, penguatan pegawasan, dan penguatan akuntabilitas kinerja, sedangkan Predikat Menuju WBBM adalah predikat yang diberikan kepada suatu unit kerja/satuan kerja yang sebelumnya telah mendapat predikat Menuju WBK dan memenuhi sebagian besar manajemen perubahan, penataan tatalaksana, penataan sistem manajemen SDM, penguatan pengawasan, penguatan akuntabilitas kinerja, dan penguatan kualitas layanan publik.&nbsp;</p>', 'satuan_kerja', NULL, NULL, NULL, NULL, '2021-08-21 15:05:22', '2021-10-31 15:25:03'),
(14, 'PPID', 'Pejabat Pengelola Informasi dan Dokumentasi', NULL, '<p>HAK PENGGUNA INFORMASI PUBLIK<br />\n1. Setiap Orang berhak memperoleh Informasi Publik sesuai dengan ketentuan Undang-Undang ini.<br />\n2. Setiap Orang berhak:<br />\n&nbsp; &nbsp;a. melihat dan mengetahui Informasi Publik;<br />\n&nbsp; &nbsp;b. menghadiri pertemuan publik yang terbuka untuk umum untuk memperoleh Informasi Publik;<br />\n&nbsp; &nbsp;c. mendapatkan salinan Informasi Publik melalui permohonan sesuai dengan UndangUndang ini; dan/atau<br />\n&nbsp; &nbsp;d. menyebarluaskan Informasi Publik sesuai dengan peraturan perundangundangan.<br />\n3. Setiap Pemohon Informasi Publik berhak mengajukan permintaan Informasi Publik disertai alasan permintaan tersebut.<br />\n4. Setiap Pemohon Informasi Publik berhak mengajukan gugatan ke pengadilan apabila dalam memperoleh Informasi Publik mendapat hambatan atau kegagalan sesuai dengan ketentuan UndangUndang ini.</p>\n\n<hr />\n<p>KEWAJIBAN PENGGUNA INFORMASI PUBLIK<br />\n1. Pengguna Informasi Publik wajib menggunakan Informasi Publik sesuai dengan ketentuan peraturan perundangundangan.<br />\n2. Pengguna Informasi Publik wajib mencantumkan sumber dari mana ia memperoleh Informasi Publik, baik yang digunakan untuk kepentingan sendiri maupun untuk keperluan publikasi sesuai dengan ketentuan peraturan perundangundangan.</p>\n\n<hr />\n<p>TATA CARA PERMOHONAN INFORMASI<br />\nLangkah 1<br />\nPemohon Informasi Publik mengajukan permintaan informasi kepada Pejabat Pengelola Informasi dan Dokumentasi (PPID), baik langsung secara lisan, melalui surat atau surat elektronik (email), dan juga permintaan dapat dilakukan melalui telepon.<br />\nLangkah 2<br />\nPemohon informasi harus menuliskan jenis informasi yang diinginkan pada form yang tersedia yaitu Form 1A untuk perorangan atau Form 1B untuk badan hukum/badan publik/kelompok.<br />\nLangkah 3<br />\nPengelola PPID mencatat semua informasi yang di sebutkan oleh pemohon.<br />\nLangkah 4<br />\nPemohon informasi harus meminta tanda bukti kepada PPID bahwa telah melakukan permintaan informasi, serta nomor pendaftaran.<br />\nLangkah 5<br />\nDalam waktu 10 (sepuluh) hari kerja Pejabat PPID harus memberikan jawaban tertulis atas permintaan informasi yang di butuhkan. PPID dapat meminta perpanjangan wakjtu 7 (tujuh) hari kerja untuk memenuhi permintaan informasi disertai alasan perpanjangan.<br />\nLangkah 6<br />\nSetelah waktu yang ditentukan pemohon menerima informasi.<br />\nLangkah 7<br />\nJika pemohon merasa tidak puas dengan informasi yang diberikan maka dapat mengajukan keberatan informasi.</p>\n\n<hr />\n<p><a href=\"http://bbpp-batangkaluku-ppid.pertanian.go.id/\">PORTAL PPID</a></p>', NULL, 'satuan_kerja', NULL, NULL, NULL, NULL, '2021-08-21 15:05:32', '2021-10-31 15:23:27'),
(15, 'pengadaan_barang_dan_jasa', 'PENGADAAN BARANG DAN JASA', NULL, '<p>Daftar Pengadaan Barang Dan Jasa</p>\n\n<p><a href=\"http://bbpp-batangkaluku-ppid.pertanian.go.id/doc/70/PENGADAAN BARANG DAN JASA/PBJ 2020.pdf\">PBJ 2020</a></p>\n\n<p><a href=\"http://bbpp-batangkaluku-ppid.pertanian.go.id/doc/70/PENGADAAN BARANG DAN JASA/Daftar PBJ Tahun 2019.pdf\">PBJ 2019</a></p>\n\n<p><a href=\"http://bbpp-batangkaluku-ppid.pertanian.go.id/doc/70/PENGADAAN BARANG DAN JASA/Daftar PBJ Tahun 2018.pdf\">PBJ 2018</a></p>\n\n<p><a href=\"http://bbpp-batangkaluku-ppid.pertanian.go.id/doc/70/PENGADAAN BARANG DAN JASA/Daftar PBJ Tahun 2017.pdf\">PBJ 2017</a></p>\n\n<p><a href=\"http://bbpp-batangkaluku-ppid.pertanian.go.id/doc/70/PENGADAAN BARANG DAN JASA/Daftar Pengadaan BJ 2016.pdf\">PBJ 2016</a></p>', NULL, 'satuan_kerja', NULL, NULL, NULL, NULL, '2021-08-21 15:05:39', '2021-10-31 15:29:00'),
(16, 'perpustakaan', 'PERPUSTAKAAN DIGITAL', NULL, '<p><a href=\"http://lib.bppsdmp.pertanian.go.id/kaluku/index.php\">Perpustakaan BBPP Batangkaluku</a></p>', NULL, 'satuan_kerja', NULL, NULL, NULL, NULL, '2021-08-21 15:05:50', '2021-10-31 15:30:14'),
(17, 'ISO', 'ISO 37001 : 2017 & ISO', NULL, NULL, NULL, 'satuan_kerja', NULL, NULL, NULL, NULL, '2021-08-21 15:05:58', '2021-10-31 15:31:38'),
(18, 'aset', '', NULL, '', NULL, 'layanan_dan_informasi', NULL, NULL, NULL, NULL, '2021-08-27 16:38:04', '2021-08-27 16:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `page_attachment`
--

CREATE TABLE `page_attachment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `user_create` int(10) UNSIGNED DEFAULT NULL,
  `user_update` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_attachment`
--

INSERT INTO `page_attachment` (`id`, `page_id`, `name`, `name_en`, `attachment`, `is_active`, `user_create`, `user_update`, `created_at`, `updated_at`) VALUES
(1, 1, 'SOP Balai Download', 'test123', 'attachment/sop_balai_20210821222315.pdf', 1, NULL, NULL, '2021-08-21 14:23:15', '2021-10-26 04:45:05'),
(2, 1, 'video', '123', 'attachment/sop_balai_20210821222559.mp4', 1, NULL, NULL, '2021-08-21 14:25:59', '2021-08-21 14:25:59'),
(3, 4, 'Penomoran SK Balai 2017', NULL, 'attachment/surat_keputusan_balai_20211031225156.pdf', 1, NULL, NULL, '2021-10-31 14:51:56', '2021-10-31 14:52:32'),
(4, 4, 'Penomoran SK Balai 2018', NULL, 'attachment/surat_keputusan_balai_20211031225346.pdf', 1, NULL, NULL, '2021-10-31 14:53:46', '2021-10-31 14:53:46'),
(5, 4, 'Penomoran SK Balai 2019', NULL, 'attachment/surat_keputusan_balai_20211031225421.pdf', 1, NULL, NULL, '2021-10-31 14:54:21', '2021-10-31 14:54:21'),
(6, 7, 'RENSTRA TAHUN 2020-2024', 'RENSTRA 2020-2024', 'attachment/rencana_strategis_20211031231242.pdf', 1, NULL, NULL, '2021-10-31 15:12:42', '2021-10-31 15:12:42'),
(7, 8, 'RKT 2015', 'RKT 2015', 'attachment/rencana_kerja_tahunan_20211031231451.pdf', 1, NULL, NULL, '2021-10-31 15:14:51', '2021-10-31 15:14:51'),
(8, 8, 'RKT 2016', 'RKT 2016', 'attachment/rencana_kerja_tahunan_20211031231604.pdf', 1, NULL, NULL, '2021-10-31 15:16:04', '2021-10-31 15:16:04'),
(9, 8, 'RKT 2017', 'RKT 2017', 'attachment/rencana_kerja_tahunan_20211031231723.pdf', 1, NULL, NULL, '2021-10-31 15:17:23', '2021-10-31 15:17:23'),
(10, 8, 'RKT 2018', 'RKT 2018', 'attachment/rencana_kerja_tahunan_20211031231838.pdf', 1, NULL, NULL, '2021-10-31 15:18:38', '2021-10-31 15:18:38'),
(11, 8, 'RKT 2019', 'RKT 2019', 'attachment/rencana_kerja_tahunan_20211031231934.pdf', 1, NULL, NULL, '2021-10-31 15:19:34', '2021-10-31 15:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_visitor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `route_visitor`
--

CREATE TABLE `route_visitor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `route_visitor`
--

INSERT INTO `route_visitor` (`id`, `route`, `unique_id`, `created_at`, `updated_at`) VALUES
(1, 'http://127.0.0.1:8000', '614b19db33610', '2021-09-22 11:58:06', '2021-09-22 11:58:06'),
(2, 'http://127.0.0.1:8000', '6150b13b6d5fc', '2021-09-26 17:43:23', '2021-09-26 17:43:23'),
(3, 'http://127.0.0.1:8000/artikel/pertanian/4-sekilas-tentang-pestisida', '6150b13b6d5fc', '2021-09-26 18:10:50', '2021-09-26 18:10:50'),
(4, 'http://127.0.0.1:8000', '61674a794b289', '2021-10-13 21:07:05', '2021-10-13 21:07:05'),
(5, 'http://127.0.0.1:8000', '61777f7547456', '2021-10-26 04:09:25', '2021-10-26 04:09:25'),
(6, 'http://127.0.0.1:8000/artikel/pertanian/5-sekilas-tentang-pestisida-2', '61777f7547456', '2021-10-26 04:10:01', '2021-10-26 04:10:01'),
(7, 'http://127.0.0.1:8000/lembaga/tentang', '61777f7547456', '2021-10-26 04:10:28', '2021-10-26 04:10:28'),
(8, 'http://127.0.0.1:8000/lembaga/struktur', '61777f7547456', '2021-10-26 04:10:33', '2021-10-26 04:10:33'),
(9, 'http://127.0.0.1:8000/lembaga/sdm', '61777f7547456', '2021-10-26 04:10:37', '2021-10-26 04:10:37'),
(10, 'http://127.0.0.1:8000/artikel/pelatihan', '61777f7547456', '2021-10-26 04:10:54', '2021-10-26 04:10:54'),
(11, 'http://127.0.0.1:8000/artikel/pertanian', '61777f7547456', '2021-10-26 04:10:57', '2021-10-26 04:10:57'),
(12, 'http://127.0.0.1:8000/artikel/umum', '61777f7547456', '2021-10-26 04:11:08', '2021-10-26 04:11:08'),
(13, 'http://127.0.0.1:8000/layanan/sop_balai', '61777f7547456', '2021-10-26 04:11:20', '2021-10-26 04:11:20'),
(14, 'http://127.0.0.1:8000/layanan/jaringan_informasi_dan_dokumentasi', '61777f7547456', '2021-10-26 04:11:25', '2021-10-26 04:11:25'),
(15, 'http://127.0.0.1:8000/layanan/surat_keputusan_balai', '61777f7547456', '2021-10-26 04:11:28', '2021-10-26 04:11:28'),
(16, 'http://127.0.0.1:8000/layanan/info_pelatihan', '61777f7547456', '2021-10-26 04:11:31', '2021-10-26 04:11:31'),
(17, 'http://127.0.0.1:8000/layanan/pejabat_LHKPN_-_LHKASN', '61777f7547456', '2021-10-26 04:11:34', '2021-10-26 04:11:34'),
(18, 'http://127.0.0.1:8000/layanan/rencana_strategis', '61777f7547456', '2021-10-26 04:11:40', '2021-10-26 04:11:40'),
(19, 'http://127.0.0.1:8000/layanan/rencana_kerja_tahunan', '61777f7547456', '2021-10-26 04:11:43', '2021-10-26 04:11:43'),
(20, 'http://127.0.0.1:8000/layanan/lakin_-_lakip', '61777f7547456', '2021-10-26 04:11:47', '2021-10-26 04:11:47'),
(21, 'http://127.0.0.1:8000/layanan/IKM', '61777f7547456', '2021-10-26 04:12:18', '2021-10-26 04:12:18'),
(22, 'http://127.0.0.1:8000/artikel/pelatihan/6-artikel-pertanian-1', '61777f7547456', '2021-10-26 04:34:21', '2021-10-26 04:34:21'),
(23, 'http://127.0.0.1:8000/layanan/keuangan', '61777f7547456', '2021-10-26 04:46:52', '2021-10-26 04:46:52'),
(24, 'http://127.0.0.1:8000/layanan/aset', '61777f7547456', '2021-10-26 04:46:55', '2021-10-26 04:46:55'),
(25, 'http://127.0.0.1:8000', '617921921c468', '2021-10-27 09:53:22', '2021-10-27 09:53:22'),
(26, 'http://127.0.0.1:8000/lembaga/tentang', '617a7ea8a9841', '2021-10-28 10:42:48', '2021-10-28 10:42:48'),
(27, 'http://127.0.0.1:8000/lembaga/sdm', '617a7ea8a9841', '2021-10-28 10:43:18', '2021-10-28 10:43:18'),
(28, 'http://127.0.0.1:8000/artikel/pelatihan', '617a7ea8a9841', '2021-10-28 10:43:44', '2021-10-28 10:43:44'),
(29, 'http://127.0.0.1:8000/artikel/pertanian', '617a7ea8a9841', '2021-10-28 10:43:48', '2021-10-28 10:43:48'),
(30, 'http://127.0.0.1:8000/artikel/umum', '617a7ea8a9841', '2021-10-28 10:43:57', '2021-10-28 10:43:57'),
(31, 'http://127.0.0.1:8000/layanan/sop_balai', '617a7ea8a9841', '2021-10-28 10:44:04', '2021-10-28 10:44:04'),
(32, 'http://127.0.0.1:8000/layanan/jaringan_informasi_dan_dokumentasi', '617a7ea8a9841', '2021-10-28 10:44:26', '2021-10-28 10:44:26'),
(33, 'http://127.0.0.1:8000/layanan/surat_keputusan_balai', '617a7ea8a9841', '2021-10-28 10:44:29', '2021-10-28 10:44:29'),
(34, 'http://127.0.0.1:8000/layanan/info_pelatihan', '617a7fd126458', '2021-10-28 10:47:45', '2021-10-28 10:47:45'),
(35, 'http://127.0.0.1:8000/layanan/pejabat_LHKPN_-_LHKASN', '617a7fd126458', '2021-10-28 10:47:53', '2021-10-28 10:47:53'),
(36, 'http://127.0.0.1:8000', '617a7fd126458', '2021-10-28 10:56:48', '2021-10-28 10:56:48'),
(37, 'http://127.0.0.1:8000', '617b54b0f4183', '2021-10-29 01:56:01', '2021-10-29 01:56:01'),
(38, 'http://127.0.0.1:8000/satker/sistem_pengendalian_intern', '617b54b0f4183', '2021-10-29 02:45:52', '2021-10-29 02:45:52'),
(39, 'http://127.0.0.1:8000/lembaga/tentang', '617b54b0f4183', '2021-10-29 02:48:21', '2021-10-29 02:48:21'),
(40, 'http://127.0.0.1:8000/lembaga/struktur', '617b54b0f4183', '2021-10-29 02:48:25', '2021-10-29 02:48:25'),
(41, 'http://127.0.0.1:8000/lembaga/sdm', '617b54b0f4183', '2021-10-29 02:48:31', '2021-10-29 02:48:31'),
(42, 'http://127.0.0.1:8000/artikel/pelatihan', '617b54b0f4183', '2021-10-29 02:50:31', '2021-10-29 02:50:31'),
(43, 'http://127.0.0.1:8000/layanan/sop_balai', '617b54b0f4183', '2021-10-29 02:50:36', '2021-10-29 02:50:36'),
(44, 'http://127.0.0.1:8000/layanan/jaringan_informasi_dan_dokumentasi', '617b54b0f4183', '2021-10-29 02:51:28', '2021-10-29 02:51:28'),
(45, 'http://127.0.0.1:8000/layanan/surat_keputusan_balai', '617b54b0f4183', '2021-10-29 02:51:32', '2021-10-29 02:51:32'),
(46, 'http://127.0.0.1:8000/layanan/pejabat_LHKPN_-_LHKASN', '617b54b0f4183', '2021-10-29 02:51:35', '2021-10-29 02:51:35'),
(47, 'http://127.0.0.1:8000/galeri/photo', '617b54b0f4183', '2021-10-29 02:54:32', '2021-10-29 02:54:32'),
(48, 'http://127.0.0.1:8000/artikel/pertanian/4-sekilas-tentang-pestisida', '617b54b0f4183', '2021-10-29 03:02:25', '2021-10-29 03:02:25'),
(49, 'http://127.0.0.1:8000/artikel/pertanian/5-sekilas-tentang-pestisida-2', '617b54b0f4183', '2021-10-29 03:12:48', '2021-10-29 03:12:48'),
(50, 'http://127.0.0.1:8000/layanan/rencana_strategis', '617b54b0f4183', '2021-10-29 03:16:12', '2021-10-29 03:16:12'),
(51, 'http://127.0.0.1:8000', '617baef5ee572', '2021-10-29 08:21:10', '2021-10-29 08:21:10'),
(52, 'http://127.0.0.1:8000/lembaga/tentang', '617baef5ee572', '2021-10-29 08:40:28', '2021-10-29 08:40:28'),
(53, 'http://127.0.0.1:8000', '617bb646c0368', '2021-10-29 08:52:22', '2021-10-29 08:52:22'),
(54, 'http://127.0.0.1:8000/lembaga/tentang', '617bb646c0368', '2021-10-29 08:56:55', '2021-10-29 08:56:55'),
(55, 'http://127.0.0.1:8000/lembaga/struktur', '617baef5ee572', '2021-10-29 08:56:59', '2021-10-29 08:56:59'),
(56, 'http://127.0.0.1:8000/lembaga/struktur', '617bb646c0368', '2021-10-29 08:57:00', '2021-10-29 08:57:00'),
(57, 'http://127.0.0.1:8000/lembaga/sdm', '617baef5ee572', '2021-10-29 08:57:04', '2021-10-29 08:57:04'),
(58, 'http://127.0.0.1:8000/lembaga/sdm', '617bb646c0368', '2021-10-29 08:57:05', '2021-10-29 08:57:05'),
(59, 'http://127.0.0.1:8000/artikel/pelatihan', '617baef5ee572', '2021-10-29 08:57:08', '2021-10-29 08:57:08'),
(60, 'http://127.0.0.1:8000/artikel/pelatihan', '617bb646c0368', '2021-10-29 08:57:08', '2021-10-29 08:57:08'),
(61, 'http://127.0.0.1:8000/artikel/pertanian', '617baef5ee572', '2021-10-29 08:57:11', '2021-10-29 08:57:11'),
(62, 'http://127.0.0.1:8000/artikel/pertanian', '617bb646c0368', '2021-10-29 08:57:12', '2021-10-29 08:57:12'),
(63, 'http://127.0.0.1:8000/artikel/umum', '617baef5ee572', '2021-10-29 08:57:16', '2021-10-29 08:57:16'),
(64, 'http://127.0.0.1:8000/artikel/umum', '617bb646c0368', '2021-10-29 08:57:16', '2021-10-29 08:57:16'),
(65, 'http://127.0.0.1:8000/layanan/sop_balai', '617baef5ee572', '2021-10-29 08:57:18', '2021-10-29 08:57:18'),
(66, 'http://127.0.0.1:8000/layanan/sop_balai', '617bb646c0368', '2021-10-29 08:57:18', '2021-10-29 08:57:18'),
(67, 'http://127.0.0.1:8000/layanan/jaringan_informasi_dan_dokumentasi', '617baef5ee572', '2021-10-29 08:57:26', '2021-10-29 08:57:26'),
(68, 'http://127.0.0.1:8000/layanan/jaringan_informasi_dan_dokumentasi', '617bb646c0368', '2021-10-29 08:57:26', '2021-10-29 08:57:26'),
(69, 'http://127.0.0.1:8000/layanan/surat_keputusan_balai', '617baef5ee572', '2021-10-29 08:57:30', '2021-10-29 08:57:30'),
(70, 'http://127.0.0.1:8000/layanan/surat_keputusan_balai', '617bb646c0368', '2021-10-29 08:57:31', '2021-10-29 08:57:31'),
(71, 'http://127.0.0.1:8000', '617d07b0e30fa', '2021-10-30 08:52:01', '2021-10-30 08:52:01'),
(72, 'http://127.0.0.1:8000', '617d0c0606c55', '2021-10-30 09:10:30', '2021-10-30 09:10:30'),
(73, 'http://127.0.0.1:8000/lembaga/tentang', '617d0c0606c55', '2021-10-30 09:17:45', '2021-10-30 09:17:45'),
(74, 'http://127.0.0.1:8000/lembaga/tentang', '617d07b0e30fa', '2021-10-30 09:17:45', '2021-10-30 09:17:45'),
(75, 'http://127.0.0.1:8000/lembaga/struktur', '617d0c0606c55', '2021-10-30 09:27:11', '2021-10-30 09:27:11'),
(76, 'http://127.0.0.1:8000/lembaga/struktur', '617d07b0e30fa', '2021-10-30 09:27:11', '2021-10-30 09:27:11'),
(77, 'http://127.0.0.1:8000/lembaga/sdm', '617d0c0606c55', '2021-10-30 09:27:14', '2021-10-30 09:27:14'),
(78, 'http://127.0.0.1:8000/lembaga/sdm', '617d07b0e30fa', '2021-10-30 09:27:14', '2021-10-30 09:27:14'),
(79, 'http://127.0.0.1:8000/artikel/pelatihan', '617d07b0e30fa', '2021-10-30 09:37:59', '2021-10-30 09:37:59'),
(80, 'http://127.0.0.1:8000/artikel/pelatihan', '617d0c0606c55', '2021-10-30 09:37:59', '2021-10-30 09:37:59'),
(81, 'http://127.0.0.1:8000/artikel/pertanian', '617d07b0e30fa', '2021-10-30 09:40:58', '2021-10-30 09:40:58'),
(82, 'http://127.0.0.1:8000/artikel/pertanian', '617d0c0606c55', '2021-10-30 09:40:58', '2021-10-30 09:40:58'),
(83, 'http://127.0.0.1:8000/layanan/sop_balai', '617d07b0e30fa', '2021-10-30 09:44:59', '2021-10-30 09:44:59'),
(84, 'http://127.0.0.1:8000/layanan/sop_balai', '617d0c0606c55', '2021-10-30 09:44:59', '2021-10-30 09:44:59'),
(85, 'http://127.0.0.1:8000/layanan/jaringan_informasi_dan_dokumentasi', '617d07b0e30fa', '2021-10-30 09:46:33', '2021-10-30 09:46:33'),
(86, 'http://127.0.0.1:8000/layanan/jaringan_informasi_dan_dokumentasi', '617d0c0606c55', '2021-10-30 09:46:33', '2021-10-30 09:46:33'),
(87, 'http://127.0.0.1:8000/layanan/surat_keputusan_balai', '617d07b0e30fa', '2021-10-30 09:46:38', '2021-10-30 09:46:38'),
(88, 'http://127.0.0.1:8000/layanan/surat_keputusan_balai', '617d0c0606c55', '2021-10-30 09:46:39', '2021-10-30 09:46:39'),
(89, 'http://127.0.0.1:8000/layanan/info_pelatihan', '617d07b0e30fa', '2021-10-30 09:46:47', '2021-10-30 09:46:47'),
(90, 'http://127.0.0.1:8000/layanan/info_pelatihan', '617d0c0606c55', '2021-10-30 09:46:48', '2021-10-30 09:46:48'),
(91, 'http://127.0.0.1:8000/layanan/pejabat_LHKPN_-_LHKASN', '617d07b0e30fa', '2021-10-30 09:46:57', '2021-10-30 09:46:57'),
(92, 'http://127.0.0.1:8000/layanan/pejabat_LHKPN_-_LHKASN', '617d0c0606c55', '2021-10-30 09:46:57', '2021-10-30 09:46:57'),
(93, 'http://127.0.0.1:8000/satker/sistem_pengendalian_intern', '617d07b0e30fa', '2021-10-30 09:49:15', '2021-10-30 09:49:15'),
(94, 'http://127.0.0.1:8000/satker/sistem_pengendalian_intern', '617d0c0606c55', '2021-10-30 09:49:16', '2021-10-30 09:49:16'),
(95, 'http://127.0.0.1:8000/galeri/photo', '617d07b0e30fa', '2021-10-30 09:55:52', '2021-10-30 09:55:52'),
(96, 'http://127.0.0.1:8000/galeri/photo', '617d0c0606c55', '2021-10-30 09:55:52', '2021-10-30 09:55:52'),
(97, 'http://127.0.0.1:8000/satker/WBK_dan_WBBM', '617d07b0e30fa', '2021-10-30 10:00:20', '2021-10-30 10:00:20'),
(98, 'http://127.0.0.1:8000/satker/WBK_dan_WBBM', '617d0c0606c55', '2021-10-30 10:00:20', '2021-10-30 10:00:20'),
(99, 'http://127.0.0.1:8000/satker/PPID', '617d07b0e30fa', '2021-10-30 10:00:26', '2021-10-30 10:00:26'),
(100, 'http://127.0.0.1:8000/satker/PPID', '617d0c0606c55', '2021-10-30 10:00:26', '2021-10-30 10:00:26'),
(101, 'http://127.0.0.1:8000/satker/pengadaan_barang_dan_jasa', '617d07b0e30fa', '2021-10-30 10:00:29', '2021-10-30 10:00:29'),
(102, 'http://127.0.0.1:8000/satker/pengadaan_barang_dan_jasa', '617d0c0606c55', '2021-10-30 10:00:29', '2021-10-30 10:00:29'),
(103, 'http://127.0.0.1:8000/galeri/video', '617d0c0606c55', '2021-10-30 10:08:10', '2021-10-30 10:08:10'),
(104, 'http://127.0.0.1:8000/galeri/video', '617d07b0e30fa', '2021-10-30 10:08:11', '2021-10-30 10:08:11'),
(105, 'http://127.0.0.1:8000', '617e7751ed576', '2021-10-31 11:00:34', '2021-10-31 11:00:34'),
(106, 'http://127.0.0.1:8000', '617e77a4a5c68', '2021-10-31 11:01:56', '2021-10-31 11:01:56'),
(107, 'http://127.0.0.1:8000/satker/sistem_pengendalian_intern', '617e7751ed576', '2021-10-31 11:02:08', '2021-10-31 11:02:08'),
(108, 'http://127.0.0.1:8000/artikel/pelatihan', '617e77a4a5c68', '2021-10-31 11:02:21', '2021-10-31 11:02:21'),
(109, 'http://127.0.0.1:8000', '617e7df245bb2', '2021-10-31 11:28:50', '2021-10-31 11:28:50'),
(110, 'http://192.168.0.133/Batangkaluku/public', '617e7df245bb2', '2021-10-31 11:42:43', '2021-10-31 11:42:43'),
(111, 'http://192.168.0.133:81', '617e7df245bb2', '2021-10-31 11:46:28', '2021-10-31 11:46:28'),
(112, 'http://127.0.0.1:8000', '617e851a2e874', '2021-10-31 11:59:22', '2021-10-31 11:59:22'),
(113, 'http://127.0.0.1:8000/lembaga/tentang', '617e851a2e874', '2021-10-31 11:59:27', '2021-10-31 11:59:27'),
(114, 'http://127.0.0.1:8000/lembaga/sdm', '617e851a2e874', '2021-10-31 11:59:29', '2021-10-31 11:59:29'),
(115, 'http://192.168.0.133:81/artikel/pelatihan/8-capai-tujuan-pertanian-dengan-sumberdaya-manusia-pertanian-yang-handal', '617e7df245bb2', '2021-10-31 12:04:29', '2021-10-31 12:04:29'),
(116, 'http://127.0.0.1:8000/lembaga/struktur', '617e851a2e874', '2021-10-31 12:23:04', '2021-10-31 12:23:04'),
(117, 'http://127.0.0.1:8000/lembaga/tentang', '617e7751ed576', '2021-10-31 12:28:17', '2021-10-31 12:28:17'),
(118, 'http://127.0.0.1:8000/lembaga/struktur', '617e7751ed576', '2021-10-31 12:28:20', '2021-10-31 12:28:20'),
(119, 'http://192.168.0.133:81/artikel/umum/12-presiden-jokowi-tanam-jagung-di-sorong-ajak-petani-milenial-jadi-motor-penggerak-pertanian', '617e7df245bb2', '2021-10-31 12:35:41', '2021-10-31 12:35:41'),
(120, 'http://192.168.0.133:81/artikel/pelatihan/15-bbpp-batangkaluku-gelar-pelatihan-fungsional-dasar-bagi-penyuluh-pertanian-terampil-angakatan-i', '617e7df245bb2', '2021-10-31 12:36:42', '2021-10-31 12:36:42'),
(121, 'http://192.168.0.133:81/lembaga/tentang', '617e7df245bb2', '2021-10-31 13:10:36', '2021-10-31 13:10:36'),
(122, 'http://192.168.0.133:81/lembaga/struktur', '617e7df245bb2', '2021-10-31 13:10:45', '2021-10-31 13:10:45'),
(123, 'http://192.168.0.133:81/lembaga/sdm', '617e7df245bb2', '2021-10-31 13:10:51', '2021-10-31 13:10:51'),
(124, 'http://192.168.0.133:81/layanan/sop_balai', '617e7df245bb2', '2021-10-31 13:38:10', '2021-10-31 13:38:10'),
(125, 'http://192.168.0.133:81/satker/sistem_pengendalian_intern', '617e7df245bb2', '2021-10-31 13:38:16', '2021-10-31 13:38:16'),
(126, 'http://192.168.0.133:81/satker/PPID', '617e7df245bb2', '2021-10-31 13:38:22', '2021-10-31 13:38:22'),
(127, 'http://127.0.0.1:8000/artikel/pelatihan/15-bbpp-batangkaluku-gelar-pelatihan-fungsional-dasar-bagi-penyuluh-pertanian-terampil-angakatan-i', '617e7751ed576', '2021-10-31 14:11:09', '2021-10-31 14:11:09'),
(128, 'http://192.168.1.225:81', '617ea85de4149', '2021-10-31 14:29:50', '2021-10-31 14:29:50'),
(129, 'http://192.168.1.225:81/layanan/sop_balai', '617ea85de4149', '2021-10-31 14:39:52', '2021-10-31 14:39:52'),
(130, 'http://192.168.1.225:81/layanan/info_pelatihan', '617ea85de4149', '2021-10-31 14:39:55', '2021-10-31 14:39:55'),
(131, 'http://127.0.0.1:8000/lembaga/sdm', '617e7751ed576', '2021-10-31 14:45:00', '2021-10-31 14:45:00'),
(132, 'http://192.168.1.225:81/lembaga/tentang', '617ea85de4149', '2021-10-31 14:47:08', '2021-10-31 14:47:08'),
(133, 'http://192.168.1.225:81/layanan/surat_keputusan_balai', '617ea85de4149', '2021-10-31 14:52:04', '2021-10-31 14:52:04'),
(134, 'http://192.168.1.225:81/layanan/jaringan_informasi_dan_dokumentasi', '617ea85de4149', '2021-10-31 14:55:26', '2021-10-31 14:55:26'),
(135, 'http://192.168.1.225:81/layanan/pejabat_LHKPN_-_LHKASN', '617ea85de4149', '2021-10-31 15:00:51', '2021-10-31 15:00:51'),
(136, 'http://192.168.1.225:81/layanan/rencana_strategis', '617ea85de4149', '2021-10-31 15:12:45', '2021-10-31 15:12:45'),
(137, 'http://192.168.1.225:81/layanan/rencana_kerja_tahunan', '617ea85de4149', '2021-10-31 15:14:58', '2021-10-31 15:14:58'),
(138, 'http://192.168.1.225:81/satker/sistem_pengendalian_intern', '617ea85de4149', '2021-10-31 15:21:17', '2021-10-31 15:21:17'),
(139, 'http://192.168.1.225:81/satker/PPID', '617ea85de4149', '2021-10-31 15:23:31', '2021-10-31 15:23:31'),
(140, 'http://192.168.1.225:81/satker/WBK_dan_WBBM', '617ea85de4149', '2021-10-31 15:25:07', '2021-10-31 15:25:07'),
(141, 'http://192.168.1.225:81/satker/pengadaan_barang_dan_jasa', '617ea85de4149', '2021-10-31 15:29:05', '2021-10-31 15:29:05'),
(142, 'http://192.168.1.225:81/satker/perpustakaan', '617ea85de4149', '2021-10-31 15:30:20', '2021-10-31 15:30:20'),
(143, 'http://192.168.1.225:81/satker/ISO', '617ea85de4149', '2021-10-31 15:31:42', '2021-10-31 15:31:42'),
(144, 'http://192.168.1.225:81/layanan/lakin_-_lakip', '617ea85de4149', '2021-10-31 15:32:32', '2021-10-31 15:32:32'),
(145, 'http://192.168.1.225:81/layanan/IKM', '617ea85de4149', '2021-10-31 15:34:32', '2021-10-31 15:34:32'),
(146, 'http://192.168.1.225:81/layanan/keuangan', '617ea85de4149', '2021-10-31 15:36:00', '2021-10-31 15:36:00'),
(147, 'http://192.168.1.225:81/layanan/aset', '617ea85de4149', '2021-10-31 15:36:05', '2021-10-31 15:36:05'),
(148, 'http://127.0.0.1:8000', '617ec483321aa', '2021-10-31 16:29:55', '2021-10-31 16:29:55'),
(149, 'http://127.0.0.1:8000/satker/sistem_pengendalian_intern', '617ec483321aa', '2021-10-31 16:30:02', '2021-10-31 16:30:02'),
(150, 'http://127.0.0.1:8000/layanan/sop_balai', '617ec483321aa', '2021-10-31 16:30:06', '2021-10-31 16:30:06'),
(151, 'http://127.0.0.1:8000/layanan/aset', '617ec483321aa', '2021-10-31 16:30:12', '2021-10-31 16:30:12'),
(152, 'http://127.0.0.1:8000/lembaga/tentang', '617ec483321aa', '2021-10-31 16:39:04', '2021-10-31 16:39:04'),
(153, 'http://127.0.0.1:8000/lembaga/sdm', '617ec483321aa', '2021-10-31 16:39:08', '2021-10-31 16:39:08'),
(154, 'http://localhost:8000', '617f9a7b4b400', '2021-11-01 07:42:51', '2021-11-01 07:42:51'),
(155, 'http://localhost:8001', '617f9a7b4b400', '2021-11-01 07:51:11', '2021-11-01 07:51:11'),
(156, 'http://localhost:8001/artikel/pelatihan/21-tingkatkan-kapasitas-camat-bbpp-batangkaluku-gelar-pelatihan-pertanian', '617f9a7b4b400', '2021-11-01 07:52:27', '2021-11-01 07:52:27'),
(157, 'http://localhost:8001/artikel/pelatihan', '617f9a7b4b400', '2021-11-01 07:52:45', '2021-11-01 07:52:45'),
(158, 'http://localhost:8001/artikel/pertanian', '617f9a7b4b400', '2021-11-01 07:53:05', '2021-11-01 07:53:05'),
(159, 'http://localhost:8001/artikel/umum', '617f9a7b4b400', '2021-11-01 07:53:10', '2021-11-01 07:53:10'),
(160, 'http://localhost:8001/artikel/umum/12-presiden-jokowi-tanam-jagung-di-sorong-ajak-petani-milenial-jadi-motor-penggerak-pertanian', '617f9a7b4b400', '2021-11-01 07:53:41', '2021-11-01 07:53:41'),
(161, 'http://localhost:8001/satker/sistem_pengendalian_intern', '617f9a7b4b400', '2021-11-01 07:54:13', '2021-11-01 07:54:13'),
(162, 'http://localhost:8001/satker/WBK_dan_WBBM', '617f9a7b4b400', '2021-11-01 07:54:16', '2021-11-01 07:54:16'),
(163, 'http://localhost:8001/satker/PPID', '617f9a7b4b400', '2021-11-01 07:54:19', '2021-11-01 07:54:19'),
(164, 'http://localhost:8001/satker/pengadaan_barang_dan_jasa', '617f9a7b4b400', '2021-11-01 07:54:35', '2021-11-01 07:54:35'),
(165, 'http://localhost:8001/satker/perpustakaan', '617f9a7b4b400', '2021-11-01 07:55:21', '2021-11-01 07:55:21'),
(166, 'http://localhost:8001/satker/ISO', '617f9a7b4b400', '2021-11-01 07:55:27', '2021-11-01 07:55:27'),
(167, 'http://localhost:8001/layanan/sop_balai', '617f9a7b4b400', '2021-11-01 07:57:20', '2021-11-01 07:57:20'),
(168, 'http://localhost:8001/layanan/jaringan_informasi_dan_dokumentasi', '617f9a7b4b400', '2021-11-01 07:57:31', '2021-11-01 07:57:31'),
(169, 'http://localhost:8001/layanan/surat_keputusan_balai', '617f9a7b4b400', '2021-11-01 07:57:34', '2021-11-01 07:57:34'),
(170, 'http://localhost:8001/layanan/info_pelatihan', '617f9a7b4b400', '2021-11-01 07:57:41', '2021-11-01 07:57:41'),
(171, 'http://localhost:8001/layanan/pejabat_LHKPN_-_LHKASN', '617f9a7b4b400', '2021-11-01 07:57:49', '2021-11-01 07:57:49'),
(172, 'http://localhost:8001/layanan/rencana_strategis', '617f9a7b4b400', '2021-11-01 07:58:14', '2021-11-01 07:58:14'),
(173, 'http://localhost:8001/layanan/rencana_kerja_tahunan', '617f9a7b4b400', '2021-11-01 07:58:36', '2021-11-01 07:58:36'),
(174, 'http://localhost:8001/layanan/lakin_-_lakip', '617f9a7b4b400', '2021-11-01 07:58:46', '2021-11-01 07:58:46'),
(175, 'http://localhost:8001/layanan/IKM', '617f9a7b4b400', '2021-11-01 07:58:52', '2021-11-01 07:58:52'),
(176, 'http://localhost:8001/layanan/keuangan', '617f9a7b4b400', '2021-11-01 07:58:56', '2021-11-01 07:58:56'),
(177, 'http://localhost:8001/layanan/aset', '617f9a7b4b400', '2021-11-01 07:58:59', '2021-11-01 07:58:59'),
(178, 'http://localhost:8001/artikel/pertanian/23-penggunaan-pestisida', '618009d1b44bf', '2021-11-01 15:37:53', '2021-11-01 15:37:53'),
(179, 'http://localhost:8001', '618009d1b44bf', '2021-11-01 15:38:02', '2021-11-01 15:38:02'),
(180, 'http://127.0.0.1:8000', '6187484066065', '2021-11-07 03:30:08', '2021-11-07 03:30:08'),
(181, 'http://127.0.0.1:8000', '6187be9eb0976', '2021-11-07 11:55:10', '2021-11-07 11:55:10'),
(182, 'http://127.0.0.1:8000/lembaga/tentang', '6187be9eb0976', '2021-11-07 13:38:26', '2021-11-07 13:38:26'),
(183, 'http://127.0.0.1:8000/lembaga/sdm', '6187be9eb0976', '2021-11-07 13:38:30', '2021-11-07 13:38:30'),
(184, 'http://127.0.0.1:8000', '618901ed42f57', '2021-11-08 10:54:37', '2021-11-08 10:54:37'),
(185, 'http://127.0.0.1:8000', '618a6dc008c48', '2021-11-09 12:46:56', '2021-11-09 12:46:56'),
(186, 'http://127.0.0.1:8000', '618a7918a6fc3', '2021-11-09 13:35:20', '2021-11-09 13:35:20'),
(187, 'http://127.0.0.1:8000', '618e47ee02e99', '2021-11-12 10:55:02', '2021-11-12 10:55:02'),
(188, 'http://127.0.0.1:8000/satker/sistem_pengendalian_intern', '618e47ee02e99', '2021-11-12 13:45:17', '2021-11-12 13:45:17'),
(189, 'http://127.0.0.1:8000', '619bb5836b992', '2021-11-22 15:22:08', '2021-11-22 15:22:08'),
(190, 'http://127.0.0.1:8000', '61b96c2fcbcbb', '2021-12-15 04:16:47', '2021-12-15 04:16:47'),
(191, 'http://127.0.0.1:8000', '61c53c1e185f8', '2021-12-24 03:18:54', '2021-12-24 03:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_header_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_content_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `user_create` int(10) UNSIGNED DEFAULT NULL,
  `user_update` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `text_header`, `text_content`, `text_header_en`, `text_content_en`, `order_id`, `is_active`, `user_create`, `user_update`, `created_at`, `updated_at`, `url`) VALUES
(3, 'slider/slider_20211031213308.jpg', 'MOTTO', 'Kerja Keras, Cerdas, Ikhlas dan Berkualitas', 'MOTTO', 'Hard Work, intelligent, sincere, and quality', NULL, 1, NULL, NULL, '2021-09-26 18:03:09', '2021-10-31 13:33:08', NULL),
(4, 'slider/slider_20210927020541.png', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2021-09-26 18:05:41', '2021-09-26 18:05:41', NULL),
(5, 'slider/slider_20211031223124.jpg', NULL, NULL, NULL, NULL, 2, 1, NULL, NULL, '2021-10-31 14:31:24', '2021-10-31 14:31:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `training_info`
--

CREATE TABLE `training_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `time_start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `embed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `user_create` int(10) UNSIGNED DEFAULT NULL,
  `user_update` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_info`
--

INSERT INTO `training_info` (`id`, `image`, `title`, `title_en`, `description`, `description_en`, `date`, `time_start`, `time_end`, `location`, `embed`, `is_active`, `user_create`, `user_update`, `created_at`, `updated_at`, `attachment`) VALUES
(3, 'training/Jadwal Tentatif Pelatihan 2021_20211031224431.jpg', 'Jadwal Tentatif Pelatihan 2021', NULL, '<p>Jadwal Tentatif Pelatihan Balai Besar Pelatihan Pertanian (BBPP) Batangkaluku Tahun 2021<br />\nSelengkapnya dapat dilihat dibawah :&nbsp;</p>', NULL, '2021-10-31', '20:00', '04:00', 'BBPP Batangkaluku', NULL, 1, NULL, NULL, '2021-10-31 14:44:31', '2021-10-31 14:44:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@email.com', NULL, '$2y$10$CIv3szF3rX3AKuYTPyW2re9BKyTSSGXnmFNmXAz5r8Xpc7B0i6dDm', NULL, '2021-08-21 08:31:44', '2021-08-21 08:31:44'),
(2, 'Admin', 'admin@batangkaluku.com', NULL, '$2y$10$t1s/pDsPRxjmBrmHSK/JCO6KYQLoqMw2stl2VYp.DBOV67RyeVZzG', NULL, '2021-10-31 11:56:22', '2021-10-31 11:56:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`id`),
  ADD KEY `award_human_resource_id_foreign` (`human_resource_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `human_resources`
--
ALTER TABLE `human_resources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `human_resources_department_id_foreign` (`department_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_attachment`
--
ALTER TABLE `page_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_attachment_page_id_foreign` (`page_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `route_visitor`
--
ALTER TABLE `route_visitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_info`
--
ALTER TABLE `training_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `award`
--
ALTER TABLE `award`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `human_resources`
--
ALTER TABLE `human_resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `page_attachment`
--
ALTER TABLE `page_attachment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `route_visitor`
--
ALTER TABLE `route_visitor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `training_info`
--
ALTER TABLE `training_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `award`
--
ALTER TABLE `award`
  ADD CONSTRAINT `award_human_resource_id_foreign` FOREIGN KEY (`human_resource_id`) REFERENCES `human_resources` (`id`);

--
-- Constraints for table `human_resources`
--
ALTER TABLE `human_resources`
  ADD CONSTRAINT `human_resources_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_attachment`
--
ALTER TABLE `page_attachment`
  ADD CONSTRAINT `page_attachment_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
