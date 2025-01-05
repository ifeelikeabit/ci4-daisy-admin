<?=view('components/links'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><?= $ad['title'] ?></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-muted">Price</h5>
                            <p class="fs-4 text-success"><?= '₺' . number_format($ad['price'], 2, ',', '.') ?></p>
                        </div>
                        <div class="col-md-6 text-end">
                            <h5 class="text-muted">Status</h5>
                            <span class="badge 
                                <?= $ad['status'] == 'active' ? 'bg-success' : ($ad['status'] == 'inactive' ? 'bg-warning' : 'bg-secondary') ?>">
                                <?= ucfirst($ad['status']) ?>
                            </span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h5 class="text-muted">Description</h5>
                        <p><?= $ad['description'] ?></p>
                    </div>

                    <div class="mt-4">
                        <h5 class="text-muted">Location</h5>
                        <p><i class="fa fa-map-marker-alt"></i> <?= $ad['location'] ?></p>
                    </div>

                    <div class="mt-4">
                        <h5 class="text-muted">Category</h5>
                        <p><i class="fa fa-tags"></i> <?= $ad['category_name'] ?></p>
                    </div>

                    <div class="mt-4">
                        <h5 class="text-muted">Posted by</h5>
                        <p><i class="fa fa-user"></i> <?= $ad['user_name'] ?></p>
                    </div>

                    <div class="mt-4">
                        <h5 class="text-muted">Image</h5>
                        <?php if ($ad['image_url']): ?>
                            <img src="<?= base_url()?>writable/<?= $ad['image_url'] ?>" class="img-fluid rounded" alt="Ad Image">
                        <?php else: ?>
                            <p>No image available.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <small>Posted on <?= date('F j, Y', strtotime($ad['created_at'])) ?></small>
                </div>
            </div>
        </div>
    </div>
</div>