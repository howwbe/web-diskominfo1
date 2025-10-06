<?php
  include 'header.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil | Diskominfo Lamongan</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
  <div class="container">
<main>
  <section class="profil">
    <div class="profil-menu">
      <button class="tab active" onclick="showTab('tentang', event)">Tentang Kami</button>
      <button class="tab" onclick="showTab('visi', event)">Visi & Misi</button>
      <button class="tab" onclick="showTab('struktur', event)">Struktur Organisasi</button>
      <button class="tab" onclick="showTab('kontak', event)">Kontak Kami</button>
    </div>

    <!-- TENTANG KAMI -->
    <div id="tentang" class="tab-content active">
      <h2>Tentang Kami</h2>
      <img src="logo/profil.png" alt="Tentang Kami" class="banner-profil">
      <p>
       Dinas Komunikasi dan Informatika (Diskominfo) Kabupaten Lamongan adalah salah satu perangkat daerah yang berada di bawah instansi Pemerintah Kabupaten Lamongan. Berdasarkan Peraturan Daerah Kabupaten Lamongan Nomor 11 Tahun 2021 tentang Perubahan Kedua atas Peraturan Daerah Nomor 5 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Lamongan, Diskominfo Kabupaten Lamongan memiliki tugas untuk menyelenggarakan urusan pemerintahan di bidang komunikasi dan informatika, serta bidang persandian dan statistik.

Selanjutnya, berdasarkan Peraturan Bupati Lamongan Nomor 79 Tahun 2021 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi, serta Tata Kerja Dinas Komunikasi dan Informatika Kabupaten Lamongan, Diskominfo Kabupaten Lamongan bertindak sebagai unsur pelaksana urusan pemerintahan daerah di bidang komunikasi dan informatika, persandian, serta statistik. Diskominfo Kabupaten Lamongan dipimpin oleh seorang Kepala Dinas yang bertanggung jawab langsung kepada Bupati melalui Sekretaris Daerah.

