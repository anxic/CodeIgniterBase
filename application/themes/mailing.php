
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $METADESCRIPTION; ?>">

    <title><?= $TITLE; ?></title>


    <!-- Bootstrap core CSS -->
    <link href="<?= vendor_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= css_url('scrolling-nav'); ?>" rel="stylesheet">
    <?php foreach($CSS as $url): ?>
        <link rel="stylesheet" type="text/css" media="screen" href="<?= $url; ?>" />
    <?php endforeach; ?>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>Welcome to Mailing Template</h1>
        <p class="lead">A landing page template freshly redesigned for Bootstrap 4</p>
      </div>
    </header>

    <section id="body">
     <div class="container">
       <div class="row">
           <?= $CONTENT; ?>
       </div>
     </div>
   </section>

   <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; My Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= vendor_url('jquery/jquery.min.js'); ?>"></script>
    <script src="<?= vendor_url('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= vendor_url('jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="<?= js_url('scrolling-nav'); ?>"></script>

    <?php foreach($JS as $url): ?>
        <script type="text/javascript" src="<?= $url; ?>"></script>
    <?php endforeach; ?>
  </body>
</html>
