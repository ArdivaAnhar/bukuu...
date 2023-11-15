        <div class="container col-10 pt-5 pb-5">
            <div class="card shadow">
                <div class="card-header h5">
                    Data Buku
                </div>
                <div class="card-body">
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