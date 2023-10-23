<div class="container mt-4">
    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash();?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary mb-3 tombolTambahData"  data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Mahasiswa
        </button>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <form action="<?=BASEURL;?>/mahasiswa/cari" method="post">
        <div class="input-group mb-2">
          <input type="text" class="form-control" placeholder="Cari Mahasiswa...." autocomplete="off" name="keyword" id="keyword" aria-describedby="button-addon2">
          <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
        </div>
      </form>
      </div>
    </div>

    <div class="row">
        <div class="col-6">

            <h3>Daftar Mahasiswa</h3>

            <ul class="list-group">
                    <?php foreach ($data['mhs'] as $mhs): ?>
                    <li class="list-group-item "><?=$mhs['nama'];?>
                    <a href=" <?=BASEURL;?>/mahasiswa/hapus/<?=$mhs['id'];?>" class="badge text-bg-danger float-end me-2" onclick= "return confirm('Apa anda Yakin?')" >Hapus</a>

                    <a href=" <?=BASEURL;?>/mahasiswa/ubah/<?=$mhs['id'];?>" class="badge text-bg-success float-end me-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?=$mhs['id'];?>">Ubah</a>

                    <a href=" <?=BASEURL;?>/mahasiswa/detail/<?=$mhs['id'];?>" class="badge text-bg-primary float-end me-2">Detail</a>
                    </li>
                    <?php endforeach;?>
                </ul>


        </div>
    </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?=BASEURL?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="mb-3">
                <label for="nrp" class="form-label">Nrp</label>
                <input type="number" class="form-control" id="nrp" name="nrp">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-grup">
                <label for="jurusan">jurusan</label>
                <select class="form-control" name="jurusan" id="jurusan">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Teknik Pangan">Teknik Pangan</option>
                    <option value="Teknik Planalogi">Teknik Planalogi</option>
                    <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                </select>
            </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>