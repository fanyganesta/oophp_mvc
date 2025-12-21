<div class="row">
    <div class="col-lg-3">
        <?php Flasher::flash() ?>
    </div>
</div>


<div class="jumbotron px-4">
    <h1 class="display-4">Selamat Datang!</h1>
    <p class="lead">Ini adalah halaman utama/beranda</p>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewData">
        Launch demo modal
    </button>
    
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
                <a href="<?= BASE_URL . '/home/hapus/'.$data['ID']?>" class="card-link">Hapus</a>
            </div>
            </div>
        <?php $i++; endforeach ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addNewData" tabindex="-1" aria-labelledby="addNewDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addNewDataLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="<?= BASE_URL . "/home/insert"?>">
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                </div>
                <select class="form-select my-2" aria-label="Default select divisi" name="divisi">
                    <option selected>Pilih Divisi</option>
                    <option value="Advertiser">Advertiser</option>
                    <option value="Admin">Admin</option>
                    <option value="Finance">Finance</option>
                </select>

            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
    </div>
  </div>
</div>