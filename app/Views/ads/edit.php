<?= $this->extend('layouts/elder') ?>

<?= $this->section('content') ?> 
<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Ad</h1>
    <?= view('components/alert-session'); ?>
    <form action="<?= base_url('ads/save')?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= old('title', $ad['title']) ?>" placeholder="Enter ad title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter ad description" required><?= old('description', $ad['description']) ?></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="<?= old('price', $ad['price']) ?>" placeholder="Enter price" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select" id="category_id" name="category_id" required>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['id'] ?>" <?= $category['id'] == $ad['category_id'] ? 'selected' : '' ?>><?= $category['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="<?= old('location', $ad['location']) ?>" placeholder="Enter location" required>
        </div>
        <div class="mb-3">
            <label for="image_url" class="form-label">Image</label>
            <input type="file" class="form-control" id="image_url" name="image_url">
            <?php if ($ad['image_url']): ?>
                <img src="<?= base_url('writable/' . $ad['image_url']) ?>" alt="Ad Image" class="img-thumbnail mt-2" width="100">
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="active" <?= $ad['status'] == 'active' ? 'selected' : '' ?>>Active</option>
                <option value="inactive" <?= $ad['status'] == 'inactive' ? 'selected' : '' ?>>Inactive</option>
                <option value="sold" <?= $ad['status'] == 'sold' ? 'selected' : '' ?>>Sold</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <select class="form-select" id="user" name="user_id" required>
                <?php foreach ($users as $user): ?>
                    <option value="<?= $user['id'] ?>" <?= $user['id'] == $ad['user_id'] ? 'selected' : '' ?>><?= $user['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="hidden" name="id" value="<?= $ad['id'] ?>">
        <button type="submit" class="btn btn-primary w-100">Update</button>
    </form>
</div>
<?= $this->endSection() ?>
