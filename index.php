  <!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?page=home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?page=artikel">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?page=kategori">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?page=about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?page=contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <?php include 'config/template.php' ?>
  </div>
  <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
  </script>
</body>

</html>