        <div class="container col-10 pt-5 pb-5">
            <div class="card shadow">
                <?php if ($this->session->flashdata('success')) : ?>
                <div class="p-3 pb-0 pr-0 h5">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>
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
                                <?php
                                if (is_array($buku) || is_object($buku)) {
                                    // Memeriksa apakah $buku adalah array atau objek
                                    $no = 1;
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
                                    endforeach;
                                } else {
                                    // Tampilkan pesan jika tidak ada data ditemukan
                                    echo '<tr><td colspan="7" class="text-center"><i class="fas fa-search"></i> Data tidak ditemukan.</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>