Kantor Dinas Komunikasi dan Informatika Kabupaten Lamongan berlokasi di Gedung Pemerintah Kabupaten Lamongan, lantai 6, yang terletak di Jl. Basuki Rahmad No. 1, Kecamatan Lamongan, Kabupaten Lamongan, Provinsi Jawa Timur.
      </p>
    </div>

    <!-- VISI MISI -->
    <div id="visi" class="tab-content">
      <h2>Visi & Misi</h2>
      <img src="logo/profil.png" alt="Tentang Kami" class="banner-profil">
      <h3>Visi</h3>
      <p>
        “Terwujudnya pelayanan informasi publik yang transparan, cepat, dan akurat demi mendukung pemerintahan yang
        bersih, akuntabel, dan berbasis teknologi.”
      </p>
      <h3>Misi</h3>
      <ul>
        <li>Meningkatkan infrastruktur teknologi informasi dan komunikasi.</li>
        <li>Mendorong partisipasi masyarakat dalam pengelolaan informasi publik.</li>
        <li>Mewujudkan tata kelola pemerintahan berbasis elektronik (e-Government).</li>
        <li>Meningkatkan kualitas sumber daya manusia di bidang TIK.</li>
      </ul>
    </div>

    <!-- STRUKTUR ORGANISASI -->
    <div id="struktur" class="tab-content">
      <h2>Struktur Organisasi</h2>
       <img src="logo/profil.png" alt="Tentang Kami" class="banner-profil">
      <img src="logo/struktur.png" alt="Struktur Organisasi" class="banner-profil">
      <p>Adapun uraian tugas dan fungsi struktur yang ada di Dinas Komunikasi dan Informatika Kabupaten Lamongan sebagai berikut</p>
      <h2>Kepala Dinas</h2>
  <p>Kepala Dinas mempunyai tugas merumuskan kebijakan teknis dan strategis, melaksanakan urusan pemerintahan dan pelayanan umum, pembinaan dan pelaksanaan tugas bidang komunikasi dan informatika serta persandian statistik.</p>
  <h3>Fungsi Kepala Dinas:</h3>
  <ol>
    <li>Perumusan kebijakan teknis di bidang komunikasi dan informatika serta persandian dan statistik dalam mewujudkan sistem pemerintahan berbasis elektronik seperti e-Government;</li>
    <li>Perencanaan teknis program kerja bidang komunikasi dan informatika serta persandian dan statistik;</li>
    <li>Pembinaan teknis program kerja bidang komunikasi dan informatika serta persandian dan statistik dalam mewujudkan sistem pemerintahan berbasis elektronik seperti e-Government;</li>
    <li>Pengendalian penyelenggaraan kegiatan bidang komunikasi dan informatika serta persandian dan statistik;</li>
    <li>Penyelenggaraan urusan pemerintahan dan pelayanan umum;</li>
    <li>Pembinaan ketatausahaan Dinas;</li>
    <li>Pelaksanaan fungsi lain yang diberikan oleh Bupati sesuai dengan tugas dan fungsinya.</li>
  </ol>

  <h2>Sekretariat</h2>
  <p>Sekretariat mempunyai tugas merencanakan, melaksanakan, mengoordinasikan, mengendalikan, mengevaluasi, dan memberikan dukungan pelayanan teknis di bidang administrasi umum, kepegawaian, perlengkapan, penyusunan perencanaan, keuangan, dan aset, keprotokolan serta pelaporan kinerja dan anggaran pada unit organisasi di lingkungan Dinas.</p>
  <h3>Fungsi Sekretariat:</h3>
  <ol>
    <li>Penyelenggaraan pengkajian program kerja sekretariat dan bahan perumusan kebijakan teknis kesekretariatan di bidang penyusunan perencanaan, keuangan, umum, dan kepegawaian;</li>
    <li>Penyelenggaraan pengkajian bahan bimbingan teknis di bidang penyusunan perencanaan, keuangan, umum, dan kepegawaian;</li>
    <li>Penyelenggaraan pengendalian administrasi keuangan, administrasi kepegawaian, ketatausahaan, kelembagaan, dan ketatalaksanaan;</li>
    <li>Penyelenggaraan pengkajian rumusan kebijakan anggaran;</li>
    <li>Penyelenggaraan pengelolaan urusan rumah tangga dan perlengkapan;</li>
    <li>Penyelenggaraan pengelolaan dokumentasi peraturan perundang-undangan, perpustakaan, protokol, dan hubungan masyarakat;</li>
    <li>Penyeliaan pengelolaan naskah dinas dan kearsipan;</li>
    <li>Penyelenggaraan pengkajian bahan pembinaan jabatan fungsional;</li>
    <li>Penyelenggaraan pengkajian bahan perumusan rencana strategis, LKjIP, LPPD, dan LKPJ Dinas;</li>
    <li>Penyeliaan penyusunan telaahan staf sebagai bahan pertimbangan pengambilan kebijakan;</li>
    <li>Penyelenggaraan koordinasi dengan unit kerja terkait; dan</li>
    <li>Penyelenggaraan pengkajian bahan fasilitasi di bidang penyusunan perencanaan, keuangan, umum, dan kepegawaian.</li>
  </ol>

  <h3>Sekretariat membawahi:</h3>
  <ol>
    <li>Subbagian Perencanaan dan Evaluasi;</li>
    <li>Subbagian Keuangan; dan</li>
    <li>Subbagian Umum dan Kepegawaian.</li>
  </ol>

  <h2>Bidang Informasi dan Komunikasi Publik</h2>
  <p>Bidang Informasi dan Komunikasi Publik mempunyai tugas melaksanakan penyiapan bahan perumusan kebijakan teknis dan strategis, pengoordinasian, pembinaan, dan pengendalian bidang informasi dan komunikasi publik.</p>
  <h3>Fungsi:</h3>
  <ol>
    <li>Penyelenggaraan koordinasi dan verifikasi pelayanan informasi publik;</li>
    <li>Perumusan kebijakan kemitraan komunikasi publik;</li>
    <li>Pemantauan proses pengumpulan dan pengolahan informasi publik;</li>
    <li>Penyelenggaraan kebijakan kerjasama antar lembaga informasi publik;</li>
    <li>Penyelenggaraan koordinasi hasil pengolahan pengaduan masyarakat dengan instansi terkait;</li>
    <li>Penyelenggaraan koordinasi pengolahan informasi/kebijakan nasional dan daerah;</li>
    <li>Penyelenggaraan koordinasi pengelolaan saluran komunikasi media publik;</li>
    <li>Penyelenggaraan koordinasi pelaksanaan diseminasi informasi kebijakan melalui media publik;</li>
    <li>Perumusan pola pembinaan pelayanan informasi dan komunikasi publik;</li>
    <li>Penyelenggaraan monitoring dan evaluasi informasi dan komunikasi publik; dan</li>
    <li>Penyelenggaraan fungsi lain yang diberikan oleh Kepala Dinas sesuai dengan tugas dan fungsinya.</li>
  </ol>

  <h2>Bidang Aplikasi Informatika</h2>
  <p>Bidang Aplikasi Informatika mempunyai tugas melaksanakan penyiapan bahan perumusan kebijakan teknis dan strategis, pengkoordinasian, pembinaan, dan pengendalian bidang aplikasi informatika.</p>
  <h3>Fungsi:</h3>
  <ol>
    <li>Perumusan kebijakan di bidang Aplikasi Informatika;</li>
    <li>Penyelenggaraan program kegiatan Aplikasi Informatika;</li>
    <li>Perumusan kebijakan penyusunan Norma, Standar, Prosedur, Fasilitas, dan pemberian bimbingan teknis, serta evaluasi dan pelaporan di bidang integrasi layanan publik e-Government;</li>
    <li>Pengembangan infrastruktur jaringan komunikasi dan aplikasi informatika; dan</li>
    <li>Penyelenggaraan fungsi lain yang diberikan oleh Kepala Dinas sesuai dengan tugas dan fungsinya.</li>
  </ol>

  <h2>Bidang Persandian dan Statistik</h2>
  <p>Bidang Persandian dan Statistik mempunyai tugas melaksanakan pengelolaan data statistik sektoral, persandian, dan keamanan informasi di Daerah.</p>
  <h3>Fungsi:</h3>
  <ol>
    <li>Perumusan kebijakan teknis operasional bidang statistik, persandian, dan keamanan informasi;</li>
    <li>Penyelenggaraan rencana kerja bidang statistik, persandian, dan keamanan informasi;</li>
    <li>Penyelenggaraan koordinasi, integrasi, dan sinkronisasi sesuai dengan lingkup tugasnya;</li>
    <li>Pengendalian, evaluasi, dan pelaporan bidang statistik, persandian, dan keamanan informasi; dan</li>
    <li>Penyelenggaraan fungsi lain yang diberikan oleh Kepala Dinas sesuai dengan tugas dan fungsinya.</li>
  </ol>

  <h3>Bidang Persandian dan Statistik membawahi:</h3>
  <ol>
    <li>Seksi Persandian dan Keamanan Informasi</li>
  </ol> </div>

    <!-- KONTAK KAMI -->
    <div id="kontak" class="tab-content">
      <h2>Kontak Kami</h2>
        <img src="logo/profil.png" alt="Tentang Kami" class="banner-profil">
      <p><strong>Alamat:</strong> Jl. KH. Ahmad Dahlan No. 01, Lamongan</p>
      <p><strong>Email:</strong> diskominfo@lamongan.go.id</p>
      <p><strong>Telepon:</strong> (0322) 123456</p>
      <p><strong>Jam Pelayanan:</strong> Senin - Jumat, 08:00 - 15:00 WIB</p>
    </div>
  </section>
</main>
</div>
<script>
function showTab(tabId, event) {
  document.querySelectorAll('.tab').forEach(btn => btn.classList.remove('active'));
  document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
  document.getElementById(tabId).classList.add('active');
  event.target.classList.add('active');
}
</script>
</body>
</html>
<?php
  include 'footer.php';
?>