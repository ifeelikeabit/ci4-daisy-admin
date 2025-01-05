<?= $this->extend("layouts/elder") ?>
<?= $this->section('content') ?>

<?= $this->section('title') ?>
new categorie
<?= $this->endsection() ?>

<body>
    <div class="container mt-5">

        <?= view('components/alert-session') ?>
        <?= view('components/errors') ?>
        <h2 class="mb-4 text-center">new categorie</h2>
        <form action="<?= base_url() ?>categories/save" method="post">
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-list"></i></span>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $entity['name'] ?>" required placeholder="Enter name" />
                </div>
            </div>
            <!-- description -->
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="text" class="form-control" id="text" name="description" value="<?= $entity['description']; ?>" required placeholder="define categorie description" />
                </div>
            </div>
            <!-- add parent -->
            <div class="mb-3">
                <label for="parent" class="form-label">parent</label>
                <select class="form-select" id="parent_id" name="parent_id">
                    <option selected value="<?= $entity['parent_id'] ?>"><?= $entity['parent_name'] ?></option>
                    <?php if (isset($categories)): ?>
                        <?php foreach ($categories as $categorie): ?>
                            <?php if ($categorie['name'] != $entity['name']): ?>
                                <option value=<?= $categorie['id'] ?>><?= $categorie['name'] ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>

            <input type="hidden" name="id" value="<?= $entity['id'] ?>">


            <!-- Submit Button -->
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</body>

</html>

<?= $this->endsection() ?>