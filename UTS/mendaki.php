<?php

// Proses penyimpanan data
include("config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nama']) && isset($_POST['jalur'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $jalur = htmlspecialchars($_POST['jalur']);

    $query = "INSERT INTO \"TB_pendaki\" (nama, jalur) VALUES ('$nama', '$jalur')";
    $result = pg_query($conn, $query);

    if (!$result) {
        echo "<p>❌ Gagal menyimpan data: " . pg_last_error($conn) . "</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Info Pendakian Gunung Butak</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #f4fff7;
            margin: 0;
            padding: 0;
            color: #2c2c2c;
        }
        section {
            max-width: 850px;
            margin: 60px auto;
            background: #fff;
            border-radius: 18px;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        h2 {
            color: #2e8b57;
            margin-top: 0;
        }
        p {
            line-height: 1.8;
            text-align: justify;
        }
        ul {
            line-height: 1.8;
            margin-left: 20px;
        }
        img {
            width: 100%;
            border-radius: 14px;
            margin: 20px 0;
        }
        .back-btn {
            background-color: #2e8b57;
            color: white;
            border: none;
            padding: 12px 28px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 15px;
            transition: 0.3s;
            margin-top: 25px;
        }
        .back-btn:hover {
            background-color: #1c5d3a;
            transform: translateY(-2px);
        }
        /* tambahan agar ringkas tapi tetap rapi */
        .pos {
            margin-top: 15px;
            padding-left: 15px;
            border-left: 3px solid #ddd;
        }
        .pos h4 {
            margin-bottom: 5px;
            color: #333;
        }
        .pos ul {
            margin-top: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <section>
        <?php
            $nama = htmlspecialchars($_POST['nama']);
            $jalur = htmlspecialchars($_POST['jalur']);

            echo "<h2>Halo, $nama! 👋</h2>";
            echo "<p>Berikut informasi pendakian untuk jalur <strong>$jalur</strong>:</p>";

            if ($jalur == "Panderman (Batu)") {
                echo '<img src="images/panderman2.jpg" alt="Panderman">';
                echo "<p>
                    Jalur Panderman dikenal dengan pemandangan spektakuler dari Kota Batu. 
                    Perjalanan dimulai dari area wisata Panderman dengan hutan pinus yang asri dan udara yang sejuk. 
                    Meski memiliki beberapa tanjakan curam, jalur ini cocok bagi pendaki yang mencari tantangan ringan 
                    dengan panorama luar biasa. Jalur ini terkenal dengan kelandaiannya namun panjang. cocok untuk pendaki yang ingin camping 
                    karena menawarkan sabana yang sangat luas dan asri. 
                </p>";
                echo "<ul>
                    <li>⛰️ Ketinggian awal: ±1.200 mdpl</li>
                    <li>🌲 Medan: tanah padat, berbatu, dan cukup terjal</li>
                    <li>💧 Sumber air: tersedia di Pos 1 dan 4</li>
                    <li>🕓 Estimasi waktu pendakian: 6–8 jam</li>
                    <li>🏕️ Cocok untuk pendaki berpengalaman</li>
                    <li>🛵 Terdapat ojek hingga Pos 3</li>
                </ul>";

                // Informasi per pos Panderman (ringkas & sederhana)
                echo '
                <div class="pos">
                    <h4>Basecamp – Pos 1</h4>
                    <ul>
                        <li>Ada warung dan sumber air</li>
                        <li>Jalan tidak terlalu menanjak</li>
                    </ul>

                    <h4>Pos 1 – 2</h4>
                    <ul>
                        <li>Terdapat mata air di pos 2</li>
                        <li>Tanjakan PHP cukup menguras tenaga</li>
                        <li>Mulai masuk kabut dan view bagus</li>
                    </ul>

                    <h4>Pos 2 – 3</h4>
                    <ul>
                        <li>Jalur landai dan hutan lumut cantik</li>
                        <li>Pos 3 area camp dan terdapat warung</li>
                    </ul>

                    <h4>Pos 3 – 4 (Sabana)</h4>
                    <ul>
                        <li>Awal landai lalu menanjak menjelang sabana</li>
                        <li>Waspadai jalur buntu, baca peta</li>
                    </ul>

                    <h4>Pos 4 (Sabana)</h4>
                    <ul>
                        <li>Ada mata air dan area camp luas</li>
                        <li>Angin malam cukup dingin</li>
                    </ul>

                    <h4>Pos 4 – Puncak</h4>
                    <ul>
                        <li>Jalur paling berat tapi view sunrise terbaik</li>
                        <li>Bawa air dari sabana</li>
                    </ul>
                </div>';
            } 
            else if ($jalur == "Sirah Kencong (Blitar)") {
                echo '<img src="images/sirah_kencong2.jpg" alt="Sirah Kencong">';
                echo "<p>
                    Jalur Sirah Kencong dimulai dari area kebun teh yang sejuk dan indah di lereng Gunung Butak. 
                    Meskipun jaraknya lebih pendek dibandingkan jalur Panderman, trek ini justru lebih menanjak dan cukup menguras tenaga. 
                    Namun, panorama kebun teh, hutan tropis, dan sabana di puncaknya menjadikan jalur ini salah satu yang paling digemari pendaki.
                </p>";
                echo "<ul>
                    <li>🌾 Medan: kebun teh, hutan tropis, dan tanjakan curam menuju sabana</li>
                    <li>💧 Sumber air: tidak tersedia di sepanjang jalur</li>
                    <li>🕓 Estimasi waktu pendakian: 5–6 jam (lebih cepat tapi lebih menanjak)</li>
                    <li>🏞️ Ciri khas: jalur singkat dengan elevasi naik tajam</li>
                    <li>📸 Spot terbaik: kebun teh Sirah Kencong & sabana puncak Gunung Butak</li>
                </ul>";


                // Tambahan per pos Sirah Kencong
                echo '
                <div class="pos">
                <h4>Pos 1</h4>
                <p>Tempat datar dan luas, berada di hutan hujan tropis yang masih lebat.<br>
                ⏱️ Waktu tempuh: ±30 menit dari basecamp</p>

                <h4>Pos 2</h4>
                <p>Masih berupa hutan tropis, sedikit miring dan mulai terbuka.<br>
                ⏱️ Waktu tempuh: ±45 menit dari Pos 1</p>

                <h4>Pos 3</h4>
                <p>Jarak pendek dari Pos 2, pohon mulai tinggi dan kering.<br>
                ⏱️ Waktu tempuh: ±30 menit dari Pos 2</p>

                <h4>Pos 4</h4>
                <p>Hutan didominasi pepohonan tinggi dan mulai dingin.<br>
                ⏱️ Waktu tempuh: ±1 jam dari Pos 3</p>

                <h4>Pos 5</h4>
                <p>Memasuki hutan lumut dengan suasana khas dan lembab.<br>
                ⏱️ Waktu tempuh: ±2 jam dari Pos 4</p>

                <h4>Puncak</h4>
                <p>Hanya sekitar 15 menit dari Pos 5, view sabana dan kebun teh sangat indah.<br>
                ⏱️ Waktu tempuh: ±15 menit dari Pos 5</p>
                </div>';

            } 
            else {
                echo "<p>Ups, jalur tidak dikenali. Silakan kembali ke halaman utama dan pilih jalur yang tersedia.</p>";
            }
        ?>

        <form action="index.html" method="get">
            <button class="back-btn">⬅️ Kembali ke Halaman Utama</button>
        </form>
    </section>
</body>
</html>
