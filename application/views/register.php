
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

    <body class="text-center">
        <form class="form-signin" action="<?= base_url(); ?>user/register_store" method="POST">
            <h1 class="h3 mb-3 font-weight-normal">User Register</h1>
            
            <input type="text" name="name" class="form-control mb-2" placeholder="Your Name" required>
            <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </form>

    </body>
</html>
