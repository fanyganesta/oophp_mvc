
<div class="jumbotron px-4">
    <h1 class="display-4">Selamat Datang!</h1>
    <p class="lead">Ini adalah halaman utama/beranda</p>
    <hr class="my-4">

    <p>Berikut list data dari model:</p>
    <div class="d-flex">
        <?php $i = 1; foreach($datas as $data) : ?>
            <div class="card mx-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $data['nama'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $data['divisi']?></h6>
                <a href="<?= BASE_URL . '/home/detail/'.$data['ID']?>" class="card-link">Detail</a>
                <a href="<?= BASE_URL . '/home/edit/'.$data['ID']?>" class="card-link">Edit</a>
            </div>
            </div>
        <?php $i++; endforeach ?>
    </div>
</div>