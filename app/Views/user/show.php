<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
<style>
    table tr td {
        border: solid 1px
    }
</style>

<?= view('components/errors') ?>
<table >
    <tr class="table" style="background-color: #dddddd;">
        <td>name</td>
        <td>id</td>
        <td>email</td>
        <td>phonenumber</td>
        <td>role</td>
    </tr>
    <tr>
        <td><?= $user['name'] ?></td>
        <td><?= $user['id']   ?></td>
        <td><?= $user['email']  ?></td>
        <td><?= $user['phone_number']  ?></td>
        <td><?= $user['role']  ?></td>
    </tr>
</table>
<?= view('components/links') ?>
<div class="row">
    <?php foreach ($ads as $ad): ?>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 rounded">
                <!-- Card Header -->
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0"><?= $ad['title'] ?></h5>
                        <div>
                        <a href="<?= base_url('ads/show/' . $ad['id']) ?>" class="btn btn-success btn-sm rounded-circle">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="<?= base_url('ads/edit/' . $ad['id']) ?>" class="btn btn-warning btn-sm rounded-circle" title="Edit">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <a href="<?= base_url('ads/delete/' . $ad['id']) ?>" class="btn btn-danger btn-sm rounded-circle" title="Delete" onclick="return confirm('Are you sure you want to delete this ad?');">
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