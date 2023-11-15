        <div class="container col-10 pt-5 pb-5">
            <div class="card shadow">
                <div class="card-header h5">
                    Pengelolaan Data Buku
                </div>
                <div class="card-body">
                    <!-- alert tambah data -->
                    <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    <!-- alert edit data -->
                    <?php if ($this->session->flashdata('danger')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('danger'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    <!-- alert hapus data -->
                    <?php if ($this->session->flashdata('primary')) : ?>
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('primary'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">ID Buku</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Nama Buku</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Penerbit</th>
                                    <th scope="col">Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($buku as $Get) : ?>
                                <tr>
                                    <th scope="row"><?= $no . "."; ?></th>
                                    <td><?= $Get->id_buku; ?></td>
                                    <td><?= $Get->kategori; ?></td>
                                    <td><?= $Get->nama_buku; ?></td>
                                    <td><?= $Get->harga; ?></td>
                                    <td><?= $Get->stok; ?></td>
                                    <td><?= $Get->penerbit; ?></td>
                                    <td>
                                        <!-- button modal update -->
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#update<?= $Get->id_buku; ?>">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <!-- modal update -->
                                        <div class="modal fade" id="update<?= $Get->id_buku; ?>"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="updateLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="updateLabel">Form
                                                            Edit</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="<?= site_url('Welcome/updateBuku') ?>" method="post">
                                                        <div class="modal-body">
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" name="id_buku"
                                                                    id="id_buku" placeholder="ID Buku"
                                                                    value="<?= $Get->id_buku; ?>" readonly>
                                                                <label for="id_buku">ID Buku</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" name="kategori"
                                                                    id="kategori" placeholder="Kategori"
                                                                    value="<?= $Get->kategori; ?>">
                                                                <label for="kategori">Kategori</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" name="nama_buku"
                                                                    id="nama_buku" placeholder="Nama Buku"
                                                                    value="<?= $Get->nama_buku; ?>">
                                                                <label for="nama_buku">Nama Buku</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" name="harga"
                                                                    id="harga" placeholder="Harga"
                                                                    value="<?= $Get->harga; ?>">
                                                                <label for="harga">Harga</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="number" class="form-control" name="stok"
                                                                    id="stok" placeholder="Stok"
                                                                    value="<?= $Get->stok; ?>">
                                                                <label for="stok">Stok</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" name="penerbit"
                                                                    id="penerbit" placeholder="Penerbit"
                                                                    value="<?= $Get->penerbit; ?>">
                                                                <label for="penerbit">Penerbit</label>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary"><i
                                                                    class="fas fa-edit"></i> Edit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- button delete -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#delete<?= $Get->id_buku; ?>">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                        <!-- modal delete -->
                                        <div class="modal fade" id="delete<?= $Get->id_buku; ?>"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="deleteLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="deleteLabel">Form
                                                            Hapus</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>Apakah anda yakin ingin <span
                                                                class="text-danger">menghapus</span> data
                                                            dengan id '<?= $Get->id_buku ?>'?</h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <a href="<?php echo site_url('Welcome/deleteBuku/' . $Get->id_buku) ?>"
                                                            class="btn btn-danger"><i class="fas fa-trash"></i>
                                                            Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php $no++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add">
                        + Tambah
                    </button>
                    <!-- modal add -->
                    <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                        aria-labelledby="addLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="addLabel">Form
                                        Tambah</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="<?= site_url('Welcome/addBuku') ?>" method="post">
                                    <div class="modal-body">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="id_buku" id="id_buku"
                                                placeholder="ID Buku" required>
                                            <label for="id_buku">ID Buku</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="kategori" id="kategori"
                                                placeholder="Kategori" required>
                                            <label for="kategori">Kategori</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="nama_buku" id="nama_buku"
                                                placeholder="Nama Buku" required>
                                            <label for="nama_buku">Nama Buku</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="harga" id="harga"
                                                placeholder="Harga" required>
                                            <label for="harga">Harga</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" name="stok" id="stok"
                                                placeholder="Stok" required>
                                            <label for="stok">Stok</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="penerbit" id="penerbit"
                                                placeholder="Penerbit" required>
                                            <label for="penerbit">Penerbit</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-success">+ Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>