        <div class="container col-10 pt-5 pb-5">
            <div class="card shadow">
                <div class="card-header">
                    <div class="card-title">
                        <h5>Data Buku</h5>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?php echo site_url('Welcome/cari') ?>" method="post">
                        <div class="d-flex col-4 mb-3 gap-2">
                            <input type="search" class="form-control" name="keyword" placeholder="Cari judul buku..." required>
                            <button class="btn btn-outline-primary" type="submit">Cari</button>
                        </div>
                    </form>

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
                                    </tr>
                                <?php $no++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>