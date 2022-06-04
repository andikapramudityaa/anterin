<!DOCTYPE html>
<html lang="en">

<head>
    <title>Anterin Admin</title>

    <!-- Basic Page Needs ================================================== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anterin - Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styleprofil.css">
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>
    <nav>
        <label class="logo">
            Anterin
            <!-- <img src="image/logo_AnterIN_2.png" alt=""> -->
        </label>
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

    <div class="konten">
        <h2 class="subtitle" align="center">Profile</h2>
        <div class="profil">
            <div class="isi">
                <img src="assets/image/icons8_user_male_circle_480px_1.png" align="center">
                <br>
                <table>
                    <tr>
                        <td class="satu">Admin </td>
                        <td class="batas">:</td>
                        <td class="dua"><?= $admin->id; ?></td>
                    </tr>
                    <tr>
                        <td class="satu" valign="top">Lokasi </td>
                        <td class="batas" valign="top">:</td>
                        <td class="dua"><?= $admin->lokasi; ?></td>
                    </tr>
                </table>
            </div>
        </div><!-- Profil end -->
    </div> <!-- Konten end-->
</body>

</html>