<html lang="en">
 <head>
  <meta charset="UTF-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Architrons
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" rel="stylesheet"/>
  <script crossorigin="anonymous" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
  </script>
  <style>
   body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            background-color: #578FDD;
            height: 100vh;
            padding: 20px 0;
            position: fixed;
            width: 80px;
            transition: width 0.3s;
            border-radius: 30px;
            margin: 10px;
        }
        .sidebar.expanded {
            width: 200px;
        }
        .sidebar .nav-link {
            color: white;
            text-align: center;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }
        .sidebar .nav-link:hover{
            background-color: #f8f9fa;
            color: #2F5D9D;
        }
        .sidebar .nav-link i {
            font-size: 24px;
        }
        .sidebar .nav-link span {
            display: none;
            margin-left: 10px;
        }
        .sidebar.expanded .nav-link span {
            display: inline;
        }
        .sidebar .profile {
            position: absolute;
            bottom: 80px;
            width: 100%;
            text-align: center;
        }
        .sidebar .profile img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }
        .sidebar .logout {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
        }
        .sidebar .logout a {
            color: white;
            text-decoration: none;
        }
        .content {
            margin-left: 100px;
            padding: 20px;
            transition: margin-left 0.3s;
        }
        .content.expanded {
            margin-left: 220px;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header img {
            width: auto;
            height: 10vh;
        }
        .header h1 {
            font-size: 24px;
            font-weight: bolder;
        }
        .header .btn {
            background: linear-gradient(135deg, #578FDD 0%, #2F5D9D 100%);
            color: white;
        }
        .card {
            margin-top: 20px;
            border: 2px solid #3b5998;
        }
        .card-header {
            background: linear-gradient(120deg, #578FDD 0%, #2F5D9D 100%);
            color: white;
            padding: 20px;
            text-align: center;
            margin-inline: 20%;
            margin-bottom: 30px;
        }
        .card p{
            text-align: center;
        }
        .card-body {
            align-items: center;
            background: url(../assets/bg.jpeg);
        
        }
        .section{
            margin: 40px;
            display: flex;
        }

        .txt-left{
            padding: 30px;
            background: #2F5D9D;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin: 40px;
            text-align: center;
        }
        .img-right{
            justify-content: right;
        }
        .section .txt-left, .section .txt-right, .section .img-right, .section .img-left {
            width: 48%;
        }
        .txt-right {
            padding: 30px;
            background: #2F5D9D;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin: 40px;
            text-align: center;
        }
        .img-left{
            justify-content: left;
        }
        .card-footer {
            display: flex;
            text-align: center;
            color: #578FDD;
            background: white;
            padding: 10px;
            font-weight: bold;
        }
        .center{
            margin-top: 150px;
            justify-content: baseline;
        }
  </style>
 </head>
 <body>
  <div class="sidebar" id="sidebar">
   <nav class="nav flex-column">
    <a class="nav-link" href="#" onclick="toggleSidebar()">
     <i class="bi bi-grid-3x3-gap-fill">
     </i>
     <span>
      ARCHITRONS
     </span>
   </nav>

<div class="center">
</a>
<a class="nav-link" href="../dashboard/index.php">
 <i class="bi bi-house-door-fill">
 </i>
 <span>
  Dashboard
 </span>
</a>
<a class="nav-link" href="../dashboard/fitur.php">
 <i class="bi bi-person-plus-fill">
 </i>
 <span>
  Project
 </span>
</a>
</div>

   <div class="profile">
    <img alt="Profile Picture" height="40" src="https://placehold.co/40x40" width="40"/>
   </div>
   <div class="logout">
    <a class="nav-link" href="../home.php">
     <i class="bi bi-box-arrow-right">
     </i>
     <span>
      Logout
     </span>
    </a>
   </div>
  </div>
  <div class="content" id="content">
   <div class="header">
    <img alt="Architrons Logo" height="50" src="../assets/logo.png" width="100"/>
    <h1>
     DASHBOARD
    </h1>
    <button class="btn" onclick="location.href='../dashboard/fitur.php'">
        FITUR
    </button>
   </div>

<div class="card">
    <div class="card-header">
        <h2>Menyambut Rumah Impian Anda:</h2> 
Panduan Konstruksi dan Detail Penting dalam Membangun Rumah
    </div>

    <p style="color: #8F8484;">Selamat datang di dashboard kami! Di sini, Anda akan menemukan segala sesuatu yang Anda butuhkan untuk merancang, membangun, dan memahami detail teknis dalam konstruksi rumah impian Anda. Memiliki hunian ideal adalah impian banyak orang, dan kami hadir untuk membantu mewujudkannya.</p>
    <p style="color: black;">Pembangunan rumah tidak hanya soal desain, tetapi juga mencakup elemen konstruksi yang perlu direncanakan secara matang untuk memastikan keamanan, kenyamanan, dan efisiensi hunian. Mari kita bahas komponen utama dalam konstruksi rumah yang perlu diperhatikan.</p>
   
    <div class="card-body">
        <div class="section">
            <div class="txt-left">
            <h2>TAHAP 1</h2>
            <p>Perencanaan dan Desain Awal</p>
            <p>Proses membangun rumah dimulai dengan tahap perencanaan dan desain. Tahap ini sangat krusial karena menentukan tata letak, ukuran ruangan, dan orientasi bangunan untuk pencahayaan alami dan sirkulasi udara. Beberapa hal yang perlu diperhatikan pada tahap perencanaan ini adalah:</p>
            <ul>
            <li>Penentuan Kebutuhan Ruang: Mulai dengan kebutuhan dasar seperti jumlah kamar tidur, kamar mandi, ruang tamu, dapur, dan ruang tambahan lainnya.</li>
            <li>Gaya Arsitektur: Pilih gaya yang sesuai dengan selera, misalnya minimalis, modern, klasik, atau tradisional.</li>
            <li>Anggaran dan Biaya: Siapkan anggaran dengan mempertimbangkan biaya bahan bangunan, tenaga kerja, dan peralatan.</li>
            </ul>
            </div>
            <div class="img-right">
            <img style="height: 60vh; width: auto;" src="../assets/img-1.jpeg" alt="construct">
            </div>
        </div>
        
        <div class="section">
            <div class="img-left"></div>
            <div class="txt-right">
                <h2>TAHAP 2</h2>
                <p>Pemilihan lokasi dan Persiapan Lahan</p>
                <p>Lokasi merupakan salah satu faktor penting dalam kenyamanan rumah. Pastikan lokasi rumah dekat dengan fasilitas umum dan memiliki akses jalan yang baik. Selain itu, lakukan persiapan lahan dengan melakukan survei tanah, menggali fondasi, serta membersihkan lahan untuk memastikan konstruksi berjalan lancar.</p>
            </div>
        </div>

        <div class="section">
            <div class="txt-left">
                <h2>TAHAP 3</h2>
                <p>Fondasi yang Kokoh</p>
                <p>Fondasi adalah elemen yang paling penting dalam konstruksi rumah karena menopang seluruh bangunan. Jenis fondasi yang dipilih harus sesuai dengan kondisi tanah dan desain rumah:</p>
                <ul>
                    <li>Fondasi Cakar Ayam: Cocok untuk tanah yang lunak dan rumah berlantai dua atau lebih.</li>
                    <li>Fondasi Batu Kali: Lebih umum untuk rumah sederhana dengan satu lantai. </li>
                    <li>Beton Bertulang: Cocok digunakan untuk berbagai jenis konstruksi yang memerlukan kekuatan, ketahanan, dan daya tahan yang tinggi</li>
                </ul>
                <p>Pastikan fondasi dibangun dengan material berkualitas tinggi untuk menjamin ketahanan jangka panjang.</p>
            </div>
            <div class="img-right">
                <img style="height: 60vh; width: auto;" src="../assets/img-2.jpeg" alt="pondation">
            </div>
        </div>
            

        <div class="section">
            <div class="img-left">
                <img style="height: 60vh; width: auto;" src="../assets/img-3.jpeg" alt="">
            </div>
            <div class="txt-right">
                <h2>TAHAP 4</h2>
                <P>Struktur Kerangka Bangunan</P>
                <p>Kerangka atau struktur utama bangunan terdiri dari kolom dan balok uang berfungsi untuk menyokong dinding dan atap rumah. Umumnya, bahan yang digunakan adalah beton bertulang atau baja untuk ketahanan yang maksimal. Pengerjaan kerangka yang tepat sangat penting agar rumah tetap kokh saat terkena gempa atau beban angin kuat.</p>
            </div>
        </div>

        <div class="section">
            <div class="txt-left">
                <h2>TAHAP 5</h2>
                <p>Dinding Material Bangunan</p>
                <p>Pemilihan material dinding berpengaruh pada estetika dan ketahanan bangunan. Beberapa jenis material dinding yang populer:</p>
                <ul>
                    <li>Batu Bata Merah: Menahan panas dengan baik dan memiliki ketahanan tinggi.</li>
                    <li>Batako: Material ekonomis dengan proses pemasangan cepat.</li>
                    <li>Hebel atau Bata Ringan: Ringan, tahan lama, dan memiliki insulasi yang baik.</li>
                </ul>
                <p>Pastikan pemasangan dinding dilakukan dengan presisi agar dinding rata dan kuat.</p>
            </div>
            <div class="img-right">
                <img style="height: 60vh; width: auto;" src="../assets/img-4.jpeg" alt="">
            </div>
        </div>

        <div class="section">
            <div class="img-left">
                <img style="height: 60vh; width: auto;" src="../assets/img-5.jpeg" alt="">
            </div>
            <div class="txt-right">
                <h2>TAHAP 6</h2>
                <p>Sistem Atap</p>
                <p>Atap melindungi rumah dari cuaca, sehingga memilih material dan desain atap yang tepat sangat penting:</p>
                <ul>
                    <li>Genteng Tanah Liat: Tahan lama dan memiliki daya serap panas yang baik</li>
                    <li>Genteng Metal: Tahan lama dan lebih ringan, cocok untuk rumah minimalis.</li>
                    <li>Atap Seng dan Baja Ringan: Ringan dan mudah dipasang, namun perlu lapisan  insulasi tambaham untuk meredam suara.</li>
                </ul>
                <p>Pastikan juga pemasangan atap memiliki kemiripan yang cukup agar air hujan mudah mengalir.</p>
            </div>
        </div>

        <div class="section">
            <div class="txt-left">
                <h2>TAHAP 7</h2>
                <p>Sistem Listrik dan Plumbing</p>
                <p>Sistem listrik dan plumbing harus dirancang dan dipasang secara profesional untuk memastikan kenyamanan dan keamananpenghuninya:</p>
                <ul>
                    <li>Instalasi Listrik: Pastikan jalur listrik tersembunya dengan soket dan sakelar yang terpasang di tempat yang strategis.</li>
                    <li>Sistem Pipa Air: Gunakan pipa berkualitas tinggi yang tahan korosi dan kebocoran.</li>
                </ul>
            </div>
            <div class="img-right"></div>
        </div>

        <div class="section">
            <div class="img-left"></div>

            <div class="txt-right">
                <h2>TAHAP 8</h2>
                <p>Pemilihan Pintu dan Jendela</p>
                <p>Pintu dan Jendela tidak hanya berfungsi sebagai akses dan ventilasi, tetapi juga memberi nilai estetika:</p>
                <ul>
                    <li>Pintu Utama: Pilih material kuat seperti kayu solid atau baja</li>
                    <li>Jendela: Jendela aluminium atau UPVC tahan lama dan memiliki isolasi baik. Pertimbangkan penambahan tirai atau blinds untuk menjaga privasi.</li>
                </ul>
            </div>
        </div>

        <div class="section">
            <div class="txt-left">
                <h2>TAHAP 9</h2>
                <p>Finishing dan Dekorasi Interion</p>
                <p>Sentuhan akhir seperti cat, ubin, dan dekorasi interior membantu menciptakan suasana rumah yang nyaman dan sesuai selera:</p>
                <ul>
                    <li>Cat Tembok: Pilih cat yang tahan cuaca dan tidak mudah pudar.</li>
                    <li>Ubin atau Lantai: Gunakan ubin berkualitas baik dan tahan lama dan mudah dibersihkan .</li>
                    <li>Dekorasi Interior: Sesuaikan dekorasi dengan gaya rumah Anda, mulai dari furnitur hingga pencahayaan.</li>
                </ul>
            </div>
            <div class="img-right"></div>
        </div>

        <div class="card-footer">
            <h2>Terima kasih telah mengunjungi halaman panduan konstruksi kami. Kami berharap informasi yang disajikan dapat menjadi panduan yang bermanfaat bagi Anda dalam menjalankan berbagai proyek konstruksi.</h2>
        </div>

        </div>

    </div>

</div>

  <script>
   function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            sidebar.classList.toggle('expanded');
            content.classList.toggle('expanded');
        }
  </script>
 </body>
</html>