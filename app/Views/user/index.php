<?= $this->extend('layouts/elder') ?>

<?= $this->section('content') ?>

<?= $this->section('title') ?>
- Users
<?= $this->endSection() ?>
<?= view('components/alert-session') ?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Registered User List</h6>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <a class="btn btn-primary" href="user/create">New</a>
                    <?php if (!empty($users)): ?>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $user['name'] ?></td>
                                <td><?= $user['id']   ?></td>
                                <td><?= $user['email']  ?></td>
                                <td><?= $user['phone_number']  ?></td>
                                <td><?= $user['role']  ?></td>
                                <td>
                                <div class="row">
                                    <a class="btn btn-info" href="user/<?= $user['id'] ?>">show</a>
                                    <a class="btn btn-warning" href="user/<?= $user['id'] ?>/edit">edit</a>
                                    <a class="btn btn-danger" href="user/delete/ <?= $user['id'] ?>">delete</a> 

                                </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php else: ?>
                       
                    <?php endif  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
