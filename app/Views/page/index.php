<?= $this->extend('layouts/elder') ?>

<?= $this->section('content') ?>

<?= $this->section('title') ?>
Pages
<?= $this->endSection() ?>
<?= view('components/alert') ?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Page List</h6>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>title</th>
                        <th>slug</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($pages)): ?>
                        <?php foreach ($pages as $page): ?>
                            <tr>
                                <td><?= $page['title'] ?></td>
                                <td><?= $page['slug']   ?></td>
                                <td><?= $page['status']  ?></td>
                                <td>
                                <div class="row">
                                    <a class="btn btn-info" href="user/<?= $user['id'] ?>">show</a>
                                    <a class="btn btn-warning" href="user/<?= $user['id'] ?>">edit</a>
                                    <a class="btn btn-danger" href="user/delete/ <?= $user['id'] ?>">delete</a> 

                                </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php else: ?>
                        <p>Page not found</p>
                    <?php endif  ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>


            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
