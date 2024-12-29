<?= $this->extend("layouts/elder") ?>
<?= $this->section('content') ?>

<?= $this->section('title') ?>
Edit User
<?= $this->endsection() ?>

<body>
    <div class="container mt-5">
        <?= view('components/alert-data') ?>
        <?= view('components/errors') ?>
        <h2 class="mb-4 text-center">Edit User</h2>
        <form action="" method="post">
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>" required placeholder="Enter full name">
                </div>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" required placeholder="Enter email">
                </div>
            </div>

            <!-- Phone Number -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    <input type="tel" class="form-control" id="phone" name="phone_number" value="<?= $user['phone_number'] ?>" placeholder="Enter phone number">
                    
                    </input>
                </div>
            </div>

            <!-- Role Selection -->
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role" name="role"required>
                    <option hidden selected><?= $user['role'] ?></option>
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                    <option value="seller">seller</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</body>

</html>

<?= $this->endsection() ?>