<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="<?= base_url('assets/img/bg.png') ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Bukuu...</h1>
            <p class="lead">"Terkadang, buku adalah jendela ke dunia lain, membawa kita ke tempat-tempat yang belum
                pernah kita kunjungi dan mengungkapkan cerita-cerita yang belum pernah kita dengar."</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <form action="<?php echo site_url('Welcome/cari') ?>" method="post">
                    <div class="d-grid d-flex gap-2 form-floating">
                        <input type="search" id="cari" class="form-control shadow col-xl-12" name="keyword" placeholder="Cari judul buku..." required>
                        <label for="cari" class="form-label">Cari judul buku...</label>
                        <button class="btn btn-outline-primary shadow px-3">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>