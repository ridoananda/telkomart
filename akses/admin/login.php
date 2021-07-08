<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Halaman Login </title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <form action="akses_singgah.php" method="post">
    <div class="login-page">
      <h1>Admin Login</h1>

      <div class="form-control">
        <i class="fa fa-user"></i>
        <input type="text" placeholder="Username" name="username">
      </div>

      <div class="form-control">
        <i class="fa fa-lock"></i>
        <input type="password" placeholder="Password" name="password">
      </div>

      <button class="btn-submit" type="submit">Masuk</button>
    </div>
    </form>
  </body>
</html>