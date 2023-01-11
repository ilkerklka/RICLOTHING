-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Oca 2023, 00:27:57
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `riclothing`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminuser` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `adminsifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `adminlevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `adminuser`, `adminsifre`, `adminlevel`) VALUES
(1, 'admin', '123456', 3),
(2, 'yonetici', '123', 2),
(3, 'bakici', '12', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adres`
--

CREATE TABLE `adres` (
  `id` int(11) NOT NULL,
  `kullaniciid` int(11) NOT NULL,
  `isim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyisim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` char(11) COLLATE utf8_turkish_ci NOT NULL,
  `il` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `ilce` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `mahalle` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tamadres` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `adresbasligi` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `adres`
--

INSERT INTO `adres` (`id`, `kullaniciid`, `isim`, `soyisim`, `telefon`, `il`, `ilce`, `mahalle`, `tamadres`, `adresbasligi`) VALUES
(4, 5, 'emre', 'kılcı', '5313515946', 'Aydın', 'EFELER', 'zafer', '133. sokak bina no.2  (aytepe camii üstü fakülte erkek öğrenci yurdu)', 'iş adresim'),
(5, 5, 'emre', 'kılcı', '05313515946', 'Aydın', 'EFELER', 'kkk', '133. sokak bina no.2  (aytepe camii üstü fakülte erkek öğrenci yurdu)', 'Okul adresim'),
(6, 5, 'ilker', 'kücükyılmaz', '05313515946', 'Aydın', 'EFELER', 'ZAFER', '133. sokak bina no.2  (aytepe camii üstü fakülte erkek öğrenci yurdu)', 'ev adresim'),
(7, 14, 'ilker', 'kücükyılmaz', '05313515946', 'Aydın', 'EFELER', 'zafer', '133. sokak bina no.2  (aytepe camii üstü fakülte erkek öğrenci yurdu)', 'EV AMA AİLE'),
(8, 15, 'Melisa', 'Çakar', '5552223344', 'Şırnak', 'İmamköy', 'Nebati Mahallase', 'Cami Yanı ', 'Manitamın evi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `favoriler`
--

CREATE TABLE `favoriler` (
  `id` int(11) NOT NULL,
  `urunid` int(11) NOT NULL,
  `musteriid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `favoriler`
--

INSERT INTO `favoriler` (`id`, `urunid`, `musteriid`) VALUES
(25, 3, 14),
(26, 2, 14),
(28, 2, 12),
(29, 3, 12),
(33, 2, 5),
(34, 3, 15),
(35, 2, 15),
(36, 13, 15);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kartlar`
--

CREATE TABLE `kartlar` (
  `id` int(11) NOT NULL,
  `kartadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kartno` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `kartsontarih` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `cvv` varchar(3) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int(11) NOT NULL,
  `AnaKategori` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `AltKategori` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `AnaKategori`, `AltKategori`) VALUES
(1, 'Erkek', 'Ayakkabı'),
(2, 'Erkek', 'Giyim'),
(3, 'Erkek', 'Aksesuar'),
(4, 'Erkek', 'Spor'),
(5, 'Kadın', 'Aksesuar'),
(6, 'Kadın', 'Giyim'),
(7, 'Kadın', 'Spor'),
(9, 'Kadın', 'Ayakkabı'),
(10, 'Çocuk', 'Genç(8-14)'),
(11, 'Çocuk', 'Çocuk(4-8)'),
(12, 'Çocuk', 'Bebek(0-4)'),
(13, 'Spor', 'Futbol'),
(14, 'Spor', 'Basketbol'),
(15, 'Spor', 'Koşu'),
(16, 'Spor', 'Training'),
(17, 'Spor', 'Diğer'),
(18, 'Markalar', 'Black&White'),
(19, 'Markalar', 'Wint'),
(20, 'Markalar', 'RISUM'),
(21, 'Markalar', 'Collage');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `isim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyisim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `dogumtarih` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `isim`, `soyisim`, `dogumtarih`, `mail`, `cinsiyet`, `sifre`) VALUES
(5, 'ilker', 'kücükyılmaz', '2003-05-24', 'ikoculuk@gmail.com', 'ERKEK', '0111'),
(6, 'emre', 'kılcıloğlu', '2002-05-10', 'emrekilcioglu@gmail.com', 'ERKEK', '123456'),
(7, 'Doğukan', 'Sirkeci', '2002-10-04', 'dogukansirkeci@gmail.com', 'ERKEK', '1234'),
(8, 'Reyhan', 'Koyunlu', '2002-10-12', 'reyhankoyunlu517@gmail.com', 'KADIN', '5645'),
(9, 'mustafa', 'keskin', '1999-05-10', 'mustafa@gmail.com', 'ERKEK', '123467'),
(10, 'zeynep', 'Ersin', '2015-11-05', 'zeynep@gmail.com', 'KADIN', 'asd31'),
(11, 'cabbar', 'Kesici', '1995-12-31', 'cabbar@gmail.com', 'ERKEK', '3548'),
(12, 'Menekşe', 'Tuncel', '1990-09-06', 'meneksetuncel09@gmail.com', 'KADIN', 'menekse09'),
(13, 'emre', 'koyunlu', '2000-10-10', 'annen@gma.com', 'ERKEK', '12'),
(14, 'ilke', 'kücükyılmaz', '2220-10-10', 'ilkecilik@gmail.com', 'KADIN', '123'),
(15, 'Muhammet', 'Talha', '1996-12-31', 'hzmh@gmail.com', 'ERKEK', 'hz.muh123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odeme`
--

CREATE TABLE `odeme` (
  `sepetid` int(11) NOT NULL,
  `adresid` int(11) NOT NULL,
  `kartid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `profil`
--

CREATE TABLE `profil` (
  `kullaniciid` int(11) NOT NULL,
  `adresid` int(11) NOT NULL,
  `favoriid` int(11) NOT NULL,
  `sepetid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `id` int(11) NOT NULL,
  `urunid` int(11) NOT NULL,
  `kullaniciid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`id`, `urunid`, `kullaniciid`) VALUES
(11, 14, 5),
(14, 3, 15),
(15, 13, 15);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `urunfoto` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunfoto2` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunfoto3` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunfoto4` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunfoto5` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunKategorisi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunKategorisi1` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunKategorisi2` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunbilgileri` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `s` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `m` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `l` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `xl` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `urunfoto`, `urunfoto2`, `urunfoto3`, `urunfoto4`, `urunfoto5`, `urunKategorisi`, `urunKategorisi1`, `urunKategorisi2`, `urunbilgileri`, `s`, `m`, `l`, `xl`, `urunadi`, `fiyat`) VALUES
(1, 'banner2.png', 'banner3.png', 'banner4.png', 'banner1.png', 'delta.png', 'Erkek', 'Ayakkabı', 'Giyim', 'Mükemmel konforlu tabanıyla ve su geçirmez derisiyle hizmetinizde', '100', '35', '45', '15', 'XL RI AYAKKABI', 350),
(2, 'banner3.png', 'banner4.png', 'banner2.png', 'banner1.png', 'delta.png', 'Erkek', 'Ayakkabı', 'Giyim', 'Bir ürün, birden fazla satıcı tarafından satılabilir. Birden fazla satıcı tarafından satışa sunulan ürünlerin satıcıları ürün için belirledikleri fiyata, satıcı puanlarına, teslimat statülerine, ürünlerdeki promosyonlara, kargonun bedava olup olmamasına ve ürünlerin hızlı teslimat ile teslim edilip edilememesine, ürünlerin stok ve kategorileri bilgilerine göre sıralanmaktadır.', '12', '42', '53', '75', 'UZUN ELBİSE', 450),
(3, 'image2.png', 'one.png', 'watch.png', 'image3.png', 'banner4.png', 'Erkek', 'Spor', 'Aksesuar', 'Ürünümüz mükkememl', '100', '20', '31', '69', 'XL RI SAAT', 1200),
(4, 'banner2.php', 'one.png', 'watch.png', 'banner1.png', 'delta.png', 'Erkek', 'Aksesuar', 'Giyim', 'Güzel Ürün :)', '100', '250', '231', '312', 'SAĞLAM PARÇA', 9999),
(13, '1525520872_wallhaven-514469.png', 'WhatsApp Image 2022-03-10 at 14.33.45.jpeg', 'anasayfa3.jpg', 'anasayfa2.jpg', 'massimiliano-morosinotto-3i5PHVp1Fkw-unsplash.jpg', 'Markalar', 'Wint', 'Collage', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Maecenas accumsan lacus vel facilisis volutpat. Ac tortor vitae purus faucibus ornare. Volutpat est velit egestas dui id ornare arcu. Eget arcu dictum varius duis at consectetur lorem. Laoreet non curabitur gravida arcu ac. Fames ac turpis egestas integer eget aliquet nibh. Porttitor lacus luctus accumsan tortor posuere ac ut consequat. Suspendisse interdum consectetur libe', '123', '1234', '41532', '324', 'Deneme Ürün', 1234),
(14, 'Girisyapfoto.jpg', 'deneme2.jpg', 'Girisyapfoto.jpg', 'arkaplan3.png', '1672311531.jpeg', 'Erkek', 'Aksesuar', 'Giyim', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '123', '2123', '1231', '2121', 'Özel Seri Fena Ürün', 1235);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `adres`
--
ALTER TABLE `adres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kullaniciid` (`kullaniciid`);

--
-- Tablo için indeksler `favoriler`
--
ALTER TABLE `favoriler`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `urunid` (`urunid`),
  ADD KEY `musteriid` (`musteriid`);

--
-- Tablo için indeksler `kartlar`
--
ALTER TABLE `kartlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `AnaKategori` (`AnaKategori`),
  ADD KEY `AltKategori` (`AltKategori`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `odeme`
--
ALTER TABLE `odeme`
  ADD PRIMARY KEY (`sepetid`,`adresid`,`kartid`),
  ADD KEY `adresid` (`adresid`),
  ADD KEY `kartid` (`kartid`);

--
-- Tablo için indeksler `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`kullaniciid`,`adresid`,`favoriid`,`sepetid`),
  ADD KEY `adresid` (`adresid`),
  ADD KEY `favoriid` (`favoriid`),
  ADD KEY `sepetid` (`sepetid`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `urunid` (`urunid`),
  ADD KEY `kullaniciid` (`kullaniciid`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `urunKategorisi1` (`urunKategorisi1`),
  ADD KEY `urunKategorisi2` (`urunKategorisi2`),
  ADD KEY `urunKategorisi` (`urunKategorisi`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `adres`
--
ALTER TABLE `adres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `favoriler`
--
ALTER TABLE `favoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Tablo için AUTO_INCREMENT değeri `kartlar`
--
ALTER TABLE `kartlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `adres`
--
ALTER TABLE `adres`
  ADD CONSTRAINT `adres_ibfk_1` FOREIGN KEY (`kullaniciid`) REFERENCES `kullanicilar` (`id`);

--
-- Tablo kısıtlamaları `favoriler`
--
ALTER TABLE `favoriler`
  ADD CONSTRAINT `favoriler_ibfk_1` FOREIGN KEY (`musteriid`) REFERENCES `kullanicilar` (`id`),
  ADD CONSTRAINT `favoriler_ibfk_2` FOREIGN KEY (`urunid`) REFERENCES `urunler` (`id`);

--
-- Tablo kısıtlamaları `odeme`
--
ALTER TABLE `odeme`
  ADD CONSTRAINT `odeme_ibfk_1` FOREIGN KEY (`sepetid`) REFERENCES `sepet` (`id`),
  ADD CONSTRAINT `odeme_ibfk_2` FOREIGN KEY (`adresid`) REFERENCES `adres` (`id`),
  ADD CONSTRAINT `odeme_ibfk_3` FOREIGN KEY (`kartid`) REFERENCES `kartlar` (`id`);

--
-- Tablo kısıtlamaları `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `profil_ibfk_2` FOREIGN KEY (`adresid`) REFERENCES `adres` (`id`),
  ADD CONSTRAINT `profil_ibfk_3` FOREIGN KEY (`favoriid`) REFERENCES `favoriler` (`id`),
  ADD CONSTRAINT `profil_ibfk_4` FOREIGN KEY (`sepetid`) REFERENCES `odeme` (`sepetid`);

--
-- Tablo kısıtlamaları `sepet`
--
ALTER TABLE `sepet`
  ADD CONSTRAINT `sepet_ibfk_2` FOREIGN KEY (`kullaniciid`) REFERENCES `kullanicilar` (`id`),
  ADD CONSTRAINT `sepet_ibfk_3` FOREIGN KEY (`urunid`) REFERENCES `urunler` (`id`);

--
-- Tablo kısıtlamaları `urunler`
--
ALTER TABLE `urunler`
  ADD CONSTRAINT `urunler_ibfk_1` FOREIGN KEY (`urunKategorisi`) REFERENCES `kategoriler` (`AnaKategori`),
  ADD CONSTRAINT `urunler_ibfk_2` FOREIGN KEY (`urunKategorisi1`) REFERENCES `kategoriler` (`AltKategori`),
  ADD CONSTRAINT `urunler_ibfk_3` FOREIGN KEY (`urunKategorisi2`) REFERENCES `kategoriler` (`AltKategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
