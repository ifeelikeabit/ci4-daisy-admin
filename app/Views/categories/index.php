<?= $this->extend('layouts/elder') ?>
<?= $this->section('content') ?>

<?= view('components/errors') ?>
<?= view('components/alert-data') ?>
<?= view('components/alert-session') ?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Defined Categories List</h6>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>description</th>
                        <th>parent</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <a class="btn btn-primary" href="categories/add">Add</a>
                    <a class="btn btn-warning" href="categories/reset">Reset</a>
                    <?php if (!empty($categories)): ?>
                        <?php foreach ($categories as $categorie): ?>
                            <tr>
                                <td><?= $categorie['name'] ?></td>
                                <td><?= $categorie['description']  ?></td>
                                <td><?= $categorie['parent_name'] ?></td>
                                <td>
                                    <div class="row">
                                        <a class="btn btn-info" href="categories/<?= $categorie['id'] ?>">tree</a>
                                        <a class="btn btn-warning" href="categories/edit/<?= $categorie['id'] ?>">edit</a>
                                        <a class="btn btn-danger" href="categories/remove/ <?= $categorie['id']  ?>">remove</a>

                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php else: ?>
                        <div class="alert">No categorie found.</div>
                    <?php endif  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>