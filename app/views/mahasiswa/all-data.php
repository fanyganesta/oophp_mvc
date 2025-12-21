<?php Flasher::flash() ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Tanggal Lahir</th>
    </tr>
  </thead>
  <tbody>
    
     <?php $i = 1; foreach($datas as $data) : ?>
        <tr>
        <th scope="row"><?= $i ?></th>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['email'] ?></td>
        <td><?= $data['tanggalLahir'] ?></td>
        </tr>
    <?php $i++; endforeach ?>
  </tbody>
</table>