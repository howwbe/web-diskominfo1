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
  <!-- Tambahkan Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    /* Tambahkan CSS khusus untuk slider */
    .carousel-item {
      height: 400px;
    }
    .carousel-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: rgba(0, 0, 0, 0.5);
      border-radius: 50%;
      padding: 10px;
    }
    /* Tambahkan animasi transisi */
    .carousel-inner {
      transition: transform 0.5s ease-in-out;
    }
    /* Tambahkan indikator yang lebih terlihat */
    .carousel-indicators button {
      background-color: rgba(255, 255, 255, 0.5);
    }
    .carousel-indicators button.active {
      background-color: #fff;
    }
  </style>
</head>
<body>
<!-- ======================= SLIDER ======================= -->
<?php if ($result_slider->num_rows > 0): ?>
<div id="mainSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover">
    <div class="carousel-indicators">
        <?php
        $slide_count = 0;
        $result_slider->data_seek(0);
        while($row_slider = $result_slider->fetch_assoc()) {
            $active_class = ($slide_count == 0) ? 'active' : '';
            echo '<button type="button" data-bs-target="#mainSlider" data-bs-slide-to="' . $slide_count . '" class="' . $active_class . '" aria-current="true" aria-label="Slide ' . ($slide_count + 1) . '"></button>';
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
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<?php endif; ?>
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Inisialisasi carousel
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = new bootstrap.Carousel(document.getElementById('mainSlider'), {
            interval: 5000,
            wrap: true
        });
        
        // Tambahkan support untuk swipe di mobile
        let touchStartX = 0;
        let touchEndX = 0;
        
        const slider = document.getElementById('mainSlider');
        
        slider.addEventListener('touchstart', function(event) {
            touchStartX = event.changedTouches[0].screenX;
        }, false);
        
        slider.addEventListener('touchend', function(event) {
            touchEndX = event.changedTouches[0].screenX;
            handleSwipe();
        }, false);
        
        function handleSwipe() {
            if (touchEndX < touchStartX - 50) {
                carousel.next();
            }
            if (touchEndX > touchStartX + 50) {
                carousel.prev();
            }
        }
    });
</script>
</body>
</html>

<?php 
include 'footer.php';
 ?>