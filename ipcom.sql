-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Jun 2016 pada 01.33
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipcom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `usrname` varchar(30) NOT NULL,
  `psw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`usrname`, `psw`) VALUES
('admin', 'admin'),
('admin', 'admin'),
('juliet', 'romeo2010'),
('mardi', 'mardi'),
('mardi', 'mardi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `person`
--

CREATE TABLE `person` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `person`
--

INSERT INTO `person` (`username`, `email`, `pass`) VALUES
('juliet', 'juliet@romeo', 'romeo'),
('mardi', 'mardianasafutri@gmai', 'mardi'),
('nanda', 'nanda@gmail.com', 'nanda'),
('putri', 'putri@gmail.com', 'putri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posisi`
--

CREATE TABLE `posisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `namagambar` varchar(20) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `negara` varchar(30) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posisi`
--

INSERT INTO `posisi` (`id`, `nama`, `about`, `namagambar`, `gambar`, `lat`, `lng`, `negara`, `telepon`, `email`) VALUES
(22, 'Boracay Island, Philipines', 'Pulau Boracay tetap sebagai salah satu tujuan pantai paling disukai oleh sebagian besar turis lokal maupun asing yang berencana untuk mengunjungi Filipina. Letaknya di sebelah selatan pulau Luzon, dan termasuk destinasi wisata terfavorit karena memiliki pantai yang putih dan bersih. Perjalanan menuju pulau Boracay terbilang cukup panjang karena harus menggunakan pesawat kecil dari kota Manila menuju kota Kalibo di kepulauan Panay selama kurang lebih 45 menit, kemudian dilanjutkan dengan perjalanan selama dua jam ke pelabuhan di Caticlan dengan bis. Setibanya di Caticlan, wisatawan masih harus menyeberang selama 20 menit untuk menuju pulau Boracay. Namun, lamanya perjalanan yang harus ditempuh akan terbayar lunas saat tiba di sana. Wistawan akan dibuat takjub dengan pemandangan indah yang terhampar di sepanjang Bulabog Beach dan White Beach. Ya, pulau Boracay memang memiliki dua pantai utama. Yang pertama adalah Bulabog Beach. Suasananya yang tenang dan damai dengan perpaduan pasir putih dan halus, air laut yang tenang serta rumput laut yang bergoyang seirama dengan arus air akan membuat pengunjungnya merasa rileks dan nyaman. Pantai utama ke dua yaitu White Beach, menawarkan suasana yang berbeda karena merupakan pusat keramaian di Boracay. Selain banyaknya tempat makan dan penginapan, di sini juga merupakan pusat informasi pariwisata, tempat hiburan malam dan toko suvenir.', 'boracay', 'Top-10-Pantai-Indah-Dunia-Boracay.jpg', 11.969365, 121.892212, 'Philipines', '0543467821212', 'philipnestourism@journey.com'),
(26, 'Phu Quoc Island, Vietnam', 'Pantai menawan Vietnam memiliki keunikan tersendiri untuk menjadi bagian dari daftar tempat tujuan paling populer di Asia. Meskipun Pantai Nha Trang merupakan pantai paling peopuler di negeri ini, namun pulau Phu Quoc juga menawarkan panorama dan suasana yang tak kalah seru. Di sini anda bisa menikmati pemandangan spektakuler dari kejernihan air dan pantainya elegan. Selain itu, perairan Phu Quoc adalah rumah bagi beragam kehidupan laut yang kaya serta terumbu karang yang unik di bawah air. Membuat liburan anda semakin menyatu dengan alam, anda bisa menjelajahi berbagai pegunungan yang dengan air terjun, tanaman yang indah dan hewan asli yang langka di negeri ini. Pulau Phu Quoc atau yang dikenal juga dengan Koh Trol ini sebelumnya milik Kamboja, nama Koh Trol adalah nama dalam bahasa Kamboja.', 'vietnam.jpg', 'phuquoc.jpg', 10.135673, 103.672951, 'Vietnam, Phu Quoc Island', '0458329540125', 'vietnamjourney@yahoo.com'),
(28, 'Maya Bay in Koh Phi Phi (Thailand)', 'Maya Bay jadi dikenal dunia gara-gara film The Beach yang dibintangi oleh Leonardo Di Caprio. Dulu, sebelum film ini ada, Maya Bay kalah pamor dibanding pantai-pantai lain di sekitarnya. Tapi film The Beach membuka mata dunia bahwa ternyata ada surga tersembunyi di sekitar situ. Maya Bay terletak di wilayah Koh Phi Phi (Thailand) dan bisa dicapai lewat Phuket atau Krabi. Dan setiap harinya, pasti ada saja rombongan turis yang ingin menyaksikan secara langsung keindahan Maya Bay', 'thai1.jpg', '23.png', 7.738935, 98.768120, 'Koh Phi-Phi, Thailand', '0321486573249', 'thailandtouris@gmail.com'),
(29, 'Seoul, Korea Selatan', 'Meskipun Seoul terkenal sebagai kota dengan icon fashion dan modernisasi industri dunia hiburannya, namun Korea Selatan tetap berdedikasi untuk setia melestarikan warisan budaya mereka. Di tengah-tengah pusat perbelanjaan utama di Seoul, anda akan menemukan peninggalan kuno masa lalu kota ini bahkan sebelum menara yang terbuat dari baja dan beton yang dibangun. Misalnya, Istana Gyeongbok yang merupakan istana terbesar dan tertua dari semua istana Dinasti Joseon. Seoul memiliki perpaduan antara masa lalu dan kini yang luar biasa dan membuatnya menjadi kota yang unik, menarik dan paling mengesankan di Asia. Jangan lupa cicipi juga kulinernya.', 'seoul', 'seoul-korea.jpg', 37.565289, 126.849464, 'Seoul, South Korea', '0321492827485', 'koreanstour@koreanstraveler.co'),
(33, 'Stasiun Kyeong-Wha, Jinhae - Korea Selatan', 'Stasiun ini sangat ramai dikunjungi oleh wisatawan dan fotografer, terutama saat musim semi berlangsung. Jinhe adalah sebuah distrik di Changwon City, di tepi tenggara Korea. Jinhe juga sudah terkenal sejak lama sebagai penyelenggara festival bunga sakura terbesar setiap tahunnya. Yang membuat stasiun ini menarik yaitu, di sepanjang sisi kanan dan kiri trek kereta ditumbuhi pohon-pohon sakura yang cantik. Saat kereta melaju dengan kencang, bunga-bunga sakura ini akan jatuh bertebaran, menciptakan hujan kelopak sakura yang indah.', 'korsel', 'Stasiun-Kyeong-Wha-Jinhae.jpg', 35.109371, 128.652176, 'Jinhae-gu, South Korea', '0431258493002', 'koreanstour@koreanstraveler.co'),
(34, 'Tokyo, Jepang', 'Saat mendengar kata Tokyo, hampir tidak mungkin untuk memisahkan kota ini dari gambar anime atau teknologi. Bahkan, kota Jepang megah ini terus ramai dan menciptakan penemuan yang menarik bagi dunia. Di sini, anda dapat menemukan mobil bergaya zooming, kereta bawah tanah, dan kapal yang elegan untuk keluar dari Tokyo. Jepang juga menjadi salah satu kota di Asia yang sangat pesat kemajuan teknologinya, serta gaya hidupnya yang serba cepat. Tidak ada orang malas di Jepang. Meski demikian, Jepang tetap memegang teguh nilai-nilai sejarah dan budaya, juga memperhatikan kebersihan serta keasrian alam yang tetap dijaga hingga saat ini. Wisata kulinernya juga tak kalah seru, dari kuliner terkenal seperti suhsi, onigiri dan bento, hingga makanan terekstrim seperti sperma ikan, odori don si cumi menari dan kadal panggang. ', 'japan', 'tokyo-japan.jpg', 35.673542, 139.570297, 'Tokyo, Japan', '0432231110342', 'enjoytokyo@traveler.com'),
(35, 'Pulau Bali, Indonesia', 'Merupakan salah satu tujuan bulan madu paling populer di dunia. Bali, adalah kota seribu candi yang menawarkan sejuta keunikan alam, budaya dan kuliner yang terbungkus menjadi satu dalam pariwisata mereka. Bali memiliki semua yang diimpikan oleh para traveler dan para wisatawan. Anda bisa memilih kegiatan yang harus dilakukan, seperti berjemur, memanjakan diri untuk relaksasi dan spa, olahraga air seperti snorkeling dan menyelam, atau menikmati makan malam romatis di restoran-restoran yang dimilikinya. Jika ingin menikmati keindahan khas budaya, ada berbagai pertunjukan yang bisa dinikmati, mulai dari penampilan tari kecak yang populer, tari pendet hingga berbagai kegiatan kebudaayn khas suku Bali yang ada.', 'ind', 'bali-indonesia.jpg', -8.283819, 115.198273, 'Bali, Indonesian', '+0213254', 'balitourism@indonesiantraveler'),
(37, 'Seopjikoji, Pulau Jeju', 'Melakukan perjalanan ke Pulau Jeju, Anda harus melakukan perencanaan yang matang dan bijak. Hal ini disebabkan karena Jeju menawarkan beragam tempat wisata yang pasti menggiurkan Anda. Salah satunya adalah Seopjikoji, sebuah tanjung di pantai yang terkenal dengan nuansa romantis dan ketenangannya. Tempat ini sering digunakan sebagai lokasi syuting film layar lebar ataupun drama Korea. Di sini, Anda bisa menikmati pemandangan bunga Canola berwarna kuning yang dipadukan cerahnya biru laut dan langit. Ada juga sebuah mercusuar yang bisa Anda gunakan untuk menikmati indahnya Pulau Jeju dari ketinggian.', 'jeju.jpg', 'jeju.jpg', 33.431583, 126.916061, 'Jeju Island, South Korean', '0832334565490', 'jejuisland@koreanstours.com'),
(38, 'Sapporo, Hokaido Prefecture', 'Merupakan kota terbesar kedua di Jepang bagian utara dan yang paling tidak berkembang diantara empat pulau utama Jepang. Cuaca di musim dingin banyak sekali salju, suhu yang mencapai di bawah nol dan lautan yang membeku, sementara ketika musim panas tidak mendapatkan panas dan lembab seperti di bagian lain negara Jepang. Dengan keindahan alam murni nya, Hokkaido menarik pecinta alam luar, seperti pemain ski dan snowboarders di musim dingin dan pejalan kaki, pengendara sepeda dan berkemah dari bulan Juni sampai September. Kota yang paling terkenal di Hokkaido adalah kota Sapporo, banyak orang yang berpikir bahwa itu adalah nama bir. Sapporo merupakan kota yang terbesar di Hokkaido. Anda dapat mencoba untuk menikmati makanan laut yang masih segar di kota ini.', 'jpn', 'Matsumae (Fukuyama) Castle Hokkaido.jpg', 43.059555, 141.090347, 'Hokaido Prefecture, Japan', '0323454323865', 'japan_holiday@japantraveler.co'),
(39, 'Hong Kong, Cina', 'Ada banyak sekali tempat menarik yang bisa dikunjungi saat anda berada d Hongkong. Terkenal sebagai salah satu negara dengan internet tercepat di dunia, anda tak perlu bingung jika tersesat atau mencari referensi tempat melalui GPS. Beberapa tempat menarik yang tak boleh terlewatkan di sini antara lain, Disney Land Hong Kong, Ngok Ping 360, Museum lilin Madam Tussaus dan Sky Terrace (dimana terdapat banyak patung lilin dari artis-artis dunia yang sayang sekali jika tidak diabadikan dalam jepretan kamera anda), Masjid Besar Kowloon, pusat perbelanjaan di Ladies Market dan Mongkok.', 'sasa', 'hongkong.jpg', 22.357935, 113.840858, 'Hongkong, China', '04323443210032', 'chinesewalks@china.com'),
(40, 'Jiuzhaigou Valley National Park\r\n', 'Ini dia tempat wisata di China yang menyuguhkan pemandangan alam nan eksotik. Lembah Jiuzhaigou telah digambarkan sebagai negeri dongeng karena memiliki banyak air terjun, pegunungan karst yang tertutup salju, pirus dan danau berwarna hijau yang begitu jernih, dan orang bisa melihat sampai kebagian dasar danau tersebut. Tempat wisata di Cina ini juga merupakan habitat bagi panda raksasa, meskipun kemungkinan untuk melihat hewan-hewan tersebut sangat tipis karena ukuran taman yang sangat luas dan jumlah wisatawan yang cukup padat, sehingga Panda Raksasa biasanya akan bersembunyi.', 'asas', 'Jiuzhaigou-China.jpg', 33.260048, 103.916412, 'Jiuzhaigou, China', '0432110985210', 'chinesewalks@china.com'),
(42, 'Phang Xi Pang Mountain', 'Bagi pendaki gunung, Fansipan Mountain adalah salah satu yang terbaik untuk mendaki gunung. Tempat wisata ini saat ini menduduki peringkat nomor 12 dalam daftar Tujuh Keajaiban Baru dunia. Fansipan Gunung ini terletak 9 km selatan-barat Sapa Townlet di Hoang Lien Mountain Range. Fansipan adalah merek â€œAtap dari Indocinaâ€ yang menjulang dengan ketinggian 3.143 m. Fansipan telah diusulkan untuk menjadi salah satu dari sedikit tempat eko-wisata dari Vietnam, dengan sekitar 2.024 bunga Faunal 327 varietas dan spesies. Puncak Fansipan dapat diakses sepanjang tahun. Waktu terbaik untuk membuat pendakian adalah dari pertengahan Oktober sampai pertengahan November, dan sekali lagi pada bulan Maret, saat bunga berkembang dan para pendaki mungkin lihatlah cemerlang karpet bunga, violet dan anggrek, rhododendron dan aglaias.', 'zd', '132.png', 22.303453, 103.704956, 'Phang Xi Pang, Vietnam', '0832144205435', 'vietnamjourney@yahoo.com'),
(43, 'Kaoh Tonsay, Kamboja\r\n', 'Dikenal juga sebagai The Rabbit Island. Letaknya sekitar 20 menit perjalanan dari dermaga Kep. Hal yang paling menakjubkan dari pulau ini adalah bentuk pulaunya yang yang menyerupai bentuk semanggi. Juga beberapa restoran, bar, dan beberapa bungalow bergaya pedesaan beberapa yang dapat memberikan nuansa liburan yang spektakuler. Kamar-kamar yang tersedia di beberapa resornya tidak memiliki fasilitas seperti TV, internet atau AC. Namun, di sinilah letak keunikannya. Karena pulau ini memang menawarkan liburan yang benar-benar membuat anda lebih dekat dan menikmati keindahan alam, dan melupakan sejenak teknologi modern.', 'zxax', 'koh-tunsay.jpg', 10.437291, 104.315941, 'Kaoh Tonsay, Kamboja', '0432900434561', 'beautifulkamboja@kamboja.com'),
(44, 'Byron Bay Beach', 'Pantai Teluk Byron ini dihiasi dengan mercusuar dan dikelilingi oleh lumba-lumba, pari, ikan paus dan penyu. Bekas stasiun New South Wales perburuan paus ini ternyata kota wisata masih sangat dipengaruhi oleh masa lalu bohemian modern, saat gaya hidup hippie berkembang. Bongo dan didgeridoos suara di taman, sarung, dan rambut gimbal umum, dan restoran vegetarian berlimpah. Menyerah pada getaran santai dan berjalan-jalan antara pantai dan bar untuk hari-rendah dan bahagia.', 'byoran', 'byoranbay.jpg.jpg', -28.646791, 153.567474, 'New Sout Wales, Australia', '0435697832102', 'austaliantour@gmail.au'),
(45, 'Havasu Fall, Grand Canyon, Arizona', 'Havasu Falls is a waterfall of Havasu Creek, located in the Grand Canyon, Arizona, USA. It is within Havasupai tribal lands.', 'hvs', 'Havasu falls-grand canyon-arizona-usa.jpg', 36.274063, -112.863670, 'Arizona, USA', '6282272068810', 'info@example.com'),
(46, 'Maldives ', 'The Maldives is a tropical nation in the Indian Ocean composed of 26 coral atolls, which are made up of hundreds of islands. Itâ€™s known for its beaches, blue lagoons and extensive reefs. The capital, MalÃ©, has a busy fish market, restaurants and shops on Majeedhee Magu and 17th-century Hukuru Miskiy (also known as Old Friday Mosque) made of coral stone. ', 'mld', 'maldives.png', 3.316789, 76.090279, 'Maldives Island', '6282272068810', 'info@example.com'),
(48, 'Big Beach Maui, Hawai, USA', 'This is one of those beaches you dream of. The sand runs into the ocean making swimming easier and the ocean more turquoise. With very little development nearby, lack of run off keeps the water clear and clean.', 'bg', 'Big Beach Maui Hawai USA.jpg', 20.632214, -156.452209, 'Hawai, USA', '6282272068810', 'info@example.com'),
(49, 'Hillier Lake (Pink Lake)', 'Lake Hillier is a saline lake on the edge of Middle Island, the largest of the islands and islets that make up the Recherche Archipelago in the Goldfields-Esperance region, off the south coast of Western Australia.', 'hl', 'Hiller lake (Pink Lake) Australia.jpeg', -34.094589, 123.167839, 'Australia', '6282272068810', 'info@example.com'),
(50, 'Danxia Landforms', 'Zhangye Danxia is known for the unusual colours of the rocks, which are smooth, sharp and several hundred meters tall. They are the result of deposits of sandstone and other minerals that occurred over 24 million years. The result, similar to a layer cake, is connected to the action of the same tectonic plates responsible for creating parts of the Himalayan mountains. Wind, rain, and time then sculpted extraordinary shapes, including towers, pillars, and ravines, with varying colours, patterns, and sizes. ', 'dl', 'Danxia Landforms - China.jpg', 20.839437, 80.128189, 'China', '6282272068810', 'info@example.com'),
(51, 'Ha Long Bay, Vietnam', 'Háº¡ Long Bay, in northeast Vietnam, is known for its emerald waters and thousands of towering limestone islands topped by rainforests. Junk boat tours and sea kayak expeditions take visitors past islands named for their shapes, including Stone Dog and Teapot islands. The region draws scuba divers, rock climbers and hikers, the latter favoring mountainous CÃ¡t BÃ  National Park.', 'hlb', 'Ha Long Bay - Vietnam.png', 20.945887, 106.891792, 'Vietnam', '6282272068810', 'info@example.com'),
(52, 'Danau Kelimutu, Indonesia', 'Danau ini dikenal dengan nama Danau Tiga Warna karena memiliki tiga warna yang berbeda, yaitu merah, biru, dan putih. Walaupun begitu, warna-warna tersebut selalu berubah-ubah seiring dengan perjalanan waktu.', 'dk', 'Danau kalimutu-Flores-Indo.jpg', -8.765704, 121.674080, 'Flores, Indonesia', '6282272068810', 'info@example.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
