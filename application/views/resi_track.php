<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cek Resi</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

  <nav>
    <label class="logo">アンテリン</label>

    <ul>
      <li><a href="../">Home</a></li>
      <li><a href="../">Cek Resi</a></li>
      <li><a href="../#Services">Services</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <section class="features">

    <div class="box-container">
      <div class="box">
        <h4>Nomor Resi</h4>
        <p><?= $track->resi; ?></p>
        <h4>Pengirim</h4>
        <p><?= $track->pengirim; ?></p>
        <h4>Penerima</h4>
        <p><?= $track->penerima; ?></p>
        <h4>Alamat Pengirim</h4>
        <p><?= $track->alamat_pengirim; ?></p>
        <h4>Alamat Penerima</h4>
        <p><?= $track->alamat_penerima; ?></p>
      </div>

      <div class="box">
        <h4>Lacak</h4> <br>
        <?php foreach ($track_ket as $row) : ?>
          <?php echo $row['ket']  ?>
          <?php echo "<br>"; ?>
          |
          <?php echo "<br>"; ?>
          |
          <?php echo "<br>"; ?>
        <?php endforeach; ?>
      </div>
    </div>

  </section>

  <section class="footer" id="contact">

    <div class="box-container">

      <div class="box">
        <h3> Anterin </h3>
        <p>Find Us in Social Media</p>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
        </div>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="#" class="links"> <i class="fas fa-phone"></i> +6289512768652 </a>
        <a href="#" class="links"> <i class="fas fa-envelope"></i> anterin@gmail.com </a>
        <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Bogor, Indonesia </a>
      </div>

      <div class="box">
        <h3>Members of the group</h3>
        <h4> M Ali Yudati </h4>
        <h4> Fahrul Rizky </a>
          <h4> Hansen Charte </h4>
          <h4> M Sultan Ilham Seftiansyah</h4>
          <h4> Andika Pramuditya </h4>
      </div>

    </div>

  </section>
</body>

</html>