
<div class="jumbotron px-4">
    <h1 class="display-4">Selamat Datang!</h1>
    <p class="lead">Ini adalah halaman utama/beranda</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>

    <p>Berikut list data dari model:</p>
    <?php $i = 1; foreach($datas as $data) : ?>
        <ul>
            <li>Data ke-<?= $i ?></li>
            <li><?= $data['nama'] ?></li>
            <li><?= $data['divisi'] ?></li>
        </ul>
    <?php $i++; endforeach ?>
</div>