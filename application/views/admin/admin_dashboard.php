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
<nav class="navbar navbar-expand-lg navbar-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="assets/image/logo_AnterIN_2.png"
            height="35"
            alt="MDB Logo"
            loading="lazy"
          />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Nama</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
    </div>
  </nav>
  <!-- Navbar -->
    <div class="container mt-4">
        <!--Form-->
        <form onsubmit="event.preventDefault(); onFormSubmit();" autocomplete="off">
            <h3>Input Paket</h3>
            <div class="container-md card border-3 shadow rounded-3 my-9">
            <div class="form-group">
                <label>No Resi</label>
                <input type="text" name="pengirim" id="pengirim" class="form-control">
            </div>
            <div class="form-group">
                <label>Pengirim</label>
                <input type="text" name="pengirim" id="pengirim" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat Pengirim</label>
                <input type="text" name="alamat_pengirim" id="alamat_pengirim" class="form-control">
            </div>
            <div class="form-group">
                <label>Penerima</label>
                <input type="text" name="penerima" id="penerima" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat Penerima</label>
                <input type="text" name="alamat_penerima" id="alamat_penerima" class="form-control">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="ket" id="ket" class="form-control">
            </div>
            <div>
                <input type="submit" value="Submit" class="btn btn-block">
            </div>
        </form>
        <!--List-->
        <table class="table table-striped mt-4" id="fruit-list">
            <thead>
                <tr>
                    <th>No Resi</th>
                    <th>Pengirim</th>
                    <th>Alamat Pengirim</th>
                    <th>Penerima</th>
                    <th>Alamat Penerima</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    <script src="assets/js/main.js"></script>
</div>
<footer>
    <label class="copywrite">
      Anterin &copy;2022
    </label>
  </footer>
</body>
</html>