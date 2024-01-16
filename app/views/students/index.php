<div class="row">
    <div class="col-lg-6">
        <?php flasher::flash() ?>
    </div>
</div>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/students/tambah" method="POST">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                <label for="">NIS</label>
                <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS">
                <label for="">Umur</label>
                <input type="text" class="form-control" name="umur" id="umur" placeholder="Umur">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
</div>







<div class="container mt-4">
    <div class="row">
        <div class="col-6">
        <h1 class="text-bold fs-3">Daftar Siswa :</h1>
        <?php foreach ($data['table'] as $s) : ?>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between items-center"><?= $s['nama'] ?>
            <div class="">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal<?= $s['id'] ?>">
                Ubah Data
            </button>
                <a href="<?= BASEURL ?> /students/detail/<?= $s['id'] ?>" class="btn btn-primary">Detail</a>
                <a href="<?=BASEURL ?>/students/hapus/<?= $s['id'] ?>" class="btn btn-danger">Hapus</a>
            </div>
        </li>
        </ul>
                
        <!-- Modal -->
        <div class="modal fade" id="updateModal<?= $s['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= BASEURL ?>/students/update" method="POST">
                        <input type="hidden" value="<?= $s['id'] ?>" name="id">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?= $s['nama'] ?>">
                        <label for="">NIS</label>
                        <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS" value="<?= $s['nis'] ?>">
                        <label for="">Umur</label>
                        <input type="text" class="form-control" name="umur" id="umur" placeholder="Umur" value="<?= $s['umur'] ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        </div>
    </div>

</div>


