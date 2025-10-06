<?php
require_once 'koneksi.php';

// Ambil data slider
$sql_slider = "SELECT * FROM slider ORDER BY urutan ASC";
$result_slider = $conn->query($sql_slider);

// Ambil data berita
$sql_berita = "SELECT * FROM berita ORDER BY tanggal_dibuat DESC";
$result_berita = $conn->query($sql_berita);

include 'header.php';
?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Diskominfo Lamongan</title>
  <link rel="stylesheet" href="style.css">
</head>



<!-- ======================= SLIDER ======================= -->
<?php if ($result_slider->num_rows > 0): ?>
<div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <?php
        $slide_count = 0;
        $result_slider->data_seek(0);
        while($row_slider = $result_slider->fetch_assoc()) {
            $active_class = ($slide_count == 0) ? 'active' : '';
            echo '<button type="button" data-bs-target="#mainSlider" data-bs-slide-to="' . $slide_count . '" class="' . $active_class . '" aria-label="Slide ' . ($slide_count + 1) . '"></button>';
            $slide_count++;
        }
        $result_slider->data_seek(0);
        ?>
    </div>

    <div class="carousel-inner">
        <?php
        $slide_count = 0;
        while($row_slider = $result_slider->fetch_assoc()) {
            $active_class = ($slide_count == 0) ? 'active' : '';
            echo '<div class="carousel-item ' . $active_class . '">';
            if (!empty($row_slider['link'])) {
                echo '<a href="' . htmlspecialchars($row_slider['link']) . '">';
            }
            echo '<img src="uploads/' . htmlspecialchars($row_slider['gambar']) . '" alt="' . htmlspecialchars($row_slider['judul']) . '">';
            if (!empty($row_slider['link'])) {
                echo '</a>';
            }
            echo '</div>';
            $slide_count++;
        }
        ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<?php endif; ?>


<!-- ======================= LINK TERKAIT ======================= -->
<section class="link-terkait">
    <h3>Link Terkait</h3>
    <div class="images">
        <a href="https://lapor.go.id/"><img src="logo/lapor1.png" alt="lapor"></a>
        <a href="https://laporpakyes.lamongankab.go.id/"><img src="logo/lpryes.png" alt="lapor pak yes"></a>
        <a href="https://laporwbs.lamongankab.go.id/"><img src="logo/wbs.png" alt="lapor wbs"></a>
        <a href="https://lamongankab.go.id/artikel/47"><img src="logo/nomor.png" alt="nomor penting"></a>
    </div>
</section>


<!-- ======================= BERITA ======================= -->
<section id="berita-utama">
    <div class="container">
        <h2>Berita Terkini</h2>
        <?php if ($result_berita->num_rows > 0): ?>
            <?php while($row = $result_berita->fetch_assoc()): ?>
                <div class="card">
                    <?php if (!empty($row['gambar'])): ?>
                        <img src="uploads/<?php echo htmlspecialchars($row['gambar']); ?>" alt="<?php echo htmlspecialchars($row['judul']); ?>">
                    <?php endif; ?>
                    <div class="card-content">
                        <h3><?php echo htmlspecialchars($row['judul']); ?></h3>
                        <p><small>Dipublikasikan pada: <?php echo date('d F Y', strtotime($row['tanggal_dibuat'])); ?></small></p>
                        <p><?php echo substr(htmlspecialchars($row['isi']), 0, 200) . '...'; ?></p>
                        <a href="detail_berita.php?slug=<?php echo htmlspecialchars($row['slug']); ?>">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Belum ada berita yang dipublikasikan.</p>
        <?php endif; ?>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php 
include 'footer.php';
 ?>
