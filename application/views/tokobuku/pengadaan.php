<div class="container col-10 mt-5">
    <div class="card shadow">
        <div class="card-header h5">
            Laporan Pengadaan Buku
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Buku</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($pengadaan as $Get) : ?>
                        <tr>
                            <th scope="row"><?= $no . "."; ?></th>
                            <td><?= $Get->nama_buku; ?></td>
                            <td><?= $Get->penerbit; ?></td>
                            <td><?= $Get->sisa_stok; ?></td>
                        </tr>
                        <?php $no++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>