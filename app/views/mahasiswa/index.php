<div id="intro" class="bg-image shadow-2-strong">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.8); height:89vh">
      <div class="container d-flex align-items-center justify-content-center text-center h-100">
        <div class="text-white" data-mdb-theme="dark">
          <h1 class="mb-3">Selamat Datang di Projek Belajar OOPHP MVC</h1>
          <h5 class="mb-4">Based on WPU Unpas</h5>
          <p>(https://www.youtube.com/watch?v=tBKOb8Ib5nI&list=PLFIM0718LjIVEh_d-h5wAjsdv2W4SAtkx)</p>
          <a class="btn btn-outline-dark btn-lg m-2 btn-light" data-mdb-ripple-init href="<?= BASE_URL . "/mahasiswa/seeder" ?>" target="_self"
             role="button" onclick="return confirm('Yakin ingin menambah data?')">Tambah Data Disini</a>
          <a class="btn btn-outline-light btn-lg m-2" data-mdb-ripple-init href="<?= BASE_URL . "/mahasiswa/getAll" ?>" target="_self"
             role="button">Lihat List</a>
        </div>
      </div>
    </div>
</div>