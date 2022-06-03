<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anterin - Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style2.css">
</head>

<body>
  <div class="container-sm">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <img src="image/logo_AnterIN.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Anterin Login</h5>
            <form id="contact-form" action="auth" method="post" role="form">
              <div class="form-floating mb-3">
                <input type="text" name="id" class="form-control" id="floatingInput" placeholder="ID" required>
                <label for="floatingInput">ID</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingInput">Password</label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary text-uppercase fw-bold" type="submit" value="login">Login</button>
              </div>
              <div class="reg-link">
                <a href="adm-register">Register</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>