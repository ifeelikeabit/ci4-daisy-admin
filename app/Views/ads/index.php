<?= $this->extend('layouts/elder') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <!-- Hata, Uyarı ve Oturum Mesajları -->
    <?= view('components/errors') ?>
    <?= view('components/alert-data') ?>
    <?= view('components/alert-session') ?>

    <div>
        <div class="card-header rounded mb-4 text-center h1 justify-content-between align-items-center d-flex ">
            <div>Ads List</div>
            <a class="btn btn-success" href="<?= base_url('ads/add/') ?>">Add</a>
        </div>
    </div>

    <div class="row">
        <?php foreach ($ads as $ad): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 rounded">
                    <!-- Card Header -->
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0"><?= $ad['title'] ?></h5>
                            <div>
                                <a href="<?= base_url('ads/edit/' . $ad['id']) ?>" class="btn btn-warning btn-sm rounded-circle" title="Edit">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <a href="<?= base_url('ads/remove/' . $ad['id']) ?>" class="btn btn-danger btn-sm rounded-circle" title="Delete" onclick="return confirm('Are you sure you want to delete this ad?');">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p class="fs-4 text-success"><?= '₺' . number_format($ad['price'], 2, ',', '.') ?></p>
                            </div>
                        </div>
                        <p class="card-text"><?= word_limiter($ad['description'], 15) ?>...</p>

                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="fa fa-map-marker-alt"></i> <?= $ad['location'] ?></span>
                            <span><i class="fa fa-tags"></i> <?= $ad['category_name'] ?></span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span><i class="fa fa-user"></i> <?= $ad['user_name'] ?></span>
                            <span class="badge 
                            <?= $ad['status'] == 'active' ? 'bg-success' : ($ad['status'] == 'inactive' ? 'bg-warning' : 'bg-secondary') ?>">
                                <?= ucfirst($ad['status']) ?>
                            </span>
                        </div>
                    </div>

                    <!-- Card Footer -->
                    <div class="card-footer text-muted">
                        <small>Posted on <?= date('F j, Y', strtotime($ad['created_at'])) ?></small>
                    </div>

                    <!-- Card Image -->
                    <?php if ($ad['image_url']): ?>
                        <img src="<?= base_url('writable/' . $ad['image_url']) ?>" class="card-img-bottom rounded" alt="Ad Image">
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>