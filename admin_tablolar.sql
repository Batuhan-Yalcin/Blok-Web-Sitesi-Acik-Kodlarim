-- Mevcut tabloları silme
DROP TABLE IF EXISTS iletisim;
DROP TABLE IF EXISTS adminler;
DROP TABLE IF EXISTS site_icerik;
DROP TABLE IF EXISTS hizmetler;
DROP TABLE IF EXISTS beceriler;

-- Adminler tablosu
CREATE TABLE adminler (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kullanici_adi VARCHAR(50) NOT NULL,
    sifre VARCHAR(100) NOT NULL
);

-- Admin kullanıcısı ekleme
INSERT INTO adminler (kullanici_adi, sifre) VALUES ('batubey', '190758');

-- Site içerik tablosu
CREATE TABLE site_icerik (
    id INT AUTO_INCREMENT PRIMARY KEY,
    alan VARCHAR(50) NOT NULL,
    icerik TEXT,
    guncelleme_tarihi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- İletişim tablosu
CREATE TABLE iletisim (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ad_soyad VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mesaj TEXT NOT NULL,
    tarih TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Hizmetler tablosu
CREATE TABLE hizmetler (
    id INT AUTO_INCREMENT PRIMARY KEY,
    baslik VARCHAR(100) NOT NULL,
    ikon VARCHAR(50),
    aciklama TEXT,
    sira INT DEFAULT 0
);

-- Beceriler tablosu
CREATE TABLE beceriler (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ad VARCHAR(100) NOT NULL,
    yuzde INT NOT NULL,
    sira INT DEFAULT 0
);

-- Varsayılan içerikleri ekleme
INSERT INTO site_icerik (alan, icerik) VALUES 
('hakkimda', 'Ben Batuhan Yalçın, Java, Spring Boot ve React ile Full Stack geliştirme yolunda ilerleyen bir yazılım geliştiricisiyim. Yazılıma olan ilgim 2020 yılında başladı ve o günden beri kendimi sürekli olarak geliştiriyorum. Güncel yazılım dillerini öğrenerek, her zaman bir adım önde olmayı hedefliyorum. Bu alanda büyük bir şevk ve tutku ile çalışıyor, yazılım dünyasında başarılı olmayı amaçlıyorum.'),
('hizmetler', 'Yazılım geliştirme alanında geniş bir yelpazede deneyime sahibim. Java, C#, PHP, HTML, CSS, JavaScript gibi dillerde projeler geliştiriyor, Spring Boot, React ve .NET Framework''leriyle modern çözümler sunuyorum.'),
('egitim', '2024-2025 yılları arasında Nişantaşı Üniversitesi''nde Bilgisayar Programcılığı eğitimi aldım. Bu süreçte yazılım geliştirme, veri tabanı yönetimi ve programlama dillerinde derinlemesine bilgiler edindim.');

-- Varsayılan becerileri ekle
INSERT INTO beceriler (ad, yuzde) VALUES 
('Java', 90),
('Spring Boot', 85),
('HTML & CSS', 95),
('JavaScript', 80),
('React', 75),
('PHP', 85),
('MySQL', 80),
('C#', 85),
('Unity', 70),
('Git & GitHub', 90);

-- Varsayılan hizmetleri ekle
INSERT INTO hizmetler (baslik, ikon, aciklama) VALUES 
('Web Tasarım', 'c', 'Web sitesi tasarımı ve kodlaması yapıyorum.'),
('Mobil Uygulama', 'j', 'Android ve IOS için mobil uygulama geliştiriyorum.'),
('Oyun Geliştirme', 'm', 'Unity ile 2D ve 3D oyunlar geliştiriyorum.'),
('Veritabanı', 'v', 'MySQL ve MSSQL ile veritabanı yönetimi yapıyorum.'),
('Yazılım Danışmanlığı', 'f', 'Yazılım projelerinizde danışmanlık hizmeti veriyorum.'),
('Eğitim', 'b', 'Yazılım eğitimi ve mentorluk hizmeti veriyorum.'); 