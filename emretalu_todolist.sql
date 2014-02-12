-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 06 Kas 2013, 20:40:32
-- Sunucu sürümü: 5.5.32-cll
-- PHP Sürümü: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `emretalu_todolist`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=23 ;

--
-- Tablo döküm verisi `items`
--

INSERT INTO `items` (`id`, `item_name`, `done`) VALUES
(1, '<del style="color:#ccc">destek sitesi çevirilerini bitir</del>', 1),
(2, 'yii framework çalış', 0),
(3, '<del style="color:#ccc">kitapodam sms aktivasyon kodu gönderme sıkıntısını araştır</del>', 1),
(4, 'modüler yönetim panelini bitir', 0),
(5, '<del style="color:#ccc">hetexted için mysql, postgresql veritabanı hazırla</del>', 1),
(6, '<del style="color:#ccc">kitapodam yönetim paneli tablolara sorting özelliği hazırla</del>', 1),
(7, '<del style="color:#ccc">kitapodam yönetim paneli ayrıntılı profil ve kitap detay sayfası hazırla</del>', 1),
(8, '<del style="color:#ccc">postgresql - codeigniter uyumu ve çalışması hakkında deneme yap</del>', 1),
(9, '<del style="color:#ccc">erzincangıda yönetim paneline ürün teklif sayfası hazırla</del>', 1),
(10, '<del style="color:#ccc">kitapodam yönetim panelindeki sorting sonucu oluşan id hatasını düzelt</del>', 1),
(11, '<del style="color:#ccc">kitapodam yönetim panelindeki id hatasını asc-desc olarak tekrar gözden geçir</del>', 1),
(12, 'eyvahbasildik :)', 0),
(13, 'hetexted ^^', 0),
(14, 'yedisoru :)', 0),
(15, '<del style="color:#ccc">hetexted modified date</del>', 1),
(16, '<del style="color:#ccc">hoteltroya yönetim paneli</del>', 1),
(17, '<del style="color:#ccc">cakephp framework çalış</del>', 1),
(18, '<del style="color:#ccc">c# productivity programını bitir</del>', 1),
(20, '<del style="color:#ccc">kitapodam puan listesini kontrol et</del>', 1),
(22, '<del style="color:#ccc">toplantiodam sitesini yap</del>', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
