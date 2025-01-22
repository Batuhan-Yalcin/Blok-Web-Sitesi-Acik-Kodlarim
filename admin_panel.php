<?php
session_start();
include("baglanti.php");

// Admin girişi kontrolü
if(!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Çıkış işlemi
if(isset($_GET['cikis'])) {
    session_destroy();
    header("Location: admin_login.php");
    exit();
}

// Mesaj silme işlemi
if(isset($_GET['sil_mesaj'])) {
    $id = $_GET['sil_mesaj'];
    $baglan->query("DELETE FROM iletisim WHERE id = $id");
    header("Location: admin_panel.php");
}

// İçerik güncelleme işlemi
if(isset($_POST['guncelle'])) {
    $alan = $_POST['alan'];
    $icerik = $_POST['icerik'];
    
    // Güncelleme işlemi
    $guncelle = "UPDATE site_icerik SET icerik = ? WHERE alan = ?";
    $stmt = $baglan->prepare($guncelle);
    $stmt->bind_param("ss", $icerik, $alan);
    
    if($stmt->execute()) {
        // Güncelleme başarılı
        echo "<div class='alert alert-success'>
            <strong>Başarılı!</strong> İçerik güncellendi.<br>
            <small>Güncellenen Alan: " . htmlspecialchars($alan) . "</small>
        </div>";
        
        // Sayfayı yenile
        echo "<script>
            setTimeout(function() {
                alert('İçerik başarıyla güncellendi!');
                window.location.href = 'admin_panel.php';
            }, 1500);
        </script>";
    } else {
        // Güncelleme başarısız
        echo "<div class='alert alert-danger'>
            <strong>Hata!</strong> Güncelleme sırasında bir sorun oluştu.
        </div>";
    }
    $stmt->close();
}

// Hizmet ekleme işlemi
if(isset($_POST['islem']) && $_POST['islem'] == 'hizmet_ekle') {
    $baslik = $_POST['hizmet_baslik'];
    $ikon = $_POST['hizmet_ikon'];
    $aciklama = $_POST['hizmet_aciklama'];
    
    $ekle = $baglan->prepare("INSERT INTO hizmetler (baslik, ikon, aciklama) VALUES (?, ?, ?)");
    $ekle->bind_param("sss", $baslik, $ikon, $aciklama);
    
    if($ekle->execute()) {
        echo "<div class='alert alert-success'>Hizmet başarıyla eklendi!</div>";
    } else {
        echo "<div class='alert alert-danger'>Hizmet eklenirken hata oluştu!</div>";
    }
}

// Hizmet silme işlemi
if(isset($_GET['hizmet_sil'])) {
    $id = $_GET['hizmet_sil'];
    if($baglan->query("DELETE FROM hizmetler WHERE id = $id")) {
        echo "<div class='alert alert-success'>Hizmet başarıyla silindi!</div>";
    } else {
        echo "<div class='alert alert-danger'>Hizmet silinirken hata oluştu!</div>";
    }
}

// Beceri ekleme işlemi
if(isset($_POST['islem']) && $_POST['islem'] == 'beceri_ekle') {
    $ad = $_POST['beceri_adi'];
    $yuzde = $_POST['beceri_yuzde'];
    
    $ekle = $baglan->prepare("INSERT INTO beceriler (ad, yuzde) VALUES (?, ?)");
    $ekle->bind_param("si", $ad, $yuzde);
    
    if($ekle->execute()) {
        echo "<div class='alert alert-success'>Beceri başarıyla eklendi!</div>";
    } else {
        echo "<div class='alert alert-danger'>Beceri eklenirken hata oluştu!</div>";
    }
}

// Beceri silme işlemi
if(isset($_GET['beceri_sil'])) {
    $id = $_GET['beceri_sil'];
    if($baglan->query("DELETE FROM beceriler WHERE id = $id")) {
        echo "<div class='alert alert-success'>Beceri başarıyla silindi!</div>";
    } else {
        echo "<div class='alert alert-danger'>Beceri silinirken hata oluştu!</div>";
    }
}

// İçerik formunda mevcut içeriği gösterme
function getIcerik($alan) {
    global $baglan;
    
    // Debug bilgisi
    echo "<pre>";
    echo "getIcerik fonksiyonu çağrıldı. Alan: " . $alan . "\n";
    echo "</pre>";
    
    $sorgu = $baglan->prepare("SELECT icerik FROM site_icerik WHERE alan = ?");
    if (!$sorgu) {
        die("Sorgu hazırlanırken hata: " . $baglan->error);
    }
    
    $sorgu->bind_param("s", $alan);
    $sorgu->execute();
    $result = $sorgu->get_result();
    
    if($sonuc = $result->fetch_assoc()) {
        echo "<pre>";
        echo "Veritabanından gelen içerik:\n";
        print_r($sonuc);
        echo "</pre>";
        
        return htmlspecialchars($sonuc['icerik']);
    }
    return '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Paneli</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            background: #2c3e50;
            padding: 20px;
            color: white;
            width: 220px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .sidebar h3 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #ecf0f1;
        }
        .content {
            margin-left: 240px;
            padding: 25px;
            background: #fff;
            min-height: 100vh;
        }
        .nav-link {
            color: #ecf0f1;
            padding: 8px 12px;
            margin: 3px 0;
            border-radius: 4px;
            transition: all 0.3s;
            font-size: 14px;
        }
        .nav-link:hover {
            color: #fff;
            background: #34495e;
            text-decoration: none;
            transform: translateX(5px);
        }
        .table {
            background: white;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            margin-top: 15px;
            font-size: 14px;
        }
        .table th {
            background: #2c3e50;
            color: white;
            padding: 12px;
            font-weight: 500;
            border: none;
        }
        .table td {
            vertical-align: middle;
            padding: 10px;
            color: #2c3e50;
            border-color: #eee;
            max-height: 50px;
            overflow: hidden;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            color: #2c3e50;
            font-weight: 500;
            margin-bottom: 5px;
            font-size: 14px;
        }
        .form-control {
            border: 1px solid #eee;
            padding: 8px 12px;
            border-radius: 4px;
            transition: all 0.3s;
            font-size: 14px;
        }
        .form-control:focus {
            border-color: #2c3e50;
            box-shadow: none;
        }
        textarea.form-control {
            min-height: 100px;
            max-height: 150px;
        }
        .btn-primary {
            background: #2c3e50;
            border: none;
            padding: 8px 20px;
            border-radius: 4px;
            transition: all 0.3s;
            font-size: 14px;
        }
        .btn-primary:hover {
            background: #34495e;
            transform: translateY(-2px);
        }
        .btn-danger {
            padding: 6px 15px;
            border-radius: 4px;
            font-size: 13px;
        }
        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #eee;
            font-size: 22px;
            font-weight: 600;
        }
        section {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
            margin-bottom: 25px;
        }
        .nav-item {
            margin-bottom: 8px;
        }
        .table-responsive {
            border-radius: 6px;
            overflow: hidden;
        }
        /* Tablo içeriği için özel stil */
        .table td[title] {
            max-width: 200px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .table td[title]:hover {
            white-space: normal;
            overflow: visible;
            background: #f8f9fa;
            position: relative;
            z-index: 1;
        }
        /* Mobil uyumluluk için */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .content {
                margin-left: 0;
                padding: 15px;
            }
            .table td {
                min-width: 150px;
            }
        }
        .alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
}

.alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba;
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}

.alert strong {
    margin-right: 10px;
}

.alert small {
    display: block;
    margin-top: 5px;
    opacity: 0.8;
}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <h3>Admin Paneli</h3>
                <hr>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#mesajlar">Gelen Mesajlar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#icerik">İçerik Yönetimi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?cikis=1">Çıkış Yap</a>
                    </li>
                </ul>
            </div>

            <!-- Ana İçerik -->
            <div class="col-md-10 content">
                <!-- Gelen Mesajlar -->
                <section id="mesajlar">
                    <h2>Gelen Mesajlar</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 15%">Ad Soyad</th>
                                    <th style="width: 20%">Email</th>
                                    <th style="width: 35%">Mesaj</th>
                                    <th style="width: 15%">Tarih</th>
                                    <th style="width: 15%">İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $mesajlar = $baglan->query("SELECT * FROM iletisim ORDER BY tarih DESC");
                                if (!$mesajlar) {
                                    echo "Sorgu hatası: " . $baglan->error;
                                } else {
                                    while($mesaj = $mesajlar->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td title='".$mesaj['ad_soyad']."'>".$mesaj['ad_soyad']."</td>";
                                        echo "<td title='".$mesaj['email']."'>".$mesaj['email']."</td>";
                                        echo "<td title='".$mesaj['mesaj']."'>".$mesaj['mesaj']."</td>";
                                        echo "<td>".date('d.m.Y H:i', strtotime($mesaj['tarih']))."</td>";
                                        echo "<td><a href='?sil_mesaj=".$mesaj['id']."' class='btn btn-danger btn-sm' onclick='return confirm(\"Bu mesajı silmek istediğinize emin misiniz?\")'>Sil</a></td>";
                                        echo "</tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </section>

                <!-- İçerik Yönetimi -->
                <section id="icerik" class="mt-5">
                    <h2>İçerik Yönetimi</h2>
                    <ul class="nav nav-tabs mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#genel">Genel İçerikler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#hizmetler">Hizmetler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#beceriler">Beceriler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ozgecmis">Özgeçmiş</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!-- Genel İçerikler -->
                        <div class="tab-pane fade show active" id="genel">
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label>Alan Seçin:</label>
                                    <select name="alan" class="form-control" id="icerikSelect">
                                        <option value="hakkimda">Hakkımda</option>
                                        <option value="hizmetler">Hizmetler</option>
                                        <option value="egitim">Eğitim</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>İçerik:</label>
                                    <textarea name="icerik" class="form-control" rows="5"><?php echo getIcerik($_POST['alan'] ?? 'hakkimda'); ?></textarea>
                                </div>
                                <button type="submit" name="guncelle" class="btn btn-primary">Güncelle</button>
                            </form>
                        </div>

                        <!-- Hizmetler -->
                        <div class="tab-pane fade" id="hizmetler">
                            <form method="POST" action="">
                                <input type="hidden" name="islem" value="hizmet_ekle">
                                <div class="form-group">
                                    <label>Hizmet Başlığı:</label>
                                    <input type="text" name="hizmet_baslik" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Hizmet İkonu:</label>
                                    <input type="text" name="hizmet_ikon" class="form-control" placeholder="Örn: c">
                                </div>
                                <div class="form-group">
                                    <label>Hizmet Açıklaması:</label>
                                    <textarea name="hizmet_aciklama" class="form-control" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Hizmet Ekle</button>
                            </form>

                            <hr>

                            <h4>Mevcut Hizmetler</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Başlık</th>
                                            <th>İkon</th>
                                            <th>Açıklama</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $hizmetler = $baglan->query("SELECT * FROM hizmetler ORDER BY id DESC");
                                        while($hizmet = $hizmetler->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>".$hizmet['baslik']."</td>";
                                            echo "<td>".$hizmet['ikon']."</td>";
                                            echo "<td>".$hizmet['aciklama']."</td>";
                                            echo "<td>
                                                    <a href='?hizmet_sil=".$hizmet['id']."' class='btn btn-danger btn-sm' onclick='return confirm(\"Bu hizmeti silmek istediğinize emin misiniz?\")'>Sil</a>
                                                  </td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Beceriler -->
                        <div class="tab-pane fade" id="beceriler">
                            <form method="POST" action="">
                                <input type="hidden" name="islem" value="beceri_ekle">
                                <div class="form-group">
                                    <label>Beceri Adı:</label>
                                    <input type="text" name="beceri_adi" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Yüzde (%):</label>
                                    <input type="number" name="beceri_yuzde" class="form-control" min="0" max="100" required>
                                </div>
                                <button type="submit" class="btn btn-success">Beceri Ekle</button>
                            </form>

                            <hr>

                            <h4>Mevcut Beceriler</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Beceri</th>
                                            <th>Yüzde</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $beceriler = $baglan->query("SELECT * FROM beceriler ORDER BY id DESC");
                                        while($beceri = $beceriler->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>".$beceri['ad']."</td>";
                                            echo "<td>".$beceri['yuzde']."%</td>";
                                            echo "<td>
                                                    <a href='?beceri_sil=".$beceri['id']."' class='btn btn-danger btn-sm' onclick='return confirm(\"Bu beceriyi silmek istediğinize emin misiniz?\")'>Sil</a>
                                                  </td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- İçerik seçildiğinde otomatik yükleme için JavaScript -->
    <script>
    document.getElementById('icerikSelect').onchange = function() {
        this.form.submit();
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>