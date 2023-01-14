
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Signin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

    <body class="text-center">
        

        <form class="form-signin" action="<?= base_url(); ?>user/login_store" method="POST">
            <?php if($this->session->flashdata('msg')){ ?>
                <p class="alert alert-success"><?= $this->session->flashdata('msg')?></p>
            <?php } ?>

            <?php if($this->session->flashdata('error')){ ?>
                <p class="alert alert-danger"><?= $this->session->flashdata('error')?></p>
            <?php } ?>

            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
    </body>
</html>
