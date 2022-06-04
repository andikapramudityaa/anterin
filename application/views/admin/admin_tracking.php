<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/styleAdmin.css">
  <link href="assets/image/logo_AnterIN_3.png" rel="anterin-icon" type="image/png">
  <title>Anterin - Admin</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand mt-2 mt-lg-0" href="admin">
      <img src="assets/image/logo_AnterIN_2.png" height="35" alt="Anterin Logo" loading="lazy" />
    </a>

    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="admin">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adm-tracking">Report</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adm-profil">Profile</a>
      </li>
    </ul>
  </nav>
  <!-- Navbar -->
  <div class="container mt-4">
    <table class="table table-bordered" id="fruit-list">
      <thead>
        <tr>
          <th>No Input</th>
          <th>No Resi</th>
          <th>Kode Servis</th>
          <th>Pengirim</th>
          <th>Alamat Pengirim</th>
          <th>Penerima</th>
          <th>Alamat Penerima</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($log_tracking as $row) : ?>
          <tr>
            <td>
              <?php echo $row['no_input'] ?>
            </td>
            <td>
              <?php echo $row['resi'] ?>
            </td>
            <td>
              <?php echo $row['kode_servis'] ?>
            </td>
            <td>
              <?php echo $row['pengirim'] ?>
            </td>
            <td>
              <?php echo $row['penerima'] ?>
            </td>
            <td>
              <?php echo $row['alamat_pengirim'] ?>
            </td>
            <td>
              <?php echo $row['alamat_penerima'] ?>
            </td>
            <td>
              <?php echo $row['ket'] ?>
            </td>
            <td>
              <a href="adm-edit/<?= $row["no_input"]; ?>">Edit</a> | <a href="<?= base_url(); ?>adm-deltrack/<?= $row['no_input']; ?>">Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <script src="assets/js/main.js"></script>
  </div>
</body>

</html>