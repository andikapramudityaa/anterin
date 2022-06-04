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
      <li><a href="#home">Cek Resi</a></li>
      <li><a href="#Services">Services</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <section class="home" id="home">
    <div class="container mt-4">
      <table>
        <thead>
          <tr>
            <th>Resi</th>
            <th>Kode Servis</th>
            <th>Pengirim</th>
            <th>Alamat Pengirim</th>
            <th>Penerima</th>
            <th>Alamat Penerima</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <?= $track->resi; ?>
            </td>
            <td>
              <?= $track->kode_servis; ?>
            </td>
            <td>
              <?= $track->pengirim; ?>
            </td>
            <td>
              <?= $track->penerima; ?>
            </td>
            <td>
              <?= $track->alamat_pengirim; ?>
            </td>
            <td>
              <?= $track->alamat_penerima; ?>
            </td>
            
              <td align="center">
              <?php foreach ($track_ket as $row) : ?>
                <?php echo $row['ket']  ?>
                <?php echo "<br>"; ?>
                |||||||||||
                <?php echo "<br>"; ?>
                <?php endforeach; ?>
              </td>
            
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section class="features" id="Services">

    <div class="box-container">
      <div class="box">
        <img src="../assets/image/pngwing.com.png" alt="">
        <h3>Reguler</h3>
        <p>Estimasi 2-3 Hari Pengiriman</p>
      </div>

      <div class="box">
        <img src="../assets/image/pngwing.com.png" alt="">
        <h3>Express</h3>
        <p>Estimasi datang esok hari</p>
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