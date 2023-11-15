        <div class="container col-10 pt-5 pb-5">
            <div class="card shadow">
                <div class="card-header h5">
                    Pengelolaan Data Penerbit
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
                                    <th scope="col">ID Penerbit</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Kota</th>
                                    <th scope="col">Telepon</th>
                                    <th scope="col">Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($penerbit as $Get) : ?>
                                <tr>
                                    <th scope="row"><?= $no . "."; ?></th>
                                    <td><?= $Get->id_penerbit; ?></td>
                                    <td><?= $Get->nama; ?></td>
                                    <td><?= $Get->alamat; ?></td>
                                    <td><?= $Get->kota; ?></td>
                                    <td><?= $Get->telp; ?></td>
                                    <td>
                                        <!-- button modal update -->
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#update<?= $Get->id_penerbit; ?>">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <!-- modal update -->
                                        <div class="modal fade" id="update<?= $Get->id_penerbit; ?>"
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
                                                    <form action="<?= site_url('Welcome/updatePenerbit') ?>"
                                                        method="post">
                                                        <div class="modal-body">
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control"
                                                                    name="id_penerbit" id="id_penerbit"
                                                                    placeholder="ID Penerbit"
                                                                    value="<?= $Get->id_penerbit; ?>" readonly>
                                                                <label for="id_penerbit">ID Penerbit</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" name="nama"
                                                                    id="nama" placeholder="Nama"
                                                                    value="<?= $Get->nama; ?>">
                                                                <label for="nama">Nama</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" name="alamat"
                                                                    id="alamat" placeholder="Alamat"
                                                                    value="<?= $Get->alamat; ?>">
                                                                <label for="alamat">Alamat</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" name="kota"
                                                                    id="kota" placeholder="Kota"
                                                                    value="<?= $Get->kota; ?>">
                                                                <label for="kota">Kota</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" name="telp"
                                                                    id="telp" placeholder="Telepon"
                                                                    value="<?= $Get->telp; ?>">
                                                                <label for="telp">Telepon</label>
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
                                            data-bs-target="#delete<?= $Get->id_penerbit; ?>">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                        <!-- modal delete -->
                                        <div class="modal fade" id="delete<?= $Get->id_penerbit; ?>"
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
                                                                class="text-danger">menghapus</span> data dengan id
                                                            '<?= $Get->id_penerbit; ?>'
                                                            ?</h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <a href="<?php echo site_url('Welcome/deletePenerbit/' . $Get->id_penerbit) ?>"
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
                                <form action="<?= site_url('Welcome/addPenerbit') ?>" method="post">
                                    <div class="modal-body">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="id_penerbit" id="id_penerbit"
                                                placeholder="ID Penerbit" required>
                                            <label for="id_penerbit">ID Penerbit</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="nama" id="nama"
                                                placeholder="Nama" required>
                                            <label for="nama">Nama</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="alamat" id="alamat"
                                                placeholder="Alamat" required>
                                            <label for="alamat">Alamat</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="kota" id="kota"
                                                placeholder="Kota" required>
                                            <label for="kota">Kota</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="telp" id="telp"
                                                placeholder="Telepon" required>
                                            <label for="telp">Telepon</label>
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