
    <?php 
    include 'header.php'
    ?>
<section class="container mt-3  border-0">
      <h1 class="prog">
Tentang Program
   </h1>
   
  <div class="card-body">
  
    Kelas Kopi Online adalah program pelatihan sederhana untuk pemula yang ingin belajar teknik dasar menyeduh kopi, membuat latte art, dan memahami peluang bisnis kopi rumahan.
  </div>
</div>
</section>
<section class="container mt-3">
<h1>Pilihan Kelas</h1>
<div class="row gap-3 cards">
    <?php

$sql="select * from courses";
$query=mysqli_query($conn, $sql);

while($result=mysqli_fetch_array($query)){


?>
<div class="card col " style="width: 15rem;">
  
  <div class="card-body">
    <h5 class="card-title"><?= $result['name']?></h5>
    <p class="card-text"><?= $result['deskripsi']?></p>
    <strong>Rp <?=  number_format($result['harga'],0,', ','.')?></strong>
  </div>
  
  

  </div>
  <?php
}
  ?>
</div>
</section>
<section class="container mt-3">
<h1>Form Pendaftaran</h1>
<form method="POST" action="sv_pendaftaran.php">
    
     <div class="mb-3">
    <label class="form-label">Nama Lengkap:</label>
    <input type="text" name="username" class="form-control" placeholder="Masukkan nama lengkap" >
    
  </div>
     <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control"  placeholder="contoh@gmail.com">
   
  </div>
  <div class="mb-3">
    <label class="form-label">Nomor Whatsapp</label>
    <input type="text" name="wa" class="form-control"  placeholder="08123456789">
   
  </div>
  <div class="mb-3">
    <label class="form-label">Pilih Kelas</label>
    <select name="kelas" class="form-control"  >
      <option value="">-- Pilih Kelas --</option>
      <option value="Basic_Brewing">Basic Brewing</option>
      <option value="hello">hello</option>
      <option value="hello">hello</option>
    </select>
   
  </div>
    <div class="mb-3">
    <label class="form-label">Jumlah Peserta</label>
    <input type="number" place name="username" min="1" value="1" class="form-control" >
   
  </div>
    <button type="submit" name="daftar" class="form-control btn">Submit</button>
</form>
</section>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> -->
</body>
</html>