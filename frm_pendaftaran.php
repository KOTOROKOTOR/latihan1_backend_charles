<?php include "koneksi.php"; ?>
<section class="container mt-3">
<h1>Form Pendaftaran</h1>
<form method="POST" action="sv_pendaftaran.php">
    
     <div class="mb-3">
    <label class="form-label">Nama Lengkap:</label>
    <input type="text" name="full_name" class="form-control" placeholder="Masukkan nama lengkap" >
    
  </div>
     <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control"  placeholder="contoh@gmail.com">
   
  </div>
  <div class="mb-3">
    <label class="form-label">Nomor Whatsapp</label>
    <input type="text" name="phone_number" class="form-control"  placeholder="08123456789">
   
  </div>
  <div class="mb-3">
    <label class="form-label">Pilih Kelas</label>
    <select name="course_id" class="form-control"  >
      <option value="">-- Pilih Kelas --</option>
      <?php
      $sql = "SELECT * FROM courses";
      $query=mysqli_query($conn, $sql);
      while($result=mysqli_fetch_array($query)){
    
$id=$result['id'];
$course_name=$result['name'];
$course_price=$result['harga'];

?>
              <option value="<?= $id ?>"><?= $course_name ?> - Rp <?= number_format($course_price, 0, ',', '.') ?></option>

<?php
      }
    ?>

    </select>
   
  </div>
    <div class="mb-3">
    <label class="form-label">Jumlah Peserta</label>
    <input type="number" place name="username" min="1" value="1" class="form-control" >
   
  </div>
    <button type="submit" name="daftar" class="form-control btn">Submit</button>
</form>
</section>
