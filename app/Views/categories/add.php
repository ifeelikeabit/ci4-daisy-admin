<?= $this->extend("layouts/elder") ?>
<?= $this->section('content') ?>

<?= $this->section('title') ?>
new categorie
<?= $this->endsection() ?>

<body>
    <div class="container mt-5">
        
        <?= view('components/alert-session') ?>
        <h2 class="mb-4 text-center">new categorie</h2>
        <form action="<?= base_url() ?>categories/store" method="post">
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-list"></i></span>
                    <input type="text" class="form-control" id="name" name="name" value="<?= old('name');?>" required placeholder="Enter name" />
                </div>
            </div>
            <!-- description -->
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="text" class="form-control" id="text" name="description" value="<?= old('description');?>" required placeholder="define categorie description" />
                </div>
            </div>

            <!-- add parent -->
            <div class="mb-3">
                <label for="parent" class="form-label">parent</label>
                <select class="form-select" id="parent_id" name="parent_id" >
                    <?php if (isset($categories)): ?>
                        <?php foreach ($categories as $categorie): ?>
                             <option hidden selected value="1">root</option>
                            <option value=<?= $categorie['id'] ?>><?= $categorie['name'] ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>



            <!-- Role Selection -->


            <!-- Submit Button -->
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Create Account</button>
            </div>
        </form>
    </div>
</body>

</html>

<?= $this->endsection() ?>