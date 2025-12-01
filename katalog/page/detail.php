<?php
$id = isset($_GET['id']) ? $_GET['id'] : null;
?>

<link rel="stylesheet" href="../style.css">

<div class="detail-container">

  <!-- KIRI : GALERI -->
  <div class="image-gallery">

    <!-- Radio untuk mengganti gambar -->
    <input type="radio" name="gallery" id="img1" checked>
    <input type="radio" name="gallery" id="img2">
    <input type="radio" name="gallery" id="img3">
    <input type="radio" name="gallery" id="img4">

    <!-- Gambar besar -->
    <div class="big-image">
      <img src="../gambar/KW1.1.jpg" class="pic pic1">
      <img src="../gambar/KW1.2.jpg" class="pic pic2">
      <img src="../gambar/KW1.3.jpg" class="pic pic3">
      <img src="../gambar/KW1.4.jpg" class="pic pic4">
    </div>

    <!-- Thumbnail -->
    <div class="thumb-list">
      <label for="img1"><img src="../gambar/KW1.1.jpg"></label>
      <label for="img2"><img src="../gambar/KW1.2.jpg"></label>
      <label for="img3"><img src="../gambar/KW1.3.jpg"></label>
      <label for="img4"><img src="../gambar/KW1.4.jpg"></label>
    </div>

</div>

<div class="product-info">
  <h1>KAOS VISKOSE<br>LENGAN PENDEK</h1>
  <p class="price">Rp 149.000</p>

  <div class="size-grid">
      <label class="size-option">
          <input type="radio" name="size">
          <span>XS</span>
      </label>
      <label class="size-option">
          <input type="radio" name="size">
          <span>S</span>
      </label>
      <label class="size-option">
          <input type="radio" name="size">
          <span>M</span>
      </label>
      <label class="size-option">
          <input type="radio" name="size">
          <span>L</span>
      </label>
      <label class="size-option">
          <input type="radio" name="size">
          <span>XL</span>
      </label>
      <label class="size-option">
          <input type="radio" name="size">
          <span>XXXL</span>
      </label>
  </div>

  <button class="add-to-cart">TAMBAH KE KERANJANG</button>

  <div class="desc">
    <b>SLIM FIT – KERAH BUNDAR – PANJANG NORMAL – LENGAN PENDEK</b><br><br>
    Kaus ini dibuat dengan bahan campuran viskose yang lembut dan nyaman di kulit. Didesain
    dengan potongan slim fit yang mengikuti bentuk tubuh, serta memiliki kerah bundar klasik dan
    lengan pendek yang simpel. Panjang kaus ini termasuk normal, cocok digunakan untuk gaya
    kasual sehari-hari maupun dipadukan dengan berbagai jenis bawahan favorit Anda.
    <br><br>
    <b>KOMPOSISI</b><br>
    BAGIAN LUAR<br>
    96% Viscose<br>
    4% elastan
  </div>
</div>

</div>