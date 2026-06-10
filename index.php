
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
<?php include "frm_pendaftaran.php"; ?>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> 
</body>
</html>