<div class="jumbotron px-4">
    <h1 class="display-4">Detail Data</h1>
    <p class="lead">Ini adalah halaman datail dari data yang anda pilih</p>
    <a href="<?= BASE_URL . '/home'?>">Kembali  ke home</a>
    <hr class="my-4">

    <p>Berikut detailnya:</p>
    <ul>
        <li>Nama: <?= $datas['nama'] ?></li>
        <li>Divisi: <?= $datas['divisi'] ?></li>
    </ul>
</div>