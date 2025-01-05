<?= $this->extend('layouts/elder') ?>

<?= $this->section('content') ?> 
<div class="container mt-5">
    <h1 class="text-center mb-4">Add New Ad</h1>
    <?= view('components/alert-session'); ?>
    <form action="<?= base_url('ads/store') ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= old('title') ?>" placeholder="Enter ad title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter ad description" required><?= old('description') ?></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="<?= old('price') ?>" placeholder="Enter price" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select" id="category_id" name="category_id" required>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="<?= old('location') ?>" placeholder="Enter location" required>
        </div>
        <div class="mb-3">
            <label for="image_url" class="form-label">Image</label>
            <input type="file" class="form-control" id="image_url"  name="image_url" value="<?= old('image_url') ?>" >
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
                <option value="sold">Sold</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <select class="form-select" id="user" name="user_id" required>
                <?php foreach ($users as $user): ?>
                    <option value="<?= $user['id'] ?>"><?= $user['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>
<?= $this->endSection() ?>