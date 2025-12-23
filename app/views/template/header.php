<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= BASE_URL?>/css/bootstrap.css">
</head>
<body class="px-5 pt-3">

<nav class="navbar navbar-expand-lg bg-body-tertiary justify-content-between mb-2">
    <div class="d-flex col-6" >
      <a class="navbar-brand" href="<?= BASE_URL?>">OOPHP MVC</a>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>/about">About</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="col-3 float-right">
      <form action="" method="GET">
        <div class="input-group">
          <input type="text" name="cari" class="form-control" placeholder="Nama/Email/Tanggal Lahir" aria-label="cari" aria-describedby="cariMahasiswa" value="<?= $_GET['cari'] ?? null ?>">
          <button class="btn btn-primary" type="submit" id="cariMahasiswa">Cari Mahasiswa</button>
        </div>
      </form>
    </div>
</nav>