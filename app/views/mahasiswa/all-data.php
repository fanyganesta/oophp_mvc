<?php Flasher::flash() ?>

<table class="table mt-5 table-bordered border-primary rounded-3">
  <thead>
    <tr>
      <th scope="col" class="text-center">No.</th>
      <th scope="col" class="text-center">Nama</th>
      <th scope="col" class="text-center">Email</th>
      <th scope="col" class="text-center">Tanggal Lahir</th>
      <th scope="col" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    
     <?php $i = 1; foreach($datas as $data) : ?>
        <tr>
        <th scope="row" class="text-center"><?= $i ?></th>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['email'] ?></td>
        <td class="text-center"><?= $data['tanggalLahir'] ?></td>
        <td class="text-center">
          <a href="<?= BASE_URL . "/mahasiswa/edit/" . $data['ID'] ?>">
            <span class="badge bg-warning">Edit</span>
          </a> 
          <a href="<?= BASE_URL . "/mahasiswa/hapus/" . $data['ID'] ?>">
            <span class="badge bg-danger">Delete</span>
          </a>
        </td>
        </tr>
    <?php $i++; endforeach ?>
  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <?php if($halamanAktif > 1) : ?>
        <a class="page-link" href="<?= $halamanAktif - 1?>" tabindex="-1" aria-disabled="true">Previous</a>
      <?php endif ?>
    </li>
    <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
    <li class="page-item <?php echo ($i == $halamanAktif ) ? 'active' : ''?>"><a class="page-link" href="?halaman=<?= $i ?><?php if(isset($_GET['cari'])){ echo '&cari='.$_GET['cari'];}?>"><?= $i ?></a></li>
    <?php endfor ?>
      <?php if($halamanAktif < $jumlahHalaman) : ?>
        <a class="page-link" href="<?= $halamanAktif + 1 ?>">Next</a>
      <?php endif ?>
    </li>
  </ul>
</nav